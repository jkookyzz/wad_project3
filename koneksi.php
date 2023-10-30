<?php
    $conn = mysqli_connect("localhost:3307","root","","wad_project3");
    $result = mysqli_query($conn,"SELECT * FROM students");
    var_dump($result);
?>