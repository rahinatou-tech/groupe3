<?php
require_once('../models/CourService.php');

$etService = new CourService();

if (isset($_GET['action']))
    $action = $_GET['action'];
if (isset($_POST['action']))
    $action = $_POST['action'];





if ($action == 'form') {
    Header('Location:../views/Cours/form.php');
    
}

if ($action == 'liste') {
    Header('Location:../views/Cour/liste.php');
}

if ($action == 'delete') {
    //1.recuperation des donnees
    $niveau=$_GET['niveau'];

    //2.appel du model
    $etService->delete($niveau);

    //3.redirection vers la vue
    Header('Location:../views/Cours/liste.php?message=cour supprimé');
 
}




if ($action == 'ajout') {
   // 1. recupertaion de donnees
    $cour = $_POST['cour'];
    $niveau = $_POST['niveau'];
    $nbr_etudiant = $_POST['nbr_etudiant'];

    //2. Appel du model
  $etService->addcour($cour, $niveau, $nbr_etudiant);

    //3. appel de la vue
   Header('Location:../views/Cours/liste.php?message=cour ajouté');
}


if($action=='editForm'){
    $niveau=$_GET['niveau'];
    Header('Location:../views/Cours/edit.php?niveau='.$niveau);
}




if ($action == 'modifier') {
    //1. recupertaion de donnees
    $cour = $_POST['cour'];
    $niveau = $_POST['niveau'];
    $nbr_etudiant = $_POST['nbr_etudiant'];
    


    //2. Appel du model
    $etService->editcour($cour, $niveau, $nbr_etudiant);

    //3. appel de la vue
    Header('Location:../views/Cours/liste.php?message=cour modifié');
}