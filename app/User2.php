<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User2 extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];




    public $incrementing = false;

    protected $keyType = 'string';

    protected $primaryKey = 'userid';

    /**
     * モデルと関連しているテーブル
     *
     * @var string
     */
    protected $table = 'users2';


//    // remember_token を除外
//    public function setAttribute($key, $value)
//    {
//        if (! $key === $this->getRememberTokenName()) {
//            parent::setAttribute($key, $value);
//        }
//    }
}
