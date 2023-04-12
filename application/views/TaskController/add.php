<html>
	<head></head>
	<body>
		<form action="TaskController/add" method="post" >
		<input type="text" name="projetID" value=" <?php echo $this->projetId; ?>"><br>
		<label> Nom</label>
		<input type="text" name="nom"><br>
		<label> Date Début </label>
		<input type="text" name="debut"><br>
		<label> Daete Fin </label>
		<input type="text" name="fin"><br>
		
		<button type="submit" >Envoyer</button>
		<button type="reset" >Effacer</button>
		</form>
	</body>

</html>