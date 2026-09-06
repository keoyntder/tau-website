<?php

namespace App\Models;

use CodeIgniter\Model;

class WhyTauModel extends Model
{
   protected $table            = 'why_tau_cards';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['title', 'description', 'link'];
    protected $useTimestamps    = true;
}
