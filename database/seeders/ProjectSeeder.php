<?php
namespace Database\Seeders;
use App\Models\Project;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
        'title' => 'Pinki Yadav - Laravel Portfolio',
        'description' => 'Laravel, MySQL',
        'image' => null,
        'link' => 'https://pinkiyadav.github.io/'
    ]);

    Project::create([
        'title' => 'Stsinks - E-Commerce & WordPress',
        'description' => 'PHP, WordPress, WooCommerce, MySQL',
        'image' => null,
        'link' => 'https://www.stsinks.com/'
    ]);
    Project::create([
        'title' => 'Robson Pharmacy Media - E-Commerce & WordPress',
        'description' => 'PHP, WordPress, WooCommerce, MySQL',
        'image' => null,
        'link' => 'https://www.robsonpharmacymedia.co.uk/'
    ]);
    Project::create([
        'title' => 'Prescription2Learn - CodeIgniter Website',
        'description' => 'PHP, CodeIgniter, MySQL',
        'image' => null,
        'link' => 'https://www.prescription2learn.org/'
    ]);
    Project::create([
        'title' => 'Health Untangled - CodeIgniter Website',
        'description' => 'PHP, CodeIgniter, MySQL',
        'image' => null,
        'link' => ' https://www.healthuntangled.org/'
    ]);
    Project::create([
        'title' => 'RN New Grads - E-Commerce & WordPress',
        'description' => 'PHP, CodeIgniter, MySQL',
        'image' => null,
        'link' => 'https://rnnewgrads.com/'
    ]);
    Project::create([
        'title' => 'GiftsOnline4U – AI Image Generation, E-Commerce & WordPress',
        'description' => 'OpenAI API, Leonardo AI API, PHP, WordPress, WooCommerce',
        'image' => null,
        'link' => 'https://www.giftsonline4u.com/product/personalised-superhero-photo-puzzle-block/'
    ]);
    Project::create([
        'title' => 'Flipbook Application - Interactive / Flipbook Project',
        'description' => 'PHP, JavaScript, HTML5, CSS3, MySQL',
        'image' => null,
        'link' => 'https://flipbook.9277.us/'
    ]);
    Project::create([
        'title' => 'Pawan Jewellers - API Integration, E-Commerce & WordPress',
        'description' => 'PHP, REST APIs, Cron Jobs, MySQL, WordPress/WooCommerce',
        'image' => null,
        'link' => 'https://www.stsinks.com/'
    ]);
    Project::create([
        'title' => 'Empire Spares - API Integration, E-Commerce & WordPress',
        'description' => 'PHP, REST APIs, Cron Jobs, MySQL, WordPress/WooCommerce',
        'image' => null,
        'link' => 'https://www.empirespares.co.uk/'
    ]);
    Project::create([
        'title' => 'Cancer101 - Core php & E-Commerce',
        'description' => 'Php, MySQL, Authorize.net payment integration',
        'image' => null,
        'link' => 'https://cancer101.org'
    ]);
    Project::create([
        'title' => 'Pharmacy and Me - E-Commerce & WordPress',
        'description' => 'PHP, WordPress, WooCommerce, MySQL',
        'image' => null,
        'link' => 'https://www.pharmacyandme.co.uk'
    ]);
    Project::create([
        'title' => 'Commercial Linen - E-Commerce & WordPress',
        'description' => 'PHP, WordPress, WooCommerce, MySQL',
        'image' => null,
        'link' => 'https://www.commerciallinen.co.uk/'
    ]);
    Project::create([
        'title' => 'Stsinks - WordPress Website',
        'description' => 'Custom theme development project',
        'image' => null,
        'link' => 'https://www.stsinks.com/'
    ]);
    Project::create([
        'title' => 'Stsinks - WordPress Website',
        'description' => 'Custom theme development project',
        'image' => null,
        'link' => 'https://www.stsinks.com/'
    ]);
    }
}
