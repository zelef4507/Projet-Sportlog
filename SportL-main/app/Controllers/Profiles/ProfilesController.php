<?php


namespace App\Controllers\Profiles;


use App\Core\Controller\Controller;
use App\Core\Model\Model;
use App\Router;

/**
 * Class ProfilesController
 * @package App\Controllers\Profiles
 */
class ProfilesController extends Controller {

    # Template
    protected $template = "default";

    /**
     * ProfilesController constructor.
     */
    public function __construct() {

        $this->viewPath = ROOT . '\\SportLog\\Views\\';
    }

    public function list() {
        $profiles_model = Model::getModel("Profiles\Profiles");
        $param = Router::getRouter()->getParam();

        if(isset($param['id'])) {

            $id = $param['id'];

            $profil = $profiles_model->get($id);

            if($profil !== false) {
                $this->render("Profiles.profil", compact("profil"));
            } else {
                echo "existe pas";
            }


        } else {

            if(isset($_POST['search'])) {
                $name = null;
                if(isset($_POST['search_name']) && !empty($_POST['search_name'])) {
                    $name = htmlspecialchars($_POST['search_name']);
                }
                $sexe = null;
                if(isset($_POST['genre']) && !empty($_POST['genre'])) {
                    $sexe_brut = $_POST['genre'];
                    if($sexe_brut == "1") {
                        $sexe = "1";
                    } elseif ($sexe_brut == "2") {
                        $sexe = "2";
                    }
                }


                $postes = [];
                $postes_model = Model::getModel("Profiles\Postes");
                $list_postes = $postes_model->getall();

                foreach ($list_postes as $pst) {
                    if(isset($_POST['poste'.$pst['id']])) {
                        array_push($postes, $pst['id']);
                    }
                }


                $list = $profiles_model->like($name, $sexe, $postes);


                $this->render("Profiles.list", compact("list"));
            } else {
                $list = $profiles_model->getAll();

                $this->render("Profiles.list", compact("list"));
            }

        }

    }

}