<?php
$accounts = array(
    array("mssv" => "2180602394", "password" => password_hash("311003", PASSWORD_DEFAULT))
);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mssv = $_POST["mssv"];
    $password = $_POST["password"];

    $found = false;
    foreach ($accounts as $account) {
        if ($account["mssv"] == $mssv && password_verify($password, $account["password"])) {
            $found = true;
            break;
        }
    }

    if ($found) {
        echo "success";
    } else {
        echo "failure"; 
    }
}
?>