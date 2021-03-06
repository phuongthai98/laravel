<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * summary
 */
class Orders extends Model
{
    /**
     * summary
     */
    protected $table = 'orders';
    protected $fillable = ['order','order_note','status','full_name','address','phone'];

    protected $hidden = ['token'];
    public $timestamps = false;
}

 ?>