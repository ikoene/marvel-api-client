<?php declare(strict_types = 1);

namespace ikoene\Marvel\Entity;

/**
 * Class EventList
 * @package ikoene\Marvel\Entity
 */
class EventList extends AbstractList
{
    /**
     * The list of returned events in this collection.
     *
     * @var array
     */
    private $items;

    /**
     * @return array
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param array $items
     */
    public function setItems(array $items)
    {
        $this->items = $items;
    }
}
