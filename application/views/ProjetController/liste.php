<?php
echo '<h1>Liste des Projets </h1>';
echo '<table border="1">
      <tr><th>N°</th><th>titre</th><th>date début</th><th>Date fin</th><th>dDescription</th><th>Actions</th></tr>';
$i=1;
foreach( $this->projets as $projet){
echo '<tr><td>'.$i++.'</td><td>'.$projet['Titre'].'</td><td>'.$projet['DatDebut'].'</td><td>'.$projet['DateFin'].'</td><td>'.$projet['Description'].'</td></td>
      <td><a href="../projetController/delete/'.$projet['Id'].'">supprimer</td>
	  <td><a href="../TaskController/add/'.$projet['Id'].'">Planifier</td>
	  <td><a href="../ProjetController/details/'.$projet['Id'].'">Dètails</td>
	  </tr>';
}
echo '</table>';
?>