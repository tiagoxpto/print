<?php
/**
 * Created by PhpStorm.
 * User: tiago_martins
 * Date: 12/05/2017
 * Time: 12:43
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class RequestPrint extends Model
{

    protected $fillable = [
        'id','description', 'updated_at','created_at','quantity','paper_size', 'paper_type', 'file', 'owner_id'



   ];
    protected $table = "requests";
}