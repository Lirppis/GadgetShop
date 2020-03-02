<?php include 'header.php' ?>

<div class='col-md-9 data'>
    <h2>Add a discount</h2>
<form name= "user_input_form" method="post" action="create_verification_request.php">
    Business Name: <input class="text-box" type="text" name="business_name"><br>
    Normal Price: <input class="text-box" type="number" name="user_normal_price"><br>
    Student Price: <input class="text-box" type="number" name="user_student_price"><br>
    City/Town: <input class="text-box" type="text" name="user_city"><br>
<input class="btn" type="submit" value="Submit" style="float: right">
</form>
</div>
<?php include 'footer.php' ?>

