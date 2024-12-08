
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="themkh.css">
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
            <?php
                $madv = $_GET["madv"];
                include("khachhang.php");
                $ds = Dichvu::Get($madv);
                foreach($ds as $tim){
            ?>
                <form action="edit.php?cid=2" method="POST" id="them">
                    <input type="text" name="madv" id="makh" placeholder="Nhập mã dịch vụ" value="<?php echo $tim->madv ?>" required readonly><br>
                    <input type="text" name="tendv" id="tenkh" placeholder="Nhập tên dịch vụ" value="<?php echo $tim->tendv ?>" required><br>
                    <input type="text" name="loaidv" id="dckh" placeholder="Nhập loại dịch vụ" value="<?php echo $tim->loaidv ?>" required><br>
                    <?php        
                        }
                    ?>
                    <input type="submit" value="Sửa">
                </form>
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
    
   



    