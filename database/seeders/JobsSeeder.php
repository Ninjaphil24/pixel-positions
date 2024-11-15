<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Jobs;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;

class JobsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = Tag::factory(3)->create();
        Jobs::factory(20)->hasAttached($tags)->create(new Sequence(
            [
                'featured' => false,
                'schedule' => 'Full-time',
            ],
            [
                'featured' => true,
                'schedule' => 'Part-time',
            ]

        ));
    }
}
