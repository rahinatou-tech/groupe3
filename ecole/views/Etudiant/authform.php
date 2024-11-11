<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulaire d'Authentification</title>
<style>
body {
font-family: Arial, sans-serif;
background-color: #f4f4f4;
display: flex;
justify-content: center;
align-items: center;
height: 100vh;
margin: 0;
}
.container {
background-color: #4a90e2; /* Couleur de fond modifiée */
padding: 2rem;
border-radius: 8px;
box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
width: 300px;
box-sizing: border-box;
color: white; /* Couleur du texte */
}
h2 {
text-align: center;
margin-bottom: 1.5rem;
}
input[type="text"],
input[type="password"] {
width: 100%;
padding: 10px;
margin: 0.5rem 0;
border: 1px solid #ccc;
border-radius: 4px;
}
button {
width: 100%;
padding: 10px;
background-color: #28a745;
color: white;
border: none;
border-radius: 4px;
cursor: pointer;
font-size: 1rem;
}
button:hover {
background-color: #218838;
}
.error {
color: red;
font-size: 0.9rem;
text-align: center;
}
</style>
</head>
<body>
<div class="container">
<h2>Connexion</h2>
<form  action="../../controllers/EtudiantCtrl.php" method="post"  id="authForm">
<input type="text" id="username" placeholder="Nom d'utilisateur" required>
<input type="password" id="password" placeholder="Mot de passe" required>
<button type="submit">Se connecter</button>
<p class="error" id="errorMsg"></p>
</form>
</div>

</body>
</html>