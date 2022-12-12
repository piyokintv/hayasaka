<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $guarded = ['created_at', 'updated_at'];

    public function methodWithBadCodingStyle() {
           $hoge=1;
    if(true){echo "test";}else{echo 'test';}
    }
}
