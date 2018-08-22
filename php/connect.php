<?php
$db = mysqli_connect('localhost','root','root','kritarth_db');
if(!$db){
    $message = 'DB error';
    echo "<script type='text/javascript'>alert('$message');window.location.href = '../index.html';</script>";
}

?>
