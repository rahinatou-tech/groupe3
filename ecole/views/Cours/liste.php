<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Liste des module</h1>
<a href="../../controllers/CourCtrl.php?action=form" >Go to cour form</a> <br >
<?php 
        if(isset($_GET['message'])){
            ?>
              <span style="color: green; font-size: large"><?php echo $_GET['message']; ?></span>
        <?php }
    ?>

<?php
require_once('../../models/CourService.php');
$etService=new CourService();
$etudiants=$etService->getAll();
?>    


<table border="1" align="center">
    <tr>
    <th>MODULE</th><th>NIVEAU</th><th>NOMBRE D'ETUDIANTS</th><th>ACTIONS</th>
    </tr>
    <?php
foreach($etudiants as $et){
 ?>   
    <tr>
    <td><?php echo $et['cour']; ?></td>
    <td><?php echo $et['niveau']; ?></td>
    <td><?php echo $et['nbr_etudiant']; ?></td>
    <td><a href="../../controllers/CourCtrl.php?action=editForm&niveau=<?php echo $et['niveau']; ?>" >MODIFIER</a>--<a href="../../controllers/CourCtrl.php?action=delete&niveau=<?php echo $et['niveau']; ?>"   onClick="return window.confirm('Etes-vous sûre de vouloir supprimer ceu cour')">SUPPRIMER</a></td>
    </tr>
    
<?php } ?>
   
</table>

<!--
<input type="hidden" name="action" value="editForm" form="f1" />
<input form="f1"  type="submit" value="MODIFIER" />
<input type="hidden" name="matricule" value="UIN" form="f1" />
-->

<form action="../../controllers/CourCtrl.php" method="GET" id="f1"></form>
</body>
</html>