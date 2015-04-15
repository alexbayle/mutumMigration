<?php

namespace Mutum\Bundle\V2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArticleState
 *
 * @ORM\Table(name="article_state")
 * @ORM\Entity
 */
class ArticleState
{
    /**
     * @var integer
     *
     * @ORM\Column(name="arts_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $artsId;

    /**
     * @var string
     *
     * @ORM\Column(name="arts_text", type="string", length=255, nullable=false)
     */
    private $artsText;



    /**
     * Get artsId
     *
     * @return integer 
     */
    public function getArtsId()
    {
        return $this->artsId;
    }

    /**
     * Set artsText
     *
     * @param string $artsText
     * @return ArticleState
     */
    public function setArtsText($artsText)
    {
        $this->artsText = $artsText;

        return $this;
    }

    /**
     * Get artsText
     *
     * @return string 
     */
    public function getArtsText()
    {
        return $this->artsText;
    }
}
