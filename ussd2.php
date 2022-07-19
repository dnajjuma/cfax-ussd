<?php
    header("content-type:text/plain");
    include("functions.php");

    // $session_id = $_POST['sessionId'];
    // $service_code = $_POST['servicecode'];

    // $phone = $_GET['phoneNumber'];
    // $text = $_GET['text'];

    // $data = explode("*");

    $level = 0;
    // $level = count($data);

    echo $level . " ";
    
    if($level == 0 || $level == 1){
        main_menu();
    }

?>