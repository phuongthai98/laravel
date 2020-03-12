<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * summary
 */
class Banner extends Model
{
    /**
     * summary
     */
    protected $table = 'banner';



    protected $fillable = ['image','status','type','created_time','modifine_time'];

    protected $hidden = ['token'];
    public $timestamps = false;
}

 ?>