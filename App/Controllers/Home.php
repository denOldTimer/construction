<?php
namespace App\Controllers;
use App\Core\Controller;
use App\Core\View;
/**
 *  Construction
 */
class Home extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    protected function before(){}

    public function indexAction( $args = array() ){
        //casesensitieve
        $viewName = strtolower($args['controller']);

        $scMeta = self::getScMeta();
        $scMeta['scMetaOgUrl']          = $scMeta['scMetaOgUrl'] .'/'.$args['lang'].'/'.$args['controller'].'/'.$args['action'];
        $scMeta['scMetaOgTitle']        = ucfirst ( $args['controller'] );
        $scMeta['scMetaOgDescription']  = $scMeta['scMetaOgDescription'].' '.$scMeta['scMetaDescription'];
        $scMeta['scMetaOgImage']        = $scMeta['scMetaOgImage'].'homepage.gif';

        $scVariables = self::getScVariables();
        $scVariables['scLang'] 			= $args['lang'];
        $scVariables['scController'] 	= strtolower($args['controller']);
        $scVariables['scAction'] 		= $args['action'];
        $scVariables['scTitle'] 		= ucfirst ( $args['controller'] );

        //var_dump($scVariables);

        //$trans = self::getTranslation($args['lang'], $viewName);
        $trans = self::getTranslation($args['lang']);
        //var_dump($trans);

         //$data = array_merge($scMeta, $scVariables, $scImages, $scLinks, $scLinksFooter);
        $data = array_merge($scMeta, $scVariables);
        

        View::render('f2', $viewName, $data, $trans);
        //View::render('f2', args['controller'], $data);
    }

    protected function after(){}


}
