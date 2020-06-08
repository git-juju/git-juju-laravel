<?php
use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{

    public function run()
    {
        $users = factory(User::class)->times(50)->make();
        User::insert($users->makeVisible(['password', 'remember_token'])->toArray());

        $user = User::find(1);
        $user->name = 'xiaojuju';
        $user->email = '896412698@qq.com';
        //$user->password = true;
        $user->is_admin = true;
        $user->save();
    }
}
