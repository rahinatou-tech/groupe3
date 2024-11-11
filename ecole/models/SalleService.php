<?php
require_once('Provider.php');

class SalleService
{
    private $connexion;

    function __construct()
    {
        $p = new Provider();
        $this->connexion = $p->getconnection();
    }


   


    public function getEnseignants()
    {
    $query = "SELECT nom FROM enseignant";
    $stmt = $this->connexion->query($query);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function getEtudiants()
    {
    $query = "SELECT nom FROM etudiant";
    $stmt = $this->connexion->query($query);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    //public function getEtudiants($nom)
    //{
      //  $requete="select nom from etudiant ";
        //$stmt=$this->connexion->prepare($requete);
        ////$res=$stmt->execute([
            //'nm'=> $nom
       // ]);
       // $etudiant=$stmt->fetchAll(PDO::FETCH_ASSOC);
       // return $etudiant[0];
   // }


   public function addsalle($numero, $nomenseignant, $nometudiants)
   {
       $requete = 'insert into salle (numero, nomenseignant, nometudiants) values (:num, :nmen, :nmet)';
       $stat = $this->connexion->prepare($requete);
       $rs = $stat->execute([
           'num' => $numero,
           'nmen' => $nomenseignant,
           'nmet' => $nometudiants
           
       ]);

    }

   


    public function getByMatricule($matricule)
    {
        $requete='select * from etudiant where matricule=:mat';
        $stmt=$this->connexion->prepare($requete);
        $res=$stmt->execute([
            'mat'=> $matricule
        ]);
        $etudiant=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $etudiant[0];
    }

    public function getAll()
    {
        $requete = 'select * from etudiant order by matricule desc';
        $st = $this->connexion->query($requete);
        $etudiants = $st->fetchAll(PDO::FETCH_ASSOC);
        return $etudiants;
    }

    public function delete($matricule)
    {
        $requete='delete from etudiant where matricule=:m';
        $sta=$this->connexion->prepare($requete);
        $res=$sta->execute([
            'm'=> $matricule
        ]);
    }

}