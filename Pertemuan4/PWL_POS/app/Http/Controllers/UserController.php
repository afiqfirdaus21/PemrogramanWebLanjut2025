<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

// class UserController extends Controller
// {
//     public function index()
//     {
//         $user = UserModel::create([
//             'username' => 'manager44',
//             'nama' => 'Manager44',
//             'password' => Hash::make('12345'),
//             'level_id' => 2,
//         ]);
        
//         $user->username = 'manager45';
        
//         $user->isDirty(); // true
//         $user->isDirty('username'); // true
//         $user->isDirty('nama'); // false
//         $user->isDirty(['nama', 'username']); // true
        
//         $user->isClean(); // false
//         $user->isClean('username'); // false
//         $user->isClean('nama'); // true
//         $user->isClean(['nama', 'username']); // false
        
//         $user->save();
        
//         $user->isDirty(); // false
//         $user->isClean(); // true
//         dd($user ->isDirty());
//     }
// }

class UserController extends Controller
{
    public function index()
    {
        $user = UserModel::create([
            'username' => 'manager11',
            'nama' => 'Manager11',
            'password' => Hash::make('12345'),
            'level_id' => 2,
        ]);

        $user->username = 'manager12';

        $user->save();

        $user->wasChanged(); // true
        $user->wasChanged('username'); // true
        $user->wasChanged(['username', 'level_id']); // true
        $user->wasChanged('nama'); // false
        dd($user->wasChanged(['nama', 'username'])); // true
    }
}

