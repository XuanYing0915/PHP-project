<?php
class OrderDao
{
    

    public function findAll()
    {
        try {
            $pdo = new PDO(
                'mysql:host=localhost; port=3306; dbname=travel_kh; charset=utf8',
                'root',
                'root',
                array(
                    PDO::ATTR_EMULATE_PREPARES => false,
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                )
            );
            $sql =   "SELECT * FROM `ticket_orders`";

            $pdoStmt =  $pdo->query($sql);
            $arr2D = $pdoStmt->fetchAll(PDO::FETCH_NUM);
            return $arr2D;
        } catch (PDOException $ex) {
            echo "存取資料庫時發生錯誤，訊息:" . $ex->getMessage() . "<br>";
            echo "Line No.:" . $ex->getLine() . "<br>";
        }
    }
    public function detailsByOrder($id)
    {
        try {
            $pdo = new PDO(
                'mysql:host=localhost; port=3306; dbname=travel_kh; charset=utf8',
                'root',
                'root',
                array(
                    PDO::ATTR_EMULATE_PREPARES => false,
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                )
            );
            $sql =   "SELECT * FROM `ticket_orderdetails` WHERE tk_order_id = :tkid";

            $pdoStmt =  $pdo->prepare($sql);
            $pdoStmt->bindValue(":tkid", $id, PDO::PARAM_INT);
            $pdoStmt->execute();

            $arr2D = $pdoStmt->fetchAll(PDO::FETCH_NUM);
            return $arr2D;
        } catch (PDOException $ex) {
            echo "存取資料庫時發生錯誤，訊息:" . $ex->getMessage() . "<br>";
            echo "Line No.:" . $ex->getLine() . "<br>";
        }
    }
    public function detailByID($id,$dtid)
    {
        try {
            $pdo = new PDO(
                'mysql:host=localhost; port=3306; dbname=travel_kh; charset=utf8',
                'root',
                'root',
                array(
                    PDO::ATTR_EMULATE_PREPARES => false,
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                )
            );
            $sql =   "SELECT * FROM `ticket_orderdetails` WHERE tk_order_id = :tkid AND `tk_orderdetails_id` = :dtid ";

            $pdoStmt =  $pdo->prepare($sql);
            $pdoStmt->bindValue(":tkid", $id, PDO::PARAM_INT);
            $pdoStmt->bindValue(":dtid", $dtid, PDO::PARAM_INT);
            $pdoStmt->execute();

            $arr2D = $pdoStmt->fetchAll(PDO::FETCH_NUM);
            return $arr2D;
        } catch (PDOException $ex) {
            echo "存取資料庫時發生錯誤，訊息:" . $ex->getMessage() . "<br>";
            echo "Line No.:" . $ex->getLine() . "<br>";
        }
    }
    public function findById($id)
    {
        try {
            $pdo = new PDO(
                'mysql:host=localhost; port=3306; dbname=travel_kh; charset=utf8',
                'root',
                'root',
                array(
                    PDO::ATTR_EMULATE_PREPARES => false,
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                )
            );
            $sql =   "SELECT * FROM `ticket_orders` WHERE tk_order_id = :tkid";

            $pdoStmt =  $pdo->prepare($sql);
            $pdoStmt->bindValue(":tkid", $id, PDO::PARAM_INT);
            $pdoStmt->execute();

            $arr2D = $pdoStmt->fetchAll(PDO::FETCH_NUM);
            return $arr2D;
        } catch (PDOException $ex) {
            echo "存取資料庫時發生錯誤，訊息:" . $ex->getMessage() . "<br>";
            echo "Line No.:" . $ex->getLine() . "<br>";
        }
    }
    public function paymentById($id)
    {
        try {
            $pdo = new PDO(
                'mysql:host=localhost; port=3306; dbname=travel_kh; charset=utf8',
                'root',
                'root',
                array(
                    PDO::ATTR_EMULATE_PREPARES => false,
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                )
            );
            $sql =   "SELECT * FROM `payment` WHERE payment_id = :pyid";

            $pdoStmt =  $pdo->prepare($sql);
            $pdoStmt->bindValue(":pyid", $id, PDO::PARAM_INT);
            $pdoStmt->execute();

            $arr2D = $pdoStmt->fetchAll(PDO::FETCH_NUM);
            return $arr2D;
        } catch (PDOException $ex) {
            echo "存取資料庫時發生錯誤，訊息:" . $ex->getMessage() . "<br>";
            echo "Line No.:" . $ex->getLine() . "<br>";
        }
    }
}
