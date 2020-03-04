
<?php
$con = mysql_connect('localhost','root','');
$dv = mysql_select_db('discountdb')
?>
<!DOCTYPE HTML>
<html lang="">
<head>
    <title>Search bar</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
<script type="text/javascript">
function active(){
    var searchBar = document.getElementbyid('searchBar');

    if(searchBar.value == 'search...'){
searchBar.value = ''
searchBar.placeholder = 'search...'
    }
}


function inactive(){
    var searchBar = document.getElementbyid('searchBar');

    if(searchBar.value == ''){
searchBar.value = 'search...'
searchBar.placeholder = ''
    }
}

</script>
<style>
          #searchBar{
      border:1px;
      font-size:14px;
      padding:10px;
      width:200px;
   border-top-left-radius:10px;
   border-bottom-left-radius:10px;
  }

  #searchBtn{
      border:1px;
      font-size:14px;
      padding:10px;
      background:#EB7F00;
      cursor :pointer;
  }

  #searchBtn:hover{
      background:darkcyan;
  }
        </style>
</head>
    
<body>
<form action="search.php" method="post"> 
    <input type="text" id="searchBar" placeholder="" value="search..." maxlength="25" autocomplete="off" onmousedown="active();" onblur="inactive()" />
    <input type="submit" id="searchBtn"  value="search" />
</form>
    <?php
    $query = mysql_query("SELECT * FROM discounts")
    

 while($row = mysql_fetch_array($query)){
   $id = $row['id'];
   $discount_description = $row['discount_description'];
   $normal_price = $row['normal_price'];
   $student_price = $row['student_price'];
   $discount_percent = $row['discount_percent'];
   $days_of_week = $row['days_of_week'];
   $address = $row['address'];
   $phone = $row['phone'];
   $email = $row['email'];

   echo $id . ' ' . $discount_description . ' ' .  $normal_price . ' ' .  $student_price . ' ' . $discount_percent . ' ' . $days_of_week . ' ' .  $address . ' ' .  $phone . ' ' . $email . '<br/>';
 }
    ?>
</body>
</html>
