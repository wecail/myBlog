<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'MrCherry',
                'email' => 'faithkouk@gmail.com',
                'password' => '$2y$10$8bagnIIx/BOJC3Moi10ONulcuHEEJ3Yd67yKyNQbP70lMOQ5rH4Fu',
                'avatar' => 'http://media.know1.cn/avatar_2017-03-18',
                'remember_token' => 'tDpcjqLYBeWU11ULTVcmsIFaaSiqdvVh8zDeNbFZ29lhqQNUR3Ki0QtEzCNd',
                'created_at' => '2017-02-04 08:04:57',
                'updated_at' => '2017-03-18 08:48:00',
            ),
        ));
        
        
    }
}