<!-- resources/views/splash.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Splash Screen</title>
    <style>
        /* Style untuk Splash Screen */
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #012309;
        }
        .splash {
            text-align: center;
            color: white;
            font-size: 2rem;
        }
        .hidden {
            display: none;
        }

    </style>
</head>
<body>
    <div class="splash" id="splash">
    <img src="assets/img/konex-logo.png" alt="image" class="img-konex">
    </div>

    <script>
        // Hilangkan splash screen setelah beberapa detik dan redirect ke halaman login
        window.addEventListener('load', function() {
            setTimeout(() => {
                window.location.href = "{{ route('login') }}";
            }, 3000); // Splash screen tampil selama 3 detik
        });
    </script>
</body>
</html>
