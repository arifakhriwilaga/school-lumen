<?php

namespace App;

// use Illuminate\Auth\Authenticatable;
// use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
// use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
// use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;

class Student extends Model
{
    // use Authenticatable, Authorizable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'students';
    // protected $dates = [
    //     'bornDate'
    // ];
    protected $attributes = [
        'nisn' => '',
        'email' => '',
        'firstName' => '',
        'lastName' => '',
        'fullName' => '',
        'gender' => '',
        'bornDate' => '1997-10-10',
        'address' => '',
     ];
    protected $fillable = [
        'nisn', 'email', 'firstName', 'lastName', 'fullName', 'gender', 'bornDate', 'address'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    // protected $hidden = [
    //     'password',
    // ];

    public static function detail($id) {
        $student =  DB::table('students')->where('id', $id)->get();
        return $student;
    }

    public static function index() {
        $student = DB::table('students')->get();
        // return var_dump($student);die();
        return $student;  
    }
}
