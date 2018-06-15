<?php
namespace App\Models;
use App\Core\DatabaseConnection;
use \PDO;

    class AdministratorModel{
        private $db;

        public function __construct(DatabaseConnection &$db){
            $this->db=$db;
        }

        public function getById(int $adminId){
            $sql='SELECT * FROM administrator WHERE administrator_id=?;';
            $prep=$this->db->getConnection()->prepare($sql);
            $res = $prer->execute([$adminId]);
            $admin=null;
            if($res){
                $admin=$prep->fetch(PDO::FETCH_OBJ);

            }
            return $admin;
        }

        public function getAll(): array{
            $sql='Select * from administrator';
            $prep=$this->db->getConnection()->prepare($sql);
            $res=$prep->execute();
            $admins=[];
            if($res){
                $admins=$prep->fetchAll(PDO::FETCH_OBJ);
            }
            return $admins;
        }
        public function getByEmail(string $email){
            $sql='SELECT * FROM administrator where email=?';
            $prep=$this->db->getconnetion()->prepare($sql);
            $res=$prep->execute();
            $admin= NULL;
            if($res){
                $admin=$prep->fetch(PDO::FETCH_OBJ);
            }
            return $admin;
        
        }
    }

  