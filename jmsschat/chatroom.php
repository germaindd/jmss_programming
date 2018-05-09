<html>
<head>
    <title><?php echo $_GET["name"] ?>m</title>
</head>
<body>
<form action="sendmessage.php" method="post">
    <input type="text" name="message" placeholder="Enter message here">
    <input type="hidden" name="name" value="<?php echo $_GET["name"] ?>">
    <input type="submit">
</form>
</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2/5/18
 * Time: 3:04 PM
 */

?>
