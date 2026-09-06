<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class HomeSeeder extends Seeder
{
    public function run()
    {
        // 1. Why TAU Cards
        $whyTau = [
            [
                'title'       => 'RANK 64 WORLDWIDE',
                'description' => 'Tarlac Agricultural University (TAU) has made a historic leap in the 2026 World University Rankings for Innovation (WURI), climbing from 93rd to 64th place worldwide, a stunning 29-rank surge in just one year.',
                'link'        => 'https://www.facebook.com/share/p/1M26D3H7D3/',
            ],
            [
                'title'       => 'RANK 9 PH',
                'description' => 'The University now stands as the 9th most innovative higher education institution (HEI) in the Philippines and also claims the top spot in Central Luzon.',
                'link'        => 'https://www.facebook.com/share/p/1M26D3H7D3/',
            ],
            [
                'title'       => 'RANKED 1001-1500 GLOBAL',
                'description' => 'TAU has once again reaffirmed its commitment to the global sustainability agenda, as revealed in the newly released 2026 Times Higher Education (THE) Sustainability Impact Ratings.',
                'link'        => 'https://www.facebook.com/share/p/1EAHjWm9Gp/',
            ],
        ];
        $this->db->table('why_tau_cards')->insertBatch($whyTau);

        // 2. Bulletin Posts
        $bulletin = [
            [
                'title'        => 'Official List of Accredited Student Organizations, A.Y. 2026–2027',
                'category_tag' => 'Latest',
                'content'      => "The Office of Student Services and Development (OSSD) has announced this year's accredited student organizations. Students are encouraged to join and grow through leadership and community.",
                'image_url'    => 'Images/bulletin1.jpg',
                'author'       => 'ADMIN',
                'is_featured'  => true,
                'link'         => 'https://www.facebook.com/photo/?fbid=1441665724645667&set=pcb.1441668574645382',
                'published_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title'        => 'Campus Memo: Updated Policy Guidelines',
                'category_tag' => 'Campus Memo',
                'content'      => 'Please review the updated administrative policy guidelines for the upcoming semester.',
                'image_url'    => 'Images/bulletin-2.jpg',
                'author'       => 'ADMIN',
                'is_featured'  => false,
                'link'         => '#',
                'published_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title'        => 'Graduation Notice: Requirements & Schedule',
                'category_tag' => 'Graduation Notice',
                'content'      => 'Important announcement regarding graduation clearance and ceremony details.',
                'image_url'    => 'Images/bulletin-3.jpg',
                'author'       => 'ADMIN',
                'is_featured'  => false,
                'link'         => '#',
                'published_at' => date('Y-m-d H:i:s'),
            ],
        ];
        $this->db->table('bulletin_posts')->insertBatch($bulletin);

        // 3. Events
        $events = [
            [
                'title'       => 'Foundation Day Celebration',
                'event_date'  => '2026-06-23',
                'time_range'  => '7:00 am — 5:00 pm',
                'location'    => 'Malacama, Camiling, Tarlac',
                'description' => 'Join us in celebrating TAU Foundation Day with activities and exhibits across the campus.',
                'image_url'   => 'assets/Images/taulogo.png',
                'link'        => '#',
            ],
            [
                'title'       => 'Freshmen Orientation',
                'event_date'  => '2026-07-04',
                'time_range'  => '8:00 am — 12:00 pm',
                'location'    => 'TAU Gymnasium',
                'description' => 'Orientation program for all incoming first-year students and transferees.',
                'image_url'   => 'assets/Images/taulogo.png',
                'link'        => '#',
            ],
        ];
        $this->db->table('events')->insertBatch($events);

        // 4. Exam Schedules
        $exams = [
            [
                'semester'    => 'First Semester',
                'title'       => 'Midterm Examinations',
                'month_label' => 'AUGUST',
                'day_range'   => '18-22',
                'colleges'    => 'All Colleges',
                'time_range'  => '7:00 am — 7:00 pm',
            ],
            [
                'semester'    => 'First Semester',
                'title'       => 'Final Examinations',
                'month_label' => 'OCTOBER',
                'day_range'   => '20-26',
                'colleges'    => 'All Colleges',
                'time_range'  => '7:00 am — 7:00 pm',
            ],
            [
                'semester'    => 'Second Semester',
                'title'       => 'Midterm Examinations',
                'month_label' => 'JANUARY',
                'day_range'   => '26-29',
                'colleges'    => 'All Colleges',
                'time_range'  => '7:00 am — 7:00 pm',
            ],
        ];
        $this->db->table('exam_schedules')->insertBatch($exams);
    }
}

