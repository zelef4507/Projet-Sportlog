<?php


namespace App\Models\Profiles;


use App\Core\Model\Model;

class Postes extends Model {

    public function getAll() {

        return $this->db->prepare("
            SELECT * FROM postes
        ");

    }

}