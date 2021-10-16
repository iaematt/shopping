<?php

/** Namespace */
namespace Source\Models\Product;

/**
 * Product Repository interface
 * @package Source\Models\Products
 */
interface ProductRepository
{
    /**
     * @return null|array
     */
    public function getProducts(): ?array;

    /**
     * @param int $id
     * @return null|array
     */
    public function getProduct(int $id): ?array;
}
