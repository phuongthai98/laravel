<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * summary
 */
class Users extends Model
{
    /**
     * summary
     */
    protected $table = 'users';
    protected $fillable = ['user_name','full_name','email','password','address','phone','image'];

    protected $hidden = ['token'];
    public $timestamps = false;
}

 ?>