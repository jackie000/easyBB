<?php
namespace Dao;
class UsersModel extends \Dao\AbstractModel{

    public function getUsers( $id ){
        $user = \Mysql\UsersModel::getInstance();
        return $user->get( $user->getTable(), '*', ["user_id"=>$id]);
    }
}
?>
