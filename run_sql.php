<?php
// Show all information, defaults to INFO_ALL
$db_host='34.89.238.35';
$db_user='stg_app_user';
$db_pwd='QaWs123!';
$db_name = 'stg_imported_VI';
$table='wp_posts';

// Create connection
$conn = new mysqli($db_host, $db_user, $db_pwd, $db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// $sql = "SELECT * FROM wp_posts";
// $sql = "SELECT get_emails FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME = 'main_users'";
$sql = "SELECT * FROM main_users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        // echo "id: " . $row["ID"]. " - Name: " . $row["post_author"]. " " . $row["post_date"]. "<br>";
        echo $row["user_status"] . "<br>";
	//print_r ($row) ;
    }
} else {
    echo "0 results";
}
$conn->close();
?>
