<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test App</title>
</head>
<body>
    @if(session('success'))
        <h1>{{ session('success') }}</h1>
    @endif
    {{ $slot }}
</body>
</html>