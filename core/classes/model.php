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

    private function query()
    {
        $this->query = Database::getConnection()->query($this->querySql);
    }
    public function join(string $joinTable, string $from_field, string $to_field)
    {
        $joinSql = " JOIN $joinTable ON $from_field = $to_field";
        $this->querySql .= $joinSql;
    }
    public function where(array $params)
    {
        if (empty($params))
        {
            return;
        }

        $this->querySql .= ' WHERE ';
        $whereParams = [];
        foreach ($params as $key => $value)
        {
             $whereParams[] = "$key = " . (gettype($value) === 'integer' ? $value : "'$value'");
        }

        $this->querySql .= join(', ', $whereParams);
    }
    public function getAll() : array
    {
        $this->query();
        return $this->query->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function getFirst()
    {
        $this->query();
        return $this->query->fetch(\PDO::FETCH_ASSOC);
    }
    public function getSql()
    {
        return $this->querySql;
    }
}