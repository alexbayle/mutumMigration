<?php

namespace Mutum\Bundle\MigrationBundle\Manager;

use Mutum\Bundle\V1Bundle\Entity\PozNotation;

class NotationManager extends BaseManager
{
    /**
     * @param $id
     * @return PozNotation
     */
    public function find($id)
    {
        return $this->getRepository()->find($id);
    }

    public function findOrCreateByV1($id)
    {

    }
}