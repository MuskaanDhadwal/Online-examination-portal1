<?php
if ( isset($_POST['cancel'] ) )
{
    // Redirect the browser to game.php
    header("Location: index.php");
    return;
}
$salt = 'XyZzy12*_';
$stored_hash = '1a52e17fa899cf40fb04cfc42e6352f1';  // Pw is php123
$failure = false;
if ( isset($_POST['admin']) && isset($_POST['pass']) )
{
    if ( strlen($_POST['admin']) < 1 || strlen($_POST['pass']) < 1 )
    {
        $failure = "User name and password are required";
    }
    else
    {
        $check = hash('md5', $salt.$_POST['pass']);
        if ( $check == $stored_hash )
        {

            header("Location: exam1.php?name=".urlencode($_POST['admin']));
            return;
        }
        else
        {
            $failure = "Incorrect password";
        }
    }
}
// Fall through into the View
?>
<!DOCTYPE html>
<html>
    <head>
        <?php require_once "bootstrap.php"; ?>
        <title> Admin Login Page</title>
    </head>
      <div class="example">
    <body id="space" >
        <div class="container" >
         <div id="demoFont">
            <h1 style="font-family:Comic Sans MS;color:white;padding-left:200px;"><strong>Log In </strong</h1>
          </div>
            <?php

                if ( $failure !== false )
                {

                    echo('<p style="color: red;">'.htmlentities($failure)."</p>\n");
                }
            ?>

            <form method="POST" class="form-horizontal">
                <div class="form-group"  >
                    <label class="control-label col-sm-2" for="admin" id="demotext" style="font-family:Comic Sans MS;color:white;">User Name:</label>
                    <div class="col-sm-3">
                        <input class="form-control" type="text" name="admin" id="nam">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="id_1723" style="font-family:Comic Sans MS;color:white;">Password:</label>
                    <div class="col-sm-3">
                        <input class="form-control" type="text" name="pass" id="id_1723">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-2 col-sm-offset-2">
                        <input class="btn btn-default" type="submit" value="Log In">
                        <input class="btn" type="submit" name="cancel" value="Cancel">
                    </div>
                </div>
</div>


            </form>

            <p>
                <!--For a password hint, view source and find a password hint
                in the HTML comments.-->
                <!-- Hint: The password is php123. -->
            </p>

            <div id="iconspace">


            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcShtniPPfUVfVDg11YnUrxE-m_WcAaxrsBAblAJryqXxIivFG8U" alt="My Image" height="78" width="91">&emsp;
            <img src="https://ignitetechnical.com/wp-content/uploads/2012/02/emailus.jpg" alt="My Image" height="78" width="91"><br>
            <h4 style="font-family:Arial Black;">Helpline &emsp;&ensp; Mail</h4>
          </div>
        </div>


          </div>
        </div>
      </div>
    </body>
</html>
