<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
   
    protected $table      = 'ci4_table';
    protected $primaryKey = 'product_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['image_url','large_image_url', 'product_description' ,'product_price','product_dimension','product_title','rank' ,'redirectUrl'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = true;
   
}