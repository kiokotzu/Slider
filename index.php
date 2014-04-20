<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Plugin para mostrar contenido RSS</title>
	<link rel="stylesheet" href="css/slider.css">
</head>
<body>
	<div class="slider">
		<ul>
			<li>
				<img src="imgs/img1.jpg" alt="">
				<div class="izquierda">imagen 1 contenido izquierda</div>
				<div class="derecha">imagen 1 contenido derecha</div>
			</li>
			<li>
				<img src="imgs/img2.jpg" alt="">
				<div class="izquierda">imagen 2 contenido izquierda</div>
				<div class="derecha">imagen 2 contenido derecha</div>
			</li>
			<li>
				<img src="imgs/img3.jpg" alt="">
				<div class="izquierda">imagen 3 contenido izquierda</div>
				<div class="derecha">imagen 3 contenido derecha</div>
			</li>
			<li>
				<img src="imgs/img4.jpg" alt="">
				<div class="izquierda">imagen 4 contenido izquierda</div>
				<div class="derecha">imagen 4 contenido derecha</div>
			</li>
			<li>
				<img src="imgs/img5.jpg" alt="">
				<div class="izquierda">imagen 5 contenido izquierda</div>
				<div class="derecha">imagen 5 contenido derecha</div>
			</li>
			<li>
				<img src="imgs/img6.jpg" alt="">
				<div class="izquierda">imagen 6 contenido izquierda</div>
				<div class="derecha">imagen 6 contenido derecha</div>
			</li>
		</ul>		
	</div>

	<script src="js/jquery-1.11.0.js"></script>
	<script src="js/jquery.slider.js"></script>
	<script>
	  $(function(){
	  	$('.slider').Slider({
	  		tiempo : 5000
	  	})
	  });
	</script>
</body>
</html>