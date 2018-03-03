<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        Eloquent::unguard();
        $this->call('OAuthClientsSeeder');
        $this->call('OAuthUsersSeeder');
    }
}

class OAuthClientsSeeder extends Seeder
{
    public function run()
    {
        DB::table('oauth_clients')->delete();

        DB::table('oauth_clients')->insert(array(
            'client_id' => "demo-client-id",
            'client_secret' => "demo-client-secret",
            'redirect_uri' => "http://127.0.0.1",
        ));
    }
}

class OAuthUsersSeeder extends Seeder
{
    public function run()
    {
        DB::table('oauth_users')->delete();

        DB::table('oauth_users')->insert(array(
            'username' => "demo",
            'password' => sha1("demopassword"),
            'first_name' => "Demo",
            'last_name' => "User",
        ));
    }
}
