<html>
<head>
  <meta charset="UTF-8">
  <title>exam details</title>

</head>
<body>


  <?php
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "online_student";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "select mem_id,fname,username,subject_code1,status_result from member m inner join result_detail r on m.mem_id = r.id inner join exam_detail e on e.subject_code1 = r.subject_code";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
          echo "id: " . $row["mem_id"]. " - Name: " . $row["fname"]. " Username:  " . $row["username"]."  Subject Code:  ". $row["subject_code1"]." Result:  ".$row["status_result"]. "<br>";
      }
  } else {
      echo "0 results";
  }

  mysqli_close($conn);
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
