<?php
require_once('../models/SalleService.php');

$etService = new SalleService();

if (isset($_GET['action']))
    $action = $_GET['action'];
if (isset($_POST['action']))
    $action = $_POST['action'];


    if ($action == 'salle'){

        $enseignant=$etService->getEnseignants();
        $etudiant=$etService->getEtudiants($nom);
        Header('Location:../views/Salles/form.php');

    }






if ($action == 'form') {
    Header('Location:../views/Enseignant/form.php');
    
}

if ($action == 'liste') {
    Header('Location:../views/Enseignant/liste.php');
}

if ($action == 'delete') {
    //1.recuperation des donnees
    $matricule=$_GET['matricule'];

    //2.appel du model
    $etService->delete($matricule);

    //3.redirection vers la vue
    Header('Location:../views/Enseignant/liste.php?message=Enseignant supprimé');
 
}

if ($action == 'valide') {
   // 1. recupertaion de donnees
    $numero = $_POST['numero'];
    $nomenseignant = $_POST['nomenseignant'];
    $nometudiants = $_POST['nometudiants'];
    

    //2. Appel du model
  $etService->addsalle($numero, $nomenseignant, $nometudiants);

    //3. appel de la vue
   Header('Location:../views/Salles/liste.php?message=Enseignant ajouté');
}










if ($action == 'modifier') {
    //1. recupertaion de donnees
    $matricule = $_POST['matricule'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $sexe = $_POST['sexe'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $adresse = $_POST['adresse'];



    //2. Appel du model
   // $etService->editenseignant($matricule, $nom, $prenom, $sexe, $tel, $email,$adresse);

    //3. appel de la vue
    Header('Location:../views/Enseignant/liste.php?message=Enseignant modifié');
}