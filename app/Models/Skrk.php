<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skrk extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_imb';

    protected $guarded = [];

    public $timestamps = false;

    // public $incrementing = false;

    protected $table = 'imb';



}
