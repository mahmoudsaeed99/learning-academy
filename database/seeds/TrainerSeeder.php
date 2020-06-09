<?php

use Illuminate\Database\Seeder;

use App\Trainer;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Trainer::create([
            'name' => 'mahmoud saeed',
            'spec' => 'web development',
            'img' => '1.png'
        ]);
        Trainer::create([
            'name' => 'mohamed sherief',
            'spec' => 'dentist',
            'img' => '1.png'
        ]);
        Trainer::create([
            'name' => 'mohamed magdy',
            'spec' => 'web design',
            'img' => '1.png'
        ]);
        Trainer::create([
            'name' => 'yousef ismaiel',
            'spec' => 'designer',
            'img' => '1.png'
        ]);
        Trainer::create([
            'name' => 'mohamed mahmoud',
            'spec' => 'english teacher',
            'img' => '1.png'
        ]);

    }
}
