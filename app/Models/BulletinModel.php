<?php

namespace App\Models;

use CodeIgniter\Model;

class BulletinModel extends Model
{
    protected $table            = 'bulletin_posts';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['title', 'category_tag', 'content', 'image_url', 'author', 'is_featured', 'link', 'published_at'];
    protected $useTimestamps    = true;
}
