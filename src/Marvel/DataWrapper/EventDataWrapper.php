<?php declare(strict_types = 1);

namespace ikoene\Marvel\DataWrapper;

use ikoene\Marvel\DataContainer\EventDataContainer;

/**
 * Class EventDataWrapper
 * @package ikoene\Marvel\DataWrapper
 */
class EventDataWrapper extends AbstractDataWrapper
{
    /**
     * The results returned by the call.
     *
     * @var mixed
     */
    private $data;

    /**
     * @return EventDataContainer
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param EventDataContainer $data
     */
    public function setData(EventDataContainer $data)
    {
        $this->data = $data;
    }
}
