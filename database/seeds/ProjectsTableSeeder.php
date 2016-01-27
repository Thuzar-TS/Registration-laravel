<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->delete();

        $proj = array(
            ['name' => 'project1', 'slug' => 'proj-1','user_id' =>7 ],
            ['name' => 'project2', 'slug' => 'proj-2','user_id' =>7 ],
            ['name' => 'project3', 'slug' => 'proj-3','user_id' =>7 ],
            ['name' => 'project4', 'slug' => 'proj-4','user_id' =>8 ],
        );

        // Uncomment the below to run the seeder
        DB::table('projects')->insert($proj);
    }
}
