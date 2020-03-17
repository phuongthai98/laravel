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
    protected $fillable = ['order_id','product_id','price','quantity'];

    protected $hidden = ['token'];
    public $timestamps = false;
}

 ?>