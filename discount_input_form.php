<?php include 'header.php' ?>

<div class='col-md-9 data'>
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
</select>
<br>
<input type="submit" value="Save Discount">
</form>
</div>

<?php include 'footer.php' ?>

