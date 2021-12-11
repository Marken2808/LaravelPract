<?php

use App\Models\Upcoming;
use App\Models\Today;
use App\Http\Resources\UpcomingResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//  Upcoming Task 
Route::get("/upcoming", function(){
    $upcoming = Upcoming::all();
    return UpcomingResource::collection($upcoming);
});

Route::post('/upcoming', function(Request $request){
    return Upcoming::create([
        'title' => $request->title,
        'taskID' => $request->taskID,
        'waiting' => $request->waiting
    ]);
});

Route::delete('/upcoming/{taskID}', function($taskID){
    DB::table('upcomings')->where('taskID', $taskID)->delete();
    return 204;
});

// Today Task
Route::post('/dailytask', function(Request $request){
    return Today::create([
        'id' => $request->id,
        'title' => $request->title,
        'taskID' => $request->taskID
    ]);
});

Route::delete('/dailytask/{taskID}', function($taskID){
    DB::table('todays')->where('taskID', $taskID)->delete();
    return 204;
});