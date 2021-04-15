<?php


namespace App\Controllers\Page;


use App\Core\Controller\Controller;
use App\Core\Model\Model;

/**
 * Class PageController
 * @package App\Controllers\Page
 */
class PageController extends Controller {

    protected $template = "default";


    public function __construct() {
        $this->viewPath = ROOT . '\\SportLog\\Views\\';
    }

    public function home() {
        $postes = Model::getModel("Profiles\Postes")->getAll();
        $this->render("home", compact("postes"));
    }

    public function aboutus() {
        $this->render("Pages.aboutus");
    }

    public function download() {
        $this->render("Pages.download");
    }

}