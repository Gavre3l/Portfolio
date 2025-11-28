<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me | John Gabrielle Tubieos</title>
    <link rel="stylesheet" href="styles/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        .about {
            padding: 4rem 2rem;
            max-width: 1000px;
            margin: 0 auto;
            color: #E0E0E0; /* Updated text color for dark theme */
        }

        .about h2 {
            font-size: 2.5rem;
            margin-bottom: 2rem;
            text-align: center;
            position: relative;
            display: inline-block;
        }

        .about h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background-color: #D4AF37; /* Soft gold accent */
        }

        .about-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 2rem;
        }

        .about-content p {
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 1rem;
            text-align: center;
            max-width: 800px;
        }

        .profile-picture {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #D4AF37; /* Soft gold border */
            filter: grayscale(20%);
            transition: filter 0.3s;
        }

        .profile-picture:hover {
            filter: none;
        }

        .skills {
            margin: 2rem 0;
            width: 100%;
        }

        .skills h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            text-align: center;
        }

        .skills ul {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            list-style: none;
            justify-content: center;
        }

        .skills li {
            background-color: #2A2A2A; /* Matte black */
            padding: 0.5rem 1rem;
            border-radius: 5px;
            color: #E0E0E0;
            border: 1px solid #3E3E3E;
            transition: all 0.3s;
        }

        .skills li:hover {
            background-color: #D4AF37; /* Soft gold */
            color: #121212;
        }

        .hobbies {
            margin-top: 1rem;
            width: 100%;
        }

        .hobbies h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            text-align: center;
        }

        .hobbies ul {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            list-style: none;
            justify-content: center;
        }

        .hobbies li {
            background-color: #2A2A2A; /* Matte black */
            padding: 0.5rem 1rem;
            border-radius: 5px;
            color: #E0E0E0;
            border: 1px solid #3E3E3E;
            transition: all 0.3s;
        }

        .hobbies li:hover {
            background-color: #D4AF37; /* Soft gold */
            color: #121212;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php" class="active">About</a></li>
                <li><a href="projects.php">Projects</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="about">
            <h2>About Me</h2>
            <div class="about-content">
                <!-- Add your profile picture here -->
                <img src="uploads/gig.jpg" alt="John Gabrielle Tubieos" class="profile-picture">

                <p>
                    I'm a passionate developer with a strong foundation in <strong>PHP</strong> and <strong>C#</strong>, dedicated to building robust, scalable, and user-friendly applications.
                    My journey in tech is driven by a love for problem-solving and creating digital experiences that make an impact.
                </p>
                <p>
                    Beyond coding, I'm deeply immersed in the world of <strong>music and gigs</strong>. Whether I'm playing an instrument, attending live performances, or discovering new genres, music fuels my creativity.
                    I also have a keen interest in <strong>grunge fashion</strong>, embracing its raw, edgy aesthetic as a form of self-expression.
                </p>

                <div class="skills">
                    <h3>Skills</h3>
                    <ul>
                        <li>PHP</li>
                        <li>C#</li>
                        <li>HTML5</li>
                        <li>CSS3</li>
                        <li>.NET Framework</li>
                        <li>UI/UX Design</li>
                    </ul>
                </div>

                <div class="hobbies">
                    <h3>Hobbies & Interests</h3>
                    <ul>
                        <li>Music</li>
                        <li>Gigs</li>
                        <li>Grunge Fashion</li>
                        <li>Photography</li>
                        <li>Open-Source Contributions</li>
                    </ul>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2025 John Gabrielle Tubieos. All rights reserved.</p>
    </footer>
</body>
</html>
