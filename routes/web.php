<?php

use Illuminate\Support\Facades\DB;

Route::get('/', function () {
  $visited = DB::select('select * from places where visited = ?', [1]); 
  $togo = DB::select('select * from places where visited = ?', [0]);
  $data = 's';

  try {
    $redis = new \Predis\Client([
        'host' => env('REDIS_HOST', '')
    ]);
    $redis->set('name', 'ESGI Naderi & Mondesir');

  } catch (Exception $e) {
      
  }

  try {
    $redis = new \Predis\Client([
      'host' => env('REDIS_HOST', '')
    ]);
    $data = $redis->get('name');
  } catch (Exception $e) {

  }
  
  return view('travel_list', ['visited' => $visited, 'togo' => $togo, 'redis' => $data]);
});
