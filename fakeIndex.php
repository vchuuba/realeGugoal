<!DOCTYPE html>
<html>
    <head>
        <title>Form response</title>
    </head>
    <body onload="google()">
        <p><?= var_dump($_GET) ?> </p>
        <p><?= var_dump($_POST) ?></p>

        <p>
        <?php=
        $servername = "thelichking"; // keep $servername to localhost if doing it on own Pi
        $username = "Arthas";
        $password = "Shell111";
        $dbname = "unitStats";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        // Check for successful connection
        if (!$conn) { 
            die("Connection failed: {mysqli_connect_error()}"); 
        } 
        echo "Connected successfully";
        
        $sql = "select * from unitList;";		// This can be any valid SQL cmd.
        $result = mysqli_query($conn, $sql);	// Stores rows retrieved by query.
        echo mysqli_error($conn);	    		// If error, this determines cause.
        


        mysqli_close($conn);
        ?>
        </p>
        
        <script>
			function google() {
				window.location.replace("https://www.google.com/" + $_GET["search"]);
			}
		</script>
    </body>
</html>