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

        $role = factory(App\Models\Role::class, 'admin')->create();
        $group = factory(App\Models\Group::class, 'admin')->create();
        $messages = factory(App\Models\Message::class, 'admin')->create();
        factory(App\User::class, 'admin', 5)->create()->each(function ($user) use ($role, $group, $messages) {
            $role->users()->attach($user);
            $group->users()->save($user);
            $user->profile()->save(factory(\App\Models\Profile::class, 'admin')->make());
            $user->messages()->save($messages);

        });

        $role = factory(App\Models\Role::class, 'manager')->create();
        $group = factory(App\Models\Group::class, 'manager')->create();
        $messages = factory(App\Models\Message::class, 'manager')->create();
        factory(App\User::class, 'manager', 10)->create()->each(function ($user) use ($role, $group, $messages) {
            $role->users()->attach($user);
            $group->users()->save($user);
            $user->profile()->save(factory(\App\Models\Profile::class, 'manager')->make());
            $user->messages()->save($messages);
        });
    }
}
