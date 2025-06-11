<?php
$chuoi ="lap trinh php";
$dodai = strlen($chuoi);
$$vietthuong = strtolower($chuoi);
$viethoa = mb_strtoupper($chuoi);
$xoa = trim($chuoi);
$thaythe = str_replace("php", "web", $chuoi);
echo "độ dài chuỗi : $dodai <br>";
echo "viết thường : $vietthuong <br>";
echo "viết hoa : $viethoa <br>";
echo "xóa khoảng trắng : $xoa <br>";
echo "Thay php bằng java : $thaythe <br>";
?>