<?php class SkinsController extends Controller {

    public function getIndex()
    {
        return "asdffdfdfdkjdas;fkljaq]pafsdg['ad'";
        //return View::make("skins::dbview");
    }

    public function getHello($table = "") 
    {
        return View::make("skins::dbview");
    }
    
    /**
     * An example of IoC
     * 
     * @return type
     */
    public function getConnection() {
        $mysqlGopher = app('MysqlGopher');
        return $mysqlGopher->connection();
    }
    
    public function getSelect($table = null)
    {
        //return View::make("cart::dbview");
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
