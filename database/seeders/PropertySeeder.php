<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $properties = [
            ['name' => 'Wooden Drive 1',        'location' => 'Lucan',         'number' => '101',    'city' => 'Dublin',    'country' => 'Ireland'],
            ['name' => 'Wooden Drive 2',        'location' => 'Lucan',         'number' => '102',    'city' => 'Dublin',    'country' => 'Ireland'],
            ['name' => 'Wooden Drive 3',        'location' => 'Lucan',         'number' => '103',    'city' => 'Dublin',    'country' => 'Ireland'],
            ['name' => 'Wooden Drive 4',        'location' => 'Lucan',         'number' => '104',    'city' => 'Dublin',    'country' => 'Ireland'],
            ['name' => 'Wooden Drive 5',        'location' => 'Lucan',         'number' => '105',    'city' => 'Dublin',    'country' => 'Ireland'],
            ['name' => 'Wooden Drive 6',        'location' => 'Lucan',         'number' => '106',    'city' => 'Dublin',    'country' => 'Ireland'],
            ['name' => 'Wooden Drive 7',        'location' => 'Lucan',         'number' => '107',    'city' => 'Dublin',    'country' => 'Ireland'],
            ['name' => 'Wooden Drive 8',        'location' => 'Lucan',         'number' => '108',    'city' => 'Dublin',    'country' => 'Ireland'],
            ['name' => 'Wooden Drive 9',        'location' => 'Lucan',         'number' => '109',    'city' => 'Dublin',    'country' => 'Ireland'],
            ['name' => 'Wooden Drive 10',       'location' => 'Lucan',         'number' => '110',      'city' => 'Dublin',    'country' => 'Ireland'],
            ['name' => 'Wooden Drive 11',        'location' => 'Lucan',         'number' => '111',    'city' => 'Dublin',    'country' => 'Ireland'],
            ['name' => 'Wooden Drive 12',        'location' => 'Lucan',         'number' => '112',    'city' => 'Dublin',    'country' => 'Ireland'],
            ['name' => 'Wooden Drive 13',        'location' => 'Lucan',         'number' => '113',    'city' => 'Dublin',    'country' => 'Ireland'],
            ['name' => 'Wooden Drive 14',        'location' => 'Lucan',         'number' => '114',    'city' => 'Dublin',    'country' => 'Ireland'],
            ['name' => 'Wooden Drive 15',        'location' => 'Lucan',         'number' => '115',    'city' => 'Dublin',    'country' => 'Ireland'],
        ];

        foreach ($properties as $property) {
            \App\Models\Property::insert(
                ['name' => $property['name'],      'location' => $property['location'],       'number' => $property['number'],     'city' => $property['city'],     'country' => $property['country']]
            );
        }
    }
}
