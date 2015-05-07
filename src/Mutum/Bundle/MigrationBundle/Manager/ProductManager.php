<?php


namespace Mutum\Bundle\MigrationBundle\Manager;


use Mutum\Bundle\V1Bundle\Entity\PozArticle;
use Mutum\Bundle\V2Bundle\Entity\Article;
use Mutum\Bundle\V2Bundle\Entity\Product;
use Mutum\Bundle\V2Bundle\Entity\User;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Finder\Finder;

/**
 * Class ProductManager
 * @package Mutum\Bundle\MigrationBundle\Manager
 */
class ProductManager extends BaseManager
{
    /** @var ArticleStateManager $articleStateManager */
    private $articleStateManager;
    /** @var AddressManager $addressManager */
    private $addressManager;
    /** @var CategoryManager $categoryManager */
    private $categoryManager;
    /** @var UserManager $userManager */
    private $userManager;

    /**
     * @param ArticleStateManager $articleStateManager
     * @param AddressManager $addressManager
     */
    public function __construct(
        ArticleStateManager $articleStateManager,
        CategoryManager $categoryManager,
        AddressManager $addressManager,
        UserManager $userManager
    ) {
        $this->articleStateManager = $articleStateManager;
        $this->categoryManager = $categoryManager;
        $this->addressManager = $addressManager;
        $this->userManager = $userManager;
    }

    public function execute(OutputInterface $output)
    {
        $objects = $this->getRepository()->findAll();
        $this->progressInit($output, count($objects));
        foreach ($objects as $object) {
            $this->findOrCreateByV1Article($object);
            $this->progressUpdate();
        }

        $this->getEntityManager()->flush();
        $this->getEntityManager()->clear();
        $this->progressStop();
    }

//    public function find($id)
//    {
//        return $this->getEntityManager()->getRepository('MutumV2Bundle:Product')->find($id);
//    }

    public function findOneByV1($id)
    {
        return $this->getEntityManager()
            ->getRepository('MutumV2Bundle:Product')
            ->findOneBy(array('v1' => $id));
    }

//    /**
//     * @param User $user
//     * @return array
//     */
//    public function findByUser(User $user)
//    {
//        $products = [];
//        $objects = $this->getRepository()->findBy(array('artUserId' => $user->getV1()));
//        foreach ($objects as $object) {
//            $product = $this->findOrCreateByV1Article($object);
//            $product->setAddress($this->addressManager->findOrCreateByV1Article($object));
//            $products[] = $product;
//        }
//
////        var_dump($products); die;
//        return $products;
//    }

    /**
     * @param PozArticle $object
     * @return Product
     */
    private function findOrCreateByV1Article(PozArticle $object)
    {
        $product = $this->getEntityManager()
            ->getRepository('MutumV2Bundle:Product')
            ->findOneBy(array('v1' => $object->getArtId()));

        if (!$product) {
            $product = new Product();
            $product->setV1($object->getArtId());
            $product->setUser($this->userManager->findByV1Id($object->getArtUserId()));
            $product->setProdName($object->getArtName());
            $product->setProdDesc($object->getArtDesc());
//            $product->setProdLimitation()
            $product->setProdWin($object->getArtWin());
            $product->setProdNotation($object->getArtNotation());
            $product->setProdNbNotation($object->getArtNbNotation());
            $product->setProdDateCreation($object->getArtAdded());
            $product->setProdDeleted($object->getArtDeleted());


            $article = new Article();
//            $article->setArtiProdId()
            $article->setArtiPrice($object->getArtPrice());
            $article->setArtiLength($object->getArtLength());

//            $article->setArtiCat($this->categoryManager->findByV1Id($object->getArtCatId()));
            $article->setArtiCat($this->categoryManager->findATrier());

            $article->setArtiCaution($object->getArtCaution());
            $article->setArtiDates($object->getArtDates());
            $article->setArtiDispo($object->getArtDispo());

            $product->setArticle($article);
//            $article->setProduct($product);

            $product->setAddress($this->addressManager->findOrCreateByV1Article($object));


            /**
             * todo
             * migrate pictures
             */
            $filenames = $this->copyPictures($object->getArtPictures());
            $product->getArticle()->setArtiPictures(json_encode($filenames));
            $product->getArticle()->setArtiState(
                $this->articleStateManager->findOneByText($object->getArtState())
            );

            $this->getEntityManager()->persist($product);
        }

        return $product;
    }

    private function copyPictures($pictures)
    {
        $pictures = explode(',', $pictures);
        $fs = new Filesystem();
        $finder = new Finder();
        $filenames = [];
        foreach ($pictures as $picture) {
            $files = $finder->in(__DIR__ . '/../../../../../../v1/img/art/')->name($picture);
            foreach ($files as $file) {
                /** @var \Symfony\Component\Finder\SplFileInfo $file */
                $filename = sprintf("%s.%s",
//                    hash('md5', sprintf("%s%s", $file->getBasename(), time())),
                    hash('md5', $file->getBasename()),
                    $file->getExtension()
                );
                try {
                    $fs->copy($file->getRealPath(), __DIR__ . '/../../../../../../../Obj /img/art/' . $filename);
                } catch (\Exception $e) {
                    echo $e->getMessage() . PHP_EOL;
                }
                $filenames[] = $filename;

            }
        }

        return $filenames;
    }

}