<?php
function connect()
{
    $conn = null;
    $servername = "localhost";
    $username = "root";
    $password = "mysql";
    $dbname = "school";
// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    mysqli_set_charset($conn, "utf8");
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

function ListThongBao()
{
    $qr = "SELECT * FROM thongbao order by idtb desc";
    return mysql_query($qr);
}

function AddThongBao()
{
    $tieude = $_POST['txtTieuDe'];
    $tieudekhongdau = changeTitle($tieude);
    $urlAnh = $_POST['txtAnh'];
    $tomtat = $_POST['txtTomTat'];
    $noidung = $_POST['txtNoiDung'];
    $ngayviet = date("d-m-y");
    $qr = "
  INSERT into thongbao values (null, '$tieude','$tieudekhongdau','$urlAnh', '$tomtat','$noidung','$ngayviet')
  ";
    mysql_query($qr);
    header("location:ThongBao.php");
}

function AddSinhVien()
{
    $ten = $_POST['txtTen'];
    $namsinh = $_POST['txtNamSinh'];
    settype($namsinh, 'int');
    $gioitinh = $_POST['cbGioiTinh'];
    $QueQuan = $_POST['txtQueQuan'];
    $Lop = $_POST['cbLop'];
    $Khoa = $_POST['cbKhoa'];
    $qr = "
  INSERT into sinhvien values (null, '$ten',$namsinh,'$gioitinh', $QueQuan,$Lop,$Khoa)
  ";
    mysql_query($qr);
    header("location:SinhVien.php");
}

function SuaSinhVien($json)
{
    $object=json_decode($json);
    $id=null;
    $name=null;
    $date=null;
    $sex=null;
    $class=null;
    foreach ($object as $item)
    {
        if($item->name=='id')
            $id=$item->value;
        if($item->name=='name')
            $name=$item->value;
    }
//    $qr = "UPDATE sinhvien SET Ten = '$ten', NamSinh='$namsinh', GioiTinh = '$gioitinh', QueQuan = '$QueQuan', idLop = '$Lop', idKhoa= '$Khoa' Where idSV='$idSV'";
//    // echo $qr;
//     return connect()->query($qr);
}

function ListSinhVien()
{

    $qr = "SELECT * from sinhvien JOIN lop on sinhvien.id_class=lop.idLop";
    $result = connect()->query($qr);
    return $result;
}

function LaySinhVienTheoId($id)
{

    $qr = "SELECT * FROM sinhvien WHERE id=$id";
    $result = connect()->query($qr);
    return $result;
}

function ListLop()
{
    $qr = "SELECT * FROM lop order by idLop desc";
    $result = connect()->query($qr);
    return $result;
}

function ListKhoa()
{
    $qr = "SELECT * FROM khoa order by idKhoa desc";
    return mysql_query($qr);
}

function stripUnicode($str)
{
    if (!$str) return false;
    $unicode = array(
        'a' => 'á|à|ả|ã|ạ|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ',
        'A' => 'Á|À|Ả|Ã|Ạ|Ă|Á|Ằ|Ẳ|Ẵ|Ặ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
        'd' => 'đ',
        'D' => 'Đ',
        'e' => 'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
        'E' => 'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
        'i' => 'í|ì|ỉ|ĩ|ị',
        'I' => 'Í|Ì|Ỉ|Ĩ|Ị',
        'o' => 'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
        'O' => 'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
        'u' => 'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
        'U' => 'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
        'y' => 'ý|ỳ|ỷ|ỹ|ỵ',
        'Y' => 'Ý|Ỳ|Ỷ|Ỹ|Ỵ'
    );
    foreach ($unicode as $khongdau => $codau) {
        $arr = explode("|", $codau);
        $str = str_replace($arr, $khongdau, $str);
    }
    return $str;
}

function changeTitle($str)
{

    $str = trim($str);
    if ($str == "") return "";
    $str = str_replace('"', '', $str);
    $str = str_replace(":", '', $str);
    $str = stripUnicode($str);
    $str = mb_convert_case($str, MB_CASE_LOWER, 'utf-8');
    $str = str_replace(' ', '-', $str);
    return $str;
}

?>