<?php

/** Namespace */
namespace Source\Core;

/**
 * View core class
 * @package Source\Core
 */
class View
{
    /** @var array */
    private $data = [];

    /** @var string */
    private $folder;

    /** View constructor */
    public function __construct()
    {
        $this->folder = __DIR__ . '/../View/';
    }

    /**
     * @param string $key
     * @param string $value
     * @return void
     */
    public function set($key, $value): void
    {
        $this->data[$key] = $value;
    }

    /**
     * @param string $file
     * @return void
     */
    public function render(string $file): void
    {
        $filename = $this->folder . $file . '.php';

        if (file_exists($filename)) {
            extract($this->data);
            include $filename;
        }
    }
}
