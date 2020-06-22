<?php
require_once __DIR__ . '/../../libraries/vendor/autoload.php';

class AlarmModel {
    private $database;

    public function __construct() {
        $this->database = new Database('joomla', 'joomla', 'joomla', '127.0.0.1');
    }

    public function getData() {
        $data = $this->database->select('kish_assets', ['id' => 10], false, false, 'OR');

        print '>>>>>>>>>>>>>>>>>>>>>>' . "\n\n";
        print_r($this->database->result_array());
        print '>>>>>>>>>>>>>>>>>>>>>>' . "\n\n";
    }
    
    public function __destroy() {
        mysqli_close($this->database);
    }
}
