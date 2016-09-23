<?php declare(strict_types = 1);

namespace ikoene\Marvel\DataWrapper;

use ikoene\Marvel\DataContainer\SeriesDataContainer;

/**
 * Class SeriesDataWrapper
 * @package ikoene\Marvel\DataWrapper
 */
class SeriesDataWrapper extends AbstractDataWrapper
{
    /**
     * The results returned by the call.
     *
     * @var mixed
     */
    private $data;

    /**
     * @return SeriesDataContainer
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param SeriesDataContainer $data
     */
    public function setData(SeriesDataContainer $data)
    {
        $this->data = $data;
    }
}
