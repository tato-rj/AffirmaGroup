<?php

use Illuminate\Database\Seeder;
use App\Industry;

class IndustrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Industry::create(['name' => 'Construction']);
        Industry::create(['name' => 'Fashion']);
        Industry::create(['name' => 'Technology']);
        Industry::create(['name' => 'Start-ups']);
        Industry::create(['name' => 'Legal']);
    }
}
