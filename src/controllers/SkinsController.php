<?php class SkinsController extends Controller {

    public function getIndex()
    {
        return "Laravella Skins";
    }

    public function getHello($table = "") 
    {
        return View::make(Options::get('skin')."dbview");
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
