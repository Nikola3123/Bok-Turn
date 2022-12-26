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


$sql = "SELECT id_takmicenja, ime, prezime, klub, kilaza FROM ucesnik";



        echo '<div class="tak-wrapper">
<div class="tak">';

        echo "<h2>Nis Kombat</h2><br>65-75<br><br>";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        if ($row['id_takmicenja'] == 1) {
            $kil = $row['kilaza'];
            if($kil>65 && $kil<75){
                echo $row['ime'] .' '. $row['prezime'] . ' - ' . $row['klub'].'<br>';
            }
        }
    }
} 

echo "<br>75-85<br><br>";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        if ($row['id_takmicenja'] == 1) {

            $kil = $row['kilaza'];
            if($kil>75 && $kil <85){
                echo $row['ime'] .' '. $row['prezime'] . ' - ' . $row['klub'].'<br>';
            }
        }
    }
} 

echo '</div>

<div class="tak">';

echo "<h2>Serbian Showdown</h2><br>65-75<br><br>";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        if ($row['id_takmicenja'] == 2) {
            $kil = $row['kilaza'];
            if($kil>65 && $kil<75){
                echo $row['ime'] .' '. $row['prezime'] . ' - ' . $row['klub'].'<br>';
            }
        }
    }
} 

echo "<br>75-85<br><br>";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        if ($row['id_takmicenja'] == 2) {

            $kil = $row['kilaza'];
            if($kil>75 && $kil <85){
                echo $row['ime'] .' '. $row['prezime'] . ' - ' . $row['klub'].'<br>';
            }
        }
    }
} 

echo '</div>';


echo '<div class="tak">';

echo "<h2>Novi Sad Brawl</h2><br>65-75<br><br>";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        if ($row['id_takmicenja'] == 3) {
            $kil = $row['kilaza'];
            if($kil>65 && $kil<75){
                echo $row['ime'] .' '. $row['prezime'] . ' - ' . $row['klub'].'<br>';
            }
        }
    }
} 

echo "<br>75-85<br><br>";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        if ($row['id_takmicenja'] == 3) {

            $kil = $row['kilaza'];
            if($kil>75 && $kil <85){
                echo $row['ime'] .' '. $row['prezime'] . ' - ' . $row['klub'].'<br>';
            }
        }
    }
} 

echo '</div>
</div>';


        $conn->close();
        ?>

    </div>

</body>

</html>