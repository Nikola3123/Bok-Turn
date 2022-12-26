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

<?php
//create table
// $sql = "CREATE TABLE pregledn (
//   id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//   ime VARCHAR(30) NOT NULL,
//   lokacija VARCHAR(50) NOT NULL,
//   datum VARCHAR(50),
//   opis VARCHAR(3000)
//   )";
  
//   if ($conn->query($sql) === TRUE) {
//     echo "Table MyGuests created successfully";
//   } else {
//     echo "Error creating table: " . $conn->error;
//   }

//insert
// $sql = "INSERT INTO pregledn ( ime, lokacija, datum, opis)
// VALUES ('', '', '','')";


$sql = "SELECT id,ime, lokacija, datum FROM pregledn";
$result = $conn->query($sql);

echo "<div class='pregled-wrapper'>";

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo '<div class="pregled-tak-wrapper">
    <a href="opis.php?id='.$row['id'].'">' .
      $row["ime"] ." &nbsp&nbsp&nbsp&nbsp". $row["lokacija"] ." &nbsp&nbsp&nbsp&nbsp". $row["datum"]
      . '</a>
  </div>';
  }
} else {
  echo "0 results";
}

echo "</div";



$conn->close();
?>


    
</body>
</html>
