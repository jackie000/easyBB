<?php
namespace Mysql;
class UsersModel extends \Mysql\AbstractModel{

    public function __construct(){
        $this->_tableName = 'users';
    }

}
?>
