<?php
// --- DATA SECTION ---
// Update these arrays whenever you want to add new skills or projects to your portfolio.

$skills = [
    'Web & Software' => ['PHP', 'Laravel', 'Python', 'C#'],
    'Hardware & IoT' => ['Raspberry Pi', 'ESP32', 'Arduino', 'Sensors (ToF, RFID)'],
    'AI & Vision'    => ['YOLOv8', 'Computer Vision', 'Data Augmentation']
];

$projects = [
    [
        'title' => 'SAIPDS (Smart Irrigation & Pest Detection)',
        'tech' => 'Raspberry Pi, YOLO, Python, PHP',
        'description' => 'A smart agricultural system combining YOLO-based pest detection and automated irrigation. Successfully tested and deployed for local onion farming.',
        'link' => 'https://github.com/micmicja'
    ],
    [
        'title' => 'B.A.B.B.L.E. System',
        'tech' => 'Raspberry Pi, ReSpeaker, Python',
        'description' => 'Real-time infant cry recognition system using advanced audio behavior-based learning and hardware integration.',
        'link' => 'https://github.com/micmicja'
    ],
    [
        'title' => 'Smart Helmet Storage System',
        'tech' => 'Raspberry Pi 4, ToF Sensors, RFID',
        'description' => 'A 12-slot automated storage system utilizing Time-of-Flight sensors for occupancy detection and RFID for secure authentication.',
        'link' => 'https://github.com/micmicja'
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mike Jerald B. Marzan | Full-Stack & Embedded Systems Developer</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary-color: #0d47a1;
            --secondary-color: #1565c0;
            --accent-color: #42a5f5;
            --dark-bg: #0f1419;
            --light-bg: #f5f7fa;
            --text-dark: #1a1a1a;
            --text-light: #666;
            --border-color: #e0e0e0;
            --success: #2e7d32;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            color: var(--text-dark);
            line-height: 1.6;
            background-color: #fff;
        }

        /* NAVIGATION */
        nav {
            position: sticky;
            top: 0;
            background: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
            z-index: 100;
            padding: 1rem 0;
        }

        nav .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav .logo {
            font-weight: 700;
            font-size: 1.3rem;
            color: var(--primary-color);
            text-decoration: none;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 2rem;
        }

        nav a {
            text-decoration: none;
            color: var(--text-dark);
            font-weight: 500;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: var(--primary-color);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        /* HERO SECTION */
        header {
            background: linear-gradient(135deg, var(--dark-bg) 0%, var(--primary-color) 100%);
            color: white;
            padding: 8rem 2rem 6rem;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 20% 50%, rgba(66, 165, 245, 0.1) 0%, transparent 50%);
            pointer-events: none;
        }

        header .container {
            position: relative;
            z-index: 1;
        }

        header h1 {
            font-size: 3.5rem;
            margin-bottom: 0.5rem;
            font-weight: 800;
            letter-spacing: -1px;
        }

        header .subtitle {
            font-size: 1.5rem;
            color: var(--accent-color);
            margin-bottom: 1rem;
            font-weight: 500;
        }

        header .tagline {
            font-size: 1.1rem;
            color: rgba(255, 255, 255, 0.85);
            max-width: 600px;
            margin: 0 auto 2rem;
        }

        .cta-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn {
            padding: 0.8rem 2rem;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            border: 2px solid transparent;
            cursor: pointer;
            display: inline-block;
            font-size: 1rem;
        }

        .btn-primary {
            background: var(--accent-color);
            color: white;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(66, 165, 245, 0.3);
        }

        .btn-secondary {
            background: transparent;
            color: white;
            border-color: white;
        }

        .btn-secondary:hover {
            background: white;
            color: var(--primary-color);
        }

        /* SECTIONS */
        section {
            padding: 5rem 2rem;
        }

        section .container {
            max-width: 1000px;
        }

        h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: var(--primary-color);
            font-weight: 700;
            position: relative;
            display: inline-block;
            padding-bottom: 0.5rem;
        }

        h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 4px;
            background: var(--accent-color);
            border-radius: 2px;
        }

        /* ABOUT SECTION */
        #about {
            background: var(--light-bg);
        }

        #about p {
            font-size: 1.1rem;
            color: var(--text-light);
            max-width: 800px;
            line-height: 1.8;
        }

        /* SKILLS SECTION */
        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .skill-card {
            background: white;
            padding: 2rem;
            border-radius: 12px;
            border-left: 4px solid var(--accent-color);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
        }

        .skill-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
        }

        .skill-card h3 {
            color: var(--primary-color);
            margin-bottom: 1rem;
            font-size: 1.3rem;
        }

        .skill-card p {
            color: var(--text-light);
            line-height: 1.8;
        }

        /* PROJECTS SECTION */
        .projects-grid {
            display: grid;
            gap: 2rem;
            margin-top: 2rem;
        }

        .project-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            border-top: 4px solid var(--secondary-color);
            display: flex;
            flex-direction: column;
        }

        .project-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.15);
        }

        .project-content {
            padding: 2rem;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .project-card h3 {
            color: var(--primary-color);
            margin-bottom: 0.5rem;
            font-size: 1.4rem;
        }

        .tech-stack {
            display: inline-block;
            background: var(--light-bg);
            color: var(--secondary-color);
            padding: 0.4rem 0.8rem;
            border-radius: 6px;
            font-size: 0.85rem;
            font-weight: 600;
            margin-bottom: 1rem;
            width: fit-content;
        }

        .project-description {
            color: var(--text-light);
            margin-bottom: 1.5rem;
            flex: 1;
        }

        .project-card a {
            color: var(--accent-color);
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            display: inline-block;
        }

        .project-card a:hover {
            color: var(--secondary-color);
            transform: translateX(5px);
        }

        /* CONTACT SECTION */
        #contact {
            background: var(--light-bg);
            text-align: center;
        }

        #contact p {
            color: var(--text-light);
            font-size: 1.1rem;
            margin-bottom: 1.5rem;
        }

        .contact-info {
            display: flex;
            gap: 2rem;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 2rem;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .contact-item a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .contact-item a:hover {
            color: var(--secondary-color);
        }

        /* SOCIAL LINKS */
        .social-links {
            display: flex;
            gap: 1rem;
            justify-content: center;
            margin-top: 2rem;
        }

        .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            background: white;
            border-radius: 50%;
            color: var(--primary-color);
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .social-links a:hover {
            background: var(--primary-color);
            color: white;
            transform: translateY(-3px);
        }

        /* FOOTER */
        footer {
            background: var(--dark-bg);
            color: white;
            text-align: center;
            padding: 2rem;
            margin-top: 2rem;
            font-size: 0.95rem;
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            nav ul {
                gap: 1rem;
                font-size: 0.9rem;
            }

            header h1 {
                font-size: 2.5rem;
            }

            header .subtitle {
                font-size: 1.2rem;
            }

            .skills-grid {
                grid-template-columns: 1fr;
            }

            h2 {
                font-size: 2rem;
            }

            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }

            .btn {
                width: 100%;
                max-width: 300px;
            }
        }

        @media (max-width: 480px) {
            header {
                padding: 4rem 1rem 3rem;
            }

            header h1 {
                font-size: 2rem;
            }

            nav ul {
                gap: 0.5rem;
                font-size: 0.85rem;
            }

            section {
                padding: 3rem 1rem;
            }
        }
    </style>
</head>
<body>

    <!-- NAVIGATION -->
    <nav>
        <div class="container">
            <a href="#" class="logo">MGM</a>
            <ul>
                <li><a href="#about">About</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <header>
        <div class="container">
            <h1>Mike Gerald B. Marzan</h1>
            <div class="subtitle">Full-Stack & Embedded Systems Developer</div>
            <p class="tagline">Bridging web technologies with hardware, IoT, and machine learning to create real-world solutions.</p>
            <div class="cta-buttons">
                <a href="#projects" class="btn btn-primary">View My Work</a>
                <a href="#contact" class="btn btn-secondary">Get In Touch</a>
            </div>
        </div>
    </header>

    <!-- ABOUT SECTION -->
    <section id="about">
        <div class="container">
            <h2>About Me</h2>
            <p>I am a Computer Science graduate specializing in bridging web technologies with hardware, IoT, and machine learning. From developing real-time computer vision models to building automated physical systems, I enjoy creating end-to-end solutions that solve real-world problems. With expertise in full-stack development and embedded systems, I transform ideas into production-ready applications.</p>
        </div>
    </section>

    <!-- SKILLS SECTION -->
    <section id="skills">
        <div class="container">
            <h2>Tech Stack</h2>
            <div class="skills-grid">
                <?php foreach ($skills as $category => $skillList): ?>
                    <div class="skill-card">
                        <h3><?php echo htmlspecialchars($category); ?></h3>
                        <p><?php echo htmlspecialchars(implode(', ', $skillList)); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- PROJECTS SECTION -->
    <section id="projects">
        <div class="container">
            <h2>Featured Projects</h2>
            <div class="projects-grid">
                <?php foreach ($projects as $project): ?>
                    <div class="project-card">
                        <div class="project-content">
                            <h3><?php echo htmlspecialchars($project['title']); ?></h3>
                            <span class="tech-stack"><?php echo htmlspecialchars($project['tech']); ?></span>
                            <p class="project-description"><?php echo htmlspecialchars($project['description']); ?></p>
                            <a href="<?php echo htmlspecialchars($project['link']); ?>" target="_blank">View Project &rarr;</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- CONTACT SECTION -->
    <section id="contact">
        <div class="container">
            <h2>Let's Connect</h2>
            <p>Interested in working together or want to learn more about my projects?</p>
            <div class="contact-info">
                <div class="contact-item">
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:your.email@example.com">your.email@example.com</a>
                </div>
            </div>
            <div class="social-links">
                <a href="https://github.com/micmicja" target="_blank" title="GitHub"><i class="fab fa-github"></i></a>
                <a href="https://linkedin.com" target="_blank" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                <a href="https://twitter.com" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Mike Gerald B. Marzan. All rights reserved. | Full-Stack Developer | Embedded Systems Specialist</p>
    </footer>

</body>
</html>