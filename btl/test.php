<?php

    $servername = "localhost:3306";
    $username = "root";
    $password = "";
    $dbname = "dbbanhang";
    // Khởi tạo kết nối
    $conn = new mysqli($servername, $username, $password,$dbname);
    // Kiểm tra kết nối
    if ($conn->connect_error) {
    die("Kết nối thất bại " . $conn->connect_error);
    }

    // Hàm tạo mã khách hàng tự động
    function generateCustomerCode($counter) {
        $prefix = 'kh'; // Tiền tố của mã khách hàng
        $suffix_length = 4; // Độ dài của phần số thứ tự

        // Chuyển đổi biến đếm thành chuỗi với độ dài cố định
        $counter_str = str_pad($counter, $suffix_length, '0', STR_PAD_LEFT);

        return $prefix . $counter_str; // Kết hợp tiền tố và số thứ tự
    }

    // Lấy số thứ tự khách hàng tiếp theo từ cơ sở dữ liệu
    $sql ="SELECT MAX(MAKH) AS max_id FROM tbkh";
    $result = $conn->query($sql);
    $last_customer_code = $result->fetch_column();
    if ($last_customer_code) {
        $last_customer_number = substr($last_customer_code, 2); // Lấy phần số từ mã khách hàng cuối cùng
        $next_customer_number = (int)$last_customer_number + 1; // Tăng số thứ tự lên một
        $next_customer_code = 'KH' . str_pad($next_customer_number, 3, '0', STR_PAD_LEFT); // Tạo mã khách hàng mới
    } else {
        $next_customer_code = 'KH001'; // Nếu không có mã khách hàng nào trong cơ sở dữ liệu, bắt đầu từ 001
    }
    $s = "insert into tbkh(MAKH) values(?)";
    $stmt = $conn->prepare($s);
    $stmt->bind_param("s",$next_customer_code);
    $stmt->execute();
// Đóng kết nối
$pdo = null;
?>
 <form id="dat" action="test.php" method="post"> 
                            <input type="submit" value="Đặt" id="dat">  
                    </form>