<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    use HasFactory;
    protected $table= "teacher";
    protected $primaryKey= "teacherId";
    protected $fillable=['teacherName','phone','adharNumber','Qualification','address','docPhoto','status'];
    
}
