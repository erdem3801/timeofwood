<?php
namespace App\Models;

use CodeIgniter\Model;

class product_galeri extends Model
{
   
    protected $table      = 'galeri';
    protected $primaryKey = 'galeri_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['image_url','product_id'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = true;
   
}