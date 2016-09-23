<?php declare(strict_types = 1);

namespace ikoene\Marvel\Entity;

/**
 * Class ComicList
 * @package ikoene\Marvel\Entity
 */
class ComicList
{
    /**
     * The number of total available issues in this list.
     * Will always be greater than or equal to the "returned" value.
     *
     * @var integer
     */
    private $available;

    /**
     * The number of issues returned in this collection (up to 20).
     *
     * @var integer
     */
    private $returned;

    /**
     * The path to the full list of issues in this collection.
     *
     * @var string
     */
    private $collectionURI;

    /**
     * The list of returned issues in this collection.
     *
     * @var array
     */
    private $items;

    /**
     * @return int
     */
    public function getAvailable()
    {
        return $this->available;
    }

    /**
     * @param int $available
     */
    public function setAvailable(int $available)
    {
        $this->available = $available;
    }

    /**
     * @return int
     */
    public function getReturned()
    {
        return $this->returned;
    }

    /**
     * @param int $returned
     */
    public function setReturned(int $returned)
    {
        $this->returned = $returned;
    }

    /**
     * @return string
     */
    public function getCollectionURI()
    {
        return $this->collectionURI;
    }

    /**
     * @param string $collectionURI
     */
    public function setCollectionURI(string $collectionURI)
    {
        $this->collectionURI = $collectionURI;
    }

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
