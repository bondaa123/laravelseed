<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courts extends Model
{
   public function court_types() {
       return $this ->belongsTo(court_type::class, 'court_type_id');
   }
}