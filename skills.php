<!DOCTYPE>
<html> 
<head>
<title>About</title>
<style>
    body{
    background-color:green;
    align: centre;
    
    }
    

</style>
</head>
<body style="">

<?php
$servername= "localhost"s
$username = "root";
$password = "";
$db_name = "my_data";

$conn = mysqli_connect($severname,$username, $password, $database_name);
if(!$conn){
    echo "successful";
    }
    else
    echo "database connection failled";
    
    $query = "SELECT * FROM skills";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<p>" . $row['NAME'] . "</p>";
    }
        mysqli_close($conn);
    
    // Check if query executed successfully
    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }
    ?>

    <h2 style="color:red">About the author</h2>
<p>Am chauncy Mills. I did my secondary education at Umbwi Secobdary School in Dedza. Am currently doing education ICT at Mzuzu University</p>
<h4 style="color:orange ">Skills and competicies</h4>
<p>I have knowledge in the following areas:
<ul>
    <li>Java programming</li>
    <li>Programmimg in C </li>
    <li>Web designing and development(HTML, CSS, JS, PHP, SQL)</li>
    <li>Networking</li>
    <li>PC Maintainance</li>
    <li>Multimedia development (Photography and Videography)</li>
    <li>Graphics design</li>
  
</ul>
</p>
</body>
</html>
