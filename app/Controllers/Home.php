<?php

namespace App\Controllers;

use App\Models\WhyTauModel;
use App\Models\BulletinModel;
use App\Models\EventModel;
use App\Models\ExamScheduleModel;
class Home extends BaseController
{
    public function index()
    {
       $whyTauModel     = new WhyTauModel();
        $bulletinModel   = new BulletinModel();
        $eventModel      = new EventModel();
        $examModel       = new ExamScheduleModel();

        $data = [
            'why_tau_cards'    => $whyTauModel->findAll(),
            'featured_bulletin'=> $bulletinModel->where('is_featured', true)->first(),
            'bulletin_posts'   => $bulletinModel->orderBy('created_at', 'DESC')->findAll(),
            'events'           => $eventModel->orderBy('event_date', 'ASC')->findAll(),
            'first_sem_exams'  => $examModel->where('semester', 'First Semester')->findAll(),
            'second_sem_exams' => $examModel->where('semester', 'Second Semester')->findAll(),
        ];

        return view('index', $data);
    }

    public function about()
    {
        return view('about');
    }
}
