<?php
namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table         = '';
    protected $primaryKey    = 'id';
    protected $allowedFields = '';

    public function tables(string $tableName, string $primaryKey, array $allowedFields)
    {
        $this->table         = $tableName;
        $this->primaryKey    = $primaryKey;
        $this->allowedFields = $allowedFields;
    }

    public function login(string $username, string $password)
    {
        return $this->where(['username' => $username, 'password' => $password])->first();
    }

    public function valueExists(string $value): bool
    {
        $strval = strtolower($value);
        return $this->where('categories', $strval)->countAllResults() > 0;
    }

    public function insertRecord(array $data)
    {
        return $this->insert($data);
    }
}
