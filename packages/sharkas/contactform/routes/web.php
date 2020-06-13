<?php
/**
 * Created by PhpStorm.
 * User: amrsharkas
 * Date: 13/06/2020
 * Time: 2:02 PM
 */

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'sharkas\Contactform\Http\Controllers', 'middleware' => ['web']], function(){
    Route::get('contact', 'ContactFormController@index');
    Route::post('contact', 'ContactFormController@sendEmail')->name('contact');
});