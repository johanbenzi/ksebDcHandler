
<!doctype html>
<html>
<head>
<!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>re
<![endif]-->
  <meta charset="utf-8">
  <meta name="author" content = "Johan Bency">
  <title>KSEB Manipuzha - Enter DC</title>
  <link rel="stylesheet" type="text/css" href="css/mystyle.css">
 <style>
     #current {
	background-color:#FFF;
	color: #00A0FF;
}
 </style>
 
 <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js">
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js">
</script>
 
 <script> 
     $(document).ready(function() {
		 $("#datepicker").datepicker()
     });
 </script>
</head>
<body>
<div id="contain">
  <header>
    <h1>KSEB Manipuzha- Consumer default database</h1>
     <nav>
        <a href="" class="menu" id="current">DC</a>
        <a href="modify.php" class="menu">RC</a>
        <a href="search.php" class="menu">View</a>
     </nav>
  </header>
   
</div>
  <form action="html/action_page.php" method="POST" target="_self" >
  <fieldset>
    <legend>Add Default details:</legend>
    <br>
    <input type="int" required name="consumerNumber" placeholder="Consumer Number" autofocus>
    <br>
    <br>
    <input type="date"  value="<?php echo date('Y-m-d', time()-60*60*24); ?>" id="datepicke" name="billDate">
    <br><br>
    <input type="submit" value="Submit">
  </fieldset>
</form> 
</body>
</html>