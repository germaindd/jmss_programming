<?php
// get username and message information
$username = $_COOKIE["username"];
$chatroomName = $_POST["name"];
$message = $_POST["message"];

// save information to chatroom file
$chatroomFile = fopen("chatrooms/$chatroomName.txt", 'a');
fwrite($chatroomFile, "$username,$message\n");
fclose($chatroomFile);

// return to chatroom page
header("Location: http://jmsschat.konradangermains.space/chatroom.php?name=$chatroomName");
?>