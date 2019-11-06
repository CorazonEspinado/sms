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
        $role= factory(App\Models\Role::class,'admin')->create();
       factory(App\User::class, 'admin', 5)->create()->each(function ($user) use ($role) {
           $role->users()->attach($user);
       $user->profile()->save(factory(\App\Models\Profile::class, 'admin')->make());

       });

        $role= factory(App\Models\Role::class,'manager')->create();
        factory(App\User::class, 'manager', 5)->create()->each(function ($user) use ($role) {
            $role->users()->attach($user);
            $user->profile()->save(factory(\App\Models\Profile::class, 'manager')->make());

        });
    }
}
