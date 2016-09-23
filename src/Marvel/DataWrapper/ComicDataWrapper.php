<?php declare(strict_types = 1);

namespace ikoene\Marvel\DataWrapper;

use ikoene\Marvel\DataContainer\ComicDataContainer;

/**
 * Class ComicDataWrapper
 * @package ikoene\Marvel\DataWrapper
 */
class ComicDataWrapper extends AbstractDataWrapper
{
    /**
     * The results returned by the call.
     *
     * @var mixed
     */
    private $data;

    /**
     * @return ComicDataContainer
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param ComicDataContainer $data
     */
    public function setData(ComicDataContainer $data)
    {
        $this->data = $data;
    }
}
