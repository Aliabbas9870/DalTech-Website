<?php
// Establish database connection
$conn = mysqli_connect("localhost", "root", "", "daltech");

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

// Fetch registered users data from the database
$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Users</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <section>
        <div class="container">
            <h2>Registered Users</h2>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Full Name</th>
                            <th>Service</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>".$row['Id']."</td>";
                            echo "<td>".$row['FullName']."</td>";
                            echo "<td>".$row['service']."</td>";
                            echo "<td>".$row['Email']."</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</body>
</html>

<?php
// Close the database connection
mysqli_close($conn);
?>
