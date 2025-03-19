<?php

namespace Database\Seeders;

use App\Models\College;
use Illuminate\Database\Seeder;

class CollegeSeeder extends Seeder
{
    public function run()
    {
        $colleges = [
            ['college_name' => 'College of Engineering', 'college_code' => 'ENG'],
            ['college_name' => 'College of Business', 'college_code' => 'BUS'],
            ['college_name' => 'College of Arts and Sciences', 'college_code' => 'ART'],
            ['college_name' => 'College of Education', 'college_code' => 'EDU'],
            ['college_name' => 'College of Medicine', 'college_code' => 'MED'],
            ['college_name' => 'College of Law', 'college_code' => 'LAW'],
            ['college_name' => 'College of Information Technology', 'college_code' => 'IT'],
            ['college_name' => 'College of Agriculture', 'college_code' => 'AGR'],
        ];

        foreach ($colleges as $college) {
            College::create($college);
        }
    }
}
