<?php
    session_start();
    $db = new mysqli("localhost", "root", "", "to_do_item");
    define("SITE_NAME", "To Do Item");

    // Check for connection errors
    if ($db->connect_error) {
        die('Connection failed: ' . $connection->connect_error);
    }

    function set_alert($msg, $alert_color='danger'){
        $_SESSION['msg']=$msg;
        $_SESSION['alert_color']=$alert_color;
    
    }
    
    function get_alert(){
        if (isset($_SESSION['msg']) && $_SESSION['msg']!="") {
            ?>
            <div class="alert alert-<?=$_SESSION['alert_color']?>"<?=$_SESSION['msg']?>></div>
        <?php
        }
        $_SESSION['msg']="";
        $_SESSION['alert_color']="";
    }

   
    // $row = $check->num_rows;

?>