<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification d'un cour</title>
</head>
<body>
    <?php
    $niveau=$_GET['niveau'];
    require_once('../../models/CourService.php');
    $etService=new CourService();
    $etudiant=$etService->getByniveau($niveau);
    //var_dump($etudiant);
    ?>
<h1>Formulaire de modification d'un cour </h1>
  
    <form action="../../controllers/CourCtrl.php" method="post">
    <table  align="center">
        <tr>
            <td>COURS</td>
            <td><input type="text" name="cour"  value="<?= $etudiant['cour'] ?>" autocomplete="off" required></td>
        </tr>
        <tr>
            <td>NIVEAU</td>
            <td><input type="text" name="niveau" value="<?php echo $etudiant['niveau']; ?>" autocomplete="off" required></td>
        </tr>
        <tr>
            <td>NOMBRE DETUDIANT</td>
            <td><input type="text" name="nbr_etudiant" value="<?= $etudiant['nbr_etudiant'] ?>" required></td>
        </tr>
        
       
        <tr>
            <input type="hidden" name="action" value="modifier">
             <td colspan="2" style="text-align: center">  

&nbsp; &nbsp; &nbsp;&nbsp;
<input type='submit' style="background-color: green; color: white" value="MODIFIER"></td>
        </tr>
    </table>
    </form>
</body>
</html>