<?php // Define vars:
$page_title = "Code Challenge: Red8 PHP_01";

?>

<!--
Project Name:    EHW Code Challenge: ZenBusiness - ES6 Incr/Decr Number
Challenge Admin: ZenBusiness
Filename:        index.php
Date Created:    12/17/21
Date Updated:    --
Version:         1.00
Programmer:      Eric Hepperle

Purpose: 
Code Challenge: Build form with plus and minus buttons that increment/decrement the number displayed in a field by one.

Usage:
Launch and use. Click "-" to remove one, "+" to add one.

Requires:
* Browser

Demonstrates:
* Forms
* ES6
* addEventListener
* Simple App creation

Tags:
--

-->

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="">
<meta name="author" content="">
	
<title>Eric's PC Dashboard (2020-12-19)</title>


<link rel="stylesheet" href="style.css">

<style></style>

</head>

<body>

<div id="wrapper" class="container-fluid">

<div id="ehw-top-head">
    <div id="header-img"></div>
    <h3><?php echo $page_title; ?></h3>
</div><!-- /ehw-top-head div -->

<main>



<h2>Hello World!</h2>

<div class="container">
<!--
1. span full height and width
2. 20 px padding
3. 5px border red

-->

<div class="form">
<!--
1. center vertically and horiz
2. 2px blue bord
3. 15px padding
-->
<button class="minus" id="minus">
-
</button>

<input class="counter" id="counter" >


<button class="plus" id="plus">
+
</button>

</div><!--/form -->

</div><!--/container -->



</main>

</div><!-- /wrappper -->

<!-- SCRIPTS -->
<!--[if lt IE 9]>
<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Example: <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<script src="app.js"></script>

</body>
</html>



<!--- --- ---

Notes:
- N/A-->