<?php

use Illuminate\Database\Seeder;
use App\Models\User;
class UserTableSeeder extends Seeder
{

    public function run()
    {
        $users = factory(User::class)->times(50)->make();
        User::insert($users->makeVisible(['password', 'remember_token'])->toArray());

        $user = User::find(1);
        $user->name = '小驹驹';
        $user->email = '896412698@qq.com';
        $user->save();
    }
}
