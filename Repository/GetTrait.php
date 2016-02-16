<?php

namespace steevanb\EntityUtils\Repository;

use Doctrine\ORM\EntityNotFoundException;
use Doctrine\ORM\Mapping\ClassMetadata;

trait GetTrait
{
    /**
     * @param mixed $id
     * @param int|null $lockMode
     * @param int|null $lockVersion
     * @return object
     */
    abstract public function find($id, $lockMode = null, $lockVersion = null);

    /**
     * @param array $criteria
     * @param array|null $orderBy
     * @return object
     */
    abstract public function findOneBy(array $criteria, array $orderBy = null);

    /**
     * @return ClassMetadata
     */
    abstract protected function getClassMetadata();

    /**
     * @param mixed $entity
     * @param array $criteria
     * @throws EntityNotFoundException
     */
    protected function assertIsEntity($entity, array $criteria)
    {
        if (is_object($entity) === false) {
            $message = 'Entity of type "' . $this->getClassMetadata()->getName() . '"';
            $criteriaForMessage = [];
            foreach ($criteria as $name => $value) {
                $criteriaForMessage[] = $name . ' = ' . $value;
            }
            $message .= ' was not found with ' . (count($criteriaForMessage) > 1 ? ' criteria' : 'criterion');
            $message .= ' : ' . implode(', ', $criteriaForMessage);
            throw new EntityNotFoundException($message);
        }
    }

    /**
     * @param mixed $id
     * @param int|null $lockMode
     * @param int|null $lockVersion
     * @return object
     * @throws EntityNotFoundException
     */
    public function get($id, $lockMode = null, $lockVersion = null)
    {
        $entity = $this->find($id, $lockMode, $lockVersion);
        $this->assertIsEntity($entity, array('id' => $id));

        return $entity;
    }

    /**
     * @param array $criteria
     * @param array|null $orderBy
     * @return object
     * @throws EntityNotFoundException
     */
    public function getOneBy(array $criteria, array $orderBy = null)
    {
        $entity = $this->findOneBy($criteria, $orderBy);
        $this->assertIsEntity($entity, $criteria);

        return $entity;
    }
}
