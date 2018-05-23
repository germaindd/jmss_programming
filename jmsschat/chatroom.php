<html>
<head>
    <title><?php echo $_GET["name"] ?></title>
</head>
<body>
<div>
    <?php
    $chatroomName = $_GET['name'];
    $chatroomFile = fopen("chatrooms/$chatroomName.txt", 'r');

    $chatroomContents = fread($chatroomFile, filesize("chatrooms/$chatroomName.txt"));
    $chatroomArray = explode("\n", $chatroomContents);

    foreach($chatroomArray as $line) {
        if ($line != "") {
            $lineArray = explode(",", $line);
            $username = $lineArray[0];
            $message = $lineArray[1];
            echo "<div>$username: \t $message</div>";
        }
    }

    ?>
</div>
<form action="sendmessage.php" method="post">
    <input type="text" name="message" placeholder="Enter message here">
    <input type="hidden" name="name" value="<?php echo $_GET["name"] ?>">
    <input type="submit">
</form>
</body>
</html>
