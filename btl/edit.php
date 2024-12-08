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
        $sua = KhachHang::Edit($kh);
    }
    if($cid == "2"){
        include("khachhang.php");
        $madv = $_POST["madv"];
        $tendv = $_POST["tendv"];
        $loaidv = $_POST["loaidv"];
        $dv = new Dichvu($madv,$tendv,$loaidv);
        $sua = Dichvu::Edit($dv);
    }
    if($cid == "3"){
        include("khachhang.php");
        $mapk = $_POST["mapk"];
        $tenpk = $_POST["tenpk"];
        $anh = $_FILES["anh"]["name"]; // lấy tên của ảnh
        $anh_tmp = $_FILES["anh"]["tmp_name"]; // lấy đường dẫn của ảnh
        $lpk = $_POST["loaipk"];
        $sl = $_POST["slpk"];
        $gia = $_POST["giapk"];
        $pk =  new Phukien($mapk,$tenpk,$anh,$lpk,$sl,$gia);
        $sua = Phukien::Edit($pk);
        move_uploaded_file($anh_tmp,'anh/'.$anh);
    }
    if($cid == "4"){
        include("khachhang.php");
        $madh = $_POST["madh"];
        $makh = $_POST["makh"];
        $madv = $_POST["madv"];
        $tien = $_POST["tien"];
        $mapk = $_POST["mapk"];
        $soluong = $_POST["sl"];
        $gia = $_POST["gia"];
        $ngay = $_POST["ngay"];
        $tt = $_POST["tt"];
        $dh =  new Donhang($madh,$makh,$madv,$tien,$mapk,$soluong,$gia,$ngay,$tt);
        $sua = Donhang::Edit($dh);
    }
    if($cid == "5"){
        include("khachhang.php");
        $mal = $_POST["mal"];
        $madv = $_POST["madv"];
        $makh = $_POST["makh"];
        $n = $_POST["ngay"];
        $tt = $_POST["tt"];
        $l =  new Lich($mal,$madv,$makh,$n,$tt);
        $sua = Lich::Edit($l);
    }
?>