<?php

namespace App\Models;

use CodeIgniter\Model;

class TasksModel extends Model
{   
    protected $table = 'tasks';
    protected $primaryKey = 'id';

    protected $allowedFields = ['task_name', 'status'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
