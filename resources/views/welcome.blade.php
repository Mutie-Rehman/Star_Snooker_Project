<!DOCTYPE html>
<html>
<head>
  <title>Welcome to Star Snooker Club</title>
  <link rel="stylesheet" type="text/css" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background-color: #222;
    }

    .welcome-section {
      position: relative;
      height: 100vh;
      overflow: hidden;
    }

    .swiper-container {
      width: 100%;
      height: 100%;
    }

    .swiper-slide {
      background-size: cover;
      background-position: center;
    }

    .welcome-content {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
      color: #fff;
      z-index: 1;
    }

    h1 {
        color : black;
      font-size: 48px;
      margin-bottom: 20px;
    }

    p {
        color : black;
      font-size: 24px;
      margin-bottom: 40px;
    }

    .btn-container {
      position: absolute;
      bottom: 20px;
      left: 50%;
      transform: translateX(-50%);
      z-index: 1;
    }

    .btn {
      display: inline-block;
      padding: 12px 24px;
      background-color: #f00;
      color: #fff;
      font-size: 18px;
      text-decoration: none;
      border-radius: 4px;
      transition: background-color 0.3s ease;
    }

    .btn:hover {
      background-color: green;
    }
  </style>
</head>
<body>
  <section class="welcome-section">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="background-image: url('https://www.shutterstock.com/image-photo/playing-snooker-6-red-thailand-260nw-1851348109.jpg');"></div>
        <div class="swiper-slide" style="background-image: url('https://cdn.pixabay.com/photo/2020/02/23/11/15/pool-4873047_960_720.png');"></div>
        <div class="swiper-slide" style="background-image: url('https://wallpaperaccess.com/full/1727605.jpg');"></div>
        <div class="swiper-slide" style="background-image: url('https://media.istockphoto.com/id/509494458/photo/snooker-ball-on-a-billiard-table.jpg?s=612x612&w=0&k=20&c=YcpIS7bYdwBP-hV0Uopplmj82zvtgWE01wEwIHKvXBw=');"></div>
      </div>
    </div>

    <div class="welcome-content">
      <h1>Welcome to Star Snooker Club</h1>
      <p>Experience the thrill of snooker in a comfortable environment.</p>
    </div>

    <div class="btn-container">
      <a href="{{url('/registration')}}" class="btn">Start Your Journey</a>
    </div>
  </section>

  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper('.swiper-container', {
      loop: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
    });
  </script>
</body>
</html>
