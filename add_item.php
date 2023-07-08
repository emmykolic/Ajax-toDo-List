<?php
include("config.php");
$error = 0;
$error_msg="";

$item = $_POST['item'];
if ($item == "") {
    $error = 1;
    $error_msg.="You Have'nt Added Any Item";
}

if ($error == 0) {
    $db->query("INSERT INTO lists (item) values ('$item')");
    $check = $db->query("SELECT * FROM lists WHERE status='Undone' ORDER BY lid");
    while ($row = $check->fetch_assoc()):?> 
        <p class="lead mb-3 text-primary" id="lid<?= $row['lid'] ?>"> 
         <input type="checkbox" onclick="markAsDone(<?= $row['lid'] ?>)" > <?=$row['item']?>
       </p> 
    <?php endwhile;
}else{
   echo 0;
}

?>