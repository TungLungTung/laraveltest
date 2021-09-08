<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Car;
use App\Models\CarsProductionDate;

class CarsModel extends Model
{

    use HasFactory;
    protected $table = 'cars_models';
    protected $primaryKey = 'id';

    // A car model belongs to car
    public function car() {
        return $this->belongsTo(Car::class);
    }

    // Has one through relationship
    public function productionDate() {
        return $this->hasOne(
            CarsProductionDate::class,
            'model_id'
        );
    }


}
