<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function ports()
    {
        return $this->hasMany(Port::class);
    }

    public function status()
    {
        return $this->hasMany(Status::class);
    }

    public function currentPort()
    {
        return $this->hasOne(CurrentPort::class)->where("is_active", true);
    }

}
