
<?php 
ob_start();
require "lib/dbcon.php";
require "lib/quantri.php";
 ?>
 <link href="css/MyStyle.css" rel="stylesheet">
 <div class="row">
      <h2>Quản lý sinh viên</h2>
    </div>
    <div class="row">
      <table class="table table-striped table-bordered table-hover " style="text-align: center;">
  <tr>
    <td>id</td>
    <td>Họ tên</td>
    <td>Năm sinh</td>
    <td>Giới tính</td>
    <td>Quên quán</td>
    <td>Lớp</td>
    <td>Khoa</td>
    <td><button class="btn btn-primary" button = "Them">Thêm</button></td>
  </tr>
  <?php 
 $ThongTinSV =ListSinhVien();
            while ($row_ThongTinSV = mysql_fetch_array($ThongTinSV)) {
              ob_start();
   ?>
  <tr>
    <td>{id}</td>
    <td>{HoTen}</td>
    <td>{NamSinh}</td>
    <td>{GioiTinh}</td>
    <td>{QueQuan}</td>
    <td>{Lop}</td>
    <td>{Khoa}</td>
    <td><button class="btn btn-primary btnedit"  button = "Sua">Sửa</button> & <button id="btnThemSinhVien" class="btn btn-primary btnedit"  button = "Xoa">Xóa</button></td>
  </tr>
  <?php 
            $s=ob_get_clean();
             $s=str_replace("{id}", $row_ThongTinSV["idSV"], $s);
              $s=str_replace("{HoTen}", $row_ThongTinSV["Ten"], $s);
              $s=str_replace("{NamSinh}", $row_ThongTinSV["NamSinh"], $s);
              $s=str_replace("{GioiTinh}", $row_ThongTinSV["GioiTinh"], $s);
              $s=str_replace("{QueQuan}", $row_ThongTinSV["QueQuan"], $s);
              $s=str_replace("{Lop}", $row_ThongTinSV["TenLop"], $s);
              $s=str_replace("{Khoa}", $row_ThongTinSV["TenKhoa"], $s);
              echo $s;
            }
   ?>
</table>
    </div>
    <script src="js/MyJquery.js"></script>
