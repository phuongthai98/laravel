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
    protected $fillable = ['full_name','address','phone','createed_date','total_price'];

    protected $hidden = ['token'];
    public $timestamps = false;
}

 ?>