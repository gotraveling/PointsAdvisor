<?php
/**
 * Created by PhpStorm.
 * User: Krishna
 * Date: 5/17/2020
 * Time: 12:38 AM
 */

include_once 'db.php';

$query = $conn->query("SELECT * FROM new_routes");
$num = $query->num_rows;
if ($num == 0) {
    $data = array();
} else {
    $data = $query->fetch_all(MYSQLI_ASSOC);
}
foreach ($data as $eachData){
    print_r(unserialize($eachData['data']));
}

/*DELETE FROM `routes` WHERE programme_slug="malaysiaairlines";
INSERT INTO routes (origin,destination,programme_slug,airline_slug,data,created_at) SELECT origin,destination,programme_slug,airline_slug,data,created_at FROM new_routes;*/

?>