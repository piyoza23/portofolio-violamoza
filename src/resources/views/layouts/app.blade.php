<!doctype html>
<html lang="en" class="scroll-smooth">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
   
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-[#f8f1f1] text-gray-700" style="font-family: Inter, sans-serif">
<div class="max-w-7xl mx-auto px-6">
    @yield('content')
</div>
</body>
</html>