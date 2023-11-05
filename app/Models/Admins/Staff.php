<?php

namespace App\Models\Admins;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model {
    use HasFactory;
    protected $table = 'staff';
    protected $primaryKey = 'id';

}
