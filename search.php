
<!doctype html>
<html>
<head>
<!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>re
<![endif]-->
  <meta charset="utf-8">
  <meta name="author" content = "Johan Bency">
  <title>KSEB Manipuzha - Consumer default database</title>
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
        <a href="index.php" class="menu" >DC</a>
        <a href="modify.php" class="menu">RC</a>
        <a href="" class="menu" id="current"> View</a>
     </nav>
  </header>
   
</div>

<div id="link">
   <a class="searchlink" href="html/action_search.php?method=1" target="_blank">PENDING LIST</a>
    <a class="searchlink" href="html/action_history.php?method=1" target="_blank">HISTORY</a>
  </div>  
    
  <form action="html/action_date.php" method="POST" target="_blank">
  <fieldset>
    <legend>Add Date for searching pending consumers:</legend>
    <br>
    <input type="date"  value="<?php echo date('Y-m-d', time()-60*60*24); ?>" id="datepicke" name="billDate" autofocus>
    <br><br>
    <input type="submit" value="Submit">
  </fieldset>
</form> 
</body>
</html>