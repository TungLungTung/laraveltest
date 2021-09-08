<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CarsModel;

class Car extends Model
{
    use HasFactory;

    protected $table = 'cars';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'founded',
        'description'
    ];

    protected $hidden = [
        'created_at'
    ];

    public function carsModels() {
        return $this->hasMany(CarsModel::class);
    }

    public function engines() {
        return $this->hasManyThrough(
            Engine::class,
            CarsModel::class,
            'car_id', //  Khóa ngoại của CarsModels tables
            'model_id' // Khóa ngoại của Engines;
        );
    }

    // // Has one through relationship
    // public function productionDate() {
    //     return $this->hasOneThrough(
    //         CarsProductionDates::class,
    //         CarsModel::class,
    //         'car_id',
    //         'model_id',
    //         'id',
    //         'id');
    // }

}
