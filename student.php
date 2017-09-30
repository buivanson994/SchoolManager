<?php
require('lib/quantri.php');
/**
 * Created by PhpStorm.
 * User: macbook
 * Date: 9/30/17
 * Time: 3:26 PM
 */
$id = $_POST['id'];
$result = LaySinhVienTheoId($id);
$student=null;
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
      $student=$row;
    }
}
echo json_encode($student);
?>