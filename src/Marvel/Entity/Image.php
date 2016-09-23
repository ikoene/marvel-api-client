<?php declare(strict_types = 1);

namespace ikoene\Marvel\Entity;

/**
 * Class Image
 * @package ikoene\Marvel\Entity
 */
class Image
{
    /**
     * The directory path of to the image.
     *
     * @var string
     */
    private $path;

    /**
     * The file extension for the image.
     *
     * @var string
     */
    private $extension;

    /**
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param string $path
     */
    public function setPath(string $path)
    {
        $this->path = $path;
    }

    /**
     * @return string
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * @param string $extension
     */
    public function setExtension(string $extension)
    {
        $this->extension = $extension;
    }
}
