<html>
	<head>
		<style type="text/css">
		 .header{
			background-color:blue;
			color:#fff;
			padding:8xp 10px;
			display:flex;
			justify-content:space-between;
		 }
		 .header a{
			text-decoration : none; 
		 }
		 
		 
		</style>
		<title><?php echo $this->title; ?></title>
	</head>
	<body>
		<div class="header">
			<a href="ProjetContoller/liste">Liste des projet </a>
			<a href="#">Crédits</a>
		</div>
		<div>
		<?php echo $this->content;   ?> 
		</div>
	
	
	</body>

</html>