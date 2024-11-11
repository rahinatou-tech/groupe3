<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulaire avec listes déroulantes</title>
<style>
body {
font-family: Arial, sans-serif;
margin: 0;
padding: 0;
box-sizing: border-box;
}
.container {
max-width: 600px;
margin: 50px auto;
padding: 20px;
border: 1px solid #ccc;
border-radius: 5px;
background-color: #f9f9f9;
}
label {
    display: block;
margin-bottom: 10px;
}
select {
width: 100%;
padding: 5px;
margin-bottom: 10px;
}
button {
padding: 10px 20px;
background-color: #007bff;
color: #fff;
border: none;
border-radius: 5px;
cursor: pointer;
}
</style>
</head>
<body>
<div class="container">
<h2>Sélectionnez l'étudiant et l'enseignant</h2>
<form action="../../controllers/SalleCtrl.php">

<label for="numero">Numero de salle:</label>
<select name="numero" >
<?php for ($i = 1; $i <= 10; $i++) : ?>
<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
<?php endfor; ?>
</select>

<label for="nometudiants">Étudiant :</label>
<select name="nometudiants"  >
<option value="">moussa</option>
<option value="">rahinatou</option>
<option value="">haoua</option>
<option value="">ramatou</option>
<option value="">aichatou</option>
<option value="">mariama</option>
<option value="">kele</option>

</select>
<label for="nomenseignant">etudiants :</label>
<select name="nomenseignant" multiple>
<option value="">mr barmou</option>
<option value="">mr abdoulaye</option>
<option value="">mr sidikou</option>
<option value="">mr boubakar</option>
<option value="">mr karimou</option>
<option value="">mr Ali</option>
<option value="">mr soumana</option>
<input type="hidden" name="action" value="valide">
</select>
<button type="submit">Valider</button>
</form>
</div>
</body>
</html>
