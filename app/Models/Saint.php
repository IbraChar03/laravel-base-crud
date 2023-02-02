<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saint extends Model
{
    use HasFactory;
    public $timestamps = false;
    private $id;
    private $birth_place;
    private $blessing_date;
    private $miracles_number;
}