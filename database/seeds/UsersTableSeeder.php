<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Membuat sample admin
        $admin = new User();
        $admin->name = 'Admin';
        $admin->email = 'admin@admin.com';
        $admin->password = bcrypt('admin');
        $admin->save();
        // Membuat sample member
        $member = new User();
        $member->name = "Sample Member";
        $member->email = 'member@member.com';
        $member->password = bcrypt('member');
        $member->save();
    }
}
