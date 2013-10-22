<?php

/**
 * Description of DbController
 *
 * @author Victor
 */
class DbController extends BaseController {

    public function getIndex()
    {
        return View::make("skins::dbview");
    }

    public function getGreeting() {
        $mysqlGopher = app('MysqlGopher');
        return $mysqlGopher->greeting();
    }
    
    public function getSelect($table = null)
    {
        return View::make("skins::dbview");
    }

    public function getTable($name = null)
    {
        die;
    }

    public function missingMethod($parameters = array())
    {
        return "Missing Method";
    }

}

?>
