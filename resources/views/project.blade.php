<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<!-- Head: Meta tags and Styles -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marwin Mandocdoc | Projects</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<!-- Body: Dark Theme Background -->
<body class="bg-[#0f1115] text-white font-sans antialiased overflow-x-hidden">

    <div class="relative min-h-screen flex flex-col">

        <!-- Background: Decorative Blobs -->
        <div class="fixed -top-24 -left-24 h-[32rem] w-[32rem] rounded-full bg-blue-500/20 blur-[120px] pointer-events-none z-0"></div>
        <div class="fixed -bottom-24 -right-24 h-[32rem] w-[32rem] rounded-full bg-blue-500/15 blur-[120px] pointer-events-none z-0"></div>

        <!-- Header: Navigation Bar -->
        @include('header')

        <!-- Main Content -->
        <main class="relative z-10 w-full flex-1">
            
            <div class="max-w-7xl mx-auto w-full px-6 md:px-12 pt-4 pb-12 md:pt-8 md:pb-20">
                
                <!-- Hero Section: Image and Intro -->
                <div class="flex flex-col md:grid md:grid-cols-12 gap-12 md:gap-16 items-center">

                    <!-- Profile Image -->
                    <div class="order-2 md:order-1 md:col-span-5 relative flex justify-center md:justify-start items-center w-full">
                        <div class="relative w-full max-w-[280px] sm:max-w-[350px] md:max-w-full">
                             <div class="pointer-events-none absolute inset-0 -z-10 bg-blue-500/10 blur-[60px] rounded-full"></div>
                            
                            <img 
                                src="{{ asset('images/marwin_mandocdoc.png') }}" 
                                alt="Marwin Mandocdoc"
                                class="w-full h-auto object-contain transition-all duration-700
                                [mask-image:linear-gradient(to_bottom,black_85%,transparent_100%)]"
                            >
                            
                            <!-- Mobile Only Decoration -->
                            <div class="absolute -top-4 -right-4 md:hidden animate-spin-slow text-blue-500">
                                <i class="fas fa-star text-4xl drop-shadow-[0_0_10px_rgba(59,130,246,0.8)]"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Intro Text & Project List -->
                    <div class="order-1 md:order-2 md:col-span-7 flex flex-col justify-center space-y-6 md:space-y-10 text-center md:text-left">
                        
                        <h1 class="font-bold tracking-tighter leading-[0.9] text-[clamp(3.5rem,8vw,8rem)] text-white/90">
                            PROJECTS
                        </h1>

                        <!-- Featured Projects Summary -->
                        <div class="space-y-8 pl-0 md:pl-2 border-l-0 md:border-l-4 border-blue-500/30 md:ml-2">
                            
                            <!-- Project 1 Summary -->
                            <div class="project-item">
                                <h3 class="text-xl md:text-2xl font-bold text-white mb-2">Student Tracker</h3>
                                <p class="text-gray-400 text-sm md:text-lg leading-relaxed max-w-2xl mb-3">
                                    I built this personal web app to help manage my own academic workload. It generates reviewers and tracks my daily tasks. <span class="text-blue-400">While I used AI tools to help navigate the complex logic</span>, this project taught me the fundamentals of structuring a data-driven application.
                                </p>
                                <div class="flex gap-2 text-xs font-mono text-blue-300">
                                    <span class="bg-blue-900/30 px-2 py-1 rounded">PHP</span>
                                    <span class="bg-blue-900/30 px-2 py-1 rounded">Personal Project</span>
                                </div>
                            </div>

                            <!-- Project 2 Summary -->
                            <div class="project-item mt-8">
                                <h3 class="text-xl md:text-2xl font-bold text-white mb-2">ClassSched</h3>
                                <p class="text-gray-400 text-sm md:text-lg leading-relaxed max-w-2xl mb-3">
                                    A team project aiming to replace paper schedules with a digital system. We collaborated to build a platform for administrators and students. <span class="text-blue-400">Using AI as a coding assistant</span> helped us debug faster, allowing us to focus on solving the real-world problem of campus logistics.
                                </p>
                                <div class="flex gap-2 text-xs font-mono text-blue-300">
                                    <span class="bg-blue-900/30 px-2 py-1 rounded">Teamwork</span>
                                    <span class="bg-blue-900/30 px-2 py-1 rounded">System Design</span>
                                </div>
                            </div>

                            <!-- Philosophy Quote -->
                            <div class="mt-10 p-4 bg-blue-900/10 rounded-r-lg border-l-2 border-blue-500">
                                <p class="text-gray-500 text-sm italic">
                                    <span class="text-blue-400 font-bold not-italic">My approach to coding:</span> 
                                    "I currently utilize AI tools to accelerate my learning and fix errors, but my ultimate goal is to understand every line of code I write. I am working towards building these systems entirely within my own ability."
                                </p>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            
            <!-- Section: Selected Projects Grid -->
            <section class="relative z-10 w-full pb-20">
                
                <div class="max-w-7xl mx-auto px-6 md:px-12 mb-12">
                     <hr class="border-gray-800">
                </div>

                <div class="max-w-7xl mx-auto w-full px-6 md:px-12">
                    
                    <div class="mb-8 md:mb-12 text-center md:text-left">
                        <h2 class="text-3xl md:text-5xl font-bold tracking-tighter">
                            Selected <span class="text-blue-500">Projects</span>
                        </h2>
                        <p class="text-gray-400 mt-2 text-sm md:text-base max-w-2xl">
                            Explore my areas of interest and expertise.
                        </p>
                    </div>

                    <!-- Dynamic Projects Loop -->
                    <div class="flex flex-wrap justify-center gap-6">
                        
                        @if(isset($listItems))
                            @foreach($listItems as $item)
                                @php
                                    $details = $serviceMap[$item] ?? [
                                        'icon' => 'fa-layer-group', 
                                        'description' => 'A passionate area of focus and continuous learning.'
                                    ];
                                    $slug = Str::slug($item);
                                @endphp

                                <div class="w-full md:w-[48%] lg:w-[24%] group relative bg-[#161b22] border border-gray-800 hover:border-blue-500/50 rounded-xl p-6 transition-all duration-300 hover:shadow-[0_0_20px_rgba(59,130,246,0.15)] hover:-translate-y-1 flex flex-col h-full">
                                    
                                    <div class="w-14 h-14 rounded-full bg-blue-500/10 flex items-center justify-center mb-6 group-hover:bg-blue-500/20 transition-colors duration-300">
                                        <i class="fas {{ $details['icon'] }} text-xl text-blue-500"></i>
                                    </div>

                                    <div class="flex-1">
                                        <h3 class="text-xl font-bold mb-3 group-hover:text-blue-400 transition-colors duration-300">
                                            {{ $item }}
                                        </h3>
                                        <p class="text-gray-400 text-sm leading-relaxed">
                                            {{ $details['description'] }}
                                        </p>
                                    </div>

                                    <div class="mt-6 pt-6 border-t border-gray-800 group-hover:border-blue-500/30 transition-colors duration-300">
                                        <a href="#{{ $slug }}" class="inline-flex items-center text-sm font-bold text-blue-500 hover:text-blue-400 transition-colors">
                                            Learn More 
                                            <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform duration-300"></i>
                                        </a>
                                    </div>

                                </div>
                            @endforeach
                        @endif

                    </div>
                </div>
            </section>

            <!-- Detailed Section: Student Tracker -->
            <section id="student-tracker" class="scroll-mt-24 md:scroll-mt-30">
                <div class="max-w-7xl mx-auto px-6 md:px-12 mb-12">
                    <hr class="border-gray-800">
                </div>

                <div class="max-w-7xl mx-auto w-full px-6 md:px-12 pb-12 md:pb-20">
                    <div class="flex flex-col items-center gap-10 md:gap-14 text-center">

                        <div class="flex flex-col items-center space-y-6 md:space-y-8">
                            
                            <h1 class="font-bold tracking-tighter leading-[0.9] text-[clamp(3.5rem,6vw,6rem)] lg:text-[clamp(3.5rem,8vw,8rem)] text-white/90">
                                Student <span class="text-blue-500">Tracker</span>
                            </h1>

                            <div class="max-w-3xl mx-auto">
                                <p class="text-gray-400 text-sm md:text-lg leading-relaxed">
                                    Driven by the need for academic optimization, I engineered <span class="text-blue-400 font-medium">Student Tracker</span> as a personal productivity command center. This custom web application features advanced modules for <span class="text-blue-400 font-medium">generating reviewers</span> and <span class="text-blue-400 font-medium">tracking daily metrics</span>, successfully transforming a complex academic workload into a <span class="text-blue-400 font-medium">streamlined, data-driven workflow</span>.
                                </p>
                            </div>
                        </div>

                        <!-- Project Image -->
                        <div class="relative w-full flex justify-center items-center mt-4">
                            <div class="relative w-full max-w-[280px] sm:max-w-[500px] md:max-w-4xl">
                                <div class="pointer-events-none absolute inset-0 -z-10 bg-blue-500/10 blur-[60px] rounded-full"></div>
                                
                                <img 
                                    src="{{ asset('images/StudentTracker.png') }}" 
                                    alt="Student Tracker"
                                    class="w-full h-auto object-contain transition-all duration-700
                                    [mask-image:linear-gradient(to_bottom,black_85%,transparent_100%)]"
                                >
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <!-- Detailed Section: ClassSched -->
            <section id="classsched" class="scroll-mt-24 md:scroll-mt-30">
                <div class="max-w-7xl mx-auto px-6 md:px-12 mb-12">
                    <hr class="border-gray-800">
                </div>

                <div class="max-w-7xl mx-auto w-full px-6 md:px-12 pb-12 md:pb-20">
                    <div class="flex flex-col items-center gap-10 md:gap-14 text-center">

                        <div class="flex flex-col items-center space-y-6 md:space-y-8">
                                
                            <h1 class="font-bold tracking-tighter leading-[0.9] text-[clamp(3.5rem,8vw,8rem)] text-white/90">
                                Class<span class="text-blue-500">Sched</span>
                            </h1>

                            <div class="max-w-3xl mx-auto">
                                <p class="text-gray-400 text-sm md:text-lg leading-relaxed">
                                    Expanding into collaborative development, I partnered with a team to launch <span class="text-blue-400 font-medium">ClassSched</span>, a platform dedicated to digitizing school logistics. By replacing outdated paper trails with a <span class="text-blue-400 font-medium">centralized system</span>, we empowered administrators and students to manage schedules with precision, marking a significant step toward <span class="text-blue-400 font-medium">modernizing the campus experience</span>.
                                </p>
                            </div>
                        </div>

                        <!-- Project Image -->
                        <div class="relative w-full flex justify-center items-center mt-4">
                            <div class="relative w-full max-w-[280px] sm:max-w-[500px] md:max-w-4xl">
                                <div class="pointer-events-none absolute inset-0 -z-10 bg-blue-500/10 blur-[60px] rounded-full"></div>
                                
                                <img 
                                    src="{{ asset('images/classSched.png') }}" 
                                    alt="ClassSched"
                                    class="w-full h-auto object-contain transition-all duration-700
                                    [mask-image:linear-gradient(to_bottom,black_85%,transparent_100%)]"
                                >
                            </div>
                        </div>

                    </div>
                </div>
            </section>

        </main>

        <!-- Footer: Socials and Copyright -->
        <div class="relative z-20 w-full max-w-7xl mx-auto px-6 md:px-12 py-8 flex flex-col md:flex-row items-center justify-between gap-6 border-t border-gray-800/50">
            
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

            <footer class="text-gray-600 text-[10px] md:text-xs tracking-[0.2em] uppercase text-center md:text-right">
                &copy; 2026 Marwin Mandocdoc. All rights reserved.
            </footer>
        </div>

    </div>
</body>
</html>