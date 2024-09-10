<?php
// Define an array to store project information
$projects = [
    [
        'title' => 'Urdu Language Instructor',
        'company' => 'Done by Native',
        'price' => 'PKR 2,500/hour',
        'features' => ['Assessment Development', 'Teaching']
    ],
    [
        'title' => 'SEO Expert',
        'company' => 'Tecmyer',
        'price' => 'PKR 50,000 fixed',
        'features' => ['SEO', 'Email Hosting', 'Web Hosting']
    ],
    [
        'title' => 'Website and Social Media Developer',
        'company' => 'Sea Private Limited',
        'price' => 'PKR 25,000/month',
        'features' => ['Wordpress', 'Website Management']
    ],
    [
        'title' => 'Urdu Narrator',
        'company' => 'Luminac Innovation',
        'price' => 'PKR 5,000 fixed',
        'features' => ['Meeting Deadlines', 'Pay Close Attention to Detail']
    ]
];
?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freelance Side Hustles</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
</head>
<body>
    <header>
        <div class="header-container">
            <img src="img/logo.jpg" alt="Logo" class="logo"> <!-- Replace with your logo path -->
            <nav>
                <ul>
                    <li><a href="#">Beware! Reported Companies</a></li>
                    <li><a href="#">Free CV Review</a></li>
                    <li><a href="#">Mobile App</a></li>
                    <li><a href="#">Login</a></li>
                    <li><a href="#">Sign Up</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </nav>
            <div class="cta-buttons">
                <button>Post a Job</button>
                <button>Hire a Freelancer</button>
            </div>
        </div>
    </header>

    <main>
        <section class="banner">
            <div class="banner-content">
                <h1>Earn Extra Income</h1>
                <p>Find a freelance side hustle</p>
            </div>
        </section>

        <section class="freelance-projects">
            <h2>Freelance Side Hustles - Make Extra Income</h2>
            <div class="projects-grid">
                <?php foreach ($projects as $project): ?>
                    <div class="project-card">
                        <h3><?php echo $project['title']; ?></h3>
                        <p class="company"><?php echo $project['company']; ?></p>
                        <p class="price"><?php echo $project['price']; ?></p>
                        <ul>
                            <?php foreach ($project['features'] as $feature): ?>
                                <li><?php echo $feature; ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <button>Project Details</button>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <div class="job-section">
        <!-- Top Job Carousel -->
        <div class="job-carousel">
            <div class="carousel-item">
                <img src="company1-logo.png" alt="Company Logo">
                <p>General Manager</p>
                <span>Work Together</span>
            </div>
            <div class="carousel-item">
                <img src="company2-logo.png" alt="Company Logo">
                <p>Head of HR</p>
                <span>Work Together</span>
            </div>
            <div class="carousel-item">
                <img src="company3-logo.png" alt="Company Logo">
                <p>Business Head - Juices</p>
                <span>Diamond Group of Industries</span>
            </div>
            <div class="carousel-item">
                <img src="company4-logo.png" alt="Company Logo">
                <p>Head of Supply Chain</p>
                <span>Confidential</span>
            </div>
            <div class="carousel-item">
                <img src="company5-logo.png" alt="Company Logo">
                <p>Senior Manager HR</p>
                <span>Professional Employers Pvt Ltd</span>
            </div>
            <div class="carousel-item">
                <img src="company6-logo.png" alt="Company Logo">
                <p>External Relations</p>
                <span>ECO Trade and Development Bank</span>
            </div>
        </div>

        <!-- Job Categories Section -->
        <div class="job-categories">
            <h3>Browse Jobs in Pakistan</h3>
            <div class="tabs">
            <div class="dropdown">
        <button class="dropbtn" onclick="toggleDropdown('dropdownContent1')">By Industry</button>
        <div class="dropdown-content" id="dropdownContent1">
        <ul>
            <ol><a href="#">Information Technology (483)</a></ol>
                    <ol><a href="#">Recruitment/Employment Firms (267)</a></ol>
                    <ol><a href="#">Manufacturing (202)</a></ol>
                    <ol><a href="#">Call Center (182)</a></ol>
                    <ol><a href="#">Education/Training (174)</a></ol>
                    <ol><a href="#">Services (165)</a></ol>
                    <ol><a href="#">Banking/Financial Services (139)</a></ol>
                    <ol><a href="#">Healthcare/Hospital (107)</a></ol>
                    <ol><a href="#">N.G.O./Social Services (103)</a></ol>
                    <ol><a href="#">BPO (80)</a></ol>
                    <ol><a href="#">E-Commerce / E-Business (78)</a></ol>
                    <ol><a href="#">Real Estate/Property (76)</a></ol>
                    <ol><a href="#">Construction / Cement (70)</a></ol>
                    <ol><a href="#">Food & Beverages (69)</a></ol>
            </ul>
        </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn" onclick="toggleDropdown('dropdownContent2')">By City</button>
        <div class="dropdown-content" id="dropdownContent2">
            <ul>
            <ol><a href="#">Lahore (1288)</a></ol>
                    <ol><a href="#">Karachi (762)</a></ol>
                    <ol><a href="#">Islamabad (710)</a></ol>
                    <ol><a href="#">Rawalpindi (337)</a></ol>
                    <ol><a href="#">Faisalabad (188)</a></ol>
                    <ol><a href="#">Multan (138)</a></ol>
                    <ol><a href="#">Peshawar (111)</a></ol>
                    <ol><a href="#">Gujranwala (98)</a></ol>
                    <ol><a href="#">Sialkot (67)</a></ol>
                    <ol><a href="#">Quetta (62)</a></ol>
                    <ol><a href="#">Sahiwal (26)</a></ol>
                    <ol><a href="#">Abbotabad (18)</a></ol>
                    <ol><a href="#">Bahawalpur (18)</a></ol>
                    <ol><a href="#">Gujrat (18)</a></ol>
                    <ol><a href="#">Sargodah (17)</a></ol>
                    <ol><a href="#">Sukkur (16)</a></ol>
                    <ol><a href="#">Wah Cantt (15)</a></ol>
                    <ol><a href="#">Chaman (15)</a></ol>
                    <ol><a href="#">Kharian (11)</a></ol>
                    <ol><a href="#">More Cities</a></ol>
            </ul>
        </div>
    </div>
               <!-- Dropdown 2 -->
    <div class="dropdown">
        <button class="dropbtn" onclick="toggleDropdown('dropdownContent3')">By Company</button>
        <div class="dropdown-content" id="dropdownContent3">
        <ul>
    <ol><a href="#">Professional Employers (Pvt) Ltd (123)</a></ol>
<ol><a href="#">Riphah International University (51)</a></ol>
<ol><a href="#">Zones IT Solutions (Pvt) Ltd. (27)</a></ol>
<ol><a href="#">Contour Software (20)</a></ol>
<ol><a href="#">United Nations Pakistan (16)</a></ol>
<ol><a href="#">Roots International Schools (14)</a></ol>
<ol><a href="#">The Citizens Foundation (9)</a></ol>
<ol><a href="#">NRSP Microfinance Bank Limited (8)</a></ol>
<ol><a href="#">Whispering Pines (7)</a></ol>
<ol><a href="#">Packages Group (6)</a></ol>
<ol><a href="#">United Bank Limited (UBL) (6)</a></ol>
<ol><a href="#">Islamic Relief Pakistan (5)</a></ol>
<ol><a href="#">ibex (5)</a></ol>
<ol><a href="#">Pakistan Revenue Automation (Pvt) Ltd (5)</a></ol>
<ol><a href="#">Upfield (4)</a></ol>
<ol><a href="#">Telenor Microfinance Bank (4)</a></ol>
<ol><a href="#">Crescent Bahuman Limited (4)</a></ol>
<ol><a href="#">Super Symmetry Software (3)</a></ol>
<ol><a href="#">Faysal Bank Limited (3)</a></ol>
<ol><a href="#">More Companies</a></ol>
    </ul>
        </div>
    </div>
 
            </div>

    

   

            <!-- Add similar structure for 'By City', 'By Company', and 'By Function' tabs -->
        </div>

        <!-- Top Employers Section -->
        <div class="top-employers">
            <h3>Rozee Top Employers</h3>
            <div class="employers-grid">
                <div class="employer-logo"><img src="employer1.png" alt="Employer 1"></div>
                <div class="employer-logo"><img src="employer2.png" alt="Employer 2"></div>
                <div class="employer-logo"><img src="employer3.png" alt="Employer 3"></div>
                <div class="employer-logo"><img src="employer4.png" alt="Employer 4"></div>
                <div class="employer-logo"><img src="employer5.png" alt="Employer 5"></div>
                <div class="employer-logo"><img src="employer6.png" alt="Employer 6"></div>
                <div class="employer-logo"><img src="employer7.png" alt="Employer 7"></div>
                <div class="employer-logo"><img src="employer8.png" alt="Employer 8"></div>
                <div class="employer-logo"><img src="employer9.png" alt="Employer 9"></div>
                <div class="employer-logo"><img src="employer10.png" alt="Employer 10"></div>
            </div>
        </div>
    </div>

    

    <script src="script.js"></script>

    </main>
 <?php include 'footer.php'; ?>
</body>
</html>
