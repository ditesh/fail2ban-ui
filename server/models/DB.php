<?php

/* A small convenience wrapper around the ADOdb5 library
*/
class DB {

    private $db;

    public function __construct(array $config) {

        $db = ADONewConnection("mysqli");
        $retval = $db->Connect($config["hostname"], $config["username"], $config["password"], $config["dbname"]);

        if ($retval === FALSE) throw new Exception("Unable to connect to database");
        $this->db = $db;

    }

    public function Execute($sql) {
        return $this->db->Execute($sql);
    }

    public function AutoInsert($table, $rs) {
        return $this->db->AutoExecute($table, $rs, "INSERT");
    }

    public function AutoUpdate($table, $rs, $val, $valname="id") {
        return $this->db->AutoExecute($table, $rs, "UPDATE", "$valname=".$this->db->qstr($val));
    }
}
