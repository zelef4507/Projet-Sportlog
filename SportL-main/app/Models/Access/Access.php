<?php


namespace App\Models\Access;


use App\Core\Model\Model;

/**
 * Class Access
 * @package App\Models\Access
 */
class Access extends Model {


    public function add($id) {

        $date = time();

        $this->db->prepare("
            INSERT INTO access(identifiant, date_achat)
            VALUES(?, ?)
        ", [$id, $date]);

    }

    public function remove($id) {

        $this->db->prepare("
            DELETE FROM access
            WHERE identifiant = ?
        ", [$id]);

    }

    public function is($id = null) {

        if($id == null) {
            $session = Model::getModel("Session\Session");
            $id = $session->get("identifiant");
        }

        return $this->count($id) > 1;

    }

    public function count($id) {

        return $this->db->prepare("
            SELECT count(*) AS nbr
            FROM access WHERE identifiant = ?
        ", [$id])->fetch()['nbr'];

    }

    public function get_table($id) {

        return $this->db->prepare("
            SELECT * FROM access
            WHERE identifiant = ?
        ", [$id])->fetch();

    }



}