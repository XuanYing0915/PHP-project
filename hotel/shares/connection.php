<?php
$mySQL_host = 'localhost';  //資料庫伺服器的位置  IP
$mySQL_user = 'root'; //權限 帳號
$mySQL_pass = 'root'; //權限 密碼
$mySQL_DB = 'travel_kh';  //資料庫名稱

 $connString = "mysql:host={$mySQL_host}; port=3306; dbname={$mySQL_DB}; charset=utf8";

 $accessOptions = [
      PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION, 
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
      PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
 ];

 
 try {  
      $pdo = new PDO($connString, $mySQL_user, $mySQL_pass, $accessOptions);
//    echo "連結資料庫成功!!!";
 } catch(Exception $ex){
      echo "存取資料庫時發生錯誤，訊息:" . $ex->getMessage() . "<br>";
      echo "苦主:" . $ex->getFile() . "<br>";
      echo "行號:" . $ex->getLine() . "<br>";
      echo "Code:" . $ex->getCode() . "<br>";
      echo "堆疊:" . $ex->getTraceAsString() . "<br>";
 }

  //捷運站表搜尋
 function  getmrt($pdo) {
     $query = "SELECT mrt_id, mrt_name  FROM  hotel_mrt";
     $pdoStmt = $pdo->prepare($query);
     $pdoStmt->execute();
     
      $mrtArray = array();
 
     while ($aRecord = $pdoStmt->fetch(PDO::FETCH_ASSOC) ) {
          $mrt_id = $aRecord['mrt_id'];
          $mrt_name = $aRecord['mrt_name'];
           $itemArr = array($mrt_id, mb_substr($mrt_name, 0, 4,"UTF-8"));
           array_push($mrtArray, $itemArr);
     }
      return $mrtArray;
 }

 function  setSelectBymrt($pdo, $name, $option) {
     $tag = "<SELECT name='$name'> ";  // 
     $allmrt = getmrt($pdo);
     for ( $n=0; $n< count($allmrt); $n++ ){
        $mrt_id = $allmrt[$n][0];
         $mrt_name = $allmrt[$n][1];
         if ($option == $mrt_id) {
             $tag .= "<option value='$mrt_id' selected > $mrt_name </option>" ;
         } else {
                 $tag .= "<option value='$mrt_id'> $mrt_name </option>" ;
         }
     }
      $tag .= "</SELECT>";
      return $tag;
 }
     //行政區表搜尋

     function  getarea($pdo) {
          $query = "SELECT area_id, area_name  FROM  area";
          $pdoStmt = $pdo->prepare($query);
          $pdoStmt->execute();
          
           $areaArray = array();
      
          while ($aRecord = $pdoStmt->fetch(PDO::FETCH_ASSOC) ) {
               $area_id = $aRecord['area_id'];
               $area_name = $aRecord['area_name'];
                $itemArr = array($area_id, mb_substr($area_name, 0, 4,"UTF-8"));
                array_push($areaArray, $itemArr);
          }
           return $areaArray;
      }
     
     
      function  setSelectByarea($pdo, $name, $option) {
          $tag = "<SELECT name='$name'> ";  // 
          $allarea = getarea($pdo);
          for ( $n=0; $n< count($allarea); $n++ ){
             $area_id = $allarea[$n][0];
              $area_name = $allarea[$n][1];
              if ($option == $area_id) {
                  $tag .= "<option value='$area_id' selected > $area_name </option>" ;
              } else {
                      $tag .= "<option value='$area_id'> $area_name </option>" ;
              }
          }
           $tag .= "</SELECT>";
           return $tag;

          }
           //類別表搜尋

           function  getcategory($pdo) {
               $query = "SELECT category_id, category_name  FROM  hotel_category";
               $pdoStmt = $pdo->prepare($query);
               $pdoStmt->execute();
               
                $categoryArray = array();
           
               while ($aRecord = $pdoStmt->fetch(PDO::FETCH_ASSOC) ) {
                    $category_id = $aRecord['category_id'];
                    $category_name = $aRecord['category_name'];
                     $itemArr = array($category_id, mb_substr($category_name, 0, 4,"UTF-8"));
                     array_push($categoryArray, $itemArr);
               }
                return $categoryArray;
           }
          
          
           function  setSelectBycategory($pdo, $name, $option) {
               $tag = "<SELECT name='$name'> ";  // 
               $allcategory = getcategory($pdo);
               for ( $n=0; $n< count($allcategory); $n++ ){
                  $category_id = $allcategory[$n][0];
                   $category_name = $allcategory[$n][1];
                   if ($option == $category_id) {
                       $tag .= "<option value='$category_id' selected > $category_name </option>" ;
                   } else {
                           $tag .= "<option value='$category_id'> $category_name </option>" ;
                   }
               }
                $tag .= "</SELECT>";
                return $tag;
     
      }
?>