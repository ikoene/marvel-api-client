<?php declare(strict_types = 1);

namespace ikoene\Marvel\Entity;

/**
 * Class CharacterList
 * @package ikoene\Marvel\Entity
 */
class CharacterList extends AbstractList
{
    /**
     * The list of returned characters in this collection.
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
