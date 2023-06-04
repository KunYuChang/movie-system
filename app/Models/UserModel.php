<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $returnType       = 'object'; 
    protected $useSoftDeletes   = false;
    protected $allowedFields    = ['user', 'email', 'password']; // 不允許寫入type, 避免攻擊者用惡意方式提權
    
    public function passwordHash($password) {
        return password_hash($password, PASSWORD_DEFAULT);
    }

    public function passwordVerify($inputPassword, $passwordHash) {
        return password_verify($inputPassword, $passwordHash);
    }
}
