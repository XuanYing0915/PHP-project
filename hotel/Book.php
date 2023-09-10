<?php
class hotel_kh {
    private $hotel_id;
    private $hotel_address;
    private $hotel_tel;
    private $coverImage;
    private $fileName;
    private $hotel_price;
    private $hotel_name;
    private $hotel_mrt;
    private $hotel_area;
    private $hotel_category;
    private $hotel_introduction;
    
    
    public function __construct($hotel_id, $hotel_address, $hotel_tel, $coverImage, 
                                $fileName, $hotel_price, $hotel_name, $hotel_mrt, 
                                $hotel_area, $hotel_category, $hotel_introduction){
        $this->hotel_id =  $hotel_id;
        $this->hotel_address =  $hotel_address;
        $this->hotel_tel =  $hotel_tel;
        $this->coverImage =  $coverImage;
        $this->fileName =  $fileName;
        $this->hotel_price =  $hotel_price;
        $this->hotel_name =  $hotel_name;
        $this->hotel_mrt =  $hotel_mrt;
        $this->hotel_area =  $hotel_area;
        $this->hotel_category =  $hotel_category;
        $this->hotel_introduction =  $hotel_introduction;
    }
    
    public function gethotel_id(){
        return $this->hotel_id;
    }
    public function gethotel_address(){
        return $this->hotel_address;
    }
    public function gethotel_tel(){
        return $this->hotel_tel;
    }
    public function getCoverImage(){
        return $this->coverImage;
    }
    public function getFileName(){
        return $this->fileName;
    }
    public function gethotel_price(){
        return $this->hotel_price;
    }
    public function  gethotel_name(){
        return $this->hotel_name;
    }
    public function  gethotel_mrt(){
        return $this->hotel_mrt;
    }
    public function  gethotel_area(){
        return $this->hotel_area;
    }
    public function  gethotel_category(){
        return $this->hotel_category;
    }
    public function  gethotel_introduction(){
        return $this->hotel_introduction;
    }
    public function info (){
        return "hotel_address=$this->hotel_address, hotel_name=$this->hotel_name";
    }
    
}
?>