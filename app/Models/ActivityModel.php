<?php

namespace App\Models;

use CodeIgniter\Model;

class ActivityModel extends Model
{
    protected $table = 'activities';
    protected $primaryKey = 'id';
    protected $allowedFields = ['user_id', 'name', 'description', 'start', 'end', 'status'];

    public function getUserActivities($userId)
    {
        return $this->where('user_id', $userId)->findAll();
    }

    public function createActivity($data)
    {
        return $this->insert($data);
    }

    public function updateActivity($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deleteActivity($id)
    {
        return $this->delete($id);
    }
}
