  <?php 
  ob_start();
  require "lib/dbcon.php";
  require "lib/quantri.php";
   ?>
  <!DOCTYPE html>
  <html>
  <head>
  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<title>Thêm Sinh Viên</title>
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <script src="js/bootstrap.min.js"></script>
      <script src="tinymce/tinymce.min.js"></script>
  </head>
  <body>
  <div class="container">
  	<div class="row Menu">
  	<div class="col-md-12">
  		<form action="" method="POST">
  <table class="table table-striped table-hover">
    <tbody>
      <tr style="text-align: center;">
        <td><button class="btn btn-primary"><a href="SinhVien.php">Sinh Viên</a></button></td>
        <td><button class="btn btn-primary"><a href="Khoa.php">Khoa</a></button></td>
        <td><button class="btn btn-primary"><a href="Lop.php">Lớp</a></button></td>
        <td><button class="btn btn-primary"><a href="TrangChung.php">Môn học</a></button></td>
        <td><button class="btn btn-primary"><a href="ThongBao.php">Thông báo</a></button></td>
      </tr>
    </tbody>
  </table>
  </form>
  	</div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="row">
        <h2>Thêm thông báo</h2>
      </div>
      <div class="row">
        <form action="" method="post">
  <table class="table table-striped table-hover" width="200" border="1">
    <tr>
      <td> <label>Tiêu đề</label></td>
      <td> <input name="txtTieuDe" type="text""></td>
    </tr>
    <tr>
      <td> <label>Ảnh</label></td>
      <td>
        <input name="txtAnh" type="text"">
        <input class="btn btn-primary" name="btnAnh" type="image" value="Chọn ảnh">
      </td>
    </tr>
    <tr>
      <td> <label>Tóm tắt</label></td>
      <td><input name="txtTomTat" type="text""></td>
    </tr>
    <tr>
      <td> <label>Nội dung</label></td>
      <td> <textarea name="txtNoiDung"></textarea>
<script>
  tinymce.init({
  selector: 'textarea',
  theme: "modern",
  height: 500,
  menubar: true,
  relative_urls: true,
  plugins: [
    'advlist autolink lists link image charmap print preview anchor textcolor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table contextmenu paste responsivefilemanager code help'
  ],
  toolbar: 'insert | undo redo |  styleselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
     external_filemanager_path:'/filemanager/',
   filemanager_title:'Responsive Filemanager',
   external_plugins: { 'filemanager' : '/filemanager/plugin.min.js'}
});
</script>
      </td>
    </tr>
  </table>
        <input class="btn btn-primary" name="btnLuu" type="submit" value="Lưu">
        </form>
        <?php 
  if (isset($_POST["btnLuu"])) {
    if (($_POST['txtTieuDe']=="")|($_POST['txtAnh']=="")|($_POST['txtTomTat']=="")) {
      echo "Bạn phải nhập đầy đủ các thông tin.";
             }
             else{
             AddThongBao();
             }
            }
         ?>
      </div>
    </div>
  </div>
  </div>
  </body>
  </html>