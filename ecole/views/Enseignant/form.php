<html>

<head>
    <title>Formulaire ajout enseignant</title>
</head>

<body>
    <h1>Formulaire ajout enseignant</h1>
    <!-- <a href="../../controllers/EtudiantCtrl.php?action=liste" >Go to enseignant list</a> <br > -->
  
    <form action="../../controllers/EnseignantCtrl.php" method="post">

    
    <table  align="center">
        <tr>
            <td>MATRICULE</td>
            <td><input type="text" name="matricule" autocomplete="off" required></td>
        </tr>
        <tr>
            <td>NOM</td>
            <td><input type="text" name="nom" autocomplete="off" required></td>
        </tr>
        <tr>
            <td>PRENOM</td>
            <td><input type="text" name="prenom" required></td>
        </tr>
        <tr>
            <td>SEXE</td>
            <td>
               <!-- H <input type="radio" name="sexe"> 
                F <input type="radio" name="sexe"> -->

                <select name="sexe" required>
                    <option value="">Veuillez choisir le sexe de l'étudiant</option>
                    <option value="H">Homme</option>
                    <option value="F">Femme</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>TEL</td>
            <td><input type="number" name="tel" required></td>
        </tr>
        <tr>
            <td>EMAIL</td>
            <td><input type="email" name="email" required></td>
        </tr>
        <tr>
            <td>ADRESSE</td>
            <td><input type="text" name="adresse" required></td>
        </tr>
        <tr>
            <input type="hidden" name="action" value="ajoute">
            <td colspan="2" style="text-align: center">  
<input type='reset' style="background-color: red; color: white" value="VIDER"> 
&nbsp; &nbsp; &nbsp;&nbsp;
<input type='submit' style="background-color: green; color: white" value="AJOUTER"></td>
        </tr>
    </table>
    </form>

    


   
</body>

</html>