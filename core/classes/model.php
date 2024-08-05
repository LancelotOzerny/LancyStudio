<?php
namespace Core\Classes;

use Core\Database\Database;

class Model
{
    protected string $table = '';

    private $querySql = '';
    private $query = null;


    public function select(array $fieldsList = [])
    {
        $fieldsStr = '';

        if (empty($fieldsList))
        {
            $fieldsStr = '*';
        }
        else
        {
            $fieldsStr .= join(', ', $fieldsList);
        }

        $this->querySql .= "SELECT $fieldsStr FROM $this->table";
    }

    public function query()
    {
        $this->query = Database::getConnection()->query($this->querySql);
    }

    public function getAll() : array
    {
        return $this->query->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getSql()
    {
        return $this->querySql;
    }
}