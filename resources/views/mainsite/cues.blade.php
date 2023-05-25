<!DOCTYPE html>
<html>
<head>
  <title>Star Snooker Club - Cues</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      margin: 0;
      padding: 0;
      background-color: #f9f9f9;
    }

    .cue-section {
      padding: 50px 0;
      background-color: #f9f9f9;
    }

    .cue-title {
      text-align: center;
      font-size: 32px;
      color: red;
      padding: 20px 0;
    }

    .cue-card {
      background-color: #fff;
      border: 1px solid #ccc;
      border-radius: 5px;
      padding: 20px;
      margin-bottom: 20px;
      text-align: center;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      height: 520px;
    }

    .cue-card img {
      max-width: 100%;
      height: auto;
      margin-bottom: 10px;
      height: 300px;
      object-fit: cover;
    }

    .cue-card .card-title {
      font-size: 24px;
      margin-bottom: 10px;
      color: #333;
    }

    .cue-card .card-text {
      font-size: 18px;
      color: #666;
    }

    .btn:hover{
      color:red;
      background color:green;
    }

  </style>
</head>
<body>
  <section class="cue-section bg-dark">
    <div class="container">
      <h1 class="cue-title">Cues</h1>
      <div class="row">
        <div class="col-md-4">
          <div class="cue-card">
            <img src="https://www.snookercentral.com/wp-content/uploads/2019/05/15.jpg" alt="Cue Model 1">
            <h2 class="card-title">Cue Model 1</h2>
            <p class="card-text">Price: Rs.15000</p>
            <p class="card-text">Company: Elite Cues</p>
            <a style="padding: 10px;" href="" target="_blank" class="btn btn-success">Buy Now</a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="cue-card">
            <img src="https://m.media-amazon.com/images/I/61eZKkV18yL._SY879_.jpg" alt="Cue Model 2">
            <h2 class="card-title">Cue Model 2</h2>
            <p class="card-text">Price: Rs.12000</p>
            <p class="card-text">Company: Phoenix Cues</p>
            <a style="padding: 10px;" href="" target="_blank" class="btn btn-success">Buy Now</a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="cue-card">
            <img src="https://i0.wp.com/snookerdelight.com/wp-content/uploads/2012/04/Snooker_cue_and_extensions.png?fit=1500%2C960&ssl=1" alt="Cue Model 3">
            <h2 class="card-title">Cue Model 3</h2>
            <p class="card-text">Price: Rs.10000</p>
            <p class="card-text">Company: BLP Cues</p>
            <a style="padding: 10px;" href="" target="_blank" class="btn btn-success">Buy Now</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
