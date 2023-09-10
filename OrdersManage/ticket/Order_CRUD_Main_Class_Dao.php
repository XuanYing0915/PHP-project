<?php
class OrderDao
{
    

    // 所有票券訂單
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
    // 用訂單編號找訂單明細
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
    // 用訂單編號和明細找單項明細
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
    // 用訂單編號找訂單
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
    // 找所有票券商品
    public function ticketProducts()
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
            $sql =   "SELECT `tk_product_id`,`tk_pd_name`, `tk_price` FROM `tk_product`";

            $pdoStmt =  $pdo->query($sql);
            $arr2D = $pdoStmt->fetchAll(PDO::FETCH_NUM);
            return $arr2D;
        } catch (PDOException $ex) {
            echo "存取資料庫時發生錯誤，訊息:" . $ex->getMessage() . "<br>";
            echo "Line No.:" . $ex->getLine() . "<br>";
        }
    }
    // 找所有會員
    public function allMembers()
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
            $sql =   "SELECT `member_id`,`first_name`, `last_name` FROM `member`";

            $pdoStmt =  $pdo->query($sql);
            $arr2D = $pdoStmt->fetchAll(PDO::FETCH_NUM);
            return $arr2D;
        } catch (PDOException $ex) {
            echo "存取資料庫時發生錯誤，訊息:" . $ex->getMessage() . "<br>";
            echo "Line No.:" . $ex->getLine() . "<br>";
        }
    }
    // 找所有員工
    public function allStaffs()
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
            $sql =   "SELECT `staff_id`,`staff_name` FROM `backend_manage`";

            $pdoStmt =  $pdo->query($sql);
            $arr2D = $pdoStmt->fetchAll(PDO::FETCH_NUM);
            return $arr2D;
        } catch (PDOException $ex) {
            echo "存取資料庫時發生錯誤，訊息:" . $ex->getMessage() . "<br>";
            echo "Line No.:" . $ex->getLine() . "<br>";
        }
    }

    // 用ID找票券商品名稱
    public function findProductById($id)
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
            $sql =   "SELECT `tk_pd_name` FROM `tk_product` WHERE tk_product_id = :pdid";

            $pdoStmt =  $pdo->prepare($sql);
            $pdoStmt->bindValue(":pdid", $id, PDO::PARAM_INT);
            $pdoStmt->execute();

            $arr2D = $pdoStmt->fetchAll(PDO::FETCH_NUM);
            return $arr2D;
        } catch (PDOException $ex) {
            echo "存取資料庫時發生錯誤，訊息:" . $ex->getMessage() . "<br>";
            echo "Line No.:" . $ex->getLine() . "<br>";
        }
    }

    
}
