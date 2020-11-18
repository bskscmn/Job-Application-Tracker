<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Job Application Tracker</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endif
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">


                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 ">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                 width="10%" height="10%" viewBox="0 0 150.000000 150.000000"
                                 preserveAspectRatio="xMidYMid meet">

                                    <g transform="translate(0.000000,150.000000) scale(0.100000,-0.100000)"
                                    fill="#000000" stroke="none">
                                        <path d="M600 1484 c-297 -64 -524 -292 -584 -586 -40 -193 1 -402 111 -563
                                        268 -395 817 -449 1152 -114 335 335 281 884 -114 1152 -159 109 -378 152
                                        -565 111z m246 -15 c328 -45 580 -301 624 -633 15 -108 1 -226 -39 -336 -114
                                        -312 -439 -512 -762 -471 -339 44 -592 295 -640 635 -45 322 159 653 472 767
                                        122 45 221 56 345 38z"/>
                                        <path d="M308 1313 c-15 -16 -32 -41 -37 -56 -25 -67 -2 -195 40 -217 10 -6
                                        36 -10 59 -10 l41 0 -7 -47 c-4 -27 -28 -121 -55 -211 -27 -90 -54 -193 -60
                                        -229 -24 -136 11 -306 73 -358 l30 -25 374 0 375 0 24 24 c60 60 58 218 -3
                                        267 -14 10 -40 19 -59 19 l-35 0 7 47 c4 26 17 83 30 127 13 45 22 82 20 84
                                        -7 7 -105 -189 -105 -210 0 -13 -3 -33 -6 -45 l-6 -23 -313 0 -314 0 -26 -32
                                        -27 -33 6 75 c6 78 18 131 81 340 31 101 39 146 43 233 4 103 -1 134 -34 220
                                        -6 16 18 17 323 17 305 0 331 -1 346 -18 24 -26 47 -98 49 -153 1 -27 4 -49 5
                                        -49 1 0 12 19 24 42 25 49 21 95 -16 169 -41 81 -32 79 -453 79 l-368 0 -26
                                        -27z m67 -53 c3 -5 -2 -10 -12 -10 -11 0 -25 -6 -32 -12 -11 -11 -11 -9 -2 10
                                        12 23 35 29 46 12z m5 -71 c0 -5 -7 -9 -15 -9 -15 0 -20 12 -9 23 8 8 24 -1
                                        24 -14z m-10 -58 c0 -37 -32 -55 -44 -25 -10 27 -7 34 19 34 14 0 25 -4 25 -9z
                                        m60 -28 c0 -7 -6 -13 -14 -13 -9 0 -12 8 -8 26 3 19 7 22 13 12 5 -7 9 -19 9
                                        -25z m-12 -718 c18 -38 15 -45 -18 -45 -32 0 -38 16 -20 51 14 26 25 24 38 -6z
                                        m722 6 c15 -28 12 -124 -4 -146 -12 -17 -33 -19 -327 -19 -173 -1 -323 0 -335
                                        2 -19 3 -20 7 -10 43 7 26 7 54 0 89 l-11 50 338 0 c324 0 339 -1 349 -19z
                                        m-710 -110 c0 -10 -7 -24 -16 -32 -20 -16 -48 -1 -52 30 -3 18 1 21 32 21 29
                                        0 36 -4 36 -19z"/>
                                        <path d="M1284 1196 c-4 -10 -17 -22 -30 -26 -13 -5 -32 -26 -42 -47 -10 -21
                                        -67 -126 -126 -235 -70 -129 -111 -215 -118 -252 -11 -50 -15 -57 -45 -67 -39
                                        -13 -67 3 -60 33 10 35 -15 30 -59 -13 -50 -49 -58 -38 -23 38 11 25 18 47 15
                                        51 -10 10 -50 -15 -108 -67 -31 -28 -59 -51 -62 -51 -17 0 -2 36 25 61 32 30
                                        32 36 -2 19 -10 -6 -26 -25 -35 -42 -14 -27 -14 -32 -1 -45 12 -13 23 -7 83
                                        46 37 34 72 61 76 61 5 0 -1 -18 -12 -40 -21 -42 -27 -90 -10 -90 6 0 31 19
                                        57 42 35 33 44 38 39 22 -6 -20 14 -54 32 -54 35 0 86 29 131 73 41 40 74 91
                                        146 227 119 222 111 210 121 185 6 -14 -4 -41 -34 -98 -38 -69 -47 -107 -22
                                        -92 14 9 100 176 100 194 -1 9 -7 27 -14 41 -10 17 -11 30 -4 43 7 13 6 23 -1
                                        30 -7 7 -7 16 0 30 8 13 8 22 0 30 -7 7 -12 5 -17 -7z"/>
                                        <path d="M560 1115 c0 -12 18 -15 100 -15 82 0 100 3 100 15 0 12 -18 15 -100
                                        15 -82 0 -100 -3 -100 -15z"/>
                                        <path d="M550 1005 c0 -13 32 -15 229 -15 194 0 230 2 235 15 5 13 -25 15
                                        -229 15 -202 0 -235 -2 -235 -15z"/>
                                        <path d="M537 913 c-4 -3 -7 -12 -7 -20 0 -11 42 -13 227 -11 208 3 228 5 231
                                        21 3 16 -13 17 -221 17 -123 0 -227 -3 -230 -7z"/>
                                        <path d="M730 745 c0 -12 18 -15 100 -15 82 0 100 3 100 15 0 12 -18 15 -100
                                        15 -82 0 -100 -3 -100 -15z"/>
                                    </g>
                                </svg>
                                <div class="ml-4 text-lg leading-7 font-semibold">Job Application Tracker</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    This application is developped for job applicants to help tracking their job applications. 
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            


                            
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
