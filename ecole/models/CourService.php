<?php
require_once('Provider.php');

class CourService
{
    private $connexion;

    function __construct()
    {
        $p = new Provider();
        $this->connexion = $p->getconnection();
    }


   



    

    public function addcour($cour, $niveau, $nbr_etudiant)
    {
        $requete = 'insert into cour (cour, niveau, nbr_etudiant) values (:nm, :nv, :nb)';
        $stat = $this->connexion->prepare($requete);
        $rs = $stat->execute([
            
            'nm' => $cour,
            'nv' => $niveau,
            'nb' => $nbr_etudiant,
        ]);



    }

    public function editcour($cour, $niveau, $nbr_etudiant)
    {

        $requete='update cour set cour=:nm, niveau=:nv, nbr_etudiant=:nb where niveau=:nv';
        $stmt=$this->connexion->prepare($requete);
        $result=$stmt->execute([
            
            'nm'=> $cour,
            'nv'=> $niveau,
            'nb'=> $nbr_etudiant,
            
        ]);

    }


    public function getByniveau($niveau)
    {
        $requete="select * from cour where niveau=:nv";
        $stmt=$this->connexion->prepare($requete);
        $res=$stmt->execute([
            'nv'=> $niveau
        ]);
        $cour=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $cour[0];
    }

    public function getAll()
    {
        $requete = 'select * from cour';
        $st = $this->connexion->query($requete);
        $cour = $st->fetchAll(PDO::FETCH_ASSOC);
        return $cour;
    }

    public function delete($niveau)
    {
        $requete='delete from cour where niveau=:nv';
        $sta=$this->connexion->prepare($requete);
        $res=$sta->execute([
            'nv'=> $niveau
        ]);
    }

}