<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class StaffBranchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $sampel = [
            ['staffNo' => 'SL21', 'sNAME' => 'John White', 'position' => 'Manager', 'salary' => '30000', 'branchNo' => 'B005', 'bAddress' => '22 Deer Rd, London'],
            ['staffNo' => 'SG37', 'sNAME' => 'Ann Beech', 'position' => 'Assistant', 'salary' => '12000', 'branchNo' => 'B003', 'bAddress' => '163 Main St, Glasgow'],
            ['staffNo' => 'SG14', 'sNAME' => 'David Ford', 'position' => 'Supervisor', 'salary' => '18000', 'branchNo' => 'B003', 'bAddress' => '163 Main St, Glasgow'],
            ['staffNo' => 'SA9', 'sNAME' => 'Mary Howe', 'position' => 'Assistant', 'salary' => '9000', 'branchNo' => 'B007', 'bAddress' => '16 Argyll St, Alberdeen'],
            ['staffNo' => 'SG5', 'sNAME' => 'Susan Brand', 'position' => 'Manager', 'salary' => '24000', 'branchNo' => 'B003', 'bAddress' => '163 Main St, Glasgow'],
            ['staffNo' => 'SL41', 'sNAME' => 'Julie Lee', 'position' => 'Assistant', 'salary' => '9000', 'branchNo' => 'B005', 'bAddress' => '22 Deer Rd, London'],
        ];

        DB::table('StaffBranch')->insert($sampel);
    }
}
