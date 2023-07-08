<?php
    include("config.php");

    $lid = $_POST['lid'];
    $check=$db->query("SELECT * FROM lists WHERE lid=$lid");
    if($check->num_rows>0){
        $check= $check->fetch_assoc();
        if($check['status']=="Done"){
            $db->query("UPDATE lists SET status='Undone' WHERE lid = $lid ");
        }else{
            $db->query("UPDATE lists SET status='Done' WHERE lid = $lid ");
        }
    }
       
    
?>