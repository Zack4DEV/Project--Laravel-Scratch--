<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model {
    use HasFactory;
    protected $table = 'signup';
    protected $primaryKey = 'UserId';

}