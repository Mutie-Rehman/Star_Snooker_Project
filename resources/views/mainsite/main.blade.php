
<!DOCTYPE html>
<html lang="en">

<head>

    <title>Star Snooker Website</title>
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="resources\css\style.css">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <!-- MENU BAR -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            <h2 style="color: red;">Star Snooker</h2>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#home" class="nav-link smoothScroll">Home</a>
                    </li>

                    <li class="nav-item">
                        <a href="#about" class="nav-link smoothScroll">About Us</a>
                    </li>

                    <li class="nav-item">
                        <a href="#class" class="nav-link smoothScroll">Classes</a>
                    </li>

                    <li class="nav-item">
                        <a href="#schedule" class="nav-link smoothScroll">Schedules</a>
                    </li>

                    <li class="nav-item">
                        <a href="#contact" class="nav-link smoothScroll">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <!-- HERO -->
    <section class="hero d-flex flex-column justify-content-center align-items-center" id="home">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto col-12">
                    <div class="hero-text mt-5 text-center">
                        <h6>new way to build your snooker skills!</h6>
                        <h1 style="color: red;">Upgrade your snooker skills at
                            star
                            snooker
                        </h1>
                        <a href="#feature" class="btn btn-success  bordered mt-3 ">Get
                            started</a>

                        <a href="#about" class="btn btn-success  bordered mt-3">learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="feature" id="feature">
        <div class="container">
            <div class="row">

                <div class="d-flex flex-column justify-content-center ml-lg-auto mr-lg-5 col-lg-5 col-md-6 col-12">
                    <h2 class="mb-3 text-white">New to the Star Snooker?</h2>

                    <h6 class="mb-4 text-white">Your membership is up to 2 months FREE (1500 per
                        month)</h6>
                    <a href="{{url('/player')}} " target="_blank" class="btn btn-success bordered mt-3">Provide your details here</a>
                </div>

                <div class="mr-lg-auto mt-3 col-lg-4 col-md-6 col-12">
                    <div class="about-working-hours">
                        <div>

                            <h2 style="color: red;">Working hours</h2>

                            <strong class="d-block">Sunday</strong>
                            <p class="gtext">10:00 AM - 2:00
                                AM</p>

                            <strong class="mt-3 d-block">Monday -
                                Friday</strong>

                            <p class="gtext">11:00 AM - 11:00 PM</p>

                            <strong class="mt-3 d-block">Saturday</strong>

                            <p class="gtext">10:00 AM - 2:00 PM</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>
    </section>


    <!-- ABOUT US-->
    <section class="about sec " id="about">
  <div class="container">
    <h1 style="text-align: center; padding: 20px;">About Us</h1>
    <div class="about-section">
      <div class="left-section" style="background-image: url('https://www.shutterstock.com/image-vector/billiard-cue-sticks-on-white-260nw-282991880.jpg'); background-size: cover; height: 400px; display: flex; align-items: center; justify-content: center;">
        <div style="text-align: center; color: white;">
          <h2 style="font-size: 36px;"><a href="{{url('/cues')}}" target="_blank" style="text-decoration: none; color: red;">Discover Our Cues</a></h2>
          <p style="font-size: 18px;"><b>Explore our wide range of cues</b></p>
        </div>
      </div>
      
      <div class="rate-list bg-dark"  style=" padding: 20px;">
        <h3 style="color: red; text-align: center;">Rate List of Games</h3>
        <ul style="list-style-type: none; padding: 0; margin: 0;">
          <li style="margin-bottom: 10px; color:white"><b>6 Ball:</b> Rs.60</li>
          <li style="margin-bottom: 10px;color:white"><b>10 Ball:</b> Rs.80</li>
          <li style="margin-bottom: 10px;color:white"><b>Full Frame:</b> Rs.100</li>
          <li style="margin-bottom: 10px;color:white"><b>Fifty:</b> Rs.70 per head</li>
          <li style="margin-bottom: 10px;color:white"><b>Century:</b> Rs.100 per head</li>
        </ul>
      </div>
      
      <div class="right-section" style="background-image: url('https://5.imimg.com/data5/ANDROID/Default/2021/7/AJ/WE/DM/57100441/b9elitestd-jpg-500x500.jpg'); background-size: cover; height: 400px; display: flex; align-items: center; justify-content: center;">
        <div style="text-align: center; color: white;">
          <h2 style="font-size: 36px;"><a href="{{url('/tables')}}" target="_blank" style="text-decoration: none; color: red;">Discover Our Tables</a></h2>
          <p style="font-size: 18px;"><b>Explore our top-notch tables for the ultimate experience</b></p>
        </div>
      </div>
    </div>
  </div>
</section>




    <!-- CLASS -->
    <section class="class section" id="class">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 text-center mb-5">

                    <h2 data-aos="fade-up" data-aos-delay="200">Our Training Classes</h2>
                </div>

                <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                    <div class="class-thumb">
                        <img src="https://www.sportinglife.com/images/news/945x532/c7c74c06-8e1f-4722-a130-0f1d48fb898c.jpg"
                            class="img-fluid" alt="Class">

                        <div class="class-info">
                            <h3 class="mb-1">Screw Shot</h3>

                            <span><strong>Trained by</strong> Mutie</span>

                            <span class="class-price">2500</span>

                            <p class="mt-3">peechy chenk chenk k</p>
                        </div>
                    </div>
                </div>

                <div class="mt-5 mt-lg-0 mt-md-0 col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="500">
                    <div class="class-thumb">
                        <img src="https://cdn.images.express.co.uk/img/dynamic/4/590x/Judd-Trump-wife-married-1319829.jpg?r=1607328795020"
                            class="img-fluid" alt="Class">

                        <div class="class-info">
                            <h3 class="mb-1">Spin Shot</h3>

                            <span><strong>Trained by</strong> Amish</span>

                            <span class="class-price">3000</span>

                            <p class="mt-3">Pher pher k</p>
                        </div>
                    </div>
                </div>

                <div class="mt-5 mt-lg-0 col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
                    <div class="class-thumb">
                        <img src="https://www.sportinglife.com/images/news/1800x1013/1927a3b9-e601-41fe-a90e-ca1c796b6b07.jpg"
                            class="img-fluid" alt="Class">

                        <div class="class-info">
                            <h3 class="mb-1">Follow Shot</h3>

                            <span><strong>Trained by</strong> Harris</span>

                            <span class="class-price">2000</span>

                            <p class="mt-3">Pory table ki sair</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- SCHEDULE -->
    <section class="schedule section" id="schedule">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 text-center">

                    <h2 class="text-white">Practice Timetable</h2>
                </div>

                <div class="col-lg-12 py-5 col-md-12 col-12">
                    <table class="table table-bordered table-responsive schedule-table">

                        <thead class="thead-light">
                            <th><i class="fa fa-calendar"></i></th>
                            <th>Mon</th>
                            <th>Tue</th>
                            <th>Wed</th>
                            <th>Thu</th>
                            <th>Fri</th>
                            <th>Sat</th>
                            <th>Sun</th>
                        </thead>

                        <tbody>
                            <tr>
                                <td><small>Slot:1</small></td>
                                <td>
                                    <strong>Canon</strong>
                                    <span>1.hr</span>
                                </td>
                                <td>
                                    <strong>Screw</strong>
                                    <span>2.hrs</span>
                                </td>
                                <td></td>
                                <td></td>
                                <td>
                                    <strong>Border</strong>
                                    <span>1.hr</span>
                                </td>
                            </tr>

                            <tr>
                                <td><small>Slot:2</small></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <strong>Follow</strong>
                                    <span>1.hr</span>
                                </td>
                                <td>
                                    <strong>Screw</strong>
                                    <span>1,hr</span>
                                </td>
                                <td></td>
                                <td>
                                    <strong>Stop</strong>
                                    <span>1.hr</span>
                                </td>
                            </tr>

                            <tr>
                                <td><small>Slot:3</small></td>
                                <td></td>
                                <td>
                                    <strong>Top Spin</strong>
                                    <span>2.hrs</span>
                                </td>
                                <td>
                                    <strong>Side Spin</strong>
                                    <span>2.hrs</span>
                                </td>
                                <td></td>
                                <td>
                                    <strong>Snooker</strong>
                                    <span>2.hrs</span>
                                </td>
                            </tr>

                            <tr>
                                <td><small>Slot:4</small></td>
                                <td>
                                    <strong>Slow shot</strong>
                                    <span>2.hrs</span>
                                </td>
                                <td>
                                    <strong>Fast shot</strong>
                                    <span>2.hr</span>
                                </td>
                                <td></td>
                                <td>
                                    <strong>Break</strong>
                                    <span>1 hr</span>
                                </td>
                                <td></td>
                                <td>
                                    <strong>Canon</strong>
                                    <span>1.hr</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </section>


    <!-- CONTACT -->
    <section class="contact section" id="contact">
  <div class="container">
    <div class="contact-content text-center d-flex flex-column align-items-center">
      <h2 class="contact-center">Contact Us</h2>
      <p class="text-center">Feel free to reach out to us with any inquiries or feedback. If you have any complaints or suggestions on how we can improve our snooker club and make it more comfortable for our customers, we would love to hear from you.</p>
      <p class="text-center"><b>If you want to ask anything or register a complaint, click the button below.</b></p>
      <div class="mt-3">
        <a style="padding: 10px;" href="{{url('/contact-us')}}" target="_blank" class="btn btn-success">Click Me</a>
      </div>
    </div>
  </div>
</section>


    <!-- FOOTER -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="mx-auto mt-4 mt-lg-0 mt-md-0 col-lg-5 col-md-6 col-12">
                    <h2 class="mb-4">Where you can <span>find us</span></h2>

                    <p>Star Snooker Club Gujar
                        Khan Near TMA Office Tariq Plaza 2nd Floor Upside swyft Logistic</p>
                        <a href="https://www.google.com/maps/place/Swyft+Logistics+Gujar+Khan/data=!4m7!3m6!1s0x3920059de646f0ef:0xffc56f4d3fb0890c!8m2!3d33.249178!4d73.3115048!16s%2Fg%2F11rzfhlqs8!19sChIJ7_BG5p0FIDkRDImwP01vxf8?authuser=0&hl=en&rclk=1" target="_blank">
          <i class="fas fa-map-marker-alt">Google Maps Location</i>
        </a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>