<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /**
         * states when the seeder begins
         * puts a message on the terminal with Updating new seed ...
         */
        $this->command->info('Updating new seed ...');
        /**
         * makes an admin account 
         */
        User::create([
            'firstname' => 'Admin',
            'lastname' => 'Minnie',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => 'password',
            'admin_roll' => 1
        ]);
        /**
         * makes an instructor account 
         */
        User::create([
            'firstname' => 'Instructor',
            'lastname' => 'Instructors',
            'email' => 'instructor@gmail.com',
            'email_verified_at' => now(),
            'password' => 'password',
            'instructor_roll' => 1
        ]);
        /**
         * states when the seeder is done 
         * puts a message on the terminal with Users completed message
         */
        $this->command->info('Users completed');
    }
}
