<?php

namespace Untek\Model\Repository\Interfaces;

use Untek\Core\Code\Helpers\DeprecateHelper;
use Untek\Core\Contract\Encoder\Interfaces\EncoderInterface;

DeprecateHelper::hardThrow();

/**
 * Возможность маппинга сущностей
 */
interface MapperInterface extends EncoderInterface
{

    /**
     * Маппинг атрибутов сущность -> хранилище
     *
     * @param array $entityAttributes Массив атрибутов сущности
     * @return array
     */
    public function encode($entityAttributes);

    /**
     * Маппинг атрибутов хранилище -> сущность
     *
     * @param array $rowAttributes Массив атрибутов записи из БД
     * @return array
     */
    public function decode($rowAttributes);
}
