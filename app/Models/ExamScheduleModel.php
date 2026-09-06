<?php

namespace App\Models;

use CodeIgniter\Model;

class ExamScheduleModel extends Model
{
  protected $table            = 'exam_schedules';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['semester', 'title', 'month_label', 'day_range', 'colleges', 'time_range'];
    protected $useTimestamps    = true;
}