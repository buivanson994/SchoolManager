  <?php 
  ob_start();
  require "lib/dbcon.php";
  require "lib/quantri.php";
   ?>
   <?php 
if (isset($_GET['id'])) {
  $idSV = $_GET['id'];
  $SV = LaySinhVienTheoId($idSV);
  $row_SV = mysql_fetch_array($SV);
      }
    ?>
  <div class="row">
        <h2>Thêm sinh viên</h2>
      </div>
      <div class="row">
        <form action="" method="post">
  <table class="table table-striped table-hover" width="200" border="1">
    <tr>
      <td> <label>Họ Tên</label></td>
      <td> <input class="Input" name="txtTen" type="text" value="<?php echo $row_SV['Ten'] ?>"></td>
    </tr>
    <tr>
      <td> <label>Năm sinh</label></td>
      <td> <input class="Input" name="txtNamSinh" type="number" value="<?php echo $row_SV['NamSinh'] ?>"></td>
    </tr>
    <tr>
      <td> <label>Giới tính</label></td>
      <td> <select class="Input" name="cbGioiTinh">
              <option <?php if($row_SV['GioiTinh'] =='Nam')echo 'selected="selected"'; ?> value="Nam">Nam</option>
              <option <?php if($row_SV['GioiTinh'] =='Nữ')echo 'selected="selected"'; ?> value="Nữ">Nữ</option>
            </select>
      </td>
    </tr>
    <tr>
      <td> <label>Quê quán</label></td>
      <td> <input class="Input" name="txtQueQuan" type="text" value="<?php echo $row_SV['QueQuan'] ?>"> </td>
    </tr>
    <tr>
      <td> <label>Lớp</label></td>
      <td>
        <select class="Input" name="cbLop">
          <?php 
            $listLop = ListLop();
            while ($row_listLop = mysql_fetch_array($listLop)) {
           ?>
              <option <?php if ($row_listLop['idLop'] == $row_SV['idLop']) echo 'selected="selected"' ?> value="<?php echo $row_listLop['idLop'] ?>"><?php echo $row_listLop["TenLop"] ?></option>
              <?php 
                }     
               ?>
            </select>
      </td>
    </tr>
    <tr>
      <td> <label>Khoa</label></td>
      <td>
        <select class="Input" name="cbKhoa">
          <?php 
            $listKhoa = ListKhoa();
            while ($row_listKhoa = mysql_fetch_array($listKhoa)) {
           ?>
              <option <?php if ($row_listKhoa['idKhoa'] == $row_SV['idKhoa']) echo 'selected="selected"' ?> value="<?php echo $row_listKhoa['idKhoa'] ?>"><?php echo $row_listKhoa["TenKhoa"] ?></option>
              <?php 
              }
              ?>
        </select>
      </td>
    </tr>
  </table>
        <input class="btn btn-primary" name="btnLuu" type="submit" value="Lưu">
        </form>
        <?php 
  if (isset($_POST["btnLuu"])) {
    if (($_POST['txtTen']=="")|($_POST['txtNamSinh']=="")|($_POST['txtQueQuan']=="")) {
      echo "Bạn phải nhập đầy đủ các thông tin.";
             }
             else{
              SuaSinhVien($idSV);
             }
            }
         ?>
      </div>