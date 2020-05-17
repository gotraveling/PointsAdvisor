<?php
/**
 * Created by PhpStorm.
 * User: Krishna
 * Date: 5/15/2020
 * Time: 10:26 AM
 */

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "malaysiaairlines";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = $conn->query("SELECT DISTINCT origin,destination FROM `malaysia_data`");
$num = $query->num_rows;
if ($num == 0) {
    $data = array();
} else {
    $data = $query->fetch_all(MYSQLI_ASSOC);
}
try {
    foreach ($data as $eachData) {
        $origin = $eachData["origin"];
        $destination = $eachData["destination"];
        $airline = 'malaysiaairlines';
        $programme_slug = 'malaysiaairlines';

        $query = $conn->query("SELECT * FROM malaysia_data WHERE origin='$origin' AND destination='$destination'");
        $num = $query->num_rows;
        if ($num == 0) {
            $newData = array();
        } else {
            $newData = $query->fetch_all(MYSQLI_ASSOC);
        }

        $dummy = array();
        foreach ($newData as $eachNewData) {
            $dummy[] = array('trip_type' => $eachNewData['planType'], 'class' => $eachNewData['cabinClass'], 'points' => (int)$eachNewData['miles'], 'level' => 'N');
        }
        $data = serialize($dummy);

        $queryNew = "SELECT * FROM new_routes WHERE origin='$origin' AND destination='$destination'";
        $query = $conn->query($queryNew);
        $num = $query->num_rows;
        if ($num == 0) {
            $newQuery = "INSERT INTO new_routes (origin,destination,programme_slug,airline_slug,data,created_at) VALUES ('$origin','$destination','$programme_slug','$airline','$data',NOW())";
            $result = $conn->query($newQuery);
        } else {
            $result = $conn->query("UPDATE new_routes SET data='$data',updated_at=NOW() WHERE origin='$origin' AND destination='$destination'");
        }
    }
}catch (Exception $e){
    echo $e;
}

?>