
<?php
if($_GET['q'] == 'search...'){
    header('location: search_form.php');
}
if($_GET['q'] !== ''){
    $db = mysql_connect('localhost', 'matt', 'Scooby1990!', 'discountdb');



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
          #searchBox{
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
  body{
      font-family:arial;
  }
  h3{
      margin: 20px 0px 0px;
      padding:0;
  }
  p{
      margin:0;
      padding:0;
  }

  a{
text-decoration: underline;
  }

  a:hover{
color: #000000;
text-decoration: none;
  }
        </style>
</head>
    
<body>
<form action="search_form.php" method="GET" id="searchForm"> 
    <input type="text" name="q" id="searchBox" placeholder="" value="search..." maxlength="25" autocomplete="off" onmousedown="active();" onblur="inactive()" />
    <input type="submit" id="searchBtn"  value="search" />
</form>
    <?php

    if(!isset($q)){
echo '';
    }else{

    


    $query = mysql_query("SELECT * FROM discounts WHERE discount_percent LIKE '%$q%' OR discount_description LIKE '%$q%' ");
    $num_rows = mysql_num_rows($query);
?>
<p><strong><?php echo $num_rows; ?> </strong> results for '<?php echo $q; ?>' </p>
<?php
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
   

   echo   ' <h3><a href="' . $id . '">' . $discount_description . ' </h3>' .  $normal_price . ' ' .  $student_price . ' ' . $discount_percent . ' ' . $days_of_week . ' ' .  $address . ' ' .  $phone . ' ' . $email . '<br/>';
 }
}
    ?>
</body>
</html>
<?php
} else {
    header('location: search_form.php');
}
?>