  <?php 
  ob_start();
  require "lib/dbcon.php";
  require "lib/quantri.php";
   ?>
  <link href="css/MyStyle.css" rel="stylesheet">
  <form id="input_form" action="" method="POST">
    <fieldset>
      <div class="row">
        <h2>Thêm sinh viên</h2>
      </div>
      <div class="row">
  <table class="table table-striped table-hover" width="200" border="1">
    <tr>
      <td> <label>Họ Tên</label></td>
      <td> <input class="Input" id="username" name="username" type="text"></td>
    </tr>
    <tr>
      <td> <label>Năm sinh</label></td>
      <td> <input class="Input" name="txtNamSinh" type="number" maxlength="4"></td>
    </tr>
    <tr>
      <td> <label>Giới tính</label></td>
      <td> <select class="Input" name="cbGioiTinh">
              <option value="Nam">Nam</option>
              <option value="Nữ">N?</option>
            </select>
      </td>
    </tr>
    <tr>
      <td> <label>Quê quán</label></td>
      <td> <input class="Input" name="txtQueQuan" type="text"> </td>
    </tr>
    <tr>
      <td> <label>Lớp</label></td>
      <td>
        <select class="Input" name="cbLop">
          <?php 
            $listLop = ListLop();
            while ($row_listLop = mysql_fetch_array($listLop)) {
           ?>
              <option value="<?php echo $row_listLop['idLop']?>"><?php echo $row_listLop['TenLop']?></option>
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
              <option value="<?php echo $row_listKhoa['idKhoa'] ?>"><?php echo $row_listKhoa['TenKhoa'] ?></option>
              <?php 
              }
              ?>
        </select>
      </td>
    </tr>
  </table>
        <input id="btnLuu1" class="btn btn-primary" name="btnLuu" type="button" value="Lưu">
      </div>
    </fieldset>
  </form>
      <script src="js/MyJquery.js"></script>
      <script src="js/jquery.validate.min.js"></script>
      <script src="js/jquery.js"></script>
      <script src="js/jquery-1.8.3.min.js"></script>