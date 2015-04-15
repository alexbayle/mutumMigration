<?php

namespace Mutum\Bundle\V1Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PozWords
 *
 * @ORM\Table(name="poz_words")
 * @ORM\Entity
 */
class PozWords
{
    /**
     * @var string
     *
     * @ORM\Column(name="words_text", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $wordsText;



    /**
     * Get wordsText
     *
     * @return string 
     */
    public function getWordsText()
    {
        return $this->wordsText;
    }
}
