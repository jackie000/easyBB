<?php
/**
* @file Abstract.php
* @brief 
* @author jackie <jackie@digiocean.cc>
* @version 1.0
* @date 2016-01-09
 */
namespace Business;
abstract class AbstractModel{

    static private $instance = [];

    //禁止clone
    final private function __clone(){
        return false;
    }

    public static function __callStatic( $name, $args){
        if( $name == "getInstance" ){
            $class = get_called_class();
            if( !isset( self::$instance[$class] ) ){
                self::$instance[$class] = new $class();
            }

            return self::$instance[$class];
        }
    }
}

?>
