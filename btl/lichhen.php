<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="lichhen.css">
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $("#dat").submit(function(){
                    var url = window.location.href;
                    var urlObject = new URL(url); // Tạo một jQuery object chứa thông tin về URL
                    var slg = urlObject.searchParams.get('sl');  // Lấy giá trị của các tham số từ URL
                    let sl = $(".dv").val();
                    if(sl > slg){
                        alert("Số lượng bạn nhập quá số lượng đang có!");
                        return false;
                    }
                    if(isNaN(sl)<=0){
                        alert("Vui lòng nhập lại số lượng!");
                        return false;
                    }
                    alert("Đợi xác nhận của người quản lý!");
                    return true;
                })
            })
        </script>
        <script>
            var arr =[
            "anh/lichhen1.jpg",
            "anh/lichhen2.jpg",
            "anh/lichhen3.jpg",
            "anh/lichhen4.jpg",
            "anh/lichhen5.jpg",
            ]
            var index =0;
            function next(){
                index ++;
                if(index>=arr.length)
                index=0;
                var hinh = document.getElementById('hinh').src=arr[index];
            }
            function prev(){
                index--;
                if(index<0) index=arr.length-1;
                document.getElementById('hinh').src=arr[index];
            }
            setInterval("next()",2500);
        </script>

        <style>
            h3{
                color: white;
                text-align: center;
                width: 100%;
                margin: 1%;
            }   
            .tensp,.infot,.gia,.infog{
                float: left;
            } 
            p{
                color: white;
                float: left;
                margin: 10px;
            }
            select,input.name,input.phone,input.dm,input.dv,input.day,input.pos,input.day{
                margin: 1%;
                float: unset;
                width: 47.5%;
            }
            #infog,#infot{
                background-color: silver;
                overflow: hidden;
                width: 100%;            
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
                        <li><a href="phukien.php">Phụ kiện</a></li>
                        <li><a href="lichhen.php?ldv=<?php echo ""?>&tdv=<?php echo ""?>"  style="color: rgb(0,150,177);">Lịch hẹn</a></li>
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
                <div class="col-md-5">
                    <div class="col-md-12">
                        <img style="width: 100%; padding-top: 5%; margin: 1%;" id="hinh" src="anh/lichhen1.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-7">
                    <?php 
                        $chon = isset($_GET["ldv"]) ? $_GET["ldv"] :"";
                        $cid = isset($_GET["cid"]) ? $_GET["cid"] :"";
                        $slg = isset($_GET["sl"]) ? $_GET["sl"] :"";
                        $c = 1;
                        $a = "Chọn yêu cầu";
                        $b = "Chọn yêu cầu";
                        if($cid == "1"){
                            $a = "Loại dịch vụ";
                            $b = "Tên dịch vụ";
                            $c = isset($_GET["tdv"]) ? $_GET["tdv"] :"";
                        }
                        if($cid == "2"){
                            $a = "Tên sản phẩm";
                            $b = "Số lượng";
                            
                        }
                    ?>
                    <form id="dat" action="them.php?cid=7&a=<?php echo $a ?>&b= <?php echo $b ?>&slg" method="post">
                        <h3>đặt lịch hẹn</h3>
                            <p><?php echo $a ?></p>
                            <p style="margin-left: 330px;"><?php echo $b ?></p>
                            <input id="dv" class="dm" name="dm" type="text" value="<?php echo $chon; ?>" required>
                            <input id="dv" class="dv" name="dv" type="text" value="<?php echo $c; ?>" required>
                            <p>Tên của bạn:</p>
                            <p style="margin-left: 340px;">Số điện thoại:</p>
                            <input class="name" name="name" type="text" placeholder="nhập tên của bạn" required>
                            <input class="phone" name="phone" type="text" placeholder="nhập số điện thoại của bạn" required>
                            <p>địa chỉ:</p>
                            <p style="margin-left: 380px;">ngày hẹn:</p>
                            <input class="pos" type="text" name="pos" placeholder="nhập địa chỉ của bạn" required>
                            <input class="day" type="date" name="dates">     
                            <input type="submit" value="Đặt" id="dat">  
                    </form>
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