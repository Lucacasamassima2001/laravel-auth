<?php

namespace Database\Seeders;
use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 50; $i++){
            Project::create([
                'title' => 'Laravel Learning',
                'url_image'=> 'https://picsum.photos/id/237/200/300',
                'repo'=> 'repo di laravel',
                'languages'=> 'laravel,php',
                'description'=> 'priam repo su laravel per imparare',
            ]);
        }
    }
}
