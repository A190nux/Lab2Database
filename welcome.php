<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
$wname = $_SESSION["name"];
echo "Welcome " . $wname . ".<br>";
?>

</body>
</html> 