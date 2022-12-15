<?php

$conn = mysqli_connect('localhost', 'root', '', 'contact_db') or die('connection failed');

if (isset($_POST['send'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $msg = mysqli_real_escape_string($conn, $_POST['message']);

    $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' 
AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');

    if (mysqli_num_rows($select_message) > 0) {
        $message[] = 'message sent already!';
    } else {
        mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES
     ('$name', '$email', '$number', '$msg')") or die('query failed');
        $message[] = 'message sent successfully!';
    }
}
?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

</head>

<body>

    <?php
    if (isset($message)) {
        foreach ($message as $message) {
            echo '
         <div class="message" data-aos="zoom-out">
            <span>' . $message . '</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
        }
    }
    ?>

    <header class="header">
        <div id="menu-btn" class="fas fa-bars"></div>
        <a href="#home" class="logo">Portfolio</a>
        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#portfolio">Portfolio</a>
            <a href="#contact">Contact</a>

        </nav>

        <div class="follow">
            <a href="http://twitter.com/yonas_wbw" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/yonas_wbw" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/in/yonas-woldegerima-aaa673245" class="fab fa-linkedin"></a>
            <a href="https://github.com/Yonaswg/Yonaswg.git" class="fab fa-github"></a>
        </div>

    </header>

    <!-- home section start -->

    <section class="home" id="home">
        <div class="image" data-aos="fade-left">
            <img src="css/images/1.PNG" alt="Profile Image">
        </div>
        <div class="content" data-aos="fade-up">
            <h3>Hi, I Am Yonas Woldegerima</h3>
            <span>Software Engineer</span>
            <p>It's Yonas, I'm 22, creative and responsible professional with excellent troubleshooting skills. experienced in all aspects of the software development lifecycle and end-to-end project management, from concept through to development and delivery. consistently recognized as a hands-on and competent leader, skilled at coordinating cross-functional teams in a fast-paced, deadline-driven enviroment to steer timely project completion within budgetary constraints.</p>
            <a href="#about" class="btn">About me</a>
        </div>
    </section>

    <!-- homesection end -->

    <!-- about section start -->

    <section class="about" id="about">

        <h1 class="heading" data-aos="fade-up"><span>Biography</span></h1>

        <div class="Biography">
            <p data-aos="fade-up">Yonas, Experienced software engineer with a passion for developing innovative programs that expedite the efficiency and effectiveness of organizational success. Well-versed in technology and writing code to create systems that are reliable and user-friendly. Skilled leader who has the proven ability to motivate, educate, and manage a team of professionals to build software programs and effectively track changes. Confident communicator, strategic thinker, and innovative creator to develop software that is customized to meet a company’s organizational needs, highlight their core competencies, and further their success.</p>

            <div class="bio">
                <h3 data-aos="zoom-in"><span>Name:</span>Yonas Woldegerima</h3>
                <h3 data-aos="zoom-in"><span>Email:</span> yoniman.wg@gmail.com</h3>
                <br>
                <h3 data-aos="zoom-in"><span>Adress:</span>AddisAbaba,Ethiopia</h3>
                <h3 data-aos="zoom-in"><span>Phone:</span>+251922711274</h3>
                <h3 data-aos="zoom-in"><span>Age:</span>22 years</h3>
                <h3 data-aos="zoom-in"><span>Experience:</span>1+ years</h3>
            </div>
            <a href="#" class="btn" data-aos="fade-up">Download CV</a>
        </div>


        <!-- skill section start -->
        <div class="skills" data-aos="fade-up">
            <h1 class="heading"><span>skills</span></h1>
            <div class="progress">
                <div class="bar" data-aos="fade-left">
                    <h3><span>HTML</span><span>90%</span></h3>
                </div>
                <div class="bar" data-aos="fade-right">
                    <h3><span>CSS</span><span>85%</span></h3>
                </div>
                <div class="bar" data-aos="fade-left">
                    <h3><span>JAVASCRIPT</span><span>80%</span></h3>
                </div>
                <div class="bar" data-aos="fade-right">
                    <h3><span>PHP</span><span>85%</span></h3>
                </div>
                <div class="bar" data-aos="fade-left">
                    <h3><span>REACT JS</span><span>90%</span></h3>
                </div>
                <div class="bar" data-aos="fade-right">
                    <h3><span>NODE JS</span><span>80%</span></h3>
                </div>
                <div class="bar" data-aos="fade-left">
                    <h3><span>MY SQL</span><span>90%</span></h3>
                </div>

            </div>
        </div>
        <!-- skill section end -->

        <div class="edu-exp">

            <h1 class="heading" data-aos="fade-up"><span>Education and experience</span></h1>

            <div class="row">

                <div class="box-container">
                    <h3 class="title" data-aos="fade-right">Education</h3>
                    <div class="box" data-aos="fade-right">
                        <span>(2018-2022)</span>
                        <h3>Software Engineering</h3>
                        <p>Software Engineering, I get this BSc. degree from Mekelle University. </p>
                    </div>


                    <div class="box" data-aos="fade-right">
                        <span>(2019-2020)</span>
                        <h3>Graphic design</h3>
                        <p> Graphic design, I learned this course on youtube. </p>
                    </div>

                    <div class="box" data-aos="fade-right">
                        <span>(2020-2021)</span>
                        <h3>Digital Marketing</h3>
                        <p>Digital Marketing. I learned this course on coursera.org .</p>

                    </div>

                    <div class="box" data-aos="fade-right">
                        <span>(2021-2022)</span>
                        <h3>Web and app development</h3>
                        <p>Web and app development, I get this certificate from Ennlite-Academy.</p>

                    </div>

                </div>

                <div class="box-container" data-aos="fade-left">
                    <h3 class="title">Experience</h3>
                    <div class="box">
                        <span>(2018-2019)</span>
                        <h3>Digital marketing</h3>
                    </div>

                    <div class="box" data-aos="fade-left">
                        <span>(2019-2020)</span>
                        <h3>Graphic design</h3>
                    </div>

                    <div class="box" data-aos="fade-left">
                        <span>(2020-2021)</span>
                        <h3>Front-end developer</h3>
                    </div>

                    <div class="box" data-aos="fade-left">
                        <span>(2021-2022)</span>
                        <h3>Back-end developer</h3>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- about section end -->

    <section class="services" id="services">
        <h1 class="heading" data-aos="fade-up"><span>services</span></h1>
        <div class="box-container" data-aos="fade-up">
            <div class="box" data-aos="fade-up">
                <i class="fas fa-code"></i>
                <h3>Web Development</h3>
                <p>Website development is a way to make people aware of the services or products you are offering, understand why your products are relevant and even necessary for them to buy or use.
                </p>
            </div>

            <div class="box" data-aos="fade-up">
                <i class="fas fa-paint-brush"></i>
                <h3>Graphic Design</h3>
                <p>Graphic design can be used by companies to promote and sell products through advertising, by websites to convey complicated information in a digestible way through infographics, or by businesses to develop an identity through branding, among other things.</p>
            </div>

            <div class="box" data-aos="fade-up">
                <i class="fas fa-bullhorn"></i>
                <h3>Digital Creator</h3>
                <p>Digital creators or content creators create content—to put it very simply. Their job is in their job title. They create videos, photos, graphics, informational resources, blog content, etc., and distribute it across various channels like Instagram, YouTube, TikTok, their own personal website and more.</p>
            </div>

            <div class="box" data-aos="fade-up">
                <i class="fab fa-bootstrap"></i>
                <h3>Software Architecture</h3>
                <p>I deliver full-cycle software architecture services that include product design and evolution in addition to analysis and evaluation. and also deliver high performance buildings and facilities.</p>
            </div>

            <div class="box" data-aos="fade-up">
                <i class="fas fa-chart-line"></i>
                <h3>Digital Marketing</h3>
                <p>Digital marketing services are professional services that help market or advertise your business online, like through search, social media, and paid channels. They focus solely on digital channels versus traditional marketing channels like print or television. </p>
            </div>


            <div class="box" data-aos="fade-up">
                <i class="fa-brands fa-react"></i>
                <h3> Web-app on: React js/Native</h3>
                <p>ReactJS is basically a free and open-source front-end JavaScript library to build and maintain user interfaces. So, what has made React trending? Well, React is an efficient and flexible JS library used to build fast, simple, and scalable web apps.</p>
            </div>

        </div>
    </section>
    <!-- service section end -->

    <section class="portfolio" id="portfolio">
        <h1 class="heading" data-aos="fade-up"><span>Portfolio</span></h1>
        <div class="box-container" data-aos="zoom-in">
            <div class="box" data-aos="zoom-in">
                <img src="css/images/l.JPG" alt="" srcset="">
                <h3>Logo design</h3>
                <span>(2018-2019)</span>
            </div>

            <div class="box" data-aos="zoom-in">
                <img src="css/images/g.PNG" alt="" srcset="">
                <h3>Graphic design</h3>
                <span>(2018-2019)</span>
            </div>

            <div class="box" data-aos="zoom-in">
                <img src="css/images/d.jpg" alt="" srcset="">
                <h3>Digital marketing</h3>
                <span>(2019-2020)</span>
            </div>

            <div class="box" data-aos="zoom-in">
                <img src="css/images/w.PNG" alt="" srcset="">
                <h3>Web development</h3>
                <span>(2020-2021)</span>
            </div>

            <div class="box" data-aos="zoom-in">
                <img src="css/images/pre.jpg" alt="" srcset="">
                <h3>Web-app</h3>
                <span>(2021-2022)</span>
            </div>

            <div class="box" data-aos="zoom-in">
                <img src="css/images/f.png" alt="" srcset="">
                <h3> Food delivery-app</h3>
                <span>(2022-2023)</span>
            </div>

        </div>
    </section>
    <!-- portfolio section end -->

    <section class="contact" id="contact">
        <h1 class="heading" data-aos="fade-up"><span>Contact me</span></h1>

        <form action="index.php" method="post">
            <div class="flex" data-aos="fade-up">
                <input data-aos="fade-right" type="text" name="name" placeholder="enter your name" class="box" required>
                <input data-aos="fade-left" type="email" name="email" placeholder="enter your email" class="box" required>
            </div>
            <input data-aos="fade-right" type="number" min="0" name="number" placeholder="enter your number" class="box" required>
            <textarea data-aos="fade-left" name="message" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
            <input style="background-color:rgb(77, 77, 241); color:white;" data-aos="fade-right" type="submit" value="send message" name="send" class="btn">
        </form>

        <div class="box-container">
            <div class="box" data-aos="zoom-in">
                <i class="fas fa-phone"></i>
                <h3>Phone</h3>
                <p>+251922711274</p>
            </div>

            <div class="box" data-aos="zoom-in">
                <i class="fas fa-envelope"></i>
                <h3>Email</h3>
                <p>yoniman.wg@gmail.com</p>
            </div>

            <div class="box" data-aos="zoom-in">
                <i class="fas fa-map-marker-alt"></i>
                <h3>Address</h3>
                <p>AddisAbaba,Ethiopia</p>
            </div>


        </div>

    </section>
    <!-- contact section end -->

    <div class="credit">&copy; copyright @ <?php echo date('Y'); ?> by <span>Yonas</span></div>






    <script src="js/script.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <script>
        AOS.init({
            duration: 800,
            delay: 300
        });
    </script>

</body>

</html>