<?php 

namespace App\Models;
use CodeIgniter\Model;

class UsersModel extends Model{

    protected $table = 'users';
    protected $primaryKey = 'idUser';

    public function getUser($userName){
        return $this -> asArray() -> where('user', $userName) -> first();
    }
}