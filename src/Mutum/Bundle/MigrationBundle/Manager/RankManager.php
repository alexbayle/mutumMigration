<?php

namespace Mutum\Bundle\MigrationBundle\Manager;

class RankManager extends BaseManager
{
    public function getRankByScore($score)
    {
        $qb = $this->getEntityManager()->getRepository('MutumV2Bundle:Rank')
            ->createQueryBuilder('r');
        $qb->where($qb->expr()->lte('r.rankAmount', ':score'))
            ->orderBy('r.rankAmount', 'desc')
            ->setMaxResults(1)
            ->setParameter('score', $score);

        $result = $qb->getQuery()->getResult();

        if (count($result)) {
            return $result[0];
        }

        return null;
    }
}