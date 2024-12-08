<?php
    $cid = isset($_GET["cid"]) ? $_GET["cid"] :"0";
    if($cid == "1"){
        include("khachhang.php");
        $makh = $_POST["makh"];
        $tenkh = $_POST["tenkh"];
        $dckh = $_POST["dckh"];
        $gtkh = $_POST["gtkh"];
        $sdtkh = $_POST["sdtkh"];
        $kh =  new KhachHang($makh,$tenkh,$dckh,$gtkh,$sdtkh);
        $them = KhachHang::Add($kh);
    }
    if($cid == "2"){
        include("khachhang.php");
        $madv = $_POST["madv"];
        $tendv = $_POST["tendv"];
        $loaidv = $_POST["loaidv"];
        $dv = new Dichvu($madv,$tendv,$loaidv);
        $them = Dichvu::Add($dv);
    }
    if($cid == "3"){
        include("khachhang.php");
        $mapk = $_POST["mapk"];
        $tenpk = $_POST["tenpk"];
        $anh = $_FILES["anh"]["name"];
        $anh_tmp = $_FILES["anh"]["tmp_name"];
        $loaipk = $_POST["loaipk"];
        $slpk = $_POST["soluongpk"];
        $gia = $_POST["giapk"];
        $pk =  new Phukien($mapk,$tenpk,$anh,$loaipk,$slpk,$gia);
        move_uploaded_file($anh_tmp,'anh/'.$pk->anh);
        $them = Phukien::Add($pk);
    }
    if($cid == "4"){
        include("khachhang.php");
        $madh = $_POST["madh"];
        $makh = $_POST["makh"];
        $madv = $_POST["madv"];
        $tien = $_POST["tien"];
        $mapk = 0;
        $sl = 0;
        $gia = 0;
        $ngay = $_POST["ngay"];
        $tt = $_POST["tt"];
        $dh =  new Donhang($madh,$makh,$madv,$tien,$mapk,$sl,$gia,$ngay,$tt);
        $them = Donhang::Add($dh);
    }
    if($cid == "5"){
        include("khachhang.php");
        $mal = $_POST["mal"];
        $madv = $_POST["madv"];
        $makh = $_POST["makh"];
        $ngay = $_POST["ngay"];
        $tt = $_POST["tt"];
        $l =  new Lich($mal,$madv,$makh,$ngay,$tt);
        $them = Lich::Add($l);
    }
    if($cid == "6"){
        include("khachhang.php");
        $madh = $_POST["madh"];
        $mapk = $_POST["mapk"];
        $sl = $_POST["sl"];
        $dh =  new Donhang_detail($madh,$mapk,$sl);
        $them = Donhang_detail::Add($dh);
    }
    if($cid == "7"){
        include("khachhang.php");
        $a = isset($_GET["a"]) ? $_GET["a"]: "";
        $b = isset($_GET["b"]) ? $_GET["b"]: "";
        $sl = isset($_GET["slg"]) ? $_GET["slg"]: "";
        $ten = $_POST["name"];
        $dc = $_POST["pos"];
        $sdt = $_POST["phone"];
        $date = $_POST["dates"];
        $mess = $a . ": " . $_POST["dm"] . "<br>" . $b . ": " . $_POST["dv"] . "<br>Ngày: " . $date ;
        $ds = new mess(NULL,$ten,$dc,0,$sdt,$mess,NULL,NULL);
        $add = mess::Add($ds);
    }
?>