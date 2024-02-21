<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seznam</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <header>
    <h1>Seznam aut</h1>
    </header>  
    <main>
        <div class="table-wrapper"></div>
        <table class="fl-table">
            <thread>
            <tbody>
                <?php

use LDAP\Result;

                $servername = "sql5.webzdarma.cz" ; // server name
                $username = "seznamvecieu9995"; // username
                $password = "@-5y0kj^Y,h)^9r7$4K^"; // password
                $dbname = "seznamvecieu9995"; // database name

                $connection = new mysqli($servername, $username,$password, $dbname);

                     if ($connection->connect_error) { 
                        die("Connection failed: " . $conn->connect_error); }
                    
                        $sql = 'SELECT * FROM cars';
                        $result = $connection -> query($sql);

                        if(!$result){
                            die("invalid query: " .$connection->error);
                        }
                        
                        while ($row = $result->fetch_assoc()) {
                            echo" <tr>
                            <th>" .$row ["id"]."</th>
                            <th>" .$row ["brand"]."</th>
                            <th>" .$row ["name"]."</th>
                            <th>" .$row ["color"]."</th>
                            <th>" .$row ["date"]."</th>
                        </tr>";
                        }
                        
                ?>
                        
            </tbody>
            </thread>
        </table>
    </main>
    <footer>
        <p>Konec tabulky</p>
    </footer>
</body>
</html>