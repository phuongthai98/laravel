<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * summary
 */
class Catalogs extends Model
{
    /**
     * summary
     */
    protected $table = 'catalogs';

    protected $fillable = ['catalog_name', 'status', 'parent', 'group_menu0','group_menu1'];

    protected $hidden = [
        'token',
    ];
    public $timestamps = false;
}

 ?>