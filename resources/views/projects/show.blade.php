<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $project['title'] }}</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container py-5">
    <div class="card mx-auto shadow-lg" style="max-width: 800px; border-radius: 15px; overflow: hidden;">
      <img src="{{ asset($project['image']) }}" class="card-img-top" alt="{{ $project['title'] }}" style="object-fit: cover; height: 400px;">
      <div class="card-body">
        <h2 class="card-title mb-3">{{ $project['title'] }}</h2>
        <p class="card-text">{{ $project['description'] }}</p>
        <a href="{{ url()->previous() }}" class="btn btn-primary mt-3">⬅ Back to Portfolio</a>
      </div>
    </div>
  </div>
</body>
</html>
