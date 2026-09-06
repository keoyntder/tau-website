<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Research & Development | TAU</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/css/research.css') ?>">
</head>

<body>

<header class="research-header">
    <div class="research-topbar">
        <div class="research-logo">
            RESEARCH & DEVELOPMENT
        </div>

        <nav>
            <a href="<?= base_url() ?>">Home</a>
            <a href="#">Publications</a>
            <a href="#">Projects</a>
            <a href="#">Innovation</a>
            <a href="#">Contact</a>
        </nav>
    </div>
</header>

<section class="featured-research">

    <div class="featured-left">
        <span class="research-tag">LATEST RESEARCH</span>

        <h1>
            Sustainable Agricultural Innovation
            for Future Generations
        </h1>

        <p>
            Tarlac Agricultural University continues to lead
            innovative research focused on sustainable farming,
            smart agriculture technologies, and community
            development initiatives.
        </p>

        <a href="#" class="read-btn">
            Read Research →
        </a>
    </div>

    <div class="featured-right">
        <img src="<?= base_url('assets/Images/news1.png') ?>" alt="">
    </div>

</section>

<section class="latest-posts">

    <div class="section-title">
        <h2>Latest Research</h2>
        <a href="#">View All</a>
    </div>

    <div class="research-grid">

        <article class="research-card large">

            <img src="<?= base_url('assets/Images/news1.png') ?>">

            <div class="card-content">
                <span class="card-date">July 2026</span>

                <h3>
                    Smart Irrigation System for
                    Agricultural Productivity
                </h3>

                <p>
                    Exploring IoT-enabled irrigation systems
                    to improve water efficiency.
                </p>
            </div>

        </article>

        <div class="research-side">

            <article class="small-card">
                <img src="<?= base_url('assets/Images/news1.png') ?>">
                <h4>Livestock Health Monitoring</h4>
            </article>

            <article class="small-card">
                <img src="<?= base_url('assets/Images/news1.png') ?>">
                <h4>Climate Resilient Crops</h4>
            </article>

            <article class="small-card">
                <img src="<?= base_url('assets/Images/news1.png') ?>">
                <h4>Renewable Energy Research</h4>
            </article>

        </div>

    </div>

</section>

</body>
</html>