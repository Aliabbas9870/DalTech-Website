<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stored Contacts</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        h2 {
            text-align: center;
            margin-top: 50px;
            color: #333;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            overflow: hidden;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background-color: #f2f2f2;
            transition: background-color 0.3s ease;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        @media screen and (max-width: 600px) {
            table {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <h2>Stored Contacts</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
        </tr>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "daltech";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM contactform";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["Name"]."</td><td>".$row["Email"]."</td><td>".$row["Message"]."</td></tr>";
            }
        } else {
            echo "<tr><td colspan='3'>0 results</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</body>
</html>
