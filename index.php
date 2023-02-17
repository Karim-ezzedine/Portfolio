<?php
  $path = $_SERVER['REQUEST_URI']; // get the path without the domain and query parameters
  if ($path === "/portfolio") {
    echo "<script>";
    echo "const element = document.getElementById('portfolio');";
    echo "if (element) {";
    echo "  element.scrollIntoView({behavior: 'smooth'});";
    echo "}";
    echo "</script>";
  }
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>AppsOfFuture | Karim Ezzeddine</title>
    <meta
      content="I am a skilled iOS developer with a passion for creating innovative and visually appealing apps. My expertise in Swift, XCode, Storyboard, Firebase and my solid computer science knowledge, developed through my experience working with entrepreneurs and software companies, enables me to deliver high-quality, responsive, and user-friendly iOS apps that exceed client expectations. Let me help bring your ideas to life and make your app stand out in the mobile market."
      name="description"
    />
    <meta
      content="I have always been passionate about technology, and during my college years, I discovered my love for programming, particularly in the field of mobile app development. My desire to improve my skills and knowledge is an ongoing goal for me, and I continuously strive to stay up-to-date with the latest technologies. Some of my key skills include:"
      name="Skills"
    />
    <meta
      content="karim ezzedine, developer, ios developer, ios, iOS Development, Technical Consulting and Mentoring, Technical Consulting, Mentoring, programmer, programming, lebanese developer, international ios developer, swift, uikit, ios development, swiftUI, xcode, MVVM & MVC Design Patterns, SOLID Principles, CocoaPods, Git, API, Firebase, UI Design, Figma Platform"
      name="keywords"
    />
    <meta
      content="I am an ambitious and innovative developer who is dedicated to advancing my career by continuously learning new skills, sharing my knowledge and collaborating on impactful projects in the field of mobile app development. I have a strong passion for working with entrepreneurs, businesses and companies, in order to bring their ideas to life, and to help them reach their goals through the creation of high-quality and user-friendly mobile applications."
      name="Resume"
    />
    <meta
      content="Throughout my professional experience, I have gained expertise in various aspects of software development including full-cycle application creation, feature updates, testing, and bug resolution. My portfolio of completed projects is available for review with a direct link to the App Store. Also, a description of my upcoming project is available below."
      name="Portfolio"
    />
    <meta
      content="If you're looking for an experienced iOS developer, technical consultant or mentor to bring your ideas to life, you've come to the right place. My services include full-cycle development, feature implementation, bug resolution, and expert technical consultation and mentoring. Let's schedule a call to discuss your project and how I can help bring it to fruition."
      name="Services"
    />
    <meta content="Karim Ezzedine" name="author" />
    <meta content="index, follow" name="robots" />

    <!-- Open Graph Tags -->
    <meta property="og:title" content="Karim Ezzedine - IOS Developer" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://appsoffuture.com/" />
    <meta
      property="og:image"
      content="https://appsoffuture.com/assets/img/profile-img.jpg"
    />
    <meta
      property="og:description"
      content="I am a skilled iOS developer with a passion for creating innovative and visually appealing apps. My expertise in Swift, XCode, Storyboard, Firebase and my solid computer science knowledge, developed through my experience working with entrepreneurs and software companies, enables me to deliver high-quality, responsive, and user-friendly iOS apps that exceed client expectations."
    />

    <!-- Canonical Tag -->
    <link rel="canonical" href="https://appsoffuture.me" />

    <!-- Favicons -->
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="./assets/img/favicon/apple-touch-icon.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="./assets/img/favicon/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="./assets/img/favicon/favicon-16x16.png"
    />

    <!-- Main CSS File -->
    <link href="./assets/css/main.css" rel="stylesheet" />
  </head>

  <body>
    <!-- ======= Mobile nav toggle button ======= -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

    <!-- ======= Header ======= -->
    <header id="header">
      <div class="d-flex flex-column">
        <div class="profile">
          <img
            src="assets/img/profile-img.jpg"
            alt=""
            class="img-fluid rounded-circle"
          />
          <h1 class="text-light text-center">
            <a href="index.html">Karim Ezzedine</a>
          </h1>
          <div class="social-links mt-3 text-center">
            <a href="https://twitter.com/AppsOfFuture" class="twitter"
              ><i class="bx bxl-twitter"></i
            ></a>
            <!-- <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a> -->
            <a
              href="https://www.instagram.com/karim._.ezz/?hl=en"
              target="_blank"
              class="instagram"
              ><i class="bx bxl-instagram"></i
            ></a>
            <!-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a> -->
            <a
              href="https://www.linkedin.com/in/karim-ezzedine--086750200/"
              target="_blank"
              class="linkedin"
              ><i class="bx bxl-linkedin"></i
            ></a>
          </div>
        </div>

        <nav id="navbar" class="nav-menu navbar">
          <ul>
            <li>
              <a href="#hero" class="nav-link scrollto active"
                ><i class="bx bx-home"></i> <span>Home</span></a
              >
            </li>
            <li>
              <a href="#about" class="nav-link scrollto"
                ><i class="bx bx-user"></i> <span>About</span></a
              >
            </li>
            <li>
              <a href="#skills" class="nav-link scrollto"
                ><i class="bx bx-list-ul"></i> <span>Skills</span></a
              >
            </li>
            <li>
              <a href="#resume" class="nav-link scrollto"
                ><i class="bx bx-file-blank"></i> <span>Resume</span></a
              >
            </li>
            <li>
              <a href="#portfolio" class="nav-link scrollto"
                ><i class="bx bx-book-content"></i> <span>Portfolio</span></a
              >
            </li>
            <li>
              <a href="#services" class="nav-link scrollto"
                ><i class="bx bx-server"></i> <span>Services</span></a
              >
            </li>
            <li>
              <a href="#contact" class="nav-link scrollto"
                ><i class="bx bx-envelope"></i> <span>Contact</span></a
              >
            </li>
          </ul>
        </nav>
        <!-- .nav-menu -->
      </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section
      id="hero"
      class="d-flex flex-column justify-content-center align-items-center"
    >
      <div class="hero-container" data-aos="fade-in">
        <h1>Karim Ezzedine</h1>
        <p style="line-height: 2">
          I
          <span
            class="typed"
            data-typed-items="aid Entrepreneurs in bringing their vision to life by creating superior iOS applications."
          ></span>
        </p>
        <!-- <a href="#portfolio" class="portfolio-button">check </a> -->
      </div>
      <p class="check-portfolio"><a href="#portfolio">Check Portfolio</a></p>
      <a href="#portfolio" class="scroll-down" address="true"></a>
    </section>
    <!-- End Hero -->

    <main id="main">
      <!-- ======= About Section ======= -->
      <section id="about" class="about">
        <div class="container">
          <div class="section-title">
            <h2>About</h2>
            <p>
              I am a skilled iOS developer with a passion for creating
              innovative and visually appealing apps. My expertise in Swift,
              XCode, Storyboard, Firebase and my solid computer science
              knowledge, developed through my experience working with
              entrepreneurs and software companies, enables me to deliver
              high-quality, responsive, and user-friendly iOS apps that exceed
              client expectations.<b>
                Let me help bring your ideas to life and make your app stand out
                in the mobile market.</b
              >
            </p>
          </div>

          <div class="row">
            <div class="col-md-3" data-aos="fade-right">
              <img
                src="assets/img/profile-img.jpg"
                class="img-fluid"
                style="border-radius: 10px"
                alt=""
              />
            </div>
            <div class="col-md-9 pt-4 pt-md-0 content" data-aos="fade-left">
              <h3>iOS Developer</h3>
              <div class="row" style="padding-top: 5px">
                <div class="col-lg-6">
                  <ul>
                    <li>
                      <i class="bi bi-circle-fill" style="font-size: 8px"></i
                      ><strong>Phone:</strong>
                      <span
                        ><a href="tel:+96171587848" class="text-secondary"
                          >+961 71 587 848</a
                        ></span
                      >
                    </li>
                    <li>
                      <i class="bi bi-circle-fill" style="font-size: 8px"></i
                      ><strong>Email:</strong>
                      <span
                        ><a
                          href="mailto:karim.ezzedine1@gmail.com"
                          class="text-secondary"
                          >karim.ezzedine1@gmail.com</a
                        ></span
                      >
                    </li>
                    <li>
                      <i class="bi bi-circle-fill" style="font-size: 8px"></i
                      ><strong>Languages:</strong>
                      <span>Arabic, English and French </span>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul>
                    <li class="two-line-line">
                      <i class="bi bi-circle-fill" style="font-size: 8px"></i>
                      <strong>Degree:</strong> <span> Bachelor’s Degree</span>
                    </li>
                    <li>
                      <i class="bi bi-circle-fill" style="font-size: 8px"></i>
                      <strong>Specialization:</strong>
                      <span>Business Computer</span>
                    </li>
                    <li>
                      <i class="bi bi-circle-fill" style="font-size: 8px"></i>
                      <strong>Freelance:</strong> <span>Available</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End About Section -->

      <!-- ======= Facts Section ======= -->
      <!-- <section id="facts" class="facts">
      <div class="container">

        <div class="section-title">
          <h2>Facts</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Happy Clients</strong> consequuntur quae</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Projects</strong> adipisci atque cum quia aut</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Hours Of Support</strong> aut commodi quaerat</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Hard Workers</strong> rerum asperiores dolor</p>
            </div>
          </div>

        </div>

      </div>
    </section>End Facts Section -->

      <!-- ======= Skills Section ======= -->
      <section id="skills" class="skills section-bg">
        <div class="container">
          <div class="section-title">
            <h2>Skills</h2>
            <p>
              I have always been passionate about technology, and during my
              college years, I discovered my love for programming, particularly
              in the field of mobile app development. My desire to improve my
              skills and knowledge is an ongoing goal for me, and I continuously
              strive to stay up-to-date with the latest technologies. Some of my
              key skills include:
            </p>
          </div>

          <div class="row skills-content">
            <div class="col-lg-6">
              <ul>
                <li>
                  <i class="bi bi-circle-fill" style="font-size: 8px"></i>
                  <strong> iOS Development</strong>
                </li>
                <li>
                  <i class="bi bi-circle-fill" style="font-size: 8px"></i>
                  <strong> XCode</strong>
                </li>
                <li>
                  <i class="bi bi-circle-fill" style="font-size: 8px"></i>
                  <strong> OOP & Dependency injection</strong>
                </li>
                <li>
                  <i class="bi bi-circle-fill" style="font-size: 8px"></i>
                  <strong> SOLID Principles</strong>
                </li>
                <li>
                  <i class="bi bi-circle-fill" style="font-size: 8px"></i>
                  <strong> Git</strong>
                </li>
                <li>
                  <i class="bi bi-circle-fill" style="font-size: 8px"></i>
                  <strong> API</strong>
                </li>
                <li>
                  <i class="bi bi-circle-fill" style="font-size: 8px"></i>
                  <strong> UI Design</strong>
                </li>
              </ul>
            </div>

            <div class="col-lg-6">
              <ul>
                <li>
                  <i class="bi bi-circle-fill" style="font-size: 8px"></i>
                  <strong> Swift</strong>
                </li>
                <li>
                  <i class="bi bi-circle-fill" style="font-size: 8px"></i>
                  <strong> UIKit</strong>
                </li>
                <li>
                  <i class="bi bi-circle-fill" style="font-size: 8px"></i>
                  <strong> MVVM & MVC Design Patterns</strong>
                </li>
                <li>
                  <i class="bi bi-circle-fill" style="font-size: 8px"></i>
                  <strong> CocoaPods</strong>
                </li>
                <li>
                  <i class="bi bi-circle-fill" style="font-size: 8px"></i>
                  <strong> Firebase</strong>
                </li>
                <li>
                  <i class="bi bi-circle-fill" style="font-size: 8px"></i>
                  <strong> SwiftUI</strong>
                </li>
                <li>
                  <i class="bi bi-circle-fill" style="font-size: 8px"></i>
                  <strong> Figma Platform</strong>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- End Skills Section -->

      <!-- ======= Resume Section ======= -->
      <section id="resume" class="resume">
        <div class="container">
          <div class="section-title">
            <h2>Resume</h2>
            <p>
              I am an ambitious and innovative developer who is dedicated to
              advancing my career by continuously learning new skills, sharing
              my knowledge and collaborating on impactful projects in the field
              of mobile app development. I have a strong passion for working
              with entrepreneurs, businesses and companies, in order to bring
              their ideas to life, and to help them reach their goals through
              the creation of high-quality and user-friendly mobile
              applications.
            </p>
          </div>

          <div class="row">
            <div class="col-lg-6" data-aos="fade-up">
              <h3 class="resume-title">Sumary</h3>
              <div class="resume-item pb-0">
                <h4>Karim Ezzedine</h4>
                <p>
                  <em
                    >Innovative and deadline-driven iOS Developer with
                    experience developing and testing modern and unique iOS
                    applications from initial concept to final, polished
                    deliverable.</em
                  >
                </p>
                <ul>
                  <li>+961 71 587 848</li>
                  <li>karim.ezzedine1@gmail.com</li>
                </ul>
              </div>

              <h3 class="resume-title">Professional Experience</h3>
              <div class="resume-item">
                <h4>iOS Developer - Full time</h4>
                <h5>Nov 2022 - Present</h5>
                <p><em>FOO, Beirut </em></p>
                <ul>
                  <li>Developing In-App SDK with deep link Functionality.</li>
                  <li>
                    Experience in Code improvement and creating Reusable
                    components.
                  </li>
                  <li>
                    Expertise in iOS app development for fintech industry,
                    improving financial management and transactions.
                  </li>
                  <li>
                    Converting Objective-C code to Swift, by taking into
                    consideration Swift advantage.
                  </li>
                  <li>
                    Provided customer support to enhance app performance and
                    resolve technical issues through effective communication and
                    thorough testing.
                  </li>
                  <li>
                    Working on Combine Framework research and Demo
                    implementation
                  </li>
                </ul>
              </div>

              <div class="resume-item">
                <h4>iOS Developer - Weekends</h4>
                <h5>Jun 2022 - Present</h5>
                <p><em>Coachync, remotely </em></p>
                <ul>
                  <li>
                    Collaborating with a diverse, global team to develop a
                    coaching website and mobile application, including members
                    from Lebanon, Portugal, Argentina, Germany, Pakistan, India,
                    and more.
                  </li>
                  <li>
                    Actively participating in the planning and management of
                    projects/tasks.
                  </li>
                  <li>
                    Providing guidance and support to the tech team by sharing
                    my expertise in Software Engineering to drive innovation and
                    improve performance.
                  </li>
                  <li>Designing the Mobile app User interface with Figma.</li>
                  <li>
                    Developing iOS applications using the MVVM design pattern to
                    create efficient, maintainable and scalable software
                    solutions.
                  </li>
                  <li>
                    Collaborating with the Backend team to design and develop
                    efficient Database and API architecture and concepts
                  </li>
                  <li>
                    Focusing on enhancing my communication and analytical
                    abilities through ongoing learning and development.
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
              <div class="resume-item">
                <h4>iOS Developer - Full time</h4>
                <h5>Dec 2020 - Oct 2022</h5>
                <p><em>Integrated Digital Systems (IDS), Beirut </em></p>
                <ul>
                  <li>
                    Developing and maintaining native iOS applications using
                    Swift and UIKit.
                  </li>
                  <li>
                    Strong skills for efficiently creating and designing rich UI
                    and animations both programmatically and through
                    Storyboards.
                  </li>
                  <li>Experience with Pods and SDK implementation.</li>
                  <li>
                    Advanced proficiency in implementing web services, JSON API
                    parsing using Alamofire.
                  </li>
                  <li>
                    Strong understanding of Object-Oriented and
                    Protocol-Oriented design and programming in Swift using MVC
                    and MVVM design patterns.
                  </li>
                  <li>
                    Experience with Adaptive UI development and UX design.
                  </li>
                  <li>Good debugging skills in XCode.</li>
                  <li>
                    Experience with tracking on map algorithms using firebase
                    tools.
                  </li>
                  <li>Familiarity with SwiftUI framework.</li>
                  <li>
                    Experience in improving accessibility and voice over
                    functionality.
                  </li>
                  <li>
                    Experience in implementing Firebase tools and integrating
                    maps using MapKit, Google Maps, and Open Street Map APIs
                  </li>
                  <li>
                    Worked with QA team to ensure app performance and
                    collaborated with other developers, designers, and team
                    leads to develop new features in line with product roadmap
                  </li>
                  <li>
                    Experience working in both office and remote environments.
                  </li>
                </ul>
              </div>

              <div class="resume-item">
                <h4>iOS Developer, Internship</h4>
                <h5>Oct 2020 - Nov 2020</h5>
                <p><em>Integrated Digital Systems (IDS), Beirut</em></p>
                <ul>
                  <li>Develop basic user interface design using swift.</li>
                  <li>Basic Experience with Pods and APIs parsing.</li>
                  <li>Basic debugging knowledge with XCode.</li>
                </ul>
              </div>

              <div class="resume-item">
                <h4>Windows Application Development, Internship</h4>
                <h5>Aug 2019 - Jul 2019</h5>
                <p><em>Dolly Soft, Tyre</em></p>
                <ul>
                  <li>Develop simple product management system using C#.</li>
                  <li>Basic Experience with SQL Server.</li>
                </ul>
              </div>

              <!-- <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4>Bachelor’s Degree – Business Computer </h4>
              <h5>2017 - 2020</h5>
              <p><em>Lebanese University – Faculty of Technology, Saida</em></p>
            </div> -->
            </div>
          </div>
        </div>
      </section>
      <!-- End Resume Section -->

      <!-- ======= Portfolio Section ======= -->
      <section id="portfolio" class="portfolio section-bg">
        <div class="container">
          <div class="section-title">
            <h2>Portfolio</h2>
            <p>
              Throughout my professional experience, I have gained expertise in
              various aspects of software development including full-cycle
              application creation, feature updates, testing, and bug
              resolution. My portfolio of completed projects is available for
              review with a direct link to the App Store. Also, a description of
              my upcoming project is available below.
            </p>
          </div>

          <div class="row" data-aos="fade-up">
            <div class="col-lg-12 d-flex justify-content-center">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-app">App</li>
                <li data-filter=".filter-upcuming">Upcoming</li>
                <!-- <li data-filter=".filter-web">Web</li> -->
              </ul>
            </div>
          </div>

          <div
            class="row portfolio-container"
            data-aos="fade-up"
            data-aos-delay="100"
          >
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img
                  src="assets/img/portfolio/portfolio-1.png"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-links">
                  <a
                    href="assets/img/portfolio/portfolio-1.png"
                    data-gallery="portfolioGallery"
                    class="portfolio-lightbox"
                    title="Qasemti offers you the chance to Build it Yourself. With carefully hand-selected suppliers, you can rest assured that your project requirements will be met in an efficient and timely manner. Whether you’re looking for rubble, sand or even heavier equipment, Qasemti is your one-stop-shop for all your construction needs."
                    ><i class="bx bx-plus"></i
                  ></a>
                  <a
                    href="https://apps.apple.com/gb/app/qasemti/id1593384108"
                    title="More Details"
                    ><i class="bx bx-link"></i
                  ></a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img
                  src="assets/img/portfolio/portfolio-2.png"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-links">
                  <a
                    href="assets/img/portfolio/portfolio-2.png"
                    data-gallery="portfolioGallery"
                    class="portfolio-lightbox"
                    title="Qasemti’s Manager application allows you to provide products and services revolving around a project’s construction needs from raw material and manned equipment straight to the clients’ doorstep."
                    ><i class="bx bx-plus"></i
                  ></a>
                  <a
                    href="https://apps.apple.com/lb/app/qasemti-manager/id1593413485"
                    target="_blank"
                    title="More Details"
                    ><i class="bx bx-link"></i
                  ></a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img
                  src="assets/img/portfolio/portfolio-3.png"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-links">
                  <a
                    href="assets/img/portfolio/portfolio-3.png"
                    data-gallery="portfolioGallery"
                    class="portfolio-lightbox"
                    title="iMarkaz aims to support potential investors to build their investment portfolios in minutes and connects them to Markaz professionals who will be there for them throughout their investment journey."
                    ><i class="bx bx-plus"></i
                  ></a>
                  <a
                    href="https://apps.apple.com/lb/app/imarkaz/id1495806691"
                    target="_blank"
                    title="More Details"
                    ><i class="bx bx-link"></i
                  ></a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img
                  src="assets/img/portfolio/portfolio-4.png"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-links">
                  <a
                    href="assets/img/portfolio/portfolio-4.png"
                    data-gallery="portfolioGallery"
                    class="portfolio-lightbox"
                    title="Champs a GYM application that allow users to access the facilities and the gym through the QR code, see the class schedule, check membership status, follow workout program and more."
                    ><i class="bx bx-plus"></i
                  ></a>
                  <a
                    href="https://apps.apple.com/lb/app/champs-fitness/id1263073745"
                    target="_blank"
                    title="More Details"
                    ><i class="bx bx-link"></i
                  ></a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img
                  src="assets/img/portfolio/portfolio-7.png"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-links">
                  <a
                    href="assets/img/portfolio/portfolio-7.png"
                    data-gallery="portfolioGallery"
                    class="portfolio-lightbox"
                    title="Multimedia Player for iTV Platform that support Timeshift, VOD, Catch Up, multi resolution, multi audio, and multi subtitles."
                    ><i class="bx bx-plus"></i
                  ></a>
                  <a
                    href="https://apps.apple.com/lb/app/sama-flix/id1497461117"
                    target="_blank"
                    title="More Details"
                    ><i class="bx bx-link"></i
                  ></a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-upcuming">
              <div class="portfolio-wrap">
                <img
                  src="assets/img/portfolio/portfolio-6.png"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-links">
                  <a
                    href="assets/img/portfolio/portfolio-6.png"
                    data-gallery="portfolioGallery"
                    class="portfolio-lightbox"
                    title="Coachync will be the future of the coaching industry. It aims to be the #1 coaching marketplace in the world and its mission is to make it easy for anyone to hire any kind of coach to help them face their challenges."
                    ><i class="bx bx-plus"></i
                  ></a>
                  <!-- <a href="http://www.coachync.com" target="_blank" title="More Details"><i class="bx bx-link"></i></a> -->
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-upcuming">
              <div class="portfolio-wrap">
                <img
                  src="assets/img/portfolio/portfolio-5.png"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-links">
                  <a
                    href="assets/img/portfolio/portfolio-5.png"
                    data-gallery="portfolioGallery"
                    class="portfolio-lightbox"
                    title="Arsel is the Communications Regulatory Authority’s mobile app to empower telecom consumers in Qatar."
                    ><i class="bx bx-plus"></i
                  ></a>
                  <!-- <a href="https://apps.apple.com/lb/app/champs-fitness/id1263073745" title="More Details"><i class="bx bx-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Portfolio Section -->

      <!-- ======= Services Section ======= -->
      <section id="services" class="services">
        <div class="container">
          <div class="section-title">
            <h2>Services</h2>
            <p>
              If you're looking for an experienced iOS developer, technical
              consultant or mentor to bring your ideas to life, you've come to
              the right place. My services include full-cycle development,
              feature implementation, bug resolution, and expert technical
              consultation and mentoring. Let's schedule a call to discuss your
              project and how I can help bring it to fruition.
            </p>
          </div>

          <div class="row">
            <div class="col-lg-5 col-md-6 icon-box" data-aos="fade-up">
              <div class="icon"><i class="bi bi-apple"></i></div>
              <h4 class="title"><a href="#!">iOS Development</a></h4>
              <p class="description">
                As an experienced iOS developer, I specialize in creating
                high-quality, market-aligned applications that align with your
                business needs. Additionally, I am able to assist in code
                refactoring, testing, and bug fixing for your existing projects
                to ensure their optimal performance.
              </p>
            </div>

            <div
              class="col-lg-5 col-md-6 icon-box"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <div class="icon"><i class="bi bi-diagram-3"></i></div>
              <h4 class="title">
                <a href="#!">Technical Consulting &amp; Mentoring</a>
              </h4>
              <p class="description">
                Are you looking to elevate your project or career as a
                developer? Whether you need guidance on a specific aspect of
                your project or seeking an experienced developer to join your
                team, I am here to help. Let's schedule a call to discuss how my
                technical consulting and mentoring services can benefit you.
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- End Services Section -->

      <!-- ======= Testimonials Section ======= -->
      <!-- <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="300">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="400">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
              </div>
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section> End Testimonials Section -->

      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact section-bg py-5">
        <div class="container">
          <div class="section-title">
            <h2>Contact</h2>
            <p>
              I am always available to discuss your needs, please don't hesitate
              to reach out to me via email, phone, Twitter, or LinkedIn. I look
              forward to hearing from you.
            </p>
          </div>

          <div class="row" data-aos="fade-in">
            <div class="col-lg-5 d-flex align-items-stretch">
              <div class="info">
                <div class="profile">
                  <img
                    src="assets/img/profile-img.jpg"
                    alt=""
                    class="img-fluid rounded-circle"
                  />
                  <h1 class="text-light text-center">
                    <a href="index.html">Karim Ezzedine</a>
                  </h1>
                </div>

                <br /><br />

                <div class="email">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>
                    <a href="mailto:karim.ezzedine1@gmail.com"
                      >karim.ezzedine1@gmail.com</a
                    >
                  </p>
                </div>

                <div class="phone">
                  <i class="bi bi-phone"></i>
                  <h4>Call:</h4>
                  <p><a href="tel:+96171587848">+961 71 587 848</a></p>
                </div>

                <div class="linkedin">
                  <i class="bx bxl-linkedin"></i>
                  <h4>Linkedin:</h4>
                  <p>
                    <a
                      href="https://www.linkedin.com/in/karim-ezzedine--086750200/"
                      target="_blank"
                      class="linkedin"
                    >
                      www.linkedin.com/in/karim-ezzedine--086750200
                    </a>
                  </p>
                </div>

                <div class="Twitter">
                  <i class="bx bxl-twitter"></i>
                  <h4>Twitter:</h4>
                  <p>
                    <a
                      href="https://twitter.com/AppsOfFuture"
                      target="_blank"
                      class="twitter"
                    >
                      AppsOfFuture
                    </a>
                  </p>
                </div>
                <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe> -->
              </div>
            </div>

            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
              <form id="mailForm" class="php-email-form">
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="name">Your Name</label>
                    <input
                      type="text"
                      name="name"
                      class="form-control"
                      id="name"
                      required
                    />
                  </div>
                  <div class="form-group col-md-6">
                    <label for="name">Your Email</label>
                    <input
                      type="email"
                      class="form-control"
                      name="email"
                      id="email"
                      required
                    />
                  </div>
                </div>
                <div class="form-group">
                  <label for="name">Subject</label>
                  <input
                    type="text"
                    class="form-control"
                    name="subject"
                    id="subject"
                    required
                  />
                </div>
                <div class="form-group">
                  <label for="name">Message</label>
                  <textarea
                    class="form-control"
                    name="message"
                    id="message"
                    rows="10"
                    required
                  ></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">
                    Your message has been sent. Thank you!
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" id="btn-send">Send Message</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- End Contact Section -->
    </main>
    <!-- End #main -->

    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/typed.js/typed.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/js/sendMail.js"></script>
    <script src="assets/js/betterScrollingURL.js"></script>
  </body>
</html>
