<?php

namespace App\Models;

use CodeIgniter\Model;

class Item extends Model
{
    protected $table                = 'items';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = ['name','image','stok'];
}
