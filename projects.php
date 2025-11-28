<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects | John Gabrielle Tubieos</title>
    <link rel="stylesheet" href="styles/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        .projects {
            padding: 4rem 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }
        .projects h2 {
            font-size: 2.5rem;
            margin-bottom: 2rem;
            text-align: center;
            color: #CCD6F6;
        }
        .project-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
        }
        .project-card {
            background-color: #112240;
            border: 1px solid #2A3441;
            border-radius: 10px;
            padding: 1.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        .project-card:hover {
            transform: translateY(-5px);
        }
        .project-card img {
            width: 100%;
            border-radius: 8px;
            margin-bottom: 1rem;
            border: 1px solid #2A3441;
            cursor: pointer;
        }
        .project-card h3 {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
            color: #CCD6F6;
        }
        .project-card p {
            color: #ADB7C4;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="projects.php" class="active">Projects</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="projects">
            <h2>Featured Projects</h2>
            <div class="project-grid">
                <!-- EduTrack Project Card -->
                <div class="project-card">
                    <a href="http://goedutrack.gt.tc" target="_blank">
                        <img src="https://mistralaiblackforestprod.blob.core.windows.net/images/blackforest/9d32/a92b/-f31/7-47c5-9bc1-82c1cdcb9d5a/image.jpg?se=2025-11-18T13%3A35%3A17Z&sp=r&sv=2025-01-05&sr=b&sig=oOLOJj8kqWno6a/287TgUh3BRmVTWN%2B5a0zSO0AGLRc%3D" alt="EduTrack Project">
                    </a>
                    <h3>EduTrack</h3>
                    <p>A Web-based Academic and Career Monitoring Guidance System with LMS Integration. This platform helps students and educators track academic progress and career guidance.</p>
                </div>

                <!-- BRGYConnect Project Card -->
                <div class="project-card">
                    <a href="https://brgyconnect-deployed-url.com" target="_blank">
                        <img src="uploads/bc.jpg" alt="BRGYConnect Project">
                    </a>
                    <h3>BRGYConnect</h3>
                    <p>Empowering Local Governance: A secure, cloud-based platform that provides authorized barangay officials and residents with seamless, 24/7 access to essential services and information.</p>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2025 John Gabrielle Tubieos. All rights reserved.</p>
    </footer>
</body>
</html>
