<?php

/** Namespace */
namespace Source\Models\Product;

/**
 * Product model class
 * @package Source\Models\Product
 */
class Product
{
    /** @var int */
    private $id;

    /** @var string */
    private $name;

    /** @var float */
    private $price;

    /**
     * @param int $id
     * @return void
     */
    public function setId($id): void
    {
        if (!is_int($id)) {
            throw new \InvalidArgumentException('O id precisa ser inteiro');
        }
        $this->id = $id;
    }

    /**
     * @param string $name
     * @return void
     */
    public function setName($name): void
    {
        if (empty($name)) {
            throw new \InvalidArgumentException('O nome é obrigatório');
        }
        $this->name = $name;
    }

    /**
     * @param float $price
     * @return void
     */
    public function setPrice($price): void
    {
        if (!is_float($price)) {
            throw new \InvalidArgumentException('O preço precisa ser um float');
        }
        $this->price = $price;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }
}
