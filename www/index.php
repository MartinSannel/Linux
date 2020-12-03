<html>
    <head>
        <style>
            input[type=text], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
            }
            input[type=submit] {
            padding: 12px 20px;
            width: 100%;
            }
            .container {
            margin: auto;
            width: 75%;
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
            }
            table {
            border: 2px solid #FFFFFF;
            width: 100%;
            text-align: center;
            border-collapse: collapse;
            }
            table td, table th {
            border: 1px solid #FFFFFF;
            padding: 3px 4px;
            }
            table tbody td {
            font-size: 13px;
            }
            table td:nth-child(even) {
            background: #EBEBEB;
            }
            table thead {
            background: #FFFFFF;
            border-bottom: 4px solid #333333;
            }
            table thead th {
            font-size: 15px;
            font-weight: bold;
            color: #333333;
            text-align: center;
            border-left: 2px solid #333333;
            }
            table thead th:first-child {
            border-left: none;
            }

            table tfoot {
            font-size: 14px;
            font-weight: bold;
            color: #333333;
            border-top: 4px solid #333333;
            }
            table tfoot td {
            font-size: 14px;
            }
        </style>
    </head>
        <body>
            <?php 
            $server = "localhost";
            $username = "labuser"; 
            $password = "pass"; 
            $database = "labdb"; 
            $table = "customers";
            $mysqli = new mysqli($server, $username, $password, $database); 
            $query = "SELECT * FROM $table";

            echo '
            <div class="container">
            <h1>Customer list</h1>
            <table>
            <thead>
            <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last name</th>
            <th>Email</th>
            </tr>
            </thead>
            <tbody>';


            if ($result = $mysqli->query($query)) {
                while ($row = $result->fetch_assoc()) {
                    $field1 = $row["id"];
                    $field2 = $row["first_name"];
                    $field3 = $row["last_name"];
                    $field4 = $row["email"];

                    echo '<tr> 
                            <td>'.$field1.'</td> 
                            <td>'.$field2.'</td> 
                            <td>'.$field3.'</td> 
                            <td>'.$field4.'</td> 
                        </tr>';
                }
                echo '
                </tbody>
                </table>
                </div>';
                $result->free();
            }


            if(isset($_POST['save']))
            {
                $sql = "INSERT INTO customers (first_name, last_name, email)
                VALUES ('".$_POST["first_name"]."','".$_POST["last_name"]."','".$_POST["email"]."')";
                $result = mysqli_query($mysqli, $sql);
                echo "<meta http-equiv='refresh' content='0'>";
            }


            echo '<div class="container">
            <form action="index.php" method="post"> 
            <label id="first"> First name:</label><br/>
            <input type="text" name="first_name" required><br/>
            
            <label id="second">Last name: </label><br/>
            <input type="text" name="last_name" required><br/>
            
            <label id="third">Email: </label><br/>
            <input type="text" name="email" required><br/>
            
            <input type="submit" name="save"></input>
            
            </form>
            </div>';
            ?>
        </body>
</html>
