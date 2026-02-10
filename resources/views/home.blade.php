<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marwin Mandocdoc | WAD2</title>
    
    <!-- Dependencies -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-[#0f1115] text-white font-sans antialiased overflow-hidden">

    <!-- Main Layout Wrapper: Uses h-svh-custom for mobile browser height consistency -->
    <div class="relative h-svh-custom flex flex-col overflow-hidden overflow-x-clip">

        <!-- Ambient Background Effects (Fixed position blobs) -->
        <div class="pointer-events-none absolute -top-24 -left-24 h-[32rem] w-[32rem] rounded-full bg-blue-500/20 blur-[120px]"></div>
        <div class="pointer-events-none absolute -bottom-24 -right-24 h-[32rem] w-[32rem] rounded-full bg-blue-500/15 blur-[120px]"></div>

        <!-- Navigation Header -->
        @include('header')

        <!-- Main Content Area: Flex-1 fills remaining vertical space -->
        <main class="relative z-10 flex-1 flex items-center min-h-0">
            <div class="max-w-7xl mx-auto w-full px-6 md:px-12">
                
                <!-- Hero Grid: Flex-col-reverse on mobile, 12-col grid on desktop -->
                <div class="flex flex-col-reverse md:grid md:grid-cols-12 gap-2 md:gap-10 items-center">

                    <!-- Left Column: Typography & CTAs -->
                    <div class="md:col-span-7 space-y-3 md:space-y-6 text-center md:text-left">
                        <div class="space-y-1 md:space-y-3">
                            <!-- Responsive Typography using Clamp -->
                            <h1 class="font-bold tracking-tight text-[clamp(1.5rem,7vw,2.2rem)] md:text-[clamp(3rem,5vw,5.5rem)] leading-[1.1] md:leading-[1.05] whitespace-nowrap">
                                Hi, I'm Marwin <span class="md:block">Mandocdoc</span>
                            </h1>
                            <p class="text-blue-500 font-bold tracking-wide text-sm md:text-2xl">
                                WAD2 Student
                            </p>
                        </div>

                        <p class="text-gray-400 mx-auto md:mx-0 max-w-[280px] sm:max-w-md text-xs sm:text-base md:text-lg leading-relaxed">
                            This portfolio showcases as WAD2 student activities, from simple layouts to interactive web experiments.
                        </p>

                        <!-- Action Buttons -->
                        <div class="flex flex-wrap justify-center md:justify-start gap-3 md:gap-4 pt-1 md:pt-4">
                            <a href="{{ route('about') }}" class="px-5 md:px-8 py-2 md:py-3 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-lg transition-all duration-300 transform hover:-translate-y-1 shadow-lg shadow-blue-600/20 text-xs md:text-base">
                                About Me
                            </a>
                            <a href="{{ route('project') }}" class="px-5 md:px-8 py-2 md:py-3 border-2 border-gray-700 hover:border-blue-500 text-white font-bold rounded-lg transition-all duration-300 transform hover:-translate-y-1 text-xs md:text-base">
                                My Projects
                            </a>
                        </div>
                    </div>

                    <!-- Right Column: Hero Image -->
                    <div class="md:col-span-5 relative flex justify-center md:justify-end w-full">
                        <div class="relative w-full max-w-[200px] sm:max-w-[260px] md:max-w-none">
                            <!-- Image Glow Effect -->
                            <div class="pointer-events-none absolute inset-0 -z-10 bg-blue-500/10 blur-[40px] md:blur-[110px] rounded-full"></div>

                            <!-- Character Image with Masking Gradient -->
                            <img
                                src="{{ asset('images/marwin_mandocdoc.png') }}"
                                alt="Marwin Mandocdoc"
                                class="h-[25vh] sm:h-[35vh] md:h-[70vh] w-auto mx-auto md:mx-0 object-contain grayscale hover:grayscale-0 transition-all duration-700 
                                [mask-image:linear-gradient(to_bottom,black_80%,transparent_100%)]
                                md:[mask-image:linear-gradient(to_right,black_65%,transparent_100%)]"
                            />
                        </div>
                    </div>

                </div>
            </div>
        </main>

        <!-- Footer Section -->
        <div class="relative z-20 w-full max-w-7xl mx-auto px-6 md:px-12 py-4 md:py-8 flex flex-col md:flex-row items-center justify-between gap-3 md:gap-6 flex-shrink-0">
            <!-- Social Links -->
            <div class="flex space-x-4">
                <a href="https://www.facebook.com/marwin.mandocdoc/" class="w-8 h-8 md:w-10 md:h-10 rounded-full border border-gray-700 flex items-center justify-center hover:bg-blue-600 hover:border-blue-600 transition-all duration-300 group">
                    <i class="fab fa-facebook-f text-xs md:text-base text-gray-400 group-hover:text-white"></i>
                </a>
                <a href="https://www.instagram.com/maw.1nn/" class="w-8 h-8 md:w-10 md:h-10 rounded-full border border-gray-700 flex items-center justify-center hover:bg-blue-600 hover:border-blue-600 transition-all duration-300 group">
                    <i class="fab fa-instagram text-xs md:text-base text-gray-400 group-hover:text-white"></i>
                </a>
                <a href="https://www.linkedin.com/in/marwin-mandocdoc-213668369" class="w-8 h-8 md:w-10 md:h-10 rounded-full border border-gray-700 flex items-center justify-center hover:bg-blue-600 hover:border-blue-600 transition-all duration-300 group">
                    <i class="fab fa-linkedin-in text-xs md:text-base text-gray-400 group-hover:text-white"></i>
                </a>
            </div>

            <!-- Copyright -->
            <footer class="text-gray-600 text-[8px] md:text-xs tracking-[0.2em] uppercase text-center md:text-right">
                &copy; 2026 Marwin Mandocdoc. All rights reserved.
            </footer>
        </div>

    </div>
</body>
</html>