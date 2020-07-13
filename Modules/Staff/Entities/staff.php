<?php

namespace Modules\Staff\Entities;

use Illuminate\Database\Eloquent\Model;


class staff extends Model
{
    protected $table ='staff';
    public $timestamp = false;
    public function department() {
        return $this->belongsTo(Department::class, "id_department",'id');
    }
}
