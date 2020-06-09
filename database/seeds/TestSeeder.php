<?php

use Illuminate\Database\Seeder;
use App\Test;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Test::create([
            'name' => 'mahmoud saeed',
            'spec' => 'web development',
            'img' => '1.png',
            'desc' => 'Learn how to develop effective and captivating websites using the latest web development tools and practices. Gain experience developing with HTML, JavaScript, CSS, Python, and more. Our expert authors guide you through development and testing via easy-to-follow web development courses.'
        ]);
        Test::create([
            'name' => 'mohamed sherief',
            'spec' => 'dentist',
            'img' => '2.png',
            'desc' => 'Learn how to develop effective and captivating websites using the latest web development tools and practices. Gain experience developing with HTML, JavaScript, CSS, Python, and more. Our expert authors guide you through development and testing via easy-to-follow web development courses.'
        ]);
        Test::create([
            'name' => 'mohamed magdy',
            'spec' => 'web design',
            'img' => '3.png',
            'desc' => 'Learn how to develop effective and captivating websites using the latest web development tools and practices. Gain experience developing with HTML, JavaScript, CSS, Python, and more. Our expert authors guide you through development and testing via easy-to-follow web development courses.'
        ]);
        Test::create([
            'name' => 'yousef ismaiel',
            'spec' => 'web design',
            'img' => '1.png',
            'desc' => 'Learn how to develop effective and captivating websites using the latest web development tools and practices. Gain experience developing with HTML, JavaScript, CSS, Python, and more. Our expert authors guide you through development and testing via easy-to-follow web development courses.'
        ]);

    }
}
