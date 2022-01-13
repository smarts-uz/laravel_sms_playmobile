<?php
use Playmobile\SMS\SmsService;
Route::group([
    'middleware'=> 'web',
    'prefix'    => 'sms',
    'as'        => 'sms.',
    'namespace' => 'PlayMobile\SMS\Http\Controllers'
], function(){
    Route::post('send','PlaymobileSMSController@send')->name('send');
    Route::get('test/{phone}', function (){
        return (new SmsService())->send($phone,'Test-SMS'. date('d.m.y h:i:s'));
    })->name('test');
});