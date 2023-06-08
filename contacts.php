<!DOCTYPE html>
<html>
<head><title>Contacts</title>
    <style>
        body{
            color:rgb(65, 121, 12);

        }
    </style>
</head><body>
<?php
echo "<h1> data retrieve</h1>";
$severname = "localhost";
$username = "root";
$password = "";
$dbname = "my_data";
$conn = new mysqli($severname, $username, $password, $dbname);
if(!$conn){
echo "successful";
}
else
echo "database connection failled";

$query = "SELECT * FROM contacts";
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($result)) {
    echo "<p>" . $row['phone'] . "</p>";
}
    mysqli_close($conn);

// Check if query executed successfully
if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}
?>
}
 
?>
    <h4>Contact us now..........</h4>
    <p><b>Contacts</b> </p>
    <p>
    <ul>
        <li>Email: chauncymills@gmail.com</li>
        <li>Phone number: 099755531</li>
        <li>Website: https://github.com/Chauncymt/my-portfolio-</li>
    </ul>
    </p>
</body>

</html>