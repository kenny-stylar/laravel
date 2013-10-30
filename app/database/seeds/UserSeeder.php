<?php

class UserSeeder extends DatabaseSeeder {
    public function run()
    {
        $users = [
            [
                "username" => "user",
                "password" => Hash::make("password"),
                "email"    => "user@example.com"
            ]
        ];
        foreach ($users as $user)
        {
            User::create($user);
        }
    }
}