<?php


namespace App\Models\Profiles;


use App\Core\Model\Model;
use PDO;

class Profiles extends Model {


    public function get($id) {

        return $this->db->prepare("
            SELECT *, profiles.nom as nom, postes.nom as poste
            FROM profiles
            LEFT JOIN postes ON profiles.postes = postes.id
            WHERE profiles.id = ?
        ", [$id])->fetch(PDO::FETCH_ASSOC);


    }

    public function getAll() {

        return $this->db->prepare("
            SELECT *, profiles.nom as nom, postes.nom as poste
            FROM profiles
            LEFT JOIN postes ON profiles.postes = postes.id
        ")->fetchAll(PDO::FETCH_ASSOC);

    }

    public function getInterval($start, $end) {

        return $this->db->prepare("
            SELECT *, profiles.nom as nom, postes.nom as poste
            FROM profiles
            LEFT JOIN postes ON profiles.postes = postes.id
            LIMIT ?, ?
        ", [$start, $end])->fetchAll(PDO::FETCH_ASSOC);

    }

    public function like($name = null, $sexe = null, $postes= []) {

        $sql = "
            SELECT *, profiles.nom as nom, postes.nom as poste
            FROM profiles
            LEFT JOIN postes ON profiles.postes = postes.id
        ";

        $c = 0;
        if($name != null) {
            if($c == 0) $sql .= "WHERE ";
            $sql .= "
                profiles.nom LIKE :nom
                OR profiles.prenom LIKE :nom
            ";
            $nom = "%".$name."%";
            $c++;
        }

        if($sexe != null) {
            if($c == 0) {
                $sql .= "WHERE ";
            } else {
                $sql .= "AND ";
            }
            $sql .= "
                genre = :sexe
            ";
            $c++;
        }

        if($postes != []) {
            if($c == 0) {
                $sql .= "WHERE ";
            } else {
                $sql .= "AND ";
            }
            $cc = 0;
            foreach ($postes as $poste) {
                if($cc != 0) $sql .= "AND";
                $sql .= "profiles.postes LIKE '%". $poste."%'";
                $cc++;
            }
        }


        $result = $this->db->getPDO()->prepare($sql);

        if($name != null) $result->bindParam(":nom", $nom);

        if($sexe != null) $result->bindParam(":sexe", $sexe);

        $result->execute();

        return $result->fetchAll(PDO::FETCH_ASSOC);



    }



}