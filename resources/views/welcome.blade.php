<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <script
        src="https://kit.fontawesome.com/020abdf102.js"
        crossorigin="anonymous"
    ></script>

    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>
    <script src="js/animi.min.js"></script>
    <title>Hallo</title>
    <link rel="shortcut icon" href="images/logo.png">

</head>
<body>
<div id="particle-canvas"></div>

<div id="header">
    <div class="container">
        <nav>
            <img src="images/logo.png" class="logo" alt="" />
            <ul id="sidemenu">
                <li><a href="#header">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#contact">Contact</a></li>
                <i class="fas fa-times" onclick="closemenu()"></i>
            </ul>
            <i class="fas fa-bars" onclick="openmenu()"></i>
        </nav>

        <div class="header-text">
            <p>BackEnd Developer</p>
            <h1 class="animi" data-text="Hi I'm hallo rzgar......."><br /></h1>
            <h1 class="animii" data-text="from Erbil-Kurdistan"><br /></h1>
        </div>
    </div>
</div>
<!-- ------about----- -->
<div id="about">
    <div class="container">
        <div class="row">
            <div class="about-col-1">
                <img src="images/user.png" alt="" />
            </div>
            <div class="about-col-2">
                <h1 class="sub-title">About Me</h1>
                <p>
                    I'm a Web Developer with 3 plus years of knowledge to be able to
                    build Web Applications with programming languages like PHP with
                    the Laravel in the back-end, and Front-end like Vanilla JS ,
                    JQuery , Bootstrap and Tailwind from the ground up - information
                    gathering, planning, development, testing and delivery, and
                    maintenance. and I'm very passionate and dedicated to my work.
                    With 2 years of experience as a professional web developer, I have
                    acquired the skills and knowledge necessary to build any type of
                    application. I enjoy every step of the Back End process, from
                    System Design to the Database Engineering.
                </p>
                <div class="tab-titles">
                    <p class="tab-links active-link" onclick="opentab('skills')">
                        Skills
                    </p>
                    <p class="tab-links" onclick="opentab('experience')">
                        Experience
                    </p>
                    <p class="tab-links" onclick="opentab('education')">Education</p>
                </div>
                <div class="tab-contents active-tab" id="skills">
                    <ul>
                        <li><span>Front-End  </span> <br />Desinging Web/App Intarface</li>
                        <li><span>Back-end</span> <br />Web services - APIs</li>
                        <li><span>Database development </span> <br />Development and maintenance DB</li>
                    </ul>
                </div>
                <div class="tab-contents" id="experience">
                    <ul>
                        <li><span>2021 - current</span> <br />Full Stack Developer</li>
                        <li><span>2021 - 2022</span> <br />BeckEnd developer </li>
                        <li><span>2020 - 2021</span> <br />intership</li>
                        <li><span>2019 - 2020</span> <br />System Management</li>
                    </ul>
                </div>
                <div class="tab-contents" id="education">
                    <ul>
                        <li><span>2017-2022</span> <br />Salahaddin University - Software engineer</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ----portfolio------ -->
<div id="portfolio">
    <div class="container">
        <h1 class="sub-title">My work</h1>
        <div class="work-list">
            <div class="work">
                <img src="images/work-1.png" alt="" />
                <div class="layer">
                    <h3>Social media</h3>
                    <p>
                        maa3 maaaaa3maa3 maaaaa3 maa3 maaaaa maa3 maaaaa3 maa3 maaaaa3
                        maa3 maaaaa3maa3 maaaaa3 maa3 maaaaa maa3 maaaaa3 maa3 maaaaa3
                        maa3 maaaaa3maa3 maa maa3 maa maa3 maaaaa maa3 maaaaa3
                    </p>
                    <a href="#"><i class="fas fa-external-link-alt"></i></a>
                </div>
            </div>
            <div class="work">
                <img src="images/work-2.png" alt="" />
                <div class="layer">
                    <h3>Social media</h3>
                    <p>
                        maa3 maaaaa3maa3 maaaaa3 maa3 maaaaa maa3 maaaaa3 maa3 maaaaa3
                        maa3 maaaaa3maa3 maaaaa3 maa3 maaaaa maa3 maaaaa3 maa3 maaaaa3
                        maa3 maaaaa3maa3 maa maa3 maa maa3 maaaaa maa3 maaaaa3
                    </p>
                    <a href="#"><i class="fas fa-external-link-alt"></i></a>
                </div>
            </div>
            <div class="work">
                <img src="images/work-3.png" alt="" />
                <div class="layer">
                    <h3>Social media</h3>
                    <p>
                        maa3 maaaaa3maa3 maaaaa3 maa3 maaaaa maa3 maaaaa3 maa3 maaaaa3
                        maa3 maaaaa3maa3 maaaaa3 maa3 maaaaa maa3 maaaaa3 maa3 maaaaa3
                        maa3 maaaaa3maa3 maa maa3 maa maa3 maaaaa maa3 maaaaa3
                    </p>
                    <a href="#"><i class="fas fa-external-link-alt"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- -------skills---------- -->

<div id="myskills">
    <div class="ismobile"></div>
</div>
<!-- ------contact------- -->
<div id="contact">
    <div class="container">
        <div class="mobilecv">
            <a href="images/my-cv.pdf" download="" class="btn bt2">Download CV</a>
        </div>
        <h1 class="sub-title">Contact me</h1>
        <div class="contactWidth">
            <div class="row">
                <div class="contact-left">
                    <p><i class="fas fa-paper-plane"></i> hallorzgar99@gmail.com</p>
                    <p><i class="fas fa-phone-square"></i> +964 750 342 3581</p>
                    <div class="social-icons">
                        <a href="https://www.facebook.com/hallo.rzgar.abdullah"><i class="fab fa-facebook"></i></a>
                        <a href=""><i class="fab fa-twitter-square"></i></a>
                        <a href=""><i class="fab fa-github"></i></a>
                        <a href=""><i class="fab fa-linkedin"></i></a>
                    </div>
                    <div class="maxwidthcv">
                        <a href="images/my-cv.pdf" download="" class="btn bt2"
                        >Download CV</a
                        >
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="contact-right">
                    <form action="" name="submit-to-google-sheet">
                        <input
                            type="text"
                            name="Name"
                            placeholder="Your Name"
                            id=""
                            required
                        />
                        <input
                            type="email"
                            name="Email"
                            placeholder="Your Email"
                            id=""
                            required
                        />
                        <textarea
                            name="Message"
                            id=""
                            rows="6"
                            placeholder="Your Message"
                        ></textarea>
                        <button type="submit" class="btn btn2">Submit</button>
                    </form>
                    <span id="msg"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright">
        <p> Copyright © 2022 All rights deserved  <i class="fas fa-heart"> </i></p>
    </div>
</div>

<div id="preloader">
    <div id="loader"></div>
</div>

<script>
    var tablinks = document.getElementsByClassName("tab-links");
    var tabcontents = document.getElementsByClassName("tab-contents");
    function opentab(tabname) {
        for (tablink of tablinks) {
            tablink.classList.remove("active-link");
        }
        for (tabcontent of tabcontents) {
            tabcontent.classList.remove("active-tab");
        }
        event.currentTarget.classList.add("active-link");
        document.getElementById(tabname).classList.add("active-tab");
    }

    var sidemenu = document.getElementById("sidemenu");

    function openmenu() {
        sidemenu.style.right = "0";
    }
    function closemenu() {
        sidemenu.style.right = "-200px";
    }
</script>
<script>
    const scriptURL =
        "https://script.google.com/macros/s/AKfycbzjmUiz2dZRiNxWj-H4FfGYeEtBDm-2G1g6kuOy19eyCPKMQ-iJFBJPgZ1pkbur6Lw-lg/exec";
    const form = document.forms["submit-to-google-sheet"];
    const msg = document.getElementById("msg");

    form.addEventListener("submit", (e) => {
        e.preventDefault();
        fetch(scriptURL, { method: "POST", body: new FormData(form) })
            .then((response) => {
                msg.innerHTML = "Message sent successfully";
                setTimeout(() => {
                    msg.innerHTML = " ";
                }, 5000);
                form.reset();
            })
            .catch((error) => console.error("Error!", error.message));
    });
</script>
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
</body>
<script src="js/animi.js"></script>
<script>
    if ($(window).width() > 600) {
        a = `  <div class="container">
        <div class="row">
          <div class="contact-left">
            <h1 class="subtitle">Me</h1>

            <h4 class="sub-title t2">
              I have high skills in Back-end
              Engineering and Web
              Development in General
            </h4>
            <p class="aboutme">
              I have high skills in web development from making static websites
              to complex management systems, Most of my skills lie in the
              back-end development and I have high skills in the front end as
              well especially in making complex UI structures.
            </p>
          </div>
          <div class="contact-right about-content">
            <div class="col-six tab-full">
              <h1 class="subtitle">Skills</h1>

              <ul class="skill-bars">
                <li>
                  <div class="progress percent100"></div>
                  <strong >Laravel</strong>
                </li>
                <li>
                  <div class="progress percent100"></div>
                  <strong>PHP</strong>
                </li>
                <li>
                  <div class="progress percent100"></div>
                  <strong>JQuery</strong>
                </li>
                <li>
                  <div class="progress percent100"></div>
                  <strong>MySQL-PostgreSql</strong>
                </li>
                <li>
                  <div class="progress percent100"></div>
                  <strong>javascript</strong>
                </li>
              </ul>
              <!-- /skill-bars -->
            </div>
          </div>
        </div>
      </div>`;
        cv = `   <a href="images/my-cv.pdf" download="" class="btn bt2"
                >Download CV</a
              >`;
        contactWidth = ` <div class="row">

            <div class="contact-left">
              <p style="font-size: 15px">
                <i class="fas fa-paper-plane"></i>hallorzgar99@gmail.com
              </p>
              <p><i class="fas fa-phone-square"></i> +964 750 342 3581</p>
              <div class="social-icons">
                <a href="https://www.facebook.com/hallo.rzgar.abdullah"><i class="fab fa-facebook"></i></a>
                <a href=""><i class="fab fa-twitter-square"></i></a>
                <a href=""><i class="fab fa-github"></i></a>
                <a href=""><i class="fab fa-linkedin"></i></a>
              </div>
              <div class="maxwidthcv">
                  <a href="images/my-cv.pdf" download="" class="btn bt2"
                  >Download CV</a
                >
              </div>

            </div>
            <div class="contact-right">
              <form action="" name="submit-to-google-sheet">
                <input
                  type="text"
                  name="Name"
                  placeholder="Your Name"
                  id=""
                  required
                />
                <input
                  type="email"
                  name="Email"
                  placeholder="Your Email"
                  id=""
                  required
                />
                <textarea
                  name="Message"
                  id=""
                  rows="6"
                  placeholder="Your Message"
                ></textarea>
                <button type="submit" class="btn btn2">Submit</button>
              </form>
              <span id="msg"></span>
            </div>
          </div>`;
        $(".ismobile").html(a);
        $(".mobilecv").html(" ");
        $(".maxwidthcv").html(cv);
        $(".contactWidth").html(contactWidth);
    } else {
        a = `  <div class="container">
        <div class="row">
          <div class="contact-left">
            <h1 class="subtitle">Me</h1>

            <h4 class="sub-title t2">
              I have high skills in Back-end
              Engineering and Web
              Development in General
            </h4>
            <p class="aboutme">
              I have high skills in web development from making static websites
              to complex management systems, Most of my skills lie in the
              back-end development and I have high skills in the front end as
              well especially in making complex UI structures.
            </p>
          </div>
        </div>
        <div class="container">
        <div class="row">

          <div class="contact-right about-content">
            <div class="col-six tab-full">
              <h1 class="subtitle">Skills</h1>

              <ul class="skill-bars">
                <li>
                  <div class="progress percent100"></div>
                  <strong >Laravel</strong>
                </li>
                <li>
                  <div class="progress percent100"></div>
                  <strong>PHP</strong>
                </li>
                <li>
                  <div class="progress percent100"></div>
                  <strong>JQuery</strong>
                </li>
                <li>
                  <div class="progress percent100"></div>
                  <strong>MySQL-PostgreSql</strong>
                </li>
                <li>
                  <div class="progress percent100"></div>
                  <strong>javascript</strong>
                </li>
              </ul>
              <!-- /skill-bars -->
            </div>
          </div>
        </div>
        </div>
      </div>`;

        $(".ismobile").html(a);

        cv = `   <a href="images/my-cv.pdf" download="" class="btn bt2"
                >Download CV</a
              >`;
        $(".mobilecv").html(cv);
        $(".maxwidthcv").html(" ");
        // $('.contactWidth').html('');
    }
</script>
</html>
