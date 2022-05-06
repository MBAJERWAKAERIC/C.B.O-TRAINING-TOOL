<?php

class DbConnector {

var $theQuery;
var $link;
    
    public function __construct() {
        ob_start();
  // Get the main settings from the array we just loaded
        $host = 'localhost';
        $db = 'capstone';
        $user = 'root';
        $pass = '';

        // Connect to the database
        $this->link = mysqli_connect($host, $user, $pass,$db);

    }
    function __destruct() {
        // var_dump($this->link);
        mysqli_close($this->link);
        ob_end_flush();
    }
function DbConnector(){

        // Get the main settings from the array we just loaded
        $host = 'localhost';
        $db = 'capstone';
        $user = 'root';
        $pass = '';

        // Connect to the database
        $this->link = mysqli_connect($host, $user, $pass,$db);
        // register_shutdown_function(array(&$this, 'close'));
        return $this->link;

    }
	
  //*** Function: query, Purpose: Execute a database query ***
    function query($query) {

        $this->theQuery = $query;
        return mysqli_query($this->link,$query);

    }

    //*** Function: fetchArray, Purpose: Get array of query results ***
    function fetchArray($result) {

        return mysqli_fetch_array($result);

    }

    //*** Function: close, Purpose: Close the connection ***
    function close() {

        mysqli_close($this->link);

    }
	
}

?>