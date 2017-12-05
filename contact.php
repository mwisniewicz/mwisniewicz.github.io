<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>MW Strony</title>
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
<div class="wrapper">
    <header>
            <div class="logo">MW</div>
            <nav>
            <ul class="top-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">My works</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            </nav>
    </header>
<main>
    <div class="content">
        <?php
$action=$_REQUEST['action'];
if ($action=="")    /* display the contact form */
    {
    ?>
    <form  action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="action" value="submit">
    <input name="name" type="text" value="" size="30" placeholder="Name" /><br>
    <input name="email" type="text" value="" size="30" placeholder="E-mail" /><br>
    <textarea name="message" rows="7" cols="30" placeholder="Message"></textarea><br>
    <input class="button" type="submit" value="Send message"/>
    </form>
    <?php
    } 
else                /* send the submitted data */
    {
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $message=$_REQUEST['message'];
    if (($name=="")||($email=="")||($message==""))
        {
        echo "All fields are required, please fill <a href=\"\">the form</a> again.";
        }
    else{       
        $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Message sent using your contact form";
        mail("m.wisniewicz@gmail.com", $subject, $message, $from);
        echo "<p style='color:white;'>Email sent!</p>";
        }
    }  
?>

    </div>
</main>
<footer>
    <div class="footer-bar">
    <p></p>
    <span>Copyrigth &copy; 2017 | MW</span>
    <nav>
        <ul class="footer-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
    </div>
</footer>
</div>
</body>
</html>