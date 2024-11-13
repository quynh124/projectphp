<p>Thêm sản phẩm</p>
<table border="1" width="100%" style="border-collapse:collapse;">
    <form method="POST" action="modules/quanlysanpham/xuly.php" enctype="multipart/form-data">
        <tr>
            <td>Tên sản phẩm</td>
            <td><input type="text" name="tensanpham" style="width: 98%;"></td>

        </tr>
        <tr>
            <td>Mã sản phẩm</td>
            <td><input type="text" name="masp" style="width: 98%;"></td>

        </tr>
        <tr>
            <td>Giá sản phẩm</td>
            <td><input type="text" name="giasanpham" style="width: 98%;"></td>

        </tr>
        <tr>
            <td>Số lượng</td>
            <td><input type="text" name="soluong" style="width: 98%;"></td>

        </tr> 
         <tr>
            <td>Hình ảnh</td>
            <td><input type="file" name="hinhanh" style="width: 98%;"></td>

        </tr>
        <tr>
            <td>Nội dung</td>
            <td><textarea rows="10"  name="noidung" style="width: 98%;"></textarea></td>
        </tr>
        <tr>
    <td>Danh mục sản phẩm</td>
    <td>
        <select name="danhmuc">
            <?php 
            $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
            $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
            while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                ?>
                <option value="<?php echo $row_danhmuc['id_danhmuc']; ?>"><?php echo $row_danhmuc['tendanhmuc']; ?></option>
                <?php
            }
            ?>
        </select>
    </td>
</tr>

        <tr>
          
            <td><input type="submit" name="themsanpham" value="Thêm sản phẩm"></td>

        </tr>
    </form>
</table>