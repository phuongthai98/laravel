<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * summary
 */
class Products extends Model
{
    /**
     * summary
     */
    protected $table = 'products';

    protected $fillable = ['catalog_id','product_name','price','sale_price','content','image','description','modified_date'];

    protected $hidden = ['token'];
    public $timestamps = false;
}

 ?>