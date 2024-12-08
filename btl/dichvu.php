<style>
    a{
        color:white;
    }
    td,li{
        color: white;
    }
    .dsdv{
        padding-top: 2%;
    }
    .tendv{
        border-bottom: 1px solid silver;
        text-align: center;
    }
    .dv{
        padding: 1%;            
        color: white;
    }
    .img{
        padding: 1%;
    }

</style>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="giaodienkhachhang.css">
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
                    <li class="trangchu"><a href="giaodienkhachhang.html">Trang chủ</a></li>
                        <li><a href="dichvu.php"  style="color: rgb(0,150,177);">Dịch vụ</a></li>
                        <li><a href="phukien.php">Phụ kiện</a></li>
                        <li><a href="lichhen.php?ldv=<?php echo ""?>&tdv=<?php echo ""?>">Lịch hẹn</a></li>
                        <li><a href="lienhe.html">Liên hệ</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <img class="fb" src="anh/fb.webp">
                    <img class="zalo" src="anh/zalo.jpg">
                    <img class="tiktok" src="anh/tiktok.png">
                </div>
            </nav>
        <div class="row dsdv">
                <div class="offset-md-1 col-md-5 img">
                    <img src="anh/dichvu1.jpg" alt="" style="width: 100%;">
                </div>
                <div class="col-md-5 dv">
                    <h3 class="tendv"><?php $a = "SỬA CHỮA CHUNG"; echo $a;?></h3>
                    <table>                            
                        <?php
                            include("khachhang.php");
                            $dsa = Dichvu::GET($a);
                            foreach ($dsa as $item) {
                            ?>
                                <tr>
                                    <td><a href="./lichhen.php?cid=1&ldv=<?php echo $a ?> &tdv=<?php echo $item->tendv ?>"><?php echo $item->tendv ?></a></td>
                                </tr>
                            <?php
                            }
                        ?>                                        
                    </table>
                </div>            
            </div>

            <div class="row dsdv">
                <div class="offset-md-1 col-md-5 dv">
                    <h3 class="tendv"><?php $b = "ĐỒNG (GÒ HÀN)"; echo $b;?></h3>
                    <table>                            
                        <?php
                            $dsb = Dichvu::GET($b);
                            foreach ($dsb as $item) {
                            ?>
                                <tr>
                                <td><a href="./lichhen.php?cid=1&ldv=<?php echo $b ?> &tdv=<?php echo $item->tendv ?>"><?php echo $item->tendv ?></a></td>
                                </tr>
                            <?php
                            }
                        ?>                                        
                    </table>
                </div>
                <div class="col-md-5 img">
                    <img src="anh/dichvu2.jpg" alt="" style="width: 100%;">
                </div>            
            </div>
            
            <div class="row dsdv">
                <div class="offset-md-1 col-md-5 img">
                    <img src="anh/dichvu3.jpg" alt="" style="width: 100%;">
                </div>
                <div class="col-md-5 dv">
                    <h3 class="tendv"><?php $c = "SỬA CHỮA SƠN"; echo $c;?></h3>
                    <table>                            
                        <?php
                            $dsc = Dichvu::GET($c);
                            foreach ($dsc as $item) {
                            ?>
                                <tr>
                                    <td><a href="./lichhen.php?cid=1&ldv=<?php echo $c ?> &tdv=<?php echo $item->tendv ?>"><?php echo $item->tendv ?></a></td>
                                </tr>
                            <?php
                            }
                        ?>                                        
                    </table>
                </div>            
            </div>

            <div class="row dsdv">
                <div class="offset-md-1 col-md-5 dv">
                    <h3 class="tendv"><?php $d = "PHỤ TÙNG"; echo $d;?></h3>
                    <table>                            
                        <?php
                            $dsd = Dichvu::GET($d);
                            foreach ($dsd as $item) {
                            ?>
                                <tr>
                                    <td><a href="./lichhen.php?cid=1&ldv=<?php echo $d ?> &tdv=<?php echo $item->tendv ?>"><?php echo $item->tendv ?></a></td>
                                </tr>
                            <?php
                            }
                        ?>                                        
                    </table>
                </div>
                <div class="col-md-5 img">
                    <img src="anh/dichvu4.jpg" alt="" style="width: 100%;">
                </div>            
            </div>

            <div class="row dsdv">
                <div class="offset-md-1 col-md-5 img">
                    <img src="anh/dichvu5.jpg" alt="" style="width: 100%;">
                </div>
                <div class="col-md-5 dv">
                    <h3 class="tendv"><?php $e = "CARCHECK"; echo $e;?></h3>
                    <table>                            
                        <?php
                            $dse = Dichvu::GET($e);
                            foreach ($dse as $item) {
                            ?>
                                <tr>
                                    <td><a href="lichhen.php?cid=1&ldv=<?php echo $e ?> &tdv=<?php echo $item->tendv ?>"><?php echo $item->tendv ?></a></td>
                                </tr>
                            <?php
                            }
                        ?>                                        
                    </table>
                </div>            
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
    
   



