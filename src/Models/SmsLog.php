<?php

namespace PlayMobile\SMS\Models;

use Illuminate\Database\Eloquent\Model;

class SmsLog extends Model
{

    const STATUS_FAILD   = 0;
    const STATUS_NEW     = 1;
    const STATUS_SUCCESS = 2;
    const STATUS_TEST    = 3;

    protected $table = 'sms_logs';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['phone','message','request','response','status'];
}
