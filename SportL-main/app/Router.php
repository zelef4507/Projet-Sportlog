<?php
namespace App;

use AltoRouter;
use App\Controllers\Account\AccountController;
use App\Controllers\Account\LogController;
use App\Controllers\Errors\ErrorsController;
use App\Controllers\Page\PageController;
use App\Controllers\Profiles\ProfilesController;

/**
 * Class Router
 * @package App
 */
class Router {

    # Singleton router
    private static $rootr;

    # Default template
    private $template = "default";

    # Actual page name
    private $actual;

    # Actual page category
    private $category;

    # Actual page content
    private $content;

    # AltoRouter
    private $router;

    # Root path
    private $path = "/SportLog/";

    # Params
    private $params;


    # List pages to map
    private $pages = array(
        1 => array(
            "name" => "home",
            "target" => "home",
            "route" => "",
            "post" => true
        ),
        2 => array(
            "name" => "signup",
            "target" => "signup",
            "route" => "signup",
            "post" => true
        ),
        3 => array(
            "name" => "signin",
            "target" => "signin",
            "route" => "signin",
            "post" => true
        ),
        4 => array(
            "name" => "account",
            "target" => "account",
            "route" => "account",
            "post" => true
        ),
        5 => array(
            "name" => "logout",
            "target" => "logout",
            "route" => "logout",
            "post" => true
        ),
        6 => array(
            "name" => "aboutus",
            "target" => "aboutus",
            "route" => "aboutus",
            "post" => false
        ),
        7 => array(
            "name" => "profiles",
            "target" => "profiles",
            "route" => "profiles",
            "post" => true
        ),
        8 => array(
            "name" => "profile",
            "target" => "profiles",
            "route" => "profiles/[i:id]",
            "post" => true
        ),
        9 => array(
            "name" => "download",
            "target" => "download",
            "route" => "download",
            "post" => false
        ),
    );

    /**
     * Return singleton Router
     * @return Router
     */
    public static function getRouter() {

        if(self::$rootr === null) {
            self::$rootr = new Router();
        }


        return self::$rootr;

    }

    /**
     * Initialise router
     */
    public function init() {

        $this->router = new AltoRouter();

        $this->router->setBasePath($this->path);

        foreach ($this->pages as $page) {

            $this->router->map("GET", $page['route'], $page['target'], $page['name']);

            if($page['post']) {
                $this->router->map("POST", $page['route'], $page['target']);
            }

        }





        $match = $this->router->match();


        if($match !== false) {

            $this->params = $match['params'];

            switch ($match['target']) {
                case "home":
                    $this->actual = "Accueil";
                    $this->category = 1;
                    $controller = new PageController();
                    $controller->home();
                    break;

                case "profiles":
                    $this->actual = "Profiles";
                    $this->category = 2;
                    $controller = new ProfilesController();
                    $controller->list();
                    break;

                case "account":
                    $this->actual = "Mon compte";
                    $this->category = 99;
                    $controller = new AccountController();
                    $controller->account();
                    break;


                case "logout":
                    $this->actual = "Me déconnecter";
                    $this->category = 99;
                    $controller = new LogController();
                    $controller->logout();
                    break;

                case "signup":
                    $this->actual = "S'inscrire";
                    $this->category = 99;
                    $controller = new LogController();
                    $controller->register();
                    break;

                case "signin":
                    $this->actual = "Se connecter";
                    $this->category = 99;
                    $controller = new LogController();
                    $controller->login();
                    break;

                case "aboutus":
                    $this->actual = "Qui nous sommes ?";
                    $this->category = 5;
                    $controller = new PageController();
                    $controller->aboutus();
                    break;

                case "download":
                    $this->actual = "Télécharger l'application";
                    $this->category = 6;
                    $controller = new PageController();
                    $controller->download();
                    break;
            }




        } else {

            $this->actual = "Erreur 404";
            $this->category = 99;
            $error404 = new ErrorsController();
            $error404->e_404();

        }



    }

    /**
     * Get the actual page content
     * @return Html $content
     */
    public function getContent() {
        return $this->content;
    }


    /**
     * Get the actual page display name
     * @return Array
     */
    public function getPageDisplay() {
        return $this->actual;
    }

    /**
     * Get the actual page category
     * @return String
     */
    public function getPageCategory() {
        return $this->category;
    }

    /**
     * Echo Active if active page
     * @param $page String
     */
    public function active($page) {
        if($page == $this->getPageCategory()) {
            echo "active";
        }
    }

    /**
     * @param $name
     * @return String
     */
    public function getLink($name, $param = []) {
        return $this->router->generate($name, $param);
    }

    /**
     * @return mixed
     */
    public function getParam() {
        return $this->params;
    }



}