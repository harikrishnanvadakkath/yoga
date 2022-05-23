<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class participation extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'age', 'address', 'phone', 'Email' ];
    
    public function scopefilter($query, array $filters){
        if($filters['age'] ?? false) {
            $query->where('age','like', '%' .request('age') . '%');

        }
    }
}
    

    
    

  





