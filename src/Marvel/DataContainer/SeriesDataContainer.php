<?php declare(strict_types = 1);

namespace ikoene\Marvel\DataContainer;

use ikoene\Marvel\Entity\Series;

/**
 * Class SeriesDataContainer
 * @package ikoene\Marvel\DataContainer
 */
class SeriesDataContainer extends AbstractDataContainer
{
    /**
     * The list of series returned by the call
     *
     * @var array
     */
    private $results;

    /**
     * Gets one specific result
     *
     * @param $key
     *
     * @return Character
     */
    public function get($key)
    {
        return $this->results[$key];
    }

    /**
     * @return array
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * @param $item
     */
    public function addResult(Series $item)
    {
        $this->results[] = $item;
    }
}
