<?php
class Bootstrap extends Yaf_Bootstrap_Abstract{

    public function _initConfig(){
        Yaf_Registry::set('config', Yaf_Application::app()->getConfig() );
    }

    public function _initRoute(Yaf_Dispatcher $dispatcher){
        //Yaf_Dispatcher::getInstance()->getRouter()->addRoute(
        //    "supervar", new Yaf_Route_Supervar("r")
        //);
        //Yaf_Dispatcher::getInstance()->getRouter()->addRoute(
        //    "simple", new Yaf_Route_Simple( 'm', 'c', 'a' )
        //);
        $route = new Yaf_Route_Rewrite(
            '/a/:id',
            array(
                'controller'=>'index',
                'action'=>'content'
            )
        );
        //Yaf_Dispatcher::getInstance()->getRouter()->addRoute( 'a', $route );

        $route = new Yaf_Route_Regex(
            '#/a/(\d+)#',
            array(
                'controller'=>'index',
                'action'=>'content'
            ),
            array(
                1=>'id'
            )
        );
        Yaf_Dispatcher::getInstance()->getRouter()->addRoute( 'reg', $route );
    }

    public function _initDatabase(){
        Yaf_Registry::set( 'database', Yaf_Registry::get('config')->database->master->toArray() );
    }

    public function _initPlugin(Yaf_Dispatcher $dispatcher){

        $dispatcher->registerPlugin( new DbPlugin() );
        $dir =  APP_PATH . DIRECTORY_SEPARATOR . 'application' . DIRECTORY_SEPARATOR . 'views' ;
        $file = $dir . DIRECTORY_SEPARATOR . 'layout' . DIRECTORY_SEPARATOR . 'default.html';
        $dispatcher->registerPlugin( new LayoutPlugin( $file, $dir ) ); 
    }

    public function _initTest(){
        //var_dump("aa");
        //echo "<br/><br/>";

    }

}
?>
