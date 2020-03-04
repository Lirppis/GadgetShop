<?php
include 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="discount.css"></head>
<body>



<div class="discount-container">
<?php

$name =mysqli_real_escape_string($conn, $_GET['name']);
$discount_description =mysqli_real_escape_string($conn, $_GET['discount_description']);
$sql = "select * FROM discounts WHERE name='$name' AND discount_description='$discountdescription'";
$result = mysqli_query($conn, $sql);
$queryResults = mysqli_num_rows();

if ($queryResults > 0 ){

    while ($row = mysqli_fetch_assoc()){

        echo "<div class='article-box'> 
        <h3> ".$row['name']." </h3>
        <p> ".$row['discount_description']." </p>
        <p> ".$row['normal_price']." </p>
        <p> ".$row['student_price']." </p>
        <p> ".$row['discount_percent ']." </p>
        <p> ".$row['days_of_week']." </p>
        <p> ".$row['address']." </p>
        <p> ".$row['phone']." </p>

        <p> ".$row['email']." </p>



        </div>";
    }
    
}

?>

</div>

</body>
</html>