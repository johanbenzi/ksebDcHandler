<!doctype html>
<html>
<head>
<!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>re
<![endif]-->
  <meta charset="utf-8">
  <meta name="author" content = "Johan Bency">
  <title>KSEB Manipuzha- Consumer default database</title>
  <link rel="stylesheet" type="text/css" href="css/mystyle.css">
 <style>
     #current {
	background-color:#FFF;
	color: #00A0FF;
}
 </style>
 </head>
<body>
<div id="contain">
  <header>
    <h1>KSEB Manipuzha- Add paid</h1>
     <nav>
        <a href="index.php" class="menu" >DC</a>
        <a href="" class="menu" id="current">RC</a>
        <a href="search.php" class="menu">View</a>
     </nav>
  </header>
   
</div>
<form action="html/action_paid.php" method="POST" target="_self">
  <fieldset>
    <legend>Add consumer number of paid consumer:</legend>
    <br>
    <input type="int" required name="consumerNumber" placeholder="Consumer Number" autofocus>
    <!--<input type="date"  value="<?php echo date('Y-m-d'); ?>" id="datepicke" name="billDate">-->
    <br>
    <br>
    <input type="submit" value="Submit">
  </fieldset>
</form>

 <form action="html/action_paid.php" method="POST" target="_self" onsubmit="return confirm('Are you sure you want to submit?');">
  <fieldset>
    <legend>Delete all history:</legend>
    <br>
    <input type="int" required name="consumerNumberdel" placeholder="Consumer Number" autofocus>
    <br>
    <br>
    <input type="submit" value="Submit">
  </fieldset>
</form>  
</body>
</html>