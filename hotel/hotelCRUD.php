<?php
    class hotelDao {   // Data Access Object
        private $connString = "mysql:host=localhost; port=3306; dbname=travel_kh; charset=utf8";
        private $user = "root";
        private $password = "root";
        private $accessOptions = array(
             PDO::ATTR_EMULATE_PREPARES=>false,
             PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION, 
                PDO::ATTR_PERSISTENT => true
        );

        private $pdo = null;

        public function __construct(){
            $this->pdo = new PDO($this->connString, 
                           $this->user, 
                           $this->password, 
                           $this->accessOptions);
        }
     

        public function findById($id) {
          $query = "SELECT hotel_id, hotel_name,  hotel_address,  hotel_price, hotel_mrt,hotel_area,hotel_category,hotel_introduction, hotel_img, hotel_tel ,CoverImage FROM hotel_kh where hotel_id = :bid " ;
        

          $pdoStmt = $this->pdo->prepare($query);
              
          $pdoStmt->bindValue(":bid", $id, PDO::PARAM_INT);
          $pdoStmt->execute();
          $row = $pdoStmt->fetch(PDO::FETCH_ASSOC);
          return $row;
        }




      public function update($hotel_kh) {
        $update =   "UPDATE `hotel_kh` e SET e.hotel_address = :aut,  e.hotel_tel = :boo, " .
        " e.CoverImage = :cov, e.hotel_img = :fil,  e.hotel_price = :pri, " . 
        " e.hotel_name = :tit,  e.hotel_mrt = :com, e.hotel_area = :are," . 
        " e.hotel_category = :cat, e.hotel_introduction = :inr  WHERE  e.hotel_id = :bid "; 

        $pdoStmt = $this->pdo->prepare($update);
        $pdoStmt->bindValue(":aut",  $hotel_kh->gethotel_address(), PDO::PARAM_STR);
        $pdoStmt->bindValue(":boo",  $hotel_kh->gethotel_tel(), PDO::PARAM_STR);
        $pdoStmt->bindValue(":cov",  $hotel_kh->getCoverImage(), PDO::PARAM_STR);
        $pdoStmt->bindValue(":fil",  $hotel_kh->getFileName(), PDO::PARAM_STR);
        $pdoStmt->bindValue(":pri",  $hotel_kh->gethotel_Price(), PDO::PARAM_STR);
        $pdoStmt->bindValue(":tit",  $hotel_kh->gethotel_name(), PDO::PARAM_STR);
        $pdoStmt->bindValue(":com",  $hotel_kh->gethotel_mrt(), PDO::PARAM_INT);
        $pdoStmt->bindValue(":are",  $hotel_kh->gethotel_area(), PDO::PARAM_INT);
        $pdoStmt->bindValue(":cat",  $hotel_kh->gethotel_category(), PDO::PARAM_INT);
        $pdoStmt->bindValue(":inr",  $hotel_kh->gethotel_introduction(), PDO::PARAM_STR);
        $pdoStmt->bindValue(":bid",  $hotel_kh->gethotel_id(), PDO::PARAM_INT);
        $pdoStmt->execute();
        $num = $pdoStmt->rowCount();
        return $num;
      }

      public function updateWithoutCoverImage($hotel_kh) {
        $update =   "UPDATE `hotel_kh` e SET e.hotel_address = :aut,  e.hotel_tel = :boo, " .
        " e.hotel_price = :pri, " . 
        " e.hotel_name = :tit,  e.hotel_mrt = :com, e.hotel_area = :are, e.hotel_category = :cat, e.hotel_introduction = :inr  WHERE  e.hotel_id = :bid "; 

        $pdoStmt = $this->pdo->prepare($update);
        $pdoStmt->bindValue(":aut",  $hotel_kh->gethotel_address(), PDO::PARAM_STR);
        $pdoStmt->bindValue(":boo",  $hotel_kh->gethotel_tel(), PDO::PARAM_STR);
        $pdoStmt->bindValue(":pri",  $hotel_kh->gethotel_Price(), PDO::PARAM_STR);
        $pdoStmt->bindValue(":tit",  $hotel_kh->gethotel_name(), PDO::PARAM_STR);
        $pdoStmt->bindValue(":com",  $hotel_kh->gethotel_mrt(), PDO::PARAM_INT);
        $pdoStmt->bindValue(":are",  $hotel_kh->gethotel_area(), PDO::PARAM_INT);
        $pdoStmt->bindValue(":cat",  $hotel_kh->gethotel_category(), PDO::PARAM_INT);
        $pdoStmt->bindValue(":inr",  $hotel_kh->gethotel_introduction(), PDO::PARAM_STR);
        $pdoStmt->bindValue(":bid",  $hotel_kh->gethotel_id(), PDO::PARAM_INT);
        $pdoStmt->execute();
        $num = $pdoStmt->rowCount();
        return $num;
      }

      
    }

    ?>
</body>
</html>