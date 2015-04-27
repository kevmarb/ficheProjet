<?php
class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->insert(

                array(
                    'id' => 1,
                    'username' => 'admin',
                    'password' => Hash::make('admin'),
                    'email' => 'admin@plop.fr',
                    'statut' => 'admin',
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime,
                )
        );
    }
}