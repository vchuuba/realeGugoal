<!DOCTYPE html>
<html>
    <head>
        <title>Form response</title>
    </head>
    <body onload="google()">
        <p><?= var_dump($_GET) ?> </p>

        <p>
        <?php=
        $servername = "thelichking"; // keep $servername to localhost if doing it on own Pi
        $username = "Arthas";
        $password = "Shell111";
        $dbname = "unitStats";
        $thelosersIPlmao = $_SERVER["REMOTE_ADDR"];

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        // Check for successful connection
        if (!$conn) { 
            die("Connection failed: {mysqli_connect_error()}"); 
        } 
        echo "Connected successfully";
        
        $sql = "INSERT INTO loserList (search, IP); VALUES (" . $_GET["search"] . ", " . $thelosersIPlmao ");";		// This can be any valid SQL cmd.
        $result = mysqli_query($conn, $sql);	// Inserts sql command.
        echo mysqli_error($conn);	    		// If error, this determines cause.

        mysqli_close($conn);
        ?>
        </p>

        <?=
            $x = htmlspecialchars($_GET["search"]);
            $y = "Location: https://www.google.com/search?q=" . $x;
            header($y);   
        ?>
    </body>
</html>