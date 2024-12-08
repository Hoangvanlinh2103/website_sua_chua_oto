
<?php
    include("connection.php");
    class KhachHang{
        public $makhach;
        public $tenkhach;
        public $diachikh;
        public $gioitinh;
        public $sodienthoai;
        
        public function __construct($mk, $tk,$dc,$gt,$sdt){
            $this->makhach = $mk;
            $this->tenkhach = $tk;
            $this->diachikh = $dc;
            $this->gioitinh = $gt;
            $this->sodienthoai = $sdt;
        }
        public function __destruct(){

        }

        public static function Add(KhachHang $khach){
            $success=false;
            $conn= DBConnection::Connect();
            $s = "select * from tbkhachhang where MAKH = ?";
            $stmt = $conn->prepare($s);
            $stmt->bind_param("s",$khach->makhach);
            if($stmt->execute()){
                $result = $stmt->get_result();
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        echo "<script> alert('Trùng khóa chính!');</script>";
                        require_once("themkh.html");
                    }
                }else{
                    $sql= "INSERT INTO tbkhachhang(MAKH,TENKH,DIACHIKH,GIOITINH,SDT) VALUES(?,?,?,?,?)";
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param("sssii",$khach->makhach, $khach->tenkhach, $khach->diachikh,$khach->gioitinh,$khach->sodienthoai);
                    if($success = $stmt->execute()){
                        header("Location:quanlykhachhang.php");
                    }
                }
            }
                $stmt->close();
                $conn->close();
                return $success;
        }
        public static function Edit(KhachHang $khach){
            $success=false;
            $conn= DBConnection::Connect();
            $sql= "UPDATE tbkhachhang SET TENKH = ?, DIACHIKH = ?, GIOITINH = ?, SDT = ? WHERE MAKH = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssiis", $khach->tenkhach, $khach->diachikh,$khach->gioitinh,$khach->sodienthoai,$khach->makhach);
            if($success = $stmt->execute()){
                header("location:quanlykhachhang.php");
            }else{
                echo "That bai";
            }
            $stmt->close();
            $conn->close();
            return $success;
        }
        
        public static function Delete(string $makhach){
            $success=false;
            $conn= DBConnection::Connect();
            $sql="DELETE FROM tbkhachhang WHERE MAKH=?";
            $stmt= $conn->prepare($sql);
            $stmt->bind_param("s", $makhach);
            if($success = $stmt->execute()){
                
            }else{
                echo "That bai";
            }
            $stmt->close();
            $conn->close();
            return $success;            
        }        

        public static function GetAll(){
            $dsKhachHang = array();
            $conn= DBConnection::Connect();
            $sql= "SELECT * FROM tbkhachhang";
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()){                
                $dsKhachHang[] = new KhachHang($row["MAKH"],$row["TENKH"],$row["DIACHIKH"],$row["GIOITINH"],$row["SDT"]);
            }
            $conn->close();
            return $dsKhachHang;
        }

        public static function Get(string $tim){
            $dsKhachHang= array();
            $conn= DBConnection::Connect();
            $sql= "SELECT * FROM tbkhachhang where MAKH = '$tim' or TENKH like '%$tim%' or DIACHIKH like '%$tim%' ";
            $result = $conn->query($sql);
            if($result == true){
                while($row = $result->fetch_assoc()){                
                    $dsKhachHang[] = new KhachHang($row["MAKH"],$row["TENKH"],$row["DIACHIKH"],$row["GIOITINH"],$row["SDT"]);
                }
            }
            $conn->close();
            return $dsKhachHang;
        }
    }

    class Dichvu{
        public $madv;
        public $tendv;
        public $loaidv;
        
        public function __construct($mdv, $tdv,$ldv){
            $this->madv = $mdv;
            $this->tendv = $tdv;
            $this->loaidv = $ldv;

        }
        public function __destruct(){

        }

        public static function Add(Dichvu $dv){
            $success=false;
            $conn= DBConnection::Connect();
            $s = "select * from tbdichvu where MADV = ?";
            $stmt = $conn->prepare($s);
            $stmt->bind_param("s",$dv->madv);
            if($stmt->execute()){
                $result = $stmt->get_result();
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        echo "<script> alert('Trùng khóa chính!');</script>";
                        require_once("themdv.html");
                    }
                }else{
                    $sql= "INSERT INTO tbdichvu(MADV,TENDV,LOAIDV) VALUES(?,?,?)";
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param("sss",$dv->madv,$dv->tendv,$dv->loaidv);
                    if($success = $stmt->execute()){
                        header("Location:quanlydichvu.php");
                    }
                }
            }
            $stmt->close();
            $conn->close();
            return $success;
        }
        public static function Edit(Dichvu $dv){
            $success=false;
            $conn= DBConnection::Connect();
            $sql= "UPDATE tbdichvu SET TENDV = ?, LOAIDV = ? WHERE MADV = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sss", $dv->tendv,$dv->loaidv,$dv->madv);
            if($success = $stmt->execute()){
                header("location:quanlydichvu.php");
            }else{
                echo "That bai";
            }
            $stmt->close();
            $conn->close();
            return $success;
        }
        
        public static function Delete(string $madv){
            $success=false;
            $conn= DBConnection::Connect();
            $sql="DELETE FROM tbdichvu WHERE MADV=?";
            $stmt= $conn->prepare($sql);
            $stmt->bind_param("s", $madv);
            if($success = $stmt->execute()){
                
            }else{
                echo "That bai";
            }
            $stmt->close();
            $conn->close();
            return $success;            
        }        

        public static function GetAll(){
            $dsDichvu = array();
            $conn= DBConnection::Connect();
            $sql= "SELECT * FROM tbdichvu";
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()){                
                $dsDichvu[] = new Dichvu($row["MADV"],$row["TENDV"],$row["LOAIDV"]);
            }
            $conn->close();
            return $dsDichvu;
        }

        public static function Get(string $tim){
            $dsDichvu= array();
            $conn= DBConnection::Connect();
            $sql= "SELECT * FROM tbdichvu where MADV = '$tim' or TENDV like '%$tim%' or LOAIDV like '%$tim%' ";
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()){                
                $dsDichvu[] = new Dichvu($row["MADV"],$row["TENDV"],$row["LOAIDV"]);
            }
            $conn->close();
            return $dsDichvu;
        }
    }
    
    class Phukien{
        public $mapk;
        public $tenpk;
        public $anh;
        public $loaipk;
        public $soluongpk;
        public $giapk;
        
        public function __construct($mpk, $tpk,$a,$lpk,$slpk,$gpk){
            $this->mapk = $mpk;
            $this->tenpk = $tpk;
            $this->anh = $a;
            $this->loaipk = $lpk;
            $this->soluongpk = $slpk;
            $this->giapk = $gpk;
        }
        public function __destruct(){

        }

        public static function Add(Phukien $pk){
            $success=false;
            $conn= DBConnection::Connect();
            $s = "select * from tbphukien where MAPK = ?";
            $stmt = $conn->prepare($s);
            $stmt->bind_param("s",$pk->mapk);
            if($stmt->execute()){
                $result = $stmt->get_result();
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        echo "<script> alert('Trùng khóa chính!');</script>";
                        require_once("thempk.html");
                    }
                }else{
                    $sql= "INSERT INTO tbphukien(MAPK,TENPK,IMG,LOAIPK,SOLUONG,GIAPK) VALUES(?,?,?,?,?,?)";
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param("ssssid",$pk->mapk,$pk->tenpk,$pk->anh,$pk->loaipk,$pk->soluongpk,$pk->giapk);
                    if($success = $stmt->execute()){
                        header("Location:quanlyphukien.php");
                    }
                }
            }
            $stmt->close();
            $conn->close();
            return $success;
        }
        public static function Edit(Phukien $pk){
            $success=false;
            $conn= DBConnection::Connect();
            $sql= "UPDATE tbphukien SET TENPK = ?,IMG = ?, LOAIPK = ?, SOLUONG = ?, GIAPK = ? WHERE MAPK = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sssids", $pk->tenpk,$pk->anh,$pk->loaipk,$pk->soluongpk,$pk->giapk,$pk->mapk);
            if($success = $stmt->execute()){
                header("location:quanlyphukien.php");
            }else{
                echo "That bai";
            }
            $stmt->close();
            $conn->close();
            return $success;
        }
        
        public static function Delete(string $mapk){
            $success=false;
            $conn= DBConnection::Connect();
            $sql="DELETE FROM tbphukien WHERE MAPK=?";
            $stmt= $conn->prepare($sql);
            $stmt->bind_param("s", $mapk);
            if($success = $stmt->execute()){
                
            }else{
                echo "That bai";
            }
            $stmt->close();
            $conn->close();
            return $success;            
        }        

        public static function GetAll(){
            $dsPhukien = array();
            $conn= DBConnection::Connect();
            $sql= "SELECT * FROM tbphukien";
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()){                
                $dsPhukien[] = new Phukien($row["MAPK"],$row["TENPK"],$row["IMG"],$row["LOAIPK"],$row["SOLUONG"],$row["GIAPK"]);
            }
            $conn->close();
            return $dsPhukien;
        }

        public static function Get(string $tim){
            $dsPhukien = array();
            $conn= DBConnection::Connect();
            $sql= "SELECT * FROM tbphukien where MAPK = '$tim' or TENPK like '%$tim%' or LOAIPK like '%$tim%' ";
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()){                
                $dsPhukien[] = new Phukien($row["MAPK"],$row["TENPK"],$row["IMG"],$row["LOAIPK"],$row["SOLUONG"],$row["GIAPK"]);
            }
            $conn->close();
            return $dsPhukien;
        }
        public static function Getelement(){
            $dsPhukien = array();
            $conn= DBConnection::Connect();
            $sql= "SELECT * FROM tbphukien where SOLUONG <= 20";
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()){                
                $dsPhukien[] = new Phukien($row["MAPK"],$row["TENPK"],$row["IMG"],$row["LOAIPK"],$row["SOLUONG"],$row["GIAPK"]);
            }
            $conn->close();
            return $dsPhukien;
        }
    }

    class Donhang{
        public $madh;
        public $makh;
        public $madv;
        public $tien;
        public $mapk;
        public $soluong;
        public $gia;
        public $ngay;
        public $trangthai;
        
        public function __construct($mdh,$mkh,$mdv,$t,$mpk,$sl,$g,$n,$tt){
            $this->madh = $mdh;
            $this->makh = $mkh;
            $this->madv = $mdv;
            $this->tien = $t;
            $this->mapk = $mpk;
            $this->soluong = $sl;
            $this->gia = $g;
            $this->ngay = $n;
            $this->trangthai = $tt;
        }
        public function __destruct(){

        }

        public static function Add(Donhang $dh){
            $success=false;
            $conn= DBConnection::Connect();
            $s = "select * from tbdonhang where MADH = ?";
            $stmt = $conn->prepare($s);
            $stmt->bind_param("s",$dh->madh);
            if($stmt->execute()){
                $result = $stmt->get_result();
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        echo "<script> alert('Trùng khóa chính!');</script>";
                        require_once("themdh.html");
                    }
                }else{
                    $d = "select * from tbkhachhang where MAKH = ? ";
                    $stmt = $conn->prepare($d);
                    $stmt->bind_param("s",$dh->makh);
                    if($stmt->execute()){
                        $result = $stmt->get_result();
                        if($result->num_rows > 0){
                            $v = "select * from tbdichvu where MADV = ? ";
                            $stmt = $conn->prepare($v);
                            $stmt->bind_param("s",$dh->madv);
                            if($stmt->execute()){
                                $result = $stmt->get_result();
                                if($result->num_rows > 0){
                                    $sql= "INSERT INTO tbdonhang(MADH,MAKH,MADV,TIENDV,NGAY,TRANGTHAI) VALUES('$dh->madh','$dh->makh','$dh->madv','$dh->tien','$dh->ngay','$dh->trangthai')";
                                    $success = $conn->query($sql);
                                    if($success === true){
                                        header("Location:themsp.html");
                                    }   
                                }
                                else{
                                    echo "<script> alert('Không tìm thấy mã dịch vụ!');</script>";
                                    require_once("themdh.html");
                                }
                            }
                        }
                        else{
                            echo "<script> alert('Không tìm thấy mã khách!');</script>";
                            require_once("themdh.html");
                        }
                    }
                }
            }
            $conn->close();
            return $success;
        }
        public static function Edit(Donhang $dh){
            $success=false;
            $conn= DBConnection::Connect();
            $sql= "UPDATE tbdonhang SET MAKH = '$dh->makh', MADV = '$dh->madv', TIENDV = '$dh->tien', NGAY = '$dh->ngay', TRANGTHAI = '$dh->trangthai' WHERE MADH = '$dh->madh'";
            $success = $conn->query($sql);
            $s = " UPDATE tbdonhang_detail set SOLUONG = '$dh->soluong' where ID = (SELECT t1.ID FROM tbdonhang_detail t1 INNER JOIN tbdonhang t2 ON t1.MADH = t2.MADH WHERE t1.MAPK = '$dh->mapk' AND t1.MADH = '$dh->madh') ";
            $suc = $conn->query($s);
            if($success === true && $suc === true){
                $s = "SELECT t1.*, t2.TRANGTHAI from tbdonhang_detail t1 INNER JOIN tbdonhang t2 ON t1.MADH = t2.MADH WHERE t2.TRANGTHAI = 1 and t1.MADH = '$dh->madh' ";
                $re = $conn->query($s);
                if($re->num_rows > 0){
                    $sq = "update tbphukien set tbphukien.SOLUONG = SOLUONG - '$dh->soluong' where MAPK = '$dh->mapk'  ";
                    $result = $conn->query($sq);
                }
                header("location:quanlydonhang.php");
            }
            $conn->close();
            return $success&&$suc;
        }
        
        public static function Delete(string $madh,string $mapk){
            $success=false;
            $conn= DBConnection::Connect();
            $sql="DELETE FROM tbdonhang WHERE MADH=?";
            $stmt= $conn->prepare($sql);
            $stmt->bind_param("s", $madh);
            if($success = $stmt->execute()){
                $s = "DELETE FROM tbdonhang_detail where MADH = ? and MAPK = ?";
                $stm = $conn->prepare($s);
                $stm->bind_param("ss",$madh,$mapk);
                if($suc = $stm->execute()){

                }else{
                    echo "That bai";
                }
            }else{
                echo "That bai";
            }
            $stmt->close();
            $conn->close();
            return $success;            
        }        

        public static function GetAll(){
            $dsDonhang = array();
            $conn= DBConnection::Connect();
            $sql= "SELECT tbdonhang.*,t1.MAPK,t1.SOLUONG, t1.SOLUONG * t2.GIAPK AS Gia from tbdonhang INNER JOIN tbdonhang_detail t1 on tbdonhang.MADH = t1.MADH INNER JOIN tbphukien t2 on t1.MAPK = t2.MAPK";
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()){                
                $dsDonhang[] = new Donhang($row["MADH"],$row["MAKH"],$row["MADV"],$row["TIENDV"],$row["MAPK"],$row["SOLUONG"],$row["Gia"],$row["NGAY"],$row["TRANGTHAI"]);
            }
            $conn->close();
            return $dsDonhang;
        }

        public static function Get(string $tim){
            $dsDonhang = array();
            $conn= DBConnection::Connect();
            $sql= "SELECT tbdonhang.*,t1.MAPK,t1.SOLUONG, t1.SOLUONG * t2.GIAPK AS Gia from tbdonhang INNER JOIN tbdonhang_detail t1 on tbdonhang.MADH = t1.MADH INNER JOIN tbphukien t2 on t1.MAPK = t2.MAPK where tbdonhang.MADH = '$tim' or tbdonhang.MADV = '$tim' or tbdonhang.MAKH = '$tim' or t1.MAPK = '$tim' ";
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()){                
                $dsDonhang[] = new Donhang($row["MADH"],$row["MAKH"],$row["MADV"],$row["TIENDV"],$row["MAPK"],$row["SOLUONG"],$row["Gia"],$row["NGAY"],$row["TRANGTHAI"]);
            }
            $conn->close();
            return $dsDonhang;
        }
        public static function Getelement(string $madh,string $mapk){
            $conn= DBConnection::Connect();
            $sql= "SELECT tbdonhang.*,t1.MAPK,t1.SOLUONG, t1.SOLUONG * t2.GIAPK AS Gia from tbdonhang INNER JOIN tbdonhang_detail t1 on tbdonhang.MADH = t1.MADH INNER JOIN tbphukien t2 on t1.MAPK = t2.MAPK where tbdonhang.MADH = ? and t1.MAPK = ?";
            $stmt= $conn->prepare($sql);
            $stmt->bind_param("ss", $madh,$mapk);
            $stmt->execute();
            $result = $stmt->get_result();
            if($row = $result->fetch_assoc()){
                $donhang = new Donhang($row["MADH"],$row["MAKH"],$row["MADV"],$row["TIENDV"],$row["MAPK"],$row["SOLUONG"],$row["Gia"],$row["NGAY"],$row["TRANGTHAI"]);
            }
            $stmt->close();
            $conn->close();
            return $donhang;
        }
    }

    class Donhang_detail{
        public $madh;
        public $mapk;
        public $soluong;
        
        public function __construct($mdh,$mpk,$sl){
            $this->madh = $mdh;
            $this->mapk = $mpk;
            $this->soluong = $sl;
        }
        public function __destruct(){

        }

        public static function Add(Donhang_detail $dh){
            $success=false;
            $conn= DBConnection::Connect();
            $s = "select * from tbdonhang where MADH = ?";
            $stmt = $conn->prepare($s);
            $stmt->bind_param("s",$dh->madh);
            if($stmt->execute()){
                $result = $stmt->get_result();
                if($result->num_rows > 0){
                    $s = "select * from tbphukien where MAPK = ?";
                    $stmt = $conn->prepare($s);
                    $stmt->bind_param("s",$dh->mapk);
                    if($stmt->execute()){
                        $result = $stmt->get_result();
                        if($result->num_rows > 0){
                            $s = "select SOLUONG from tbphukien where MAPK = ? and SOLUONG > ?";
                            $stmt = $conn->prepare($s);
                            $stmt->bind_param("si",$dh->mapk,$dh->soluong);
                            if($stmt->execute()){
                                $result = $stmt->get_result();
                                if($result->num_rows > 0){
                                    $sql= "INSERT INTO tbdonhang_detail(MADH,MAPK,SOLUONG) VALUES('$dh->madh','$dh->mapk','$dh->soluong')";
                                    $success = $conn->query($sql);
                                    if($success === true){
                                        $s = "SELECT t1.*, t2.TRANGTHAI from tbdonhang_detail t1 INNER JOIN tbdonhang t2 ON t1.MADH = t2.MADH WHERE t2.TRANGTHAI = 1 and t1.MADH = '$dh->madh' ";
                                        $re = $conn->query($s);
                                        if($re->num_rows > 0){
                                            $sq = "update tbphukien set tbphukien.SOLUONG = SOLUONG - '$dh->soluong' where MAPK = '$dh->mapk'  ";
                                            $result = $conn->query($sq);
                                        }
                                        header("Location:themsp.html");
                                    }
                                }
                                else{
                                    echo "<script> alert('Số lượng bạn nhập hơn số lượng đang có!');</script>";
                                    require_once("themsp.html");
                                }
                            } 
                        }
                        else{
                            echo "<script> alert('Không tìm thấy mã phụ kiện!');</script>";
                            require_once("themsp.html");
                        }
                    }
                }else{
                    echo "<script> alert('Không tìm thấy mã dịch vụ!');</script>";
                    require_once("themsp.html");
                }
            }
            $conn->close();
            return $success;
        }    
    }

    class Lich{
        public $mal;
        public $madv;
        public $makh;
        public $ngay;
        public $tinhtrang;
        
        public function __construct($ml,$mdv,$mkh,$n,$tt){
            $this->mal = $ml;
            $this->madv = $mdv;
            $this->makh = $mkh;
            $this->ngay = $n;
            $this->tinhtrang = $tt;
        }
        public function __destruct(){

        }

        public static function Add(Lich $lich){
            $success=false;
            $conn= DBConnection::Connect();
            $s = "select * from tblich where MALICH = ?";
            $stmt = $conn->prepare($s);
            $stmt->bind_param("s",$lich->mal);
            if($stmt->execute()){
                $result = $stmt->get_result();
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        echo "<script> alert('Trùng khóa chính!');</script>";
                        require_once("theml.html");
                    }
                }else{
                    $d = "select * from tbdichvu where MADV = ? ";
                    $stmt = $conn->prepare($d);
                    $stmt->bind_param("s",$lich->madv);
                    if($stmt->execute()){
                        $result = $stmt->get_result();
                        if($result->num_rows > 0){
                            $v = "select * from tbkhachhang where MAKH = ? ";
                            $stmt = $conn->prepare($v);
                            $stmt->bind_param("s",$lich->makh);
                            if($stmt->execute()){
                                $result = $stmt->get_result();
                                if($result->num_rows > 0){
                                    $sql= "INSERT INTO tblich(MALICH,MADV,MAKH,THOIGIAN,TINHTRANG) VALUES('$lich->mal','$lich->madv','$lich->makh','$lich->ngay','$lich->tinhtrang')";
                                    $success = $conn->query($sql);
                                    if($success === true){
                                        header("Location:quanlylichhen.php");
                                    }
                                }
                                else{
                                    echo "<script> alert('Không tìm thấy mã khách hàng!');</script>";
                                    require_once("theml.html");
                                }
                            }
                        }
                        else{
                            echo "<script> alert('Không tìm thấy mã dịch vụ!');</script>";
                            require_once("theml.html");
                        }
                    }
                }
            }
            $conn->close();
            return $success;
        }
        public static function Edit(Lich $lich){
            $success=false;
            $conn= DBConnection::Connect();
            $sql= "UPDATE tblich SET MADV = '$lich->madv', MAKH = '$lich->makh', THOIGIAN = '$lich->ngay', TINHTRANG = '$lich->tinhtrang' WHERE MALICH = '$lich->mal'";
            $success = $conn->query($sql);
            if($success === true){
                header("location:quanlylichhen.php");
            }else{
                echo "That bai";
            }
            $conn->close();
            return $success;
        }
        
        public static function Delete(string $mal){
            $success=false;
            $conn= DBConnection::Connect();
            $sql="DELETE FROM tblich WHERE MALICH=?";
            $stmt= $conn->prepare($sql);
            $stmt->bind_param("s", $mal);
            if($success = $stmt->execute()){
                
            }else{
                echo "That bai";
            }
            $stmt->close();
            $conn->close();
            return $success;            
        }        

        public static function GetAll(){
            $dsLich = array();
            $conn= DBConnection::Connect();
            $sql= "SELECT * FROM tblich";
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()){                
                $dsLich[] = new Lich($row["MALICH"],$row["MADV"],$row["MAKH"],$row["THOIGIAN"],$row["TINHTRANG"]);
            }
            $conn->close();
            return $dsLich;
        }

        public static function Get(string $tim){
            $dsLich = array();
            $conn= DBConnection::Connect();
            $sql= "SELECT * from tblich where MALICH = '$tim' or MADV = '$tim' or MAKH = '$tim' ";
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()){                
                $dsLich[] = new Lich($row["MALICH"],$row["MADV"],$row["MAKH"],$row["THOIGIAN"],$row["TINHTRANG"]);
            }
            $conn->close();
            return $dsLich;
        }
    }

    class mess{
        public $id;
        public $ten;
        public $diachi;
        public $gioitinh;
        public $sdt;
        public $mes;
        public $ngay;
        public $xacnhan;
        public function __construct($i,$t,$d,$g,$s,$m,$n,$x){
            $this->id = $i;
            $this->ten = $t;
            $this->diachi = $d;
            $this->gioitinh = $g;
            $this->sdt = $s;
            $this->mes = $m;
            $this->ngay = $n;
            $this->xacnhan = $x;
        }
        public function __destruct(){

        }
        public static function Add(mess $m){
            $success=false;
            $conn= DBConnection::Connect();
            $sql= "INSERT INTO tbmessenger(TENKH,DIACHIKH,SDT,MESS) VALUES('$m->ten','$m->diachi','$m->sdt','$m->mes')";
            $success = $conn->query($sql);
            if($success === true){
                header("Location:lichhen.php");
            }else{
                echo "<script> alert('Đặt hàng thất bại!');</script>";
                require_once("lichhen.php.html");
            }
            $conn->close();
            return $success;
        }
        public static function GetAll(){
            $dsmes = array();
            $conn= DBConnection::Connect();
            $sql ="SELECT * FROM tbmessenger WHERE tbmessenger.NGAY = CURRENT_DATE";
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()){                
                $dsmes[] = new mess($row["ID"],$row["TENKH"],$row["DIACHIKH"],$row["GIOITINH"],$row["SDT"],$row["MESS"],$row["NGAY"],$row["XACNHAN"]);
            }
            $conn->close();
            return $dsmes;
        }
        public static function Edit(string $s){
            $success=false;
            $conn= DBConnection::Connect();
            $sql="update tbmessenger set XACNHAN = '1' where ID = ? ";
            $stmt= $conn->prepare($sql);
            $stmt->bind_param("s", $s);
            if($success = $stmt->execute()){
                
            }else{
                echo "That bai";
            }
            $stmt->close();
            $conn->close();
            return $success;            
        }
        public static function Get(string $tim){
            $dsmes = array();
            $conn= DBConnection::Connect();
            $sql= "SELECT * from tbmessenger where TENKh like '%$tim%' or MESS like '%$tim%' or NGAY like '%$tim%' ";
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()){                
                $dsmes[] = new mess($row["ID"],$row["TENKH"],$row["DIACHIKH"],$row["GIOITINH"],$row["SDT"],$row["MESS"],$row["NGAY"],$row["XACNHAN"]);
            }
            $conn->close();
            return $dsmes;
        } 
        public static function Getch(){
            $dsmes = array();
            $conn= DBConnection::Connect();
            $sql ="SELECT * FROM tbmessenger WHERE tbmessenger.XACNHAN = 0";
           
            if( $result = $conn->query($sql)){
                while($row = $result->fetch_assoc()){                
                    $dsmes[] = new mess($row["ID"],$row["TENKH"],$row["DIACHIKH"],$row["GIOITINH"],$row["SDT"],$row["MESS"],$row["NGAY"],$row["XACNHAN"]);
                }
            }
            else{
                echo "Không có dữ liệu";
            }
            $conn->close();
            return $dsmes;
        }    
        public static function Getda(){
            $dsmes = array();
            $conn= DBConnection::Connect();
            $sql ="SELECT * FROM tbmessenger WHERE tbmessenger.XACNHAN = 1";
            $result = $conn->query($sql);
            if($result->num_rows >0){
                while($row = $result->fetch_assoc()){                
                    $dsmes[] = new mess($row["ID"],$row["TENKH"],$row["DIACHIKH"],$row["GIOITINH"],$row["SDT"],$row["MESS"],$row["NGAY"],$row["XACNHAN"]);
                }
            }
            else{
                echo "Không có dữ liệu";
            }
            $conn->close();
            return $dsmes;
        }    
    }
?>