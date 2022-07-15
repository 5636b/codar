<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\Evento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Evento::factory()
            ->count(15)
            ->create();
    }
}
