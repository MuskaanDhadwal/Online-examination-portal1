<html>
<head>
  <meta charset="UTF-8">
  <title>exam details</title>

</head>
<body style="background-color:#0B3861;font-size:150%;color:white;">


  <?php

include('connection3.php');
  $sql = "SELECT `First_name`,`Username`,`subject_name`,`status_result` FROM `student`,`result_detail`,`exam_details` WHERE (student.id=result_detail.id AND exam_details.subject_code=result_detail.subject_code)";
  $result = mysqli_query($connect, $sql);

  if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
           echo "---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------<br>";
          echo  "<b> Name: </b>" . $row["First_name"]. " <b>  Username:  </b>" . $row["Username"]."<b> Subject Name:  </b>".$row["subject_name"]."<b> Result:  </b>".$row["status_result"] ."<br>";
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
