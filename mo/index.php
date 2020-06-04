<?php 
    //Подключение шапки
    require_once("header.php");
?>

<!DOCTYPE html> 
<html> 
<head> 
<title>Сайт</title> 
<meta charset="utf-8"> 
</head> 
<body> 
<ul class="products clearfix">
<li class="product-wrapper">
<a href="index2.php" class="product">
	<div class="product-photo">
		<img src="1.jpg"  alt="">
	</div>
	<div class="holder">
	<div class="block">
</a>
</li>
<li class="product-wrapper">
<a href="index2.php" class="product">
	<div class="product-photo">
		<img src="2.jpg"  alt="">
	</div>
</a>
</li>
<li class="product-wrapper">
<a href="index2.php" class="product">
	<div class="product-photo">
		<img src="3.jpg"  alt="">
	</div>
</a>
</li>
<li class="product-wrapper">
<a href="index2.php" class="product">
	<div class="product-photo">
		<img src="4.jpg"  alt="">
	</div>
</a>
</li>
<li class="product-wrapper">
<a href="index2.php" class="product">
	<div class="product-photo">
		<img src="5.jpg"  alt="">
	</div>
</a>
</li>
<li class="product-wrapper">
<a href="index2.php" class="product">
	<div class="product-photo">
		<img src="6.jpg"  alt="">
	</div>
</a>
</li>
<li class="product-wrapper">
<a href="index2.php" class="product">
	<div class="product-photo">
		<img src="7.jpg"  alt="">
	</div>
</a>
</li>
<li class="product-wrapper">
<a href="index2.php" class="product"><div class="product-photo">
		<img src="8.jpg"  alt="">
	</div>
</a>
</li>
</ul>
<style>
	.product-wrapper {
	display: block;
	width: 100%;
	float: left;
	transition: width .2s;
	}

@media only screen and (min-width: 450px) {
	.product-wrapper {
		width: 50%;
	}
}

@media only screen and (min-width: 768px) {
	.product-wrapper {
		width: 33%;
	}
}

@media only screen and (min-width: 1000px) {
	.product-wrapper {
		width: 25%;
	}
}
.product {
	display: block;
	border: 1px solid #FFFFFF;
	border-radius: 3px;
	position: relative;
	background: #FFFFFF;
	margin: 0 20px 100px 0;
	text-decoration: none;
	color: #FFFFFF;
	z-index: 0;
	height: 300px;
}
.products {
	list-style: none;
	margin: 0 -20px 0 0;
	padding: 0;
}
.product-photo {
	position: relative;
	padding-bottom: 100%;
	overflow: hidden;
}
.product-photo img {
	position: absolute;
	top: 0;
	bottom: 0;
	left: 0;
	right: 0;
	max-width: 100%;
	max-height: 100%;
	margin: auto;
	transition: transform .4s ease-out;
}
.product:hover .product-photo img {
	transform: scale(1.6);
}
.product p {
	position: relative;
	margin: 0;
	font-size: 1em;
	line-height: 1.4em;
	height: 5.6em;
	overflow: hidden;
}
.product p:after {
	content: '';
	display: inline-block;
	position: absolute;
	bottom: 0;
	right: 0;
	width: 4.2em;
	height: 1.6em;
	background: linear-gradient(to left top, #fff, rgba(255, 255, 255, 0));
}
.product-price-old b,
.product-price-old small {
	color: #888;
}
</style>

</body>
</html>
