<!Doctype html>

<html>
<head>
  <div style="padding-top :10px;">&ensp;
    <img src="https://i.pinimg.com/originals/7e/fd/04/7efd04149a33d9bfee5dd22352c529b8.png"  width="400px" height="300px">&nbsp;
    <img src="https://i.pinimg.com/originals/7e/fd/04/7efd04149a33d9bfee5dd22352c529b8.png"  width="400px" height="300px">&nbsp;
    <img src="https://i.pinimg.com/originals/7e/fd/04/7efd04149a33d9bfee5dd22352c529b8.png"  width="500px" height="300px">
  <meta charset="UTF-8">
  <title>Database</title>
  <script type="text/javascript">
  function validateForm()
  {
    var a=document.forms["reg"]["fname"].value;
    var b=document.forms["reg"]["lname"].value;
    var c=document.forms["reg"]["gender"].value;
    var d=document.forms["reg"]["address"].value;
    var e=document.forms["reg"]["contact"].value;
    var f=document.forms["reg"]["username"].value;
    var g=document.forms["reg"]["password"].value;
    if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e==""))
    {
      alert("All Field must be filled out");
      return false;
    }
    if (a==null || a=="")
    {
      alert("First name must be filled out");
      return false;
    }
    if (b==null || b=="")
    {
      alert("Last name must be filled out");
      return false;
    }
    if (c==null || c=="")
    {
      alert("Gender name must be filled out");
      return false;
    }
    if (d==null || d=="")
    {
      alert("address must be filled out");
      return false;
    }
    if (e==null || e=="")
    {
      alert("contact must be filled out");
      return false;
    }
    if (f==null || f=="")
    {
      alert("username must be filled out");
      return false;
    }
    if (g==null || g=="")
    {
      alert("password must be filled out");
      return false;
    }
  }
</script>
</head>

<style>
body {
background-image: url('https://lh3.googleusercontent.com/proxy/1_kn-H_cVeg_gLqsLQQDeWRrN2zqrY0pLcKTMoFK5V2INvJIJzua8Epmyao38jjpEDZZvCDg05KN50jzOCfDjDsFKxuMfHQLO9boSKpYwJ4HkrjbMBzmnkQjEsL1Tqs');
background-repeat: repeat;
scroll-behavior: 0 0;
}
</style>
<br>
<br>



<form name="reg" action="code_exec.php" onsubmit="return validateForm()" method="post" style="padding-top :150px;">
  <table width="274" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
      <td colspan="2">
        <div align="center" style="font-family: Comic Sans MS, Geneva, sans-serif;
font-size: 30px;
letter-spacing: 1.6px;
word-spacing: 2px;
color: #000000;
font-weight: 700;
text-decoration: underline solid rgb(68, 68, 68);
font-style: normal;
font-variant: normal;
text-transform: uppercase;color:white;">
          <?php
          // $remarks=$_GET['remarks'];
          if (!isset($_GET['remarks']))
          {
            echo 'Register Here';
          }
          if (isset($_GET['remarks']) && $_GET['remarks']=='success')
          {
            echo 'Registration Success';
          }
          ?>
        </div></td>
      </tr>
      <tr>
        <td width="200"><div align="right" style="font-family:Comic Sans MS;color:white;">First Name:</div></td>
        <td width="200"><input type="text" name="fname" /></td>
      </tr>
      <tr>
        <td><div align="right" style="font-family:Comic Sans MS;color:white; ">Last Name:</div></td>
        <td><input type="text" name="lname" /></td>
      </tr>
      <tr>
        <td><div align="right" style="font-family:Comic Sans MS;color:white;">Gender:</div></td>
        <td><input type="text" name="gender" /></td>
      </tr>
      <tr>
        <td><div align="right" style="font-family:Comic Sans MS;color:white;">Address:</div></td>
        <td><input type="text" name="address" /></td>
      </tr>
      <tr>
        <td><div align="right" style="font-family:Comic Sans MS;color:white;">Contact No.:</div></td>
        <td><input type="text" name="contact" /></td>
      </tr>
      <tr>
        <td><div align="right" style="font-family:Comic Sans MS;color:white;">Username:</div></td>
        <td><input type="text" name="username" /></td>
      </tr>
      <tr>
        <td><div align="right" style="font-family:Comic Sans MS;color:white;">Password:</div></td>
        <td><input type="text" name="password" /></td>
      </tr>
      <tr>
        <td><div align="right"></div></td>
        <td><input name="submit" type="submit" value="Submit" /></td>
      </tr>
    </table>
  </form>
  &nbsp;&nbsp;


</div>
</body>














</html >
