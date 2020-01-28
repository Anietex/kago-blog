<?php
namespace Kago\Core\Database;


use PDO;

class Database
{

    /**
     * @var \PDO|null
     */
    protected $DB;

    public function __construct()
    {

        $this->DB = DatabaseConnection::getConnection();
    }

    public function selectOne($table, string $criteria = '', $values = [], $columns = "*"){

        $stmt = $this->DB->prepare("SELECT $columns FROM $table $criteria");
        $stmt->execute($values);
        return $stmt->fetch(PDO::FETCH_ASSOC);

    }

    public function create($table, $data){

        $columns = array_keys($data);
        $values = array_values($data);

        $placeholders = implode(',',array_fill(0,count($columns),'?'));
        $columns = implode(',',$columns);

       $insertSQL = "INSERT INTO $table ($columns) values ($placeholders)";
        $stmt = $this->DB->prepare($insertSQL);
        $stmt->execute($values);

        $data['id'] = $this->DB->lastInsertId();
        return $data;
    }

    public function selectMany(string $table, string $columns = '*'){
        $stmt = $this->DB->prepare("SELECT $columns FROM $table");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function update(){

    }

    public function delete($table, $id){
        $stmt = $this->DB->prepare("DELETE from $table WHERE id =?");
       return $stmt->execute([$id]);
    }
}