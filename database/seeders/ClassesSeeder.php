<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ClassTeacher;
use Faker\Factory as faker;

class ClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $faker=Faker::create();
        // for($i=1;$i<50;$i++){
        //     $students= new Students;
        //     $students->stdName= $faker->name;
        //     $students->classId= rand(1,12);
        //     $students->stdIc= rand(101,999);
        //     $students->fathersName= $faker->name;
        //     $students->mothersName= $faker->name;
        //     $students->dob= $faker->date;
        //     $students->phoneNo= $faker->numerify('## ##########');
        //     $students->alternatePhone= $faker->numerify('## ##########');
        //     $students->stdGender=$faker->randomElement(['Male','Female']);
        //     $students->address= $faker->address;
        //     $students->stdImage='myImg'.rand(10,30).'jpg';
        //     $students->status=1;
        //     $students->save();
        // }
        ClassTeacher::create([
            'name'=>'test',
            'classId'=>'1',
            'phone'=>'99999999',
            'address'=>'Gwalior',
        ]);
    }
}
