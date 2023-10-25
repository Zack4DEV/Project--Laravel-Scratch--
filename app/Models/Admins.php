<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admins extends Model {
    use HasFactory;
    protected $table = 'emp_login';
    protected $primaryKey = 'empid';

}