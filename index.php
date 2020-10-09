<!DOCTYPE html>
<html>
    <title>Johnny's Computer</title>
    <head>

    </head>
    <body>
        <h1>Welcome!2</h1>
        <?php
            if(strtoupper($_SERVER['REQUEST_METHOD']) === 'GET'){
                $conn = mysql_connect('localhost', 'scratch_user', 'c8fc4wbFvre97Lp7');
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    } else {
//                        $qry = "SELECT * FROM `log` ORDER BY `stamp` DESC";
//                        $result = $conn->query($qry);
//                        while($row = $result->fetch_assoc()){
//                            echo $row[content] . ' (' . $row[stamp] . ') (' . $row[source_address] . ')<br>';
//                        }
//                        mysqli_free_result($result);
                        echo "connected!";
                        $conn->close();
                    }
            }
        ?>
        <form id="userInput" action="index.php" method="post">
            Leave a message:</label<br>
            <input type="text" name="userMessage"><br>
            <button type="submit" value ="Submit">Submit</button>
        </form>
    </body>
</html>