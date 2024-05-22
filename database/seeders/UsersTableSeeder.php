<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $users = array(
            array(
                'name'      => "Admin User",
                'email'     => "admin@gmail.com",
                'password'  => bcrypt('admin@123'),
                'status'    =>'active',
                'role'      => 'admin'
            ),
            array(
                'name'      => "Seller User",
                'email'     => "seller@gmail.com",
                'password'  => bcrypt('seller@123'),
                'status'    =>'active',
                'role'      => 'seller'
            ),
            array(
                'name'      => "Customer User",
                'email'     => "customer@gmail.com",
                'password'  => bcrypt('customer@123'),
                'status'    =>'active',
                'role'      => 'customer'
            )
        );

        foreach($users as $user_data){
            if(User::where('email', $user_data['email'])->count() <=0){
                $user = new User;
                $user->fill($user_data);
                $user->save();
            }
        }
    }

}
