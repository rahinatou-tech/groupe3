<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification enseignant</title>
</head>
<body>
    <?php
    $matricule=$_GET['matricule'];
    require_once('../../models/EnseignantService.php');
    $etService=new EnseignantService();
    $enseignant=$etService->getByMatricule($matricule);
    //var_dump($etudiant);
    ?>
<h1>Formulaire modification enseignant </h1>
  
    <form action="../../controllers/EnseignantCtrl.php" method="post">
    <table  align="center">
        <tr>
            <td>MATRICULE</td>
            <td><input type="text" name="matricule" readOnly value="<?= $enseignant['matricule'] ?>" autocomplete="off" required></td>
        </tr>
        <tr>
            <td>NOM</td>
            <td><input type="text" name="nom" value="<?php echo $enseignant['nom']; ?>" autocomplete="off" required></td>
        </tr>
        <tr>
            <td>PRENOM</td>
            <td><input type="text" name="prenom" value="<?= $enseignant['prenom'] ?>" required></td>
        </tr>
        <tr>
            <td>SEXE</td>
            <td>
               <!-- H <input type="radio" name="sexe"> 
                F <input type="radio" name="sexe"> -->

                <select name="sexe" required>
                    <option value="">Veuillez choisir le sexe de l'enseignant</option>
                    <option value="H" <?php if($enseignant['sexe']=='H') echo 'selected' ?> >Homme</option>
                    <option value="F" <?php if($enseignant['sexe']=='F') echo 'selected' ?> >Femme</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>TEL</td>
            <td><input type="number" value="<?= $enseignant['tel'] ?>" name="tel" required></td>
        </tr>
        <tr>
            <td>EMAIL</td>
            <td><input type="email" value="<?= $enseignant['email'] ?>" name="email" required></td>
        </tr>
        <tr>
            <td>ADRESSE</td>
            <td><input type="text" value="<?= $enseignant['adresse'] ?>" name="adresse" required></td>
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