<?php 
echo" tên sinh viên = lê việt thắng <br>";
echo "lớp:CNT05 <br>";
echo "môn học : lập trình web <br>";
 ?>
<?Php  
$number =8;
if ($number % 2 == 0) {
    echo "là số chẵn";
} else {
    echo "là số lẻ";
}

 ?>

 <?php
function tinhTienTaxi($so_km) {
    $tong_tien = 0;

    if ($so_km < 0) {
        return "Số km phải lớn hơn 0.";
    }

    if ($so_km <= 1) {
        $tong_tien = $so_km * 15000;
    } elseif ($so_km <= 5) {
        $tong_tien = $so_km  * 12000;
    } else {
        $tong_tien = 15000 + 4 * 12000 + ($so_km - 5) * 9000;
    }

   
    if ($so_km > 140) {
        $tong_tien = $tong_tien * 0.88; 
    }

    return "Số tiền cần thanh toán là: " . number_format($tong_tien, 0, ',', '.') . " đ";
}


$so_km = 5; 

echo tinhTienTaxi($so_km);
?>

 