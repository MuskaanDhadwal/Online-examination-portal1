<html>
<head>
  <meta charset="UTF-8">
  <title>exam details</title>

</head>
<body style="background-color:seagreen;font-size:150%;color:white;">



  <?php
include('connection3.php');
  $sql = "SELECT * FROM `student`";
  $result = mysqli_query($connect, $sql);

  if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
          echo "id: " . $row["id"]. " - Name: " . $row["First_name"]. " " . $row["Last_name"]. "<br>";
      }
  } else {
      echo "0 results";
  }


  ?>





































<?php
/*
session_start();

include('connection.php');


$result= mysqli_query($bd,"SELECT * FROM `member`");
echo "<table border='1'>";
echo "<tr><td>fName</td><td>Address</td></tr>";

while ($row=$result_fetch_assoc($result)) {
  echo "<tr><td>{$row['fname']}</td><td>{$row['address']}</td></tr>";

}




echo"</table>";



mysqli_close($con);


 */?>






</body>














</html >
