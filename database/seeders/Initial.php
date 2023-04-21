<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Initial extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(['name' => 'admin', 'email' => 'admin@gmail.com', 'password' => Hash::make('12345678'), 'role_id' => 1]);
        DB::table('users')->insert(['name' => 'user', 'email' => 'user@gmail.com', 'password' => Hash::make('12345678'), 'role_id' => 1]);
        DB::table('users')->insert(['name' => 'viewer', 'email' => 'viewer@gmail.com', 'password' => Hash::make('12345678'), 'role_id' => 2]);
        DB::table('roles')->insert(['name' => "manager"]);
        DB::table('roles')->insert(['name' => "user"]);
        DB::table('permissions')->insert(['name' => "create post", 'code' => 'posts.create']);
        DB::table('permissions')->insert(['name' => "update post", 'code' => 'posts.update']);
        DB::table('permissions')->insert(['name' => "delete post", 'code' => 'posts.delete']);
        DB::table('permissions')->insert(['name' => "select post", 'code' => 'posts.select']);
        DB::table('role_permissions')->insert(['role_id' => 1, 'permission_id' => 1]);
        DB::table('role_permissions')->insert(['role_id' => 1, 'permission_id' => 2]);
        DB::table('role_permissions')->insert(['role_id' => 1, 'permission_id' => 4]);
        DB::table('posts')->insert(['title' => "sample", 'content' => 'sample content', 'user_id' => 1]);
        DB::table('posts')->insert(['title' => "sample 1", 'content' => 'sample content 1', 'user_id' => 3]);
    }
}
