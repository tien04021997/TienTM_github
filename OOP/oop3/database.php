<?php
class Database
{
    public $connection;
    private $ipDatabase;
    private $userDatabase;
    private $passDatabase;
    protected $databaseName;

    public function __construct($ipDatabase, $userDatabase, $passDatabase, $databaseName)
    {
        /**
         * Những thuộc tính hoặc method private thì chỉ có thể
         * truy cập được trong chính class đó
         */

        $this->ipDatabase = $ipDatabase;
        $this->userDatabase = $userDatabase;
        $this->passDatabase = $passDatabase;

        $this->databaseName = $databaseName;

        $this->connection = new mysqli($ipDatabase,$userDatabase,$passDatabase,$databaseName);

    }

    public function disconnect() {
        mysqli_close($this->connection);
    }
}