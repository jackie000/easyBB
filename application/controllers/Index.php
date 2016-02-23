<?php

class IndexController extends Yaf_Controller_Abstract {

    public function indexAction(){

    }

    public function contentAction(){
        $id = $this->getRequest()->getParam("id", 0);

        if( $id === 0 ){
            throw new Exception( 'page not found' );
        }

    }
}
?>
