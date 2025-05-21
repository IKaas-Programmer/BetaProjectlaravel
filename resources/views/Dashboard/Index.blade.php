<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Homepage - Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container min-vh-100 d-flex flex-column justify-content-center align-items-center">
        <h1 class="mb-4">Welcome to the Homepage</h1>
        <p class="mb-4 text-secondary">This is your dashboard homepage. Click start to begin!</p>
        <a href="{{ route('Forms.Register') }}" class="btn btn-primary btn-lg">Start</a>
    </div>
</body>

</html>
