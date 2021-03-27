<?php
// $allowed_roles = array("admin");
// if (isset($_SESSION['email']) && in_array($_SESSION['login_role'], $allowed_roles)) {
include_once '../../../config.php';
$data = json_decode(file_get_contents("php://input"), true);
if ($data['type'] == 'current') {

    $delete_data = $data['delete_data'];
    echo var_dump($delete_data);
    foreach ($delete_data as $key => $val) {
        print_r($delete_data);
        echo var_dump($val);

        $sql = "DELETE from visitors where BlockNumber='" . $val['block'] . "' AND FlatNumber=" . $val['flatno'] . " AND VisitorName='" . $val['vname'] . "';";
        echo $sql;
        mysqli_query($con, $sql);
    }

}
// }