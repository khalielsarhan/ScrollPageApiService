<?php
include ('conn.php');
$myarray = array();
$myrow = array();


$query = "SELECT * FROM `blog_posts` ORDER BY id ASC LIMIT 1 OFFSET 2";
$result = mysqli->query($query); 


while($row = $result->fetch_array()){
    $myrow[]= array(
        "id"=$row['id'],
        "content"=$row['content']
        "date"=$row['date']
);
}

$myarray['content'] = $myrow;

echo json_encode($myarray);