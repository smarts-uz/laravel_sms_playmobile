<?php
use Playmobile\SMS\SmsService;
Route::group([
    'middleware'=> 'web',
    'prefix'    => 'sms',
    'as'        => 'sms.',
    'namespace' => 'PlayMobile\SMS\Http\Controllers'
], function(){
    Route::post('send','PlaymobileSMSController@sendMessage')->name('send');
    Route::get('test/{phone}','PlaymobileSMSController@test')->name('test');
});