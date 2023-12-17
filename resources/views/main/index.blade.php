<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Include the CSS for Bootstrap here -->
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-5">Welcome to {{ config('app.name') }}</h1>
        <div class="row justify-content-center mt-5">
            <div class="col-md-4">
                <a href="{{ route('tasks.index') }}" class="btn btn-primary btn-block">View Task List</a>
            </div>
            <div class="col-md-4">
                <a href="{{ route('projects.index') }}" class="btn btn-primary btn-block">View Project List</a>
            </div>
        </div>
    </div>

    <!-- Include the JavaScript for Bootstrap here -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>