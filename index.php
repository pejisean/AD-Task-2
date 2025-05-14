<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="/assets/css/example.css">
</head>
<body>
    <div class="rain front-row pointer-events-none">
    </div>
    <div class="container mx-auto h-screen flex flex-col items-center justify-center bg-black-900 bg-opacity-80 rounded-lg p-8 space-y-6 text-center max-w-4x1 fade-in">
        <h1 class="fixed top-0 left-0 font-extrabold w-full text-center text-[70px] text-white leading-tight p-4 z-50 fade-in">
            Welcome to the Weather Report Page!
        </h1>
        <p class="text-gray-300 text-[35px] max-w-3xl mx-auto fade-in">
            See the upcoming weather for the week by clicking the button below!
        </p>
        <a href="page/index.php" class="bg-slate-400 hover:bg-slate-500 font-bold py-2 px-2 inline-block text-center rounded fade-in">
            Click to see the upcoming forecast!
        </a>
    </div>

    <!--Javascript-->
    <script src="/assets/js/example.js"></script>
</body>
</html>