<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Users extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    /// fillable: 
                    // 1.when you want to store data with specific fields  into database 
                    // 2.any user can not insert malicious data into database 
                    // 3.we can not insert hash password directly  i.e Users::create($request->all());
    //  gaurded: 
                    // 1.when you doest want to store data with specific fields  into database   
                    // 2.if you doest not specify any field like id, user can insert malicious data into that field using inspect the html form  and  creating new hidden input value
                    // 3.we can not insert hash password directly  i.e Users::create($request->all());
    
    
    // protected $fillable = [
    //     'name',
    //     'email',
    //     'password',
    // ];
    // protected $gaurded = [
    //     'id'
    // ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
