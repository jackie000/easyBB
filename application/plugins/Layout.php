<?php

class LayoutPlugin extends Yaf_Plugin_Abstract {
    private $layoutDir;
    private $layoutFile;
    private $layoutVar = array();

    public function __construct( $file, $dir ){
        $this->layoutFile = $file;
        $this->layoutDir = $dir;
    }

    public function __set( $name, $value ){
        $this->layoutVar[$name] = $value;
    }

    public function routerStartup(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {

    }


    public function routerShutdown(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
    }


    public function dispatchLoopStartup(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
    }

    public function preDispatch(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
    }

    public function postDispatch(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
        $body = $response->getBody();
        $response->clearBody();

        $layout = new Yaf_View_Simple( $this->layoutDir );
        $layout->content = $body;

        $layout->assign('layout', $this->layoutVar);
        $response->setBody($layout->render($this->layoutFile));
    }

    public function dispatchLoopShutdown(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
        //echo "plugin 6\n";
        //var_dump( \Db::getInstance()->error() );
    }
}

?>
