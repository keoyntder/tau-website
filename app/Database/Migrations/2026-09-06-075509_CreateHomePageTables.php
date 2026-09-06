<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateHomePageTables extends Migration
{
    public function up()
    {
        // 1. WHY TAU CARDS
        $this->forge->addField([
            'id'          => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'title'       => ['type' => 'VARCHAR', 'constraint' => 255],
            'description' => ['type' => 'TEXT', 'null' => true],
            'link'        => ['type' => 'VARCHAR', 'constraint' => 500, 'null' => true],
            'created_at'  => ['type' => 'TIMESTAMP', 'null' => true],
            'updated_at'  => ['type' => 'TIMESTAMP', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('why_tau_cards');

        // 2. BULLETIN / ANNOUNCEMENTS
        $this->forge->addField([
            'id'           => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'title'        => ['type' => 'VARCHAR', 'constraint' => 255],
            'category_tag' => ['type' => 'VARCHAR', 'constraint' => 100, 'default' => 'Latest'], // e.g., Campus Memo, Graduation Notice
            'content'      => ['type' => 'TEXT', 'null' => true],
            'image_url'    => ['type' => 'VARCHAR', 'constraint' => 500, 'null' => true],
            'author'       => ['type' => 'VARCHAR', 'constraint' => 100, 'default' => 'ADMIN'],
            'is_featured'  => ['type' => 'BOOLEAN', 'default' => false],
            'link'         => ['type' => 'VARCHAR', 'constraint' => 500, 'null' => true],
            'published_at' => ['type' => 'DATETIME', 'null' => true],
            'created_at'   => ['type' => 'TIMESTAMP', 'null' => true],
            'updated_at'   => ['type' => 'TIMESTAMP', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('bulletin_posts');

        // 3. UPCOMING EVENTS
        $this->forge->addField([
            'id'          => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'title'       => ['type' => 'VARCHAR', 'constraint' => 255],
            'event_date'  => ['type' => 'DATE'],
            'time_range'  => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => true], // e.g., "7:00 am — 5:00 pm"
            'location'    => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'description' => ['type' => 'TEXT', 'null' => true],
            'image_url'   => ['type' => 'VARCHAR', 'constraint' => 500, 'null' => true],
            'link'        => ['type' => 'VARCHAR', 'constraint' => 500, 'null' => true],
            'created_at'  => ['type' => 'TIMESTAMP', 'null' => true],
            'updated_at'  => ['type' => 'TIMESTAMP', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('events');

        // 4. EXAM SCHEDULES
        $this->forge->addField([
            'id'          => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'semester'    => ['type' => 'VARCHAR', 'constraint' => 50], // 'First Semester' or 'Second Semester'
            'title'       => ['type' => 'VARCHAR', 'constraint' => 255], // e.g., 'Midterm Examinations'
            'month_label' => ['type' => 'VARCHAR', 'constraint' => 50],  // e.g., 'AUGUST'
            'day_range'   => ['type' => 'VARCHAR', 'constraint' => 50],  // e.g., '18-22'
            'colleges'    => ['type' => 'VARCHAR', 'constraint' => 255, 'default' => 'All Colleges'],
            'time_range'  => ['type' => 'VARCHAR', 'constraint' => 100, 'default' => '7:00 am — 7:00 pm'],
            'created_at'  => ['type' => 'TIMESTAMP', 'null' => true],
            'updated_at'  => ['type' => 'TIMESTAMP', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('exam_schedules');
    }

    public function down()
    {
        $this->forge->dropTable('why_tau_cards', true);
        $this->forge->dropTable('bulletin_posts', true);
        $this->forge->dropTable('events', true);
        $this->forge->dropTable('exam_schedules', true);
    }
}
