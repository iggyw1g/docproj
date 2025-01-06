<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Home Page</title>
</head>
<body>
    <h1>Welcome to NAME</h1>
    <!-- Button to link to the target page -->
    <a href="{{ route('target.page') }}">
    <button type="button" class="btn btn-primary btn-sm">New Doc</button>
    </a>
</body>

</html>
