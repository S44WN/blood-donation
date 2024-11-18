<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <?php
    require "db_connection.php";
    
    $q = $_GET["q"];
    $sql = "SELECT * FROM donors WHERE bloodgroup = '" . $q . "'";
    $result = mysqli_query($con, $sql);
    
    echo "<h2 class='section-title'>Donors List</h2>";
    echo "<table class='donors-table'>
    <tr>
        <th>Name</th>
        <th>Blood Group</th>
        <th>Email Id</th>
        <th>Mobile Number</th>
        <th>City</th>
    </tr>";
    
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['fullname'] . "</td>";
        echo "<td>" . $row['bloodgroup'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['mobile'] . "</td>";
        echo "<td>" . $row['town'] . "</td>";
        echo "</tr>";
    }
    
    echo "</table>";
    
    mysqli_close($con);
    ?>
</body>
</html>