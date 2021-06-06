
<html>
 <head>
  <title>Hello Comm-IT</title>
 </head>
 <body>
 <?php  
// Show all information, defaults to INFO_ALL
// $db_host='34.89.238.35';
$db_host='yehudadb.cibdxhyiffii.us-east-1.rds.amazonaws.com';
// $db_user='stg_app_user';
$db_user='admin';
// $db_pwd='QaWs123!';
$db_pwd='MiaYoav1953';
// $db_name = 'stg_imported_VI';
$db_name = 'commitit_lab1';
$table='wp_posts';

// Create connection
$conn = new mysqli($db_host, $db_user, $db_pwd, $db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// $sql = "SELECT * FROM wp_posts";
// $sql = "SELECT get_emails FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME = 'main_users'";
// $sql = "SELECT * FROM main_users";
$sql = "SELECT * FROM lab_test";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        // echo "id: " . $row["ID"]. " - Name: " . $row["post_author"]. " " . $row["post_date"]. "<br>";
        echo "Showing Dynamic Content Text : " . $row["title"] . "<br>";
        //print_r ($row) ;
    }
} else {
    echo "0 results";
}
$conn->close();
 echo '<p>Showing Static  Content Text Generated via PHP on nginx </p>'; 
  ?>
 </body>
</html>
