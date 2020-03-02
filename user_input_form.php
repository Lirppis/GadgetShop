<?php include 'header.php' ?>

<div class='col-md-9 data'>
    <h2>Add a discount</h2>
<form name= "user_input_form" method="post" action="create_verification_request.php">
    Business Name: <input type="text" name="business_name"><br>
    Normal Price: <input type="number" name="user_normal_price"><br>
    Student Price: <input type="number" name="user_student_price"><br>
    City/Town: <input type="text" name="user_city"><br>
</select>
<br>
<input class="btn" type="submit" value="Submit">
</form>
</div>

<?php include 'footer.php' ?>

