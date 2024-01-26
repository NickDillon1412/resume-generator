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
    <div class="flex justify-end top-7 right-7 absolute">
        <button
            class="flex items-center px-5 py-1.5 rounded bg-indigo-500 hover:bg-indigo-600 shadow transition ease-in-out duration-200 text-white">
            <svg class="w-4 h-4 opacity-50 fill-current shrink-0" viewBox="0 0 16 16">
                <path
                    d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z">
                </path>
            </svg>
            <span class="ml-2">Create PDF</span>
        </button>
    </div>

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
