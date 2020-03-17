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
    protected $table = 'orders_detail';
    protected $fillable = ['order','order_note','user_id','status'];

    protected $hidden = ['token'];
    public $timestamps = false;
}

 ?>