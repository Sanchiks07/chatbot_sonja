<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EPD Assistant - Sonja</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <!-- script for chat search -->
    <script>
        const searchRoute = "{{ route('chat.search') }}";
        const csrfToken = "{{ csrf_token() }}";
    </script>
    <script src="{{ asset('script.js') }}" defer></script>
</head>
<body>
    <div class="main-container">
        {{ $slot }}
    </div>
</body>
</html>