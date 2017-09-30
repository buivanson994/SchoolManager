<?php
ob_start();
require "lib/dbcon.php";
require "lib/quantri.php";
?>
<div class="col-md-12">
    <div class="row">
        <h2>Quản lớp</h2>
    </div>
    <div class="row">
        <form action="" method="POST">
            <table class="table table-striped table-bordered table-hover " style="text-align: center;">
                <tr>
                    <td>id</td>
                    <td>Tên Lớp</td>
                    <td>Số sinh viên</td>
                    <td><a href="TrangChung.php">Thêm</a></td>
                </tr>
                <?php
                $ListLop = ListLop();
                while ($row_ListLop = mysql_fetch_array($ListLop)) {
                    ob_start();
                    ?>
                    <tr>
                        <td>{id}</td>
                        <td>{TenKhoa}</td>
                        <td>{SoSinhVien}</td>
                        <td><a href="TrangChung.php">Sửa</a> & <a href="TrangChung.php"
                                                                  onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">
                                Xóa </a></td>
                    </tr>
                    <?php
                    $s = ob_get_clean();
                    $s = str_replace("{id}", $row_ListLop["idLop"], $s);
                    $s = str_replace("{TenKhoa}", $row_ListLop["TenLop"], $s);
                    $s = str_replace("{SoSinhVien}", $row_ListLop["SoLuongSV"], $s);
                    echo $s;
                }
                ?>
            </table>
        </form>
    </div>

</div>