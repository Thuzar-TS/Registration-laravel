<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('users')->delete();

        $users = array(
            ['first_name' => 'Thuzar', 'last_name' => 'TS','email' => 'thuzar@gmail.com','password' => Hash::make('thuzar'),'created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        // Uncomment the below to run the seeder
        DB::table('users')->insert($users);
     }

/*DB::table('users')->truncate();

$users = [
            [
                'first_name' => 'Emily',
                'last_name' => 'Thorn',
                'email' => 'emily.thorn@gmail.com',
                'password' => Hash::make('emilythorn')
            ],
            [
                'first_name' => 'Fred',
                'last_name' => 'Jackson',
                'email' => 'fred.jackson@gmail.com',
                'password' => Hash::make('fredjackson')
            ],
        ];

        foreach($users as $user){
            User::create($user);
        }*/
   
}
