<?php declare(strict_types = 1);

namespace ikoene\Marvel\DataContainer;

use ikoene\Marvel\Entity\Creator;

/**
 * Class CreatorDataContainer
 * @package ikoene\Marvel\DataContainer
 */
class CreatorDataContainer extends AbstractDataContainer
{
    /**
     * The list of creators returned by the call.
     *
     * @var array
     */
    private $results;

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
    public function addResult(Creator $item)
    {
        $this->results[] = $item;
    }
}
