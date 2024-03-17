<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Classes;

class Students extends Model
{
    use HasFactory;
    protected $table= "students";
    protected $primaryKey="stdId";
    protected $fillable=['stdName','classId','stdIc','fathersName','mothersName','dob','phoneNo','alternatePhone','stdGender','address','stdImage','status'];
    function classes(){
        return $this->belongsTo(Classes::class,'classId','classId');
    }
}
