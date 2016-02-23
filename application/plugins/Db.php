<?php

/**
* @file Db.php
* @brief 
* @author jackie <jackie@digiocean.cc>
* @version 1.0
* @date 2016-01-09
 */

class DbPlugin extends Yaf_Plugin_Abstract {
    public function routerStartup(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {

    }


    public function routerShutdown(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
    }


    public function dispatchLoopStartup(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
    }

    public function preDispatch(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
    }

    public function postDispatch(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
    }

    public function dispatchLoopShutdown(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
        //echo "plugin 6\n";
        //var_dump( \Db::getInstance()->error() );
    }
}

?>
