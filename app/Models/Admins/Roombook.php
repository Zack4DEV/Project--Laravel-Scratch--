<?php

namespace App\Models\Admins;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roombook extends Model {
    use HasFactory;
    protected $table = 'roombook';
    protected $primaryKey = 'id';

}
