<?php

namespace steevanb\EntityUtils\Repository\Traits;

trait Count
{
    /**
     * @return int
     */
    public function countAll()
    {
        return $this
            ->createQueryBuilder('a')
            ->select('COUNT(a)')
            ->getQuery()
            ->getSingleScalarResult()
        ;
    }

    /**
     * @param array $criteria
     * @return int
     */
    public function countBy(array $criteria)
    {
        $queryBuilder = $this
            ->createQueryBuilder('a')
            ->select('COUNT(a)')
        ;
        foreach ($criteria as $name => $criterion) {
            $queryBuilder
                ->andWhere($name . ' = :criterion_' . $name)
                ->setParameter('criterion_' . $name, $criterion)
            ;
        }

        return $queryBuilder
            ->getQuery()
            ->getSingleScalarResult()
        ;
    }
}
