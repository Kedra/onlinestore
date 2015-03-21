<?php 
$to = 'kedra1995@gmail.com';
$subject = 'Mail Test';
$message = 'Hello world';
$from = 'From: kedra@littlekomp.tk';
// if set in localhost, change to: "From: postmaster@localhost"
mail($to,$subject,$message,$from);
?>