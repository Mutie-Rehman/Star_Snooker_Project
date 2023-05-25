<!DOCTYPE html>
<html>
<head>
    <title>Players Page</title>
    <style>
        .card {
            margin: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
        }
        
        .card-header {
            background-color: #f5f5f5;
            padding: 10px;
            font-weight: bold;
            border-bottom: 1px solid #ccc;
        }
        
        .card-title {
            font-size: 18px;
            margin-bottom: 10px;
        }
        
        .card-text {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="card-header">Players Page</div>
        <div class="card-body">
            <h5 class="card-title">Name: {{ $players?->name }}</h5>
            <p class="card-text">Address: {{ $players?->address }}</p>
            <p class="card-text">Mobile: {{ $players?->mobile }}</p>
        </div>
    </div>
</body>
</html>
