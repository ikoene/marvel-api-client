<?php declare(strict_types = 1);

namespace ikoene\Marvel\DataWrapper;

use ikoene\Marvel\DataContainer\CreatorDataContainer;

/**
 * Class CreatorDataWrapper
 * @package ikoene\Marvel\DataWrapper
 */
class CreatorDataWrapper extends AbstractDataWrapper
{
    /**
     * The results returned by the call.
     *
     * @var mixed
     */
    private $data;

    /**
     * @return CreatorDataContainer
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param CreatorDataContainer $data
     */
    public function setData(CreatorDataContainer $data)
    {
        $this->data = $data;
    }
}
