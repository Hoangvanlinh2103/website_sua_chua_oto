
                    
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="quanlykhachhang.css">
    </head>
    <body>
        
        <div class="container">
            <header class="row">
                <div>
                    <img src="anh/logo.jpg">    
                    <h2>HOAI NAM</h2>
                    <h4>REPAIRS</h4>
                    <input type="text" placeholder="Tìm kiếm">
                    <h1><i class="bi bi-person-circle"></i></h1>
                </div>
            </header>
            <nav class="row">
                <div class="col-md-8"> 
                    <ul>
                        <li class="trangchu"><a href="giaodienkh.html">Trang chủ</a></li>
                        <li><a href="quanlykhachhang.php">Khách hàng</a></li>
                        <li><a href="quanlydichvu.php">Dịch vụ</a></li>
                        <li><a href="quanlyphukien.php">Phụ kiện</a></li>
                        <li><a href="quanlydonhang.php">Đơn hàng</a></li>
                        <li><a href="quanlylichhen.php">Lịch hẹn</a></li>
                        <li><a href="thongke.php">Thống kê</a></li>
                        <li><a href="dat.php">Đặt hàng</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <img class="fb" src="anh/fb.webp">
                    <img class="zalo" src="anh/zalo.jpg">
                    <img class="tiktok" src="anh/tiktok.png">
                </div>
            </nav>
            <div class="row">
                    <h2>Danh sách khách hàng</h2>
                    <form action="timkiemkh.php" method="POST">
                        <input id="search" type="text" name="timkiem" placeholder="Nhập thông tin">
                        <input id="timkiem" type="submit" value="Tìm kiếm">
                    </form>
                    <table>
                        <tr>
                            <td>Mã khách</td>
                            <td>Tên khách</td>
                            <td>Địa chỉ</td>
                            <td>Giới tính</td>  
                            <td>SĐT</td>
                            <td><a class="a1" href="themkh.html">Thêm</a></td>
                        </tr>
                    <?php    
                        include("khachhang.php");
                        $cid = isset($_GET["cid"]) ? $_GET["cid"] :"0";
                       
                            $action = isset($_GET["action"]) ? $_GET["action"] :"0";
                            //Xóa khách hàng nếu có yêu cầu
                            if ($action == "2") {
                                $makhach=isset($_GET["makhach"]) ? $_GET["makhach"] :"";
                                if($makhach != "") {
                                    $success = KhachHang::Delete($makhach);
                                    if($success){
                                        echo "<script> alert('Delete success!');</script>";
                                    }else{
                                        echo "<script> alert('Delete failed!');</script>";
                                    }
                                }    
                            }
                            $makhach= $_POST["timkiem"];
                            $ds = KhachHang::Get($makhach) ;
                            foreach($ds as $item){
                    ?>
                            <tr>
                                <td><?php echo $item->makhach ?></td>
                                <td><?php echo $item->tenkhach ?></td>
                                <td><?php echo $item->diachikh ?></td>
                                <td><?php echo $item->gioitinh ?></td>
                                <td><?php echo $item->sodienthoai ?></td>
                                <td>
                                    <a class="a1" href="editkh.php?makhach=<?php echo $item->makhach ?>">Edit</a>
                                    <span> | </span>
                                    <a class="a1" onclick="return confirm('Bạn có muốn xóa khách hàng?');"
                                    href="quanlykhachhang.php?action=2&makhach=<?php echo $item->makhach ?>">Delete</a>
                                </td>
                            </tr> 
                    <?php        
                        }
                    ?> 
                    </table>
            </div>
            <footer class="row">
                <div class="col-md-7">
                    <h6>CÔNG TY BẢO DƯỠNG Ô TÔ HOAI NAM</h6> 
                    <span>Số GCNĐKDN: 2500150335</span><br>
                    <span>Cấp lần đầu: Ngày 26/03/2007</span><br>
                    <span>Đăng ký thay đổi lần thứ 19: Ngày 02/02/2023</span><br>
                    <span>Cơ quan cấp: Sở kế hoạch và đầu tư tỉnh Vĩnh Phúc</span><br>
                    <span>Địa chỉ: Phường Phúc Thắng, Thành phố Phúc Yên, Tỉnh Vĩnh Phúc, Việt Nam</span>
                </div>
                <div class="col-md-5">
                    <h6>ĐƯỜNG DÂY NÓNG</h6>
                    <img src="anh/phone.png">
                    <span class="pan1">034125037</span><br>
                    <img src="anh/gmail.png">
                    <span class="pan1">abcxyz@gmail.com</span>
                </div>
            </footer>
        </div>
    </body>
</html>