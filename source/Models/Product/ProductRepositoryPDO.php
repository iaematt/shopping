<?php

/** Namespace */
namespace Source\Models\Product;

/**
 * Product Repository PDO class
 * @package Source\Models\Products
 */
class ProductRepositoryPDO implements ProductRepository
{
    /** @var \PDO */
    private $pdo;

    /** Product Repository PDO */
    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * @return null|array
     */
    public function getProducts(): ?array
    {
        $stmt = $this->pdo->prepare('SELECT * FROM product');
        $stmt->setFetchMode(\PDO::FETCH_CLASS, 'Source\Models\Product\Product');
        $stmt->execute();

        return $stmt->fetchAll();
    }

    /**
     * @param int $id
     * @return null|array
     */
    public function getProduct($id): ?array
    {
        $stmt = $this->pdo->prepare('SELECT * FROM product WHERE id = :id');
        $stmt->bindValue(':id', $id, \PDO::PARAM_INT);
        $stmt->setFetchMode(\PDO::FETCH_CLASS, 'Source\Models\Product\Product');
        $stmt->execute();

        return $stmt->fetch();
    }
}
