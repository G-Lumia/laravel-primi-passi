<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $data = [
        'page_title' => 'Welcome Page',
        'description' => 'Click a link to change page',
        'links' => [
            'contacts',
            'about-us'
        ]
    ];
    return view('home' , $data);
});

Route::get('/about-us', function () {
    $data = [
        'page_title' => 'About Us',
        'description' => 'This is our Team!',
        'team' => [
            [
                'name' => 'Jerry Trapped',
                'img' => 'https://media.istockphoto.com/id/108177011/photo/trapped-businessman.jpg?s=612x612&w=0&k=20&c=G5wIqqYvWELuJOw8_0ew6sMGqJafYv4ceVh0c4AHnPw=',
                'job' => 'Lawyer'
            ],
            [
                'name' => 'Carl Monkey',
                'img' => 'https://t4.ftcdn.net/jpg/05/63/60/75/360_F_563607531_TxWazB8kjiAKIzlQNy68MPBasUPXoHcM.jpg',
                'job' => 'Monkey'
            ],
            [
                'name' => 'Pete Grifon',
                'img' => 'https://1.bp.blogspot.com/_MIWhqacdk60/SGEQYkinhtI/AAAAAAAAAEs/iMbMbLZJg7s/w1200-h630-p-k-no-nu/gryphon.jpg',
                'job' => 'Magical Creature'
            ]
            ],
            'links' => [
                'contacts'
            ]
    ];
    return view('about-us' , $data);
});
