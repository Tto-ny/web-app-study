<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Plant;
use App\Models\GardenManager;
use Illuminate\Database\Eloquent\SoftDeletes;
class Garden extends Model
{
    use HasFactory;
    public function plants(){
        return $this->hasMany(Plant::class);
    }

    public function gardenmanager(){
        return $this->hasOne(GardenManager::class);
    }
}
