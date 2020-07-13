<?php

namespace Modules\Staff\Entities;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'department';
    public $timestamp = false;



//    public function department()
//    {
//        return $this->hasMany('Modules\Staff\Entities\staff','id_department','id');
//    }

}
