<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    public function run()
    {
        // Engineering departments
        $engineeringDepts = [
            ['college_id' => 1, 'department_name' => 'Civil Engineering', 'department_code' => 'CE'],
            ['college_id' => 1, 'department_name' => 'Mechanical Engineering', 'department_code' => 'ME'],
            ['college_id' => 1, 'department_name' => 'Electrical Engineering', 'department_code' => 'EE'],
            ['college_id' => 1, 'department_name' => 'Computer Engineering', 'department_code' => 'CPE'],
            ['college_id' => 1, 'department_name' => 'Chemical Engineering', 'department_code' => 'CHE'],
        ];

        // Business departments
        $businessDepts = [
            ['college_id' => 2, 'department_name' => 'Accounting', 'department_code' => 'ACCT'],
            ['college_id' => 2, 'department_name' => 'Marketing', 'department_code' => 'MKT'],
            ['college_id' => 2, 'department_name' => 'Finance', 'department_code' => 'FIN'],
            ['college_id' => 2, 'department_name' => 'Management', 'department_code' => 'MGT'],
            ['college_id' => 2, 'department_name' => 'Economics', 'department_code' => 'ECON'],
        ];

        // Add all departments
        $departments = array_merge($engineeringDepts, $businessDepts);
        
        // Add more departments from other colleges as needed
        
        foreach ($departments as $department) {
            Department::create($department);
        }
    }
}
