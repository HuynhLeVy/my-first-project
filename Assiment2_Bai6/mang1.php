
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Nhập và tính toán trên dãy số</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
*{
 font-family: Tahoma;
}
table{

 width: 400px;
 margin: 100px auto;
}
table th{
 background: #66CCFF;
 padding: 10px;
 font-size: 18px;
}
</style>
</head>
<body>

<?php
$ket_qua = 0;//dùng để tính tổng các phần tử của mảng
$mang_so = 0;//Khai báo mảng
//Hàm isset: trả về giá trị TRUE nếu biến đc khỏi tạo, trả về giá trị FALSE nếu biến chưa được khởi tạo, nó kiểm tra biến đó có tồn tại hay không
if(isset($_POST['btn_goi'])){
    //explode: dùng để  chuyển một chuỗi sang một mảng dựa trên các ký tự phân cách,trả về một mảng là mảng sau khi đã tách chuỗi được lấy từ textfield 
//nhap_mang, ở đây ngăn cách bởi dấu phẩy
$mang_so = explode(",", $_POST['nhap_mang']);
$n = count($mang_so);
for($i = 0; $i < $n; $i++){//Dùng để duyệt mảng và cộng giá trị các phần tử vào biến $ket_qua
$ket_qua += $mang_so[$i];
}
}

?>

<form method="POST" action="mang1.php">
<table>
<thead>
<tr>
<th colspan="2">NHẬP VÀ TÍNH TRÊN DÃY SỐ</th>
</tr>
</thead>
<tbody>
<tr>
<td>Nhập dãy số:</td>
<td><input type="text" name="nhap_mang" 
value="<?php echo $_POST['nhap_mang'] ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="btn_goi" value="Tổng 
dãy số" ></td>
</tr>
<tr>
<td>Tổng dãy số:</td>
<td><input type="text" name="ket_qua" 
disabled="disabled" value="<?php echo $ket_qua ?>" ></td>
</tr>
</tbody>
</table>
</form>
</body>
</html>