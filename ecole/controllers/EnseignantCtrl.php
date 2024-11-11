<?php
require_once('../models/EnseignantService.php');

$etService = new EnseignantService();

if (isset($_GET['action']))
    $action = $_GET['action'];
if (isset($_POST['action']))
    $action = $_POST['action'];





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




if ($action == 'ajoute') {
   // 1. recupertaion de donnees
    $matricule = $_POST['matricule'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $sexe = $_POST['sexe'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $adresse = $_POST['adresse'];

    //2. Appel du model
   $etService->addenseignant($matricule, $nom, $prenom, $sexe, $tel, $email, $adresse );

    //3. appel de la vue
   Header('Location:../views/Enseignant/liste.php?message=Enseignant ajouté');
}


if($action=='editForm'){
    $matricule=$_GET['matricule'];
    Header('Location:../views/Enseignant/edit.php?matricule='.$matricule);
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
    $etService->editenseignant($matricule, $nom, $prenom, $sexe, $tel, $email,$adresse);

    //3. appel de la vue
    Header('Location:../views/Enseignant/liste.php?message=Enseignant modifié');
}