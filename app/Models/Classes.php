<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Students;
use App\Models\ClassTeacher;

class Classes extends Model
{
    use HasFactory;
    protected $table= "classes";
    protected $primaryKey="classId";
    protected $fillable= ['className','status'];
    
    function students(){
        return $this->hasMany(Students::class,'classId','classId');
    }
    
    function classTeacher(){
        return $this->hasOne(Teachers::class,'classTeacherId');
    }
}
