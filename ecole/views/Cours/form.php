<html>

<head>
    <title>Formulaire ajout d'un cours</title>
</head>

<body>
    <h1>Formulaire ajout d'un corps</h1>
    <!--  <a href="../../controllers/EtudiantCtrl.php?action=liste" >Go to students list</a> <br > -->
  
     <form action="../../controllers/CourCtrl.php" method="post">

    
    <table  align="center">
        <tr>
            <td> NOM DU COURS</td>
            <td><input type="text" name="cour" autocomplete="off" required></td>
        </tr>
        <tr>
            <td>NIVEAU</td>
            <td><input type="text" name="niveau" autocomplete="off" required></td>
        </tr>
        <tr>
            <td>NOMBRE D'Etu</td>
            <td><input type="number" name="nbr_etudiant" required></td>
        </tr>
       
        <tr>
            <input type="hidden" name="action" value="ajout">
            <td colspan="2" style="text-align: center">  
<input type='reset' style="background-color: red; color: white" value="VIDER"> 
&nbsp; &nbsp; &nbsp;&nbsp;
<input type='submit' style="background-color: green; color: white" value="AJOUTER"></td>
        </tr>
    </table>
    </form>

    


   
</body>

</html>