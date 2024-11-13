<?php
include('../../config/config.php');
$tensanpham = $_POST['tensanpham'];
$masp = $_POST['masp'];
$giasanpham = $_POST['giasanpham'];
$soluong = $_POST['soluong'];
$hinhanh= $_FILES['hinhanh']['name'];
$hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
$noidung = $_POST['noidung'];
$danhmuc=$_POST['danhmuc'];
//xuly hinh anh


if (isset($_POST['themsanpham'])) {
    //them
    $sql_them = " INSERT INTO tbl_sanpham(tensanpham,masp,giasanpham,soluong,hinhanh,noidung,id_danhmuc) VALUE('" . $tensanpham . "','" . $masp . "','" . $giasanpham . "','" . $soluong . "','" . $hinhanh . "','" . $noidung . "','" . $danhmuc . "')";
    mysqli_query($mysqli, $sql_them);
    move_uploaded_file($hinhanh_tmp,'upload/'.$hinhanh);
    header('Location:../../index.php?action=quanlysanpham&query=them');
} elseif (isset($_POST['suasanpham'])) {

    if($hinhanh!=''){
           move_uploaded_file($hinhanh_tmp,'upload/'.$hinhanh);
           $sql = "SELECT * from tbl_sanpham where id_sanpham='$_GET[idsanpham]'  LIMIT 1";

$query = mysqli_query($mysqli,$sql);
   while($row = mysqli_fetch_array($query)){
    unlink('upload/'.$row['hinhanh']);
   }  
     $sql_update = " UPDATE tbl_sanpham SET tensanpham='" . $tensanpham . "',masp='" . $masp . "',giasanpham='" . $giasanpham . "',soluong='" . $soluong . "',hinhanh='" . $hinhanh . "',noidung='" . $noidung . "',id_danhmuc='" . $danhmuc . "' WHERE id_sanpham='$_GET[idsanpham]' ";

}else{
    $sql_update = " UPDATE tbl_sanpham SET tensanpham='" . $tensanpham . "',masp='" . $masp . "',giasanpham='" . $giasanpham . "',soluong='" . $soluong . "',noidung='" . $noidung . "',id_danhmuc='" . $danhmuc . "' WHERE id_sanpham='$_GET[idsanpham]' ";
}
    mysqli_query($mysqli, $sql_update);
    header('Location:../../index.php?action=quanlysanpham&query=them');
} else {

     $id = $_GET['idsanpham'];
    $sql = "SELECT * from tbl_sanpham where id_sanpham= '$id' LIMIT 1";
   $query = mysqli_query($mysqli,$sql);
   while($row = mysqli_fetch_array($query)){
    unlink('upload/'.$row['hinhanh']);
   }
    $sql_xoa = "DELETE from tbl_sanpham where id_sanpham='" . $id . "'";
    mysqli_query($mysqli, $sql_xoa);
    header('Location:../../index.php?action=quanlysanpham&query=them');
}
// include('../../config/config.php');

// $tensanpham = $_POST['tensanpham'];
// $masp = $_POST['masp'];
// $giasanpham = $_POST['giasanpham'];
// $soluong = $_POST['soluong'];
// //xuly hinh anh
// $hinhanh = $_FILES['hinhanh']['name'];
// $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
// $hinhanh = time().'_'.$hinhanh;
// $tomtat = $_POST['tomtat'];
// $noidung = $_POST['noidung'];
// $danhmuc = $_POST['danhmuc'];


// if(isset($_POST['themsanpham'])){
// 	//them
// 	$sql_them = "INSERT INTO tbl_sanpham(tensanpham,masp,giasanpham,soluong,hinhanh,tomtat,noidung,id_danhmuc) VALUE('".$tensanpham."','".$masp."','".$giasanpham."','".$soluong."','".$hinhanh."','".$tomtat."','".$noidung."','".$danhmuc."')";
// 	mysqli_query($mysqli,$sql_them);
// 	move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
// 	header('Location:../../index.php?action=quanlysp&query=them');
// }elseif(isset($_POST['suasanpham'])){
// if(!empty($_FILES['hinhanh']['name'])){
//     move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
    
//     $sql_update = "UPDATE tbl_sanpham SET tensanpham='".$tensanpham."',masp='".$masp."',giasanpham='".$giasanpham."',soluong='".$soluong."',hinhanh='".$hinhanh."',tomtat='".$tomtat."',noidung='".$noidung."',id_danhmuc='".$danhmuc."' WHERE id_sanpham='$_GET[idsanpham]'";
//     //xoa hinh anh cu
//     $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '$_GET[idsanpham]' LIMIT 1";
//     $query = mysqli_query($mysqli,$sql);
//     while($row = mysqli_fetch_array($query)){
//         unlink('uploads/'.$row['hinhanh']);
//     }

// }else{
//     $sql_update = "UPDATE tbl_sanpham SET tensanpham='".$tensanpham."',masp='".$masp."',giasanpham='".$giasanpham."',soluong='".$soluong."',tomtat='".$tomtat."',noidung='".$noidung."',id_danhmuc='".$danhmuc."' WHERE id_sanpham='$_GET[idsanpham]'";
// }
// mysqli_query($mysqli,$sql_update);
//     header('Location:../../index.php?action=quanlysp&query=them');
// }else{
// $id=$_GET['idsanpham'];
// $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '$id' LIMIT 1";
// $query = mysqli_query($mysqli,$sql);
// while($row = mysqli_fetch_array($query)){
//     unlink('uploads/'.$row['hinhanh']);
// }
// $sql_xoa = "DELETE FROM tbl_sanpham WHERE id_sanpham='".$id."'";
// mysqli_query($mysqli,$sql_xoa);
// header('Location:../../index.php?action=quanlysp&query=them');
// }
?>