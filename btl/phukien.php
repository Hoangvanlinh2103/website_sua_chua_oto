<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="phukien.css?<?php echo time(); ?>">
        <style>
            .listimg{
                width: 95%; 
                margin: 3% 0.25%;
            }
            .name{
                width: 95%;
                text-align: center;
            }
            .btn{
                background-color: white; 

                width: 30%; 
                margin-left: 37.5%;
            }
            .btn:hover{
                background-color: rgb(0,150,177);
            }
            .ds{
                padding: 0; 
                margin: 0px; 
                overflow: hidden;
            }
            ul.ds>li{
                width: 100%;
                height: auto;
                font-size: 20px;
                list-style: none;
                background: linear-gradient(to bottom,rgb(24, 39, 50),rgb(67, 79, 90));
                color: white;
                border: 1px solid black;
            }
            ul.ds>li:hover{
                color: rgb(0,150,177);
            }
            
            h3{
                color: white;
                text-align: center;
                width: 100%;
                margin: 1%;
            }            
            p{
                color: white;
                float: left;
                margin: 10px;
            }
            select,input.name,input.phone,input.day{
                margin: 1%;
                float: unset;
                width: 47.5%;
            }
            select:hover,input:hover{
                color: rgb(0,150,177);
            }
            tr>th,tr>td{
                border: 1px solid white;
                text-align: center;
                color: white;
            }
        </style>
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
                        <li><a href="dichvu.php">Dịch vụ</a></li>
                        <li><a href="phukien.php" style="color: rgb(0,150,177);">Phụ kiện</a></li>
                        <li><a href="lichhen.php">Lịch hẹn</a></li>
                        <li><a href="lienhe.html">Liên hệ</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <img class="fb" src="anh/fb.webp">
                    <img class="zalo" src="anh/zalo.jpg">
                    <img class="tiktok" src="anh/tiktok.png">
                </div>
            </nav>
            <div class="row" style="opacity: 0.85;">
                    <div class="col-md-3" style="position: fixed; width:300px;">
                        <ul class="ds">
                            <li><a href="#dbg">DA BỌC GHẾ</a></li>
                            <li><a href="#lgxoto">LÓT GHẾ XE Ô TÔ</a></li>
                            <li><a href="#ddxoto">ĐÈN DÁN XE Ô TÔ</a></li>
                            <li><a href="#d">DẦU</a></li>
                            <li><a href="#c">CỬA</a></li>
                            <li><a href="#k">KÍNH</a></li>
                            <li><a href="#g">GƯƠNG</a></li>
                            <li><a href="#dc">DECAL DÁN XE Ô TÔ, TEM DÁN XE Ô TÔ</a></li>
                            <li><a href="#bvloto">BỌC VÔ LĂNG Ô TÔ</a></li>
                        </ul>
                    </div>
                    <div class="col-md-9" style="margin-left: 300px;">
                        <h2>DA BỌC GHẾ</h2>
                        <div id="dbg">
                            <?php
                            include("khachhang.php");
                            $a = "DA BỌC GHẾ";
                            $ds = phukien::Get($a);
                            foreach ($ds as $item) {
                            ?>
                                <div>
                                    <img style="width:150px" src="./anh/<?php echo $item->anh ?>" alt="" class="listimg">
                                    <p class="name"><?php echo $item->tenpk?></p>
                                    <p class="name"><?php echo $item->giapk?></p>
                                    <p class="name" name="sl" value=<?php $item->soluongpk ?>><?php echo $item->soluongpk?></p>
                                    <a href="lichhen.php?cid=2&ldv=<?php echo $item->tenpk ?>&sl=<?php echo $item->soluongpk ?>" class="btn">Đặt ngay</a>
                                </div>                     
                            <?php
                            }
                            ?>         
                        </div>   
                        <h2>LÓT GHẾ XE Ô TÔ</h2>
                        <div id="lgxoto">
                            <?php
                            $b = "LÓT GHẾ XE Ô TÔ";
                            $ds = phukien::Get($b);
                            foreach ($ds as $item) {
                            ?>
                                <div>
                                    <img style="width:150px" src="./anh/<?php echo $item->anh ?>" alt="" class="listimg">
                                    <p class="name"><?php echo $item->tenpk?></p>
                                    <p class="name"><?php echo $item->giapk?></p>
                                    <p class="name"><?php echo $item->soluongpk?></p>
                                    <a href="lichhen.php?cid=2&ldv=<?php echo $item->tenpk ?>" class="btn">Đặt ngay</a>
                                </div>                     
                            <?php
                            }
                            ?>         
                        </div>    
                        <h2>ĐÈN DÁN XE Ô TÔ</h2>
                        <div id="ddxoto">
                            <?php
                            $b = "ĐÈN DÁN XE Ô TÔ";
                            $ds = phukien::Get($b);
                            foreach ($ds as $item) {
                            ?>
                                <div>
                                    <img style="width:150px" src="./anh/<?php echo $item->anh ?>" alt="" class="listimg">
                                    <p class="name"><?php echo $item->tenpk?></p>
                                    <p class="name"><?php echo $item->giapk?></p>
                                    <p class="name"><?php echo $item->soluongpk?></p>
                                    <a href="lichhen.php?cid=2&ldv=<?php echo $item->tenpk ?>" class="btn">Đặt ngay</a>
                                </div>                     
                            <?php
                            }
                            ?>         
                        </div>      
                        <h2>Dầu</h2>
                        <div id="d">
                            <?php
                            $b = "DẦU";
                            $ds = phukien::Get($b);
                            foreach ($ds as $item) {
                            ?>
                                <div>
                                    <img style="width:150px" src="./anh/<?php echo $item->anh ?>" alt="" class="listimg">
                                    <p class="name"><?php echo $item->tenpk?></p>
                                    <p class="name"><?php echo $item->giapk?></p>
                                    <p class="name"><?php echo $item->soluongpk?></p>
                                    <a href="lichhen.php?cid=2&ldv=<?php echo $item->tenpk ?>" class="btn">Đặt ngay</a>
                                </div>                     
                            <?php
                            }
                            ?>         
                        </div>          
                        <h2>CỬA</h2>
                        <div id="c">
                            <?php
                            $b = "CỬA";
                            $ds = phukien::Get($b);
                            foreach ($ds as $item) {
                            ?>
                                <div>
                                    <img style="width:150px" src="./anh/<?php echo $item->anh ?>" alt="" class="listimg">
                                    <p class="name"><?php echo $item->tenpk?></p>
                                    <p class="name"><?php echo $item->giapk?></p>
                                    <p class="name"><?php echo $item->soluongpk?></p>
                                    <a href="lichhen.php?cid=2&ldv=<?php echo $item->tenpk ?>" class="btn">Đặt ngay</a>
                                </div>                     
                            <?php
                            }
                            ?>         
                        </div>          
                        <h2>KÍNH</h2>
                        <div id="k">
                            <?php
                            $b = "KÍNH";
                            $ds = phukien::Get($b);
                            foreach ($ds as $item) {
                            ?>
                                <div>
                                    <img style="width:150px" src="./anh/<?php echo $item->anh ?>" alt="" class="listimg">
                                    <p class="name"><?php echo $item->tenpk?></p>
                                    <p class="name"><?php echo $item->giapk?></p>
                                    <p class="name"><?php echo $item->soluongpk?></p>
                                    <a href="lichhen.php?cid=2&ldv=<?php echo $item->tenpk ?>" class="btn">Đặt ngay</a>
                                </div>                     
                            <?php
                            }
                            ?>         
                        </div>          
                        <h2>GƯƠNG</h2>
                        <div id="g">
                            <?php
                            $b = "GƯƠNG";
                            $ds = phukien::Get($b);
                            foreach ($ds as $item) {
                            ?>
                                <div>
                                    <img style="width:150px" src="./anh/<?php echo $item->anh ?>" alt="" class="listimg">
                                    <p class="name"><?php echo $item->tenpk?></p>
                                    <p class="name"><?php echo $item->giapk?></p>
                                    <p class="name"><?php echo $item->soluongpk?></p>
                                    <a href="lichhen.php?cid=2&ldv=<?php echo $item->tenpk ?>" class="btn">Đặt ngay</a>
                                </div>                     
                            <?php
                            }
                            ?>         
                        </div>          
                        <h2>DECAL DÁN XE Ô TÔ, TEM DÁN XE Ô TÔ</h2>
                        <div id="dc">
                            <?php
                            $b = "DECAL DÁN XE Ô TÔ, TEM DÁN XE Ô TÔ";
                            $ds = phukien::Get($b);
                            foreach ($ds as $item) {
                            ?>
                                <div>
                                    <img style="width:150px" src="./anh/<?php echo $item->anh ?>" alt="" class="listimg">
                                    <p class="name"><?php echo $item->tenpk?></p>
                                    <p class="name"><?php echo $item->giapk?></p>
                                    <p class="name"><?php echo $item->soluongpk?></p>
                                    <a href="lichhen.php?cid=2&ldv=<?php echo $item->tenpk ?>" class="btn">Đặt ngay</a>
                                </div>                     
                            <?php
                            }
                            ?>         
                        </div>          
                        <h2>BỌC VÔ LĂNG Ô TÔ</h2>
                        <div id="bvloto">
                            <?php
                            $b = "BỌC VÔ LĂNG Ô TÔ";
                            $ds = phukien::Get($b);
                            foreach ($ds as $item) {
                            ?>
                                <div>
                                    <img style="width:150px" src="./anh/<?php echo $item->anh ?>" alt="" class="listimg">
                                    <p class="name"><?php echo $item->tenpk?></p>
                                    <p class="name"><?php echo $item->giapk?></p>
                                    <p class="name"><?php echo $item->soluongpk?></p>
                                    <a href="lichhen.php?cid=2&ldv=<?php echo $item->tenpk ?>" class="btn">Đặt ngay</a>
                                </div>                     
                            <?php
                            }
                            ?>         
                        </div>                                                   
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


