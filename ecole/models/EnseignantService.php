<?php
require_once('Provider.php');

class EnseignantService
{
    private $connexion;

    function __construct()
    {
        $p = new Provider();
        $this->connexion = $p->getconnection();
    }


   



    

    public function addenseignant($matricule, $nom, $prenom, $sexe, $tel, $email,$adresse)
    {
        $requete = 'insert into enseignant (matricule, nom, prenom, sexe, tel, email, adresse) values (:mat, :nm, :pr, :sx, :tl, :mail, :adres)';
        $stat = $this->connexion->prepare($requete);
        $rs = $stat->execute([
            'mat' => $matricule,
            'nm' => $nom,
            'pr' => $prenom,
            'sx' => $sexe,
            'tl' => $tel,
            'mail' => $email,
            'adres' => $adresse
        ]);



    }

    public function editenseignant($matricule, $nom, $prenom, $sexe, $tel, $email,$adresse)
    {

        $requete='update enseignant set nom=:nm, prenom=:pr, sexe=:sx, tel=:t, email=:mail,adresse=:adres where matricule=:m';
        $stmt=$this->connexion->prepare($requete);
        $result=$stmt->execute([
            
            'nm'=> $nom,
            'pr'=> $prenom,
            'sx'=> $sexe,
            't'=> $tel,
            'mail'=> $email,
            'adres'=> $adresse,
            'm'=> $matricule
        ]);

    }


    public function getByMatricule($matricule)
    {
        $requete="select * from enseignant where matricule=:mat";
        $stmt=$this->connexion->prepare($requete);
        $res=$stmt->execute([
            'mat'=> $matricule
        ]);
        $enseignant=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $enseignant[0];
    }

    public function getAll()
    {
        $requete = 'select * from enseignant order by matricule desc';
        $st = $this->connexion->query($requete);
        $enseignant = $st->fetchAll(PDO::FETCH_ASSOC);
        return $enseignant;
    }

    public function delete($matricule)
    {
        $requete='delete from enseignant where matricule=:m';
        $sta=$this->connexion->prepare($requete);
        $res=$sta->execute([
            'm'=> $matricule
        ]);
    }

}