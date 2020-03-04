<?php include 'header.php' ?>

<!DOCTYPE HTML>
<html lang="">
<head>
    <meta charset="UTF-8">
    <title>Nome do Documento</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
    
<body>

<script>
function validateForm() {
  var x = document.forms["myForm"]["name"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
}
</script>
<!-- Percentage calculator -->
<script>
function get_percentage($normal_price, $student_price)
{
  if ( $normal_price > 0 ) {
   return round($student_price*100/$normal_price);
  } else {
    return 0;
  }
}
</script>

</body>
</html>

<div class='col-md-9 data'>
<<<<<<< HEAD
<form name= "discount_input_form" method="post" action="create_discount.php">
    Business Name: <input type="text" name="name"><br>
    Discount Description: <input type="text" name="discount_description"><br>
    Normal Price: <input type="number" name="normal_price"><br>
    Student Price: <input type="number" name="student_price"><br>
    Discount percent: <input type="number" name="discount_percent"><br>
    Days of week: <input type="week" name="days_of_week"><br>
    Address: <input type="text" name="address"><br>
    Phone: <input type="tel" name="phone"><br>
    Email: <input type="email" name="email"><br>
=======
<form name= "discount_input_form" onsubmit="return validateform()" method="post" action="create_discount.php">
    Business Name: <input type="text" name="name"required><br>
    Discount Description: <input type="text" name="discount_description"required><br>
    Normal Price: <input type="number" name="normal_price"required><br>
    Student Price: <input type="number" name="student_price"required><br>
    Discount percent: <input type="number" name="discount_percent" onsubmit="return get_percentage($normal_price, $student_price)"    required><br>
    Days of week: <input type="text" name="days_of_week"required><br>
    Address: <input type="text" name="address"required><br>
    Phone: <input type="number" name="phone"required><br>
    Email: <input type="email" name="email"required><br>
>>>>>>> 85db3d0e9e248c26b23da7871d92ab765744459a
</select>
<br>
<input type="submit" value="Save Discount">
</form>
</div>

<?php include 'footer.php' ?>

