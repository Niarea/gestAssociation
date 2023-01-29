<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Members extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
    	'name', 
    	'first_name', 
    	'contact', 
    	'poste', 
    	'email', 
    	'association_id'
    ]; 

    public function association()
    {
    	return $this->belongsTo(Association::class);
    }
}
