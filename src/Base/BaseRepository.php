<?php

namespace Untek\Model\Repository\Base;

use Untek\Core\Code\Helpers\DeprecateHelper;
use Untek\Model\EntityManager\Interfaces\EntityManagerInterface;
use Untek\Model\EntityManager\Traits\EntityManagerAwareTrait;
use Untek\Model\Repository\Interfaces\RepositoryInterface;

DeprecateHelper::hardThrow();

abstract class BaseRepository implements RepositoryInterface
{

    use EntityManagerAwareTrait;

    public function __construct(EntityManagerInterface $em)
    {
        $this->setEntityManager($em);
    }
}
