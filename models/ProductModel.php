<?php
namespace App\Models;
use App\Core\DatabaseConnection;
use \PDO;

    class ProductModel{
        private $db;

        public function __construct(DatabaseConnection &$db){
            $this->db=$db;
        }

        public function getById(int $productId){
            $sql='SELECT * FROM product WHERE product_id=?;';
            $prep=$this->db->getConnection()->prepare($sql);
            $res = $prep->execute([$productId]);
            $product=null;
            if($res){
                $product=$prep->fetch(PDO::FETCH_OBJ);

            }
            return $product;
        }

       

        public function getAll(): array{
            $sql='Select * from product';
            $prep=$this->db->getConnection()->prepare($sql);
            $res=$prep->execute();
            $products=[];
            if($res){
                $categories=$prep->fetchAll(PDO::FETCH_OBJ);
            }
            return $products;
        }

        public function getAllByCategoryId($categoryId): array{
            $sql='SELECT * FROM product WHERE category_id = ?';
            $prep=$this->db->getConnection()->prepare($sql);
            $res=$prep->execute([$categoryId]);
            $products=[];
            if($res){
                $products=$prep->fetchAll(PDO::FETCH_OBJ);
            }
            return $products;
        }

        public function getAllByCategoryIdPriceLow($categoryId): array{
            $sql='SELECT * FROM product WHERE category_id = ? ORDER BY price ASC';
            $prep=$this->db->getConnection()->prepare($sql);
            $res=$prep->execute([$categoryId]);
            $products=[];
            if($res){
                $products=$prep->fetchAll(PDO::FETCH_OBJ);
            }
            return $products;
        }

        public function getAllByCategoryIdPriceHigh($categoryId): array{
            $sql='SELECT * FROM product WHERE category_id = ? ORDER BY price DESC';
            $prep=$this->db->getConnection()->prepare($sql);
            $res=$prep->execute([$categoryId]);
            $products=[];
            if($res){
                $products=$prep->fetchAll(PDO::FETCH_OBJ);
            }
            return $products;
        }
        

      
    }