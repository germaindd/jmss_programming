<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2/5/18
 * Time: 2:34 PM
 */

// get form values
$chatroomName = $_GET["chatroomname"];
$username = $_GET["username"];

// save chatroomName in my text file
$chatroomTextFile = fopen("chatroomlist.txt", "a");
$chatroomFile = fopen("chatrooms/$chatroomName.txt", "w");
fclose($chatroomFile);
fwrite($chatroomTextFile, "$chatroomName,");
fclose($chatroomTextFile);

// save username
setcookie("username", $username);

// redirect to chat room page
header("Location: http://jmsschat.konradangermains.space/chatroom.php?name=$chatroomName");
?>