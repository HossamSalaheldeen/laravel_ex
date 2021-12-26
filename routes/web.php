<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\LocationController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('dashboard')->group(function () {
    Route::get('users', [UserController::class,'index']);
    Route::get('managers', [UserController::class,'indexManagers']);
});
Route::resource('locations', LocationController::class);
Route::get('tree', function (){
    return view('dashboard.users.tree');
});
Route::get('arrow-bar',function () {
    return view('dashboard.users.arrow-bar');
});


Route::get('test',function () {
//    $user = \App\Models\User::find(4);
//    //dd($user->staff()->get()->toArray());
//    $managers = collect([]);
//    $manager = $user->manager;
//    while ($manager){
//        $managers->push($manager);
//        $manager = $manager->manager;
//    }
//    dd($managers);

    $user = \App\Models\User::find(4);
    dd($user->manager->manager);
    $tree = array(
        'name' => $user->name,
        'manager' => \App\Http\Resources\UserResource::make($user->manager),
        'staff' => \App\Http\Resources\UserResource::collection($user->staff),
    );

    dd(json_encode($tree));
    $staffs = collect([]);
    $staff = $user->staff;
    while($staff->count()) {
        foreach ($staff as $employee) {
            dd($employee->staff);
        }
    }

});
