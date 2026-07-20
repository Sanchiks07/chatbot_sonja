<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>EPD Assistant - Sonja</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <script src="{{ asset('script.js') }}" defer></script>
    <link rel="manifest" href="{{ asset('manifest.json') }}">
    <meta name="theme-color" content="#2563eb">
</head>
<body>
    <!-- Splash Screen -->
    <div id="splash-screen">
        <div class="splash-content">
            <img src="{{ asset('img/epd-logo-2.png') }}" alt="EPD Logo" class="splash-logo" >
            <h1>Sonja</h1>
            <p>Your Erasmus guide for life in Portugal.</p>

            <div class="loading-dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
            
            <div id="loading-text">
                Preparing Sonja...
            </div>
        </div>
    </div>

    <div class="main-container">
        {{ $slot }}
    </div>
</body>
</html>