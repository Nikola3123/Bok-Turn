<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pregled takmicenja</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include "database/connection.php" ?>
<div class="page-wrapper">

    <?php
$idd = $_GET['id'];



$sql = "SELECT id,ime, lokacija, datum, opis FROM pregledn";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if($row['id'] == $idd){
            
            echo "<h1>". $row['ime']."</h1>";
            echo "<p>". $row['opis']."</p>";
        }
    }
} else {
    echo "0 results";
}

echo '<form action="prijava.php?id='.$idd.'"  method="post">
<button type="sumbit" name="sbt-btn" >Prijavi se
</form>';



$conn->close();

?>

</div>


</body>
</html>
