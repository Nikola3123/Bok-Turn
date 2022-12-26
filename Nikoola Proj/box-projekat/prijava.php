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

<form  method="post">
Ime: <input type="text" name="ime"><br>
Prezime: <input type="text" name="prezime"><br>
Klub: <input type="text" name="klub"><br>
Kilaza: <input type="number" name="kilaza"><br>
<button class="main-btn" type="submit" name="submit_btn">Prijavi se</button> 
</form>

<?php

$idd = $_GET['id'];

if(isset($_POST['submit_btn'])){

$ime = $_POST['ime'];
$prezime = $_POST['prezime'];
$klub = $_POST['klub'];
$kilaza = $_POST['kilaza'];

$sql = "INSERT INTO ucesnik (id_takmicenja,ime,prezime,klub,kilaza)
VALUES ('$idd','$ime', '$prezime', '$klub', '$kilaza')";


if ($conn->query($sql) === TRUE) {
} else {
}
echo "<a class='main-btn' href='kon.php'>Konkurencija</a>";

}





// $sql = "CREATE TABLE ucesnik (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     id_takmicenja INT(3) NOT NULL,
//     ime VARCHAR(30) NOT NULL,
//     prezime VARCHAR(30) NOT NULL,
//     klub VARCHAR(50),
//     kilaza INT(3)
//     )";
    
//     if ($conn->query($sql) === TRUE) {
//       echo "Table MyGuests created successfully";
//     } else {
//       echo "Error creating table: " . $conn->error;
//     }
$conn->close();
?>

</div>


</body>
</html>
