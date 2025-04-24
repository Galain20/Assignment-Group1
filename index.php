<!DOCTYPE html>
<html>
<head>
    <title>Charles Severance Request / Response</title>
</head>
<body>
    <h1>Charles Severance Request / Response</h1>
    <?php
        $text = "Charles Severance";
        $hash = hash('sha256', $text);
        echo "<p>The SHA256 hash of \"$text\" is<br>$hash</p>";
    ?>

    <pre>
ASCII ART:

 ************
**        **
**
**
**
**
**        **
 ************
    </pre>

    <p><a href="check_error.php">Click here to check the error setting</a></p>
    <p><a href="traceback.php">Click here to cause a traceback</a></p>
</body>
</html>