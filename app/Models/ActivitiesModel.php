<?php

namespace App\Models;

use CodeIgniter\Model;

class ActivitiesModel extends Model
{
    protected $table = 'activities';
    protected $primaryKey = 'id';
    protected $allowedFields = ['user_id', 'name', 'description', 'start_datetime', 'end_datetime', 'status'];
}
