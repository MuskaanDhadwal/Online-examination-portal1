<!Doctype html>

<html>
<head>

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
</head >

<style>
body {
background-image: url('https://static.brusheezy.com/system/resources/previews/000/050/626/non_2x/flat-education-psd-icons-pack-photoshop-psds.jpg');
background-repeat: repeat;
scroll-behavior: 0 0;
}
</style>
<br>
<br>



<form name="reg" action="code_exec.php" onsubmit="return validateForm()" method="post" style=" background-image: url('https://upload.wikimedia.org/wikipedia/commons/thumb/c/c0/Location_dot_black.svg/1024px-Location_dot_black.svg.png');background-position:center;background-repeat: no-repeat;background-size: 45% 100%;padding-top:100px">
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
text-transform: uppercase;color:white;padding-bottom:40px;">
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
        <td><div align="right" style="padding-bottom:90px;"></div></td>
        <td><input name="submit" type="submit" value="Submit" /></td>
      </tr>
    </table>
  </form>
  &nbsp;&nbsp;



</body>














</html >
