steevanb\EntityUtils\Repository\CountTrait
------------------------------------------

This trait add countAll() and countBy(array $criteria) methods

steevanb\EntityUtils\Repository\GetTrait
----------------------------------------

This trait add this methods, same as find() and findOneBy() but throws Doctrine\ORM\EntityNotFoundException when entity is not found :

get($id, $lockMode = null, $lockVersion = null)

getOneBy(array $criteria, array $orderBy = null)

[Back to index](../README.md)
