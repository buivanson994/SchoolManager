<?php 
ob_start();
require "lib/dbcon.php";
require "lib/quantri.php";
 ?>
<div class="col-md-12">
    <div class="row">
      <h2>Quản lý Thông báo</h2>
    </div>
    <div class="row">
      <form action="" method="POST">
      <table class="table table-striped table-bordered table-hover " style="text-align: center;">
  <tr>
    <td>id</td>
    <td>Tiêu đề</td>
    <td>Tiêu đề không dấu</td>
    <td>Tóm tắt</td>
    <td>Ngày viết</td>
    <td><a href="ThemThongBao.php">Thêm</a></td>
  </tr>
  <?php 
 $ListThongBao =ListThongBao();
   while ($row_ListThongBao = mysql_fetch_array($ListThongBao)) {
    ob_start();
   ?>
  <tr>
    <td>{id}</td>
    <td>{TieuDe}</td>
    <td>{TieuDeKhongDau}</td>
    <td>{TomTat}</td>
    <td>{NgayViet}</td>
    <td><a href="TrangChung.php">Sửa</a> & <a href="TrangChung.php" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')"> Xóa </a></td>
  </tr>
  <?php 
            $s=ob_get_clean();
             $s=str_replace("{id}", $row_ListThongBao["idtb"], $s);
              $s=str_replace("{TieuDe}", $row_ListThongBao["tieude"], $s);
              $s=str_replace("{TieuDeKhongDau}", $row_ListThongBao["tieudekhongdau"], $s);
              $s=str_replace("{TomTat}", $row_ListThongBao["tomtat"], $s);
              $s=str_replace("{NgayViet}", $row_ListThongBao["ngayviet"], $s);
              echo $s;
            }
   ?>
</table>
    </form>
    </div>

  </div>