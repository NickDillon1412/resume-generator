<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Résumé Generator</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body class="antialiased min-h-screen">
    <div class="mx-auto p-16 bg-white max-w-[925px]">
        <h1 class="font-bold text-center text-4xl">Nick Dillon</h1>

        <x-personal-info />

        <div class="space-y-8 mt-8">
            <x-summary />

            <hr class="w-[85%] mx-auto">

            <x-work-experience />

            <hr class="w-[85%] mx-auto">

            <x-recent-projects />

            <hr class="w-[85%] mx-auto">

            <x-other-skills />

            <hr class="w-[85%] mx-auto">

            <x-education />
        </div>
    </div>
</body>

</html>
