<?php

use Illuminate\Database\Seeder;

class WorkingReportsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('working_reports')->insert([
            [
                'employee_id' => 1,
                'working_date' => '2019-12-02',
                'working_hours' => 3,
                'summary' => 'aaaシステムの外部設計'
            ],
            [
                'employee_id' => 1,
                'working_date' => '2019-12-02',
                'working_hours' => 1,
                'summary' => 'aaaシステムのMTG'
            ],
            [
                'employee_id' => 2,
                'working_date' => '2019-12-02',
                'working_hours' => 1,
                'summary' => 'aaaシステムのMTG'
            ],
            [
                'employee_id' => 1,
                'working_date' => '2019-12-03',
                'working_hours' => 8,
                'summary' => 'aaaシステムの詳細設計'
            ]
         ]);
    }
}
