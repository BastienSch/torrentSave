<?php
require 'infoWeb.php';  				
?>
<!DOCTYPE html>
<html>
<?php  require 'require/head.php' ?>
<body>
<?php  require 'require/navbar.php' ?>
<div class="container ">
	<div class="row  ">
    	<div class="column column-100 titre">
    		<h3 class="titre">Liste des Sauvegardes :</h3>
    	</div>
    </div>
    <br/>
  	<div class="row content">  
	    <div class="column column-100 ">
	        <table >
			    <thead>
			        <tr>
			            <th>Id</th>
			            <th>Nom du torrent</th>
			            <th>Source</th>
			            <th>Disponibilité</th>
			        </tr>	
			    </thead>
			    <tbody>
			    	<?php 
			    		$infoWeb = new InfoWeb();
    					$infoWeb->shareList();
			        ?>
			    </tbody>
			</table>
  		</div>
	</div>
</div>
</body>
</html>