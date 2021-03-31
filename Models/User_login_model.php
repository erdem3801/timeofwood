<?php
namespace App\Models;

use CodeIgniter\Model;

class User_login_model extends Model
{
   
    protected $table      = 'users';
    protected $primaryKey = 'user_id';
 

    protected $returnType     = 'array'; 

    protected $allowedFields = ['user_name', 'password'];
  
   
}