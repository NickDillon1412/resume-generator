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

        {{-- Personal Info --}}
        <div class="space-y-1 flex flex-col justify-center text-center mt-3">
            <p>
                <a href="mailto:nickhds@gmail.com" target="_blank"
                    class="text-indigo-600 hover:text-indigo-700 hover:underline">
                    nickhds@gmail.com
                </a>
                <span>|</span>
                <span>217-549-2621</span>
            </p>

            <p>
                <a href="https://www.linkedin.com/in/nickdillon12/" target="_blank"
                    class="text-indigo-600 hover:text-indigo-700 hover:underline">
                    linkedin.com/in/nickdillon12
                </a> |

                <a href="https://github.com/NickDillon1412" target="_blank"
                    class="text-indigo-600 hover:text-indigo-700 hover:underline">
                    github.com/NickDillon1412
                </a> |

                Website: <a href="https://www.nickdillon.dev/" target="_blank"
                    class="text-indigo-600 hover:text-indigo-700 hover:underline">
                    nickdillon.dev
                </a>
            </p>
        </div>

        <div class="space-y-8 mt-8">
            {{-- Summary --}}
            <div>
                <h2 class="font-bold text-2xl tracking-tight">Summary:</h2>
                <p class="leading-8">
                    I’m a full stack developer, and I have a huge passion for web development and programming. I love
                    creating software with Tailwind CSS, Alpine.js, Laravel, and Livewire. I am constantly sharpening my
                    skills by reading articles, watching video courses, listening to podcasts, and building apps every
                    day.
                </p>
            </div>

            <hr class="w-[85%] mx-auto">

            {{-- Work Experience --}}
            <div>
                <h2 class="font-bold text-2xl tracking-tight">Work Experience:</h2>
                <div class="space-y-8 mt-2">
                    <div>
                        <h3 class="font-semibold text-xl">
                            Gray Television – Digital Applications Developer | Brentwood, TN | April 2023 – Present
                        </h3>
                        <ul class="leading-8 list-disc pl-12 pt-1.5">
                            <li>Communicate with co-workers across several different states</li>
                            <li>Build web apps using the TALL Stack, MySQL, and Docker</li>
                            <li>Integrate AWS services such as SES and S3</li>
                            <li>Work with stakeholders to define and meet project requirements</li>
                            <li>Use Git and GitHub for version control</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="font-semibold text-xl">
                            Build Online – Full Stack Developer | Charleston, IL | May 2021 – June 2021
                        </h3>
                        <ul class="leading-8 list-disc pl-12 pt-1.5">
                            <li>Collaborated with team members across multiple different countries</li>
                            <li>
                                Developed several Laravel applications using eloquent models, controllers, views,
                                route
                                model binding, APIs, and MySQL databases
                            </li>
                            <li>
                                Utilized Vue.js (v2 & v3) for frontend SPAs, Vue Router, Vuex for state management,
                                the Composition API, and used Laravel as a backend API
                            </li>
                            <li>Implemented Tailwind CSS to style applications</li>
                            <li>Used Git and GitHub for version control</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="font-semibold text-xl">Jimmy John’s – Shift Manager | Charleston, IL | December 2018
                            – April
                            2023</h3>
                        <ul class="leading-7 list-disc pl-12 pt-1.5">
                            <li>
                                Trained and onboarded new hires, handled money and bank deposits, and ensured the
                                store was running smoothly day to day
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <hr class="w-[85%] mx-auto">

            {{-- Recent Projects --}}
            <div>
                <h3 class="font-bold text-2xl tracking-tight">Recent Projects:</h3>
                <div class="space-y-8 mt-2">
                    <div>
                        <span class="font-semibold text-xl">Contacts App</span><span class="text-xl pl-1.5">-</span>
                        <span class="leading-8">
                            A full stack web app that allows users to create an account, and then add their contacts and
                            contact
                            details such as: name, email, image, and phone number. Users can also search all the
                            contacts
                            they
                            have uploaded, edit and update their own name, username, email, and password, or delete
                            their
                            account. Tech used in this project: Vue.js, Inertia.js, Tailwind CSS, Laravel, and
                            MySQL. I also used Git and GitHub for version control. Click
                            <a href="https://github.com/NickDillon1412/Contacts" target="_blank"
                                class="text-indigo-600 hover:text-indigo-700 hover:underline">
                                here
                            </a>
                            to see the GitHub repository.
                        </span>
                    </div>
                    <div>
                        <span class="font-semibold text-xl">Recipes App</span><span class="tetx-xl pl-1.5">-</span>
                        <span class="leading-8">
                            A web app that allows users to create an account, and then see all recipes uploaded
                            by any user, and also upload their own recipes. Each recipe includes a title, image,
                            category, description, ingredients, and instructions. Users can also search all recipes,
                            edit, update,
                            or delete their own recipes, but only view recipes uploaded by other users. Tech used in
                            this
                            project: Laravel, Livewire, Alpine.js, Tailwind CSS, and MySQL. I also used Git and GitHub
                            for version control. Click
                            <a href="https://github.com/NickDillon1412/Recipe-App" target="_blank"
                                class="text-indigo-600 hover:text-indigo-700 hover:underline">
                                here
                            </a>
                            to see the GitHub repository.
                        </span>
                    </div>
                </div>
            </div>

            <hr class="w-[85%] mx-auto">

            {{-- Other Skills & Interest --}}
            <div>
                <h3 class="font-bold text-2xl tracking-tight">Other Skills & Interests:</h3>
                <p class="mt-2">
                    Pinia, Object Oriented Programming, PHP, JavaScript, HTML, CSS, Python, Nuxt.js, React.js.
                </p>
            </div>

            <hr class="w-[85%] mx-auto">

            {{-- Education --}}
            <div>
                <h3 class="font-bold text-2xl tracking-tight">Education:</h3>
                <div class="mt-2 space-y-8">
                    <div class="flex flex-col space-y-1.5">
                        <h3 class="font-semibold text-xl">
                            Eastern Illinois University | August 2020 – December 2022
                        </h3>
                        <span>Bachelor of Science</span>
                        <span>Major in Computer and Information Technology</span>
                    </div>
                    <div class="flex flex-col space-y-1.5">
                        <h3 class="font-semibold text-xl">
                            Lake Land College | August 2018 – May 2020
                        </h3>
                        <span>Associate in Applied Science</span>
                        <span>Major in Information Technology - Programming</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
