<?php
  class DbConnection {
    //private $user = 'root';
    private $user = "helioviewer";
    //private $password = '';
    private $password = "helioviewer";
    private $host = "localhost";
    private $db = "esahelio_patrick";
  
    public function __construct($user = null, $password = null, $host = null, $db = null) {
      if ($user) $this->user = $user;
      if ($password) $this->password = $password;
      if ($host) $this->host = $host;
      if ($db) $this->db = $db;
      $this->connect();
    }
  
    public function connect() {
      if (!mysql_pconnect($this->host, $this->user, $this->password))
        die('Error connecting to data base: ' . mysql_error());
      mysql_select_db($this->db);
    }
    
    public function query($query) {
      return mysql_query($query);
    }
  }
?>