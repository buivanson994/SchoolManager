<?php
ob_start();
require "lib/dbcon.php";
require "lib/quantri.php";
?>
<div class="col-md-12">
    <div class="row">
        <h2>Quản lý Khoa</h2>
    </div>
    <div class="row">
        <form action="" method="POST">
            <table class="table table-striped table-bordered table-hover " style="text-align: center;">
                <tr>
                    <td>id</td>
                    <td>Tên khoa</td>
                    <td><a href="TrangChung.php">Thêm</a></td>
                </tr>
                <?php
                $ListKhoa = ListKhoa();
                while ($row_ListKhoa = mysql_fetch_array($ListKhoa)):
                    ob_start();
                    ?>
                    <tr>
                        <td><?=$row_ListKhoa["idKhoa"]?></td>
                        <td><?=$row_ListKhoa["TenKhoa"]?></td>
                        <td><a href="TrangChung.php">Sửa</a> & <a href="TrangChung.php"
                                                                  onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">
                                Xóa </a></td>
                    </tr>
 <?php
                endwhile;
                ?>
            </table>
        </form>
    </div>

</div>