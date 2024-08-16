<?php

namespace Untek\Model\Repository\Interfaces;

use Untek\Core\Code\Helpers\DeprecateHelper;

DeprecateHelper::hardThrow();

interface RepositoryRelationInterface
{

    public function relations();
}