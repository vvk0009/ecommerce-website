<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addproduct extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table = "product";
    protected $primarykey  = "p_id";
}
