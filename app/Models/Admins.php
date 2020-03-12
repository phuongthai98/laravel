<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
 * summary
 */
class Admins extends Model
{
    /**
     * summary
     */
    protected $table = 'admins';

    protected $fillable = ['password', 'full_name','email'];

    protected $hidden = [
        'token','password'
    ];
    public $timestamps = false;
}

 ?>