<?php declare(strict_types = 1);

namespace ikoene\Marvel\Entity;

/**
 * Class CreatorList
 * @package ikoene\Marvel\Entity
 */
class CreatorList extends AbstractList
{
    /**
     * The list of returned creators in this collection.
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
