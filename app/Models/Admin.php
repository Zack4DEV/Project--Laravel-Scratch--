<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model {
    use HasFactory;
    protected $table = 'emp_login';
    protected $primaryKey = 'empid';

}
