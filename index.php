<?php

$host = "sql212.byetcluster.com";
$username = "if0_36881348"; 
$password = "Deepak45516111"; 
$db = "if0_36881348_users"; 

// Initialize variables
$messageSent = false;
$errorMessage = '';

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // Create connection
    $conn = new mysqli($host, $username, $password, $db);

    // Check connection
    if ($conn->connect_error) {
        die("Failed to connect to database: " . $conn->connect_error);
    }

    // Sanitize inputs (to prevent SQL injection)
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // Insert data into database
    $insertQuery = "INSERT INTO users (Name, Email, Message) VALUES ('$name', '$email', '$message')";
    if ($conn->query($insertQuery) === TRUE) {
        $messageSent = true;
    } else {
        $errorMessage = "Error: " . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="author" content="Deepak Bhatt">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' 
    rel='stylesheet'>
    <link rel="shortcut icon" type="image/png" href="tab-logo.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="index.css">
    <script src="https://kit.fontawesome.com/66aa7c98b3.js" crossorigin="anonymous"></script>
    <title>Portfolio - Deepak Bhatt</title>
</head>

<body>
<!--HOME PAGE SECTION STARTS HERE-->

    <header class="container">
        <div class="page-header">
            <div class="logo">
                <a href="#">Portfolio</a>
            </div>
            
            <ul>
                <li><a href="#home" onclick="showSection('home')" class="active" style="--navAni:1">Home</a></li>
                <li><a href="#about" onclick="showSection('about')" style="--navAni:2">About</a></li>
                <li><a href="#skill" onclick="showSection('skill')" style="--navAni:3">Skills</a></li>
                <li><a href="#project" onclick="showSection('project')" style="--navAni:4">Project</a></li>
                <li><a href="#contact" onclick="showSection('contact')" style="--navAni:5">Contact</a></li>
            </ul>
        </div>
    </header>

    <section id="home" >
        <div class="main">
            <div class="images">
                <img src="me.png" alt="" class="img-w">
                <span class="bg-effect-1"></span>
            </div>
            <div class="detail">
                <h3>Hi, I'm</h3>
                <h1><span style="color:#f9532d;">Deepak</span> Bhatt</h1>
                <p>I'm a BCA student with a passion for technology. I specialize in web development (HTML, CSS, JavaScript, PHP) and cybersecurity (malware analysis). I have experience with Virtual Machines, JIRA, GitHub, and Canva. <br> <br>

                    My strong communication, teamwork, and leadership skills have helped me succeed in various projects. I'm motivated, hardworking, and always eager to learn. Explore my portfolio to see my work and let's connect for potential collaborations!</p>
                <div class="social">
                    <a href="https://www.linkedin.com/in/deepak-bhatt-93o" style="--socialAni:1"><i class='bx bxl-linkedin'></i></a>
                    <a href="https://www.instagram.com/deepak_93o/" style="--socialAni:2"><i class='bx bxl-instagram'></i></a>
                    <a href="https://github.com/deepak93o" style="--socialAni:3"><i class='bx bxl-github'></i></a>
                </div>
            </div>
        </div>
    </section>
<!--HOME SECTION ENDS HERE-->
    
    
<!--ABOUT SECTION STARTS HERE-->

    <section id="about" class="container" style="display: none;" >
        <h2>About Me</h2>
        <p>
            Hello! I'm Deepak Bhatt, currently pursuing my Bachelor of Computer Applications. With a passion for technology and a keen eye for detail, I have honed my skills in web development, gaining proficiency in HTML, CSS, JavaScript, PHP, and myphpAdmin. My expertise extends to cybersecurity, with a particular focus on malware analysis. I have practical experience working in Virtual Machines (VMs) and using JIRA software for project management. <br> <br>

            &nbsp;&nbsp;&nbsp;&nbsp;In addition to my technical skills, I am well-versed in using GitHub for version control and Canva for design projects. My strong communication abilities, teamwork, and leadership skills have been pivotal in successfully collaborating on various projects. I am highly motivated, hardworking, and always eager to learn and adapt to new challenges. <br> <br>
            
            &nbsp;&nbsp;&nbsp;&nbsp;I am excited to leverage my knowledge and skills to contribute to innovative projects and continually grow in the dynamic field of technology. Currently, I am open to new opportunities and would be thrilled to work with you on exciting ventures.</p>

            <section id="connect-me" class="container">
                <h3>Connect with me here:</h3>
                <div id="icon">
                    <div class="contact-item" id="call">
                        <i class="material-icons">call</i>
                        <p>+919369398374</p>
                    </div>
                    <div class="contact-item" id="email">
                        <i class="material-icons">email</i>
                        <p>deepekbhatt455@gmail.com</p>
                    </div>
                </div>
            </section>
    </section>

<!--ABOUT SECTION ENDS HERE-->

<!--SKILLS SECTION STARTS HERE-->

    <section class="about-me" id="skill" style="display: none;">
        <div class="container">
          <div class="about-content">
            <div class="left-content">
              <div>
               <h1 class="about-heading">Intrests</h1>
              </div> 
              <img src="INTEREST_logo.png" alt="image" />
              <p>I have a huge instrest in Web development, Web designing, as well as I am intrested in Cyber Security.
                 I'm also learning DBMS and back-end languages. 
                I really enjoy solving problems as well as making things pretty and easy to use.
              </p>
            </div>
            <div class="skills">
              <div class="right-content">
                <div>
                  <h1 class="skills-heading">My Skills</h1>
                </div>
                <div class="skills-bar">
                  <div class="bar">
                    <div class="info">
                      <span>HTML</span>
                    </div>
                    <div class="progress-line"><span class="html"></span></div>
                    <div class="bar">
                      <div class="info">
                        <span>CSS</span>
                      </div>
                      <div class="progress-line"><span class="css"></span></div>
                      <div class="bar">
                        <div class="info">
                          <span>PHP</span>
                        </div>
                        <div class="progress-line"><span class="php"></span></div>
                        <div class="bar">
                          <div class="info">
                            <span>JAVASCRIPT</span>
                          </div>
                          <div class="progress-line"><span class="javascript"></span></div>
                          <div class="bar">
                            <div class="info">
                              <span>C Programming</span>
                            </div>
                            <div class="progress-line"><span class="c"></span></div>
                            <div class="bar">
                              <div class="info">
                                <span>SQL</span>
                              </div>
                              <div class="progress-line"><span class="sql"></span></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
     </section>

<!--SKILLS SECTION ENDS HERE-->


<!--PROJECT SECTION STARTS HERE-->
  <section id="project" style="display: none;">
    <div class="portfolio">
      <div class="proj-heading">
        <h1>Projects</h1>
      </div>
      <div class="portfolio-content container">
        <div class="proj-1">
          <img src="h+.png">
          <div class="proj1-details">
            <i class="fab fa-html5"></i>
            <i class="fab fa-css3-alt"></i>
            <i class="fab fa-js"></i>
            <h2>Question Paper Website</h2>
            <p>Build Using HTML, CSS, JS</p>
            <button><a href="https://github.com/deepak93o/Help-Plus" target="blank">View source <i
              class="fas fa-external-link-alt"></i></a>
            </button>
            <button><a href="https://helpplus.rf.gd/" target="blank">Try it Live <i
              class="fas fa-external-link-alt"></i></a>
          </button>
          </div>
        </div>
        
        <div class="proj-1">
          <img src="Sky.jpg">
          <div class="proj1-details">
            <i class="fab fa-html5"></i>
            <i class="fab fa-css3-alt"></i>
            <i class="fab fa-js"></i>
            <h2>SKY - Voice Assistant</h2>
            <p>Build Using HTML, CSS, JS</p>
            <button><a href="https://github.com/deepak93o/voice-assistant" target="blank">View source <i
              class="fas fa-external-link-alt"></i></a>
            </button>
            <button><a href="https://deepak93o.github.io/voice-assistant/" target="blank">Try it Live <i
              class="fas fa-external-link-alt"></i></a>
          </button>
          </div>
        </div>

        <div class="proj-1">
          <img src="Sign in.jpg">
          <div class="proj1-details">
            <i class="fab fa-html5"></i>
            <i class="fab fa-css3-alt"></i>
            <i class="fab fa-php"></i>
            <h2>Log in Page with back-end</h2>
            <p>Build Using HTML, CSS, JS, PHP</p>
            <button><a href="https://github.com/deepak93o/Log-in-Page" target="blank">View source <i
              class="fas fa-external-link-alt"></i></a>
            </button>
            <button><a href="https://deepak93o.github.io/Log-in-Page/" target="blank">Try it Live <i
              class="fas fa-external-link-alt"></i></a>
          </button>
          </div>
        </div>

        <div class="proj-1">
          <img src="Log in.jpg">
          <div class="proj1-details">
            <i class="fab fa-html5"></i>
            <i class="fab fa-css3-alt"></i>
            <i class="fab fa-php"></i>
            <i class="fab fa-github"></i>
            <h2>Sign Up Page with back-end</h2>
            <p>Build Using HTML, CSS, JS, PHP</p>
            <button><a href="https://github.com/deepak93o/login-signup-page" target="blank">View source <i
              class="fas fa-external-link-alt"></i></a>
            </button>
            <button><a href="https://deepak93o.github.io/login-signup-page/" target="blank">Try it Live <i
              class="fas fa-external-link-alt"></i></a>
          </button>
          </div>
        </div>

        <div class="proj-1">
          <img src="Download.jpg">
          <div class="proj1-details">
            <i class="fab fa-html5"></i>
            <i class="fab fa-css3-alt"></i>
            <i class="fab fa-js"></i>
            <h2>RGB color Download Button</h2>
            <p>Build Using HTML, CSS, JS</p>
            <button><a href="https://github.com/deepak93o/download-button" target="blank">View source <i
              class="fas fa-external-link-alt"></i></a>
            </button>
            <button><a href="https://deepak93o.github.io/download-button/" target="blank">Try it Live <i
              class="fas fa-external-link-alt"></i></a>
          </button>
          </div>
        </div>
    </div>
  </section>





<!--PROJECT SECTION ENDS HERE-->

<!--CONTACT SECTION STARTS HERE-->

    <section id="contact" class="container" style="display: none;">
        <h2>Send a Message</h2>
        <form action="index.php" method="POST" id="contactForm">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit" name="submit">Send</button>
        </form>
        <p id="confirmation" class="msg-send">Message Sent!!</p>
        <p id="error" class="error-msg"></p>
    </section>
<!--CONTACT SECTION ENDS HERE-->

<!--HERE IS THE JS FOR TOGGLE OR SELECT PAGE AS PER UR CHOICE-->

<script>

  document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault(); 

            const form = event.target;
            const formData = new FormData(form);

            fetch(form.action, {
                method: form.method,
                body: formData
            }).then(response => response.text()).then(result => {
                document.getElementById('confirmation').style.display = 'block';
                setTimeout(() => {
                  document.getElementById('confirmation').style.display = 'none'; //to display confirmation message for limited time//
            }, 1300);
                document.getElementById('error').style.display = 'none';
                form.reset();
            }).catch(error => {
                document.getElementById('error').textContent = 'There was an error sending your message.';
                document.getElementById('error').style.display = 'block';
                setTimeout(() => {
                document.getElementById('error').style.display = 'none'; //to display error msg//
            }, 3000);
                document.getElementById('confirmation').style.display = 'none';
            });
        });

    var currentSection = 'home'; 

    function showSection(sectionId) {
        
        if (sectionId === currentSection) {
            return;
        }

       
        var currentSectionElement = document.getElementById(currentSection);
        if (currentSectionElement) {
            currentSectionElement.style.display = 'none';
        }

        
        var selectedSection = document.getElementById(sectionId);
        if (selectedSection) {
            selectedSection.style.display = 'block';
            currentSection = sectionId; 
        }

        
        var links = document.querySelectorAll('ul li a');
        links.forEach(function (link) {
            link.classList.remove('active');
            if (link.getAttribute('href') === '#' + sectionId) {
                link.classList.add('active');
            }
        });
    }

    window.addEventListener('resize', function () {
        if (window.innerWidth <= 600) {
            document.querySelectorAll('section').forEach(function (section) {
                section.style.display = 'block';
            });
        } else {
            showSection(currentSection);
        }
    });

    // Trigger the resize event once on page load to ensure the home section is displayed by default
    window.dispatchEvent(new Event('resize'));
</script>


</body>

</html>
