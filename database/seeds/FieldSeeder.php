<?php

use Illuminate\Database\Seeder;
use App\{Field, Industry};

class FieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Field::create([
            'industry_id' => Industry::byName('Construction')->id,
            'name' => 'Architectural Metal & Glass'
        ]);

        Field::create([
            'industry_id' => Industry::byName('Construction')->id,
            'name' => 'Retail'
        ]);

        Field::create([
            'industry_id' => Industry::byName('Fashion')->id,
            'name' => 'Accounting'
        ]);
    }
}
