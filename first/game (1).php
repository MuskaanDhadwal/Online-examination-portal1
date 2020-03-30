<?php
// Demand a GET parameter
if ( ! isset($_GET['name']) || strlen($_GET['name']) < 1  )
{
    die('Name parameter missing');
}
// If the user requested logout go back to index.php
if ( isset($_POST['logout']) )
{
    header('Location: index.php');
    return;
}

$names = array('Rock', 'Paper', 'Scissors');
$human = isset($_POST["human"]) ? $_POST['human']+0 : -1;

// TODO:
$computer = rand(0,2);

function check($computer, $human)
{
    // For now this is a rock-savant checking function
    // TODO: Fix this
    if ( $human == $computer )
    {
        return "Tie";
    }
    else if ( ($human == 0 && $computer == 2) || ($human == 1 && $computer == 0) || ($human == 2 && $computer == 1))
    {
        return "You Win";
    }
    else
    {
        return "You Lose";
    }
}

$result = check($computer, $human);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Muskaan Dhadwal</title>
        <?php require_once "bootstrap.php"; ?>
    </head>
    <body>
        <div class="container">
            <h1>Rock Paper Scissors</h1>

            <?php
                if ( isset($_REQUEST['name']) )
                {
                    echo "<p>Welcome: ";
                    echo htmlentities($_REQUEST['name']);
                    echo "</p>\n";
                }
            ?>

            <div class="row">
                <form method="post">
                    <div class="form-group col-md-2">
                        <select class="form-control" name="human">
                            <option value="-1">Select</option>
                            <option value="0">Rock</option>
                            <option value="1">Paper</option>
                            <option value="2">Scissors</option>
                            <option value="3">Test</option>
                        </select>
                    </div>
                    <input class="btn btn-primary" type="submit" value="Play">
                    <input class="btn" type="submit" name="logout" value="Logout">
                </form>
            </div>

            <div>
                <pre><?php
                        if ( $human == -1 )
                        {
                            print "Please select a strategy and press Play.\n";
                        }
                        else if ( $human == 3 )
                        {
                            for($c=0;$c<3;$c++)
                            {
                                for($h=0;$h<3;$h++)
                                {
                                    $r = check($c, $h);
                                    print "Human=$names[$h] Computer=$names[$c] Result=$r\n";
                                }
                            }
                        }
                        else
                        {
                            print "Your Play=$names[$human] Computer Play=$names[$computer] Result=$result\n";
                        }
                ?></pre>
            </div>

        </div>
    </body>
</html>
