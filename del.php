<?php
$id=$_GET['ID'];
$conn = mysqli_init();
mysqli_real_connect($conn, 'dbitf01.mysql.database.azure.com', 'pisitchai@dbitf01', '31143114Kung', 'ITFLAB', 3306);
$sql="DELETE FROM Guestbook WHERE ID='$id'";
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
if (mysqli_query($conn, $sql)) {
    header("Location: show.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
mysqli_close($conn);
?>
