	<?php 
	ob_start();
require "lib/dbcon.php";
			require "lib/quantri.php";
	 ?>
<?php 
if (isset($_GET['id'])) {
	$id=$_GET['id'];
	$qr="DELETE FROM sinhvien WHERE idSV = '$id'";
	mysql_query($qr);
	header("location:SinhVien.php");
}
 ?>