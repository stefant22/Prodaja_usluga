<?php
namespace App\Models;
use App\Core\DatabaseConnection;
use \PDO;

    class CategoryModel{
        private $db;

        public function __construct(DatabaseConnection &$db){
            $this->db=$db;
        }

        public function getById(int $categoryId){
            $sql='SELECT * FROM category WHERE category_id=?;';
            $prep=$this->db->getConnection()->prepare($sql);
            $res = $prep->execute([$categoryId]);
            $category=null;
            if($res){
                $category=$prep->fetch(PDO::FETCH_OBJ);

            }
            return $category;
        }

        public function getAll(): array{
            $sql='Select * from category';
            $prep=$this->db->getConnection()->prepare($sql);
            $res=$prep->execute();
            $categories=[];
            if($res){
                $categories=$prep->fetchAll(PDO::FETCH_OBJ);
            }
            return $categories;
        }
    }