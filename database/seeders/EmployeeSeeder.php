<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employees = [
            ['name' => 'Ciaran',                'location' => 'The green',     'number' => '100',    'city' => 'Louth',    'country' => 'Spain'],
            ['name' => 'Ciaran',                'location' => 'The green',     'number' => '101',    'city' => 'Louth',    'country' => 'Spain'],
            ['name' => 'Ciaran',                'location' => 'The green',     'number' => '102',    'city' => 'Louth',    'country' => 'Spain'],
            ['name' => 'Ciaran',                'location' => 'The green',     'number' => '103',    'city' => 'Louth',    'country' => 'Spain'],
            ['name' => 'Ciaran',                'location' => 'The green',     'number' => '104',    'city' => 'Louth',    'country' => 'Spain'],
            ['name' => 'Ciaran',                'location' => 'The green',     'number' => '105',    'city' => 'Louth',    'country' => 'Spain'],
            ['name' => 'Ciaran',                'location' => 'The green',     'number' => '106',    'city' => 'Louth',    'country' => 'Spain'],
            ['name' => 'Ciaran',                'location' => 'The green',     'number' => '107',    'city' => 'Louth',    'country' => 'Spain'],
            ['name' => 'Ciaran',                'location' => 'The green',     'number' => '108',    'city' => 'Louth',    'country' => 'Spain'],
            ['name' => 'Ciaran',                'location' => 'The green',     'number' => '109',    'city' => 'Louth',    'country' => 'Spain'],
            ['name' => 'Ciaran',                'location' => 'The green',     'number' => '110',    'city' => 'Louth',    'country' => 'Spain'],
            ['name' => 'Ciaran',                'location' => 'The green',     'number' => '111',    'city' => 'Louth',    'country' => 'Spain'],
            ['name' => 'Ciaran',                'location' => 'The green',     'number' => '112',    'city' => 'Louth',    'country' => 'Spain'],

        ];

        foreach ($employees as $employee) {
            \App\Models\Employee::insert(
                ['name' => $employee['name'],      'location' => $employee['location'],       'number' => $employee['number'],     'city' => $employee['city'],     'country' => $employee['country']]

            );
        }
    }
}
