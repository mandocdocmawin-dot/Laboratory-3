<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<!-- Head: Meta, Title, CSS -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marwin Mandocdoc | About Me</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<!-- Body: Dark Background -->
<body class="bg-[#0f1115] text-white font-sans antialiased overflow-x-hidden">

    <div class="relative min-h-screen flex flex-col">

        <!-- Background: Glowing Effects -->
        <div class="fixed -top-24 -left-24 h-[32rem] w-[32rem] rounded-full bg-blue-500/20 blur-[120px] pointer-events-none z-0"></div>
        <div class="fixed -bottom-24 -right-24 h-[32rem] w-[32rem] rounded-full bg-blue-500/15 blur-[120px] pointer-events-none z-0"></div>

        <!-- Header: Navigation -->
        @include('header')

        <!-- Main Content -->
        <main class="relative z-10 w-full flex-1">
            
            <div class="max-w-7xl mx-auto w-full px-6 md:px-12 pt-4 pb-12 md:pt-8 md:pb-20">
                
                <!-- Intro Section: Image & Bio -->
                <div class="flex flex-col md:grid md:grid-cols-12 gap-12 md:gap-16 items-center">

                   <!-- Profile Image -->
                   <div class="order-2 md:order-1 md:col-span-5 relative flex justify-center md:justify-start items-center w-full">
   
                        <div class="relative w-full max-w-[320px] sm:max-w-[400px] md:max-w-full">
                            
                            <div class="pointer-events-none absolute inset-0 -z-10 bg-blue-500/15 blur-[80px] rounded-full"></div>
                            
                            <img 
                                src="{{ asset('images/marwin_mandocdoc.png') }}" 
                                alt="Marwin Mandocdoc"
                                class="w-full h-auto object-contain transition-all duration-700 block"
                            >
                            <div class="absolute -top-4 -right-4 md:hidden animate-spin-slow text-blue-500">
                                <i class="fas fa-star text-4xl drop-shadow-[0_0_10px_rgba(59,130,246,0.8)]"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Introduction Text -->
                    <div class="order-1 md:order-2 md:col-span-7 flex flex-col justify-center space-y-6 md:space-y-10 text-center md:text-left">
                        
                        <h1 class="font-bold tracking-tighter leading-[0.9] text-[clamp(3.5rem,8vw,8rem)] text-white/90">
                            ABOUT <br>
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-blue-300">ME</span>
                        </h1>

                        <div class="space-y-6 pl-0 md:pl-2 border-l-0 md:border-l-4 border-blue-500/30 md:ml-2">
                            <p class="text-gray-400 text-sm md:text-lg leading-relaxed max-w-2xl">
                                My journey into web development began with simple curiosity, aiming to understand how websites actually work. I quickly realized that coding isn't just about logic—it's about creating things that people can interact with.
                            </p>
                            <p class="text-gray-400 text-sm md:text-lg leading-relaxed max-w-2xl">
                                Currently, I am exploring the basics of <span class="text-blue-400 font-medium">Frontend Development</span> and <span class="text-blue-400 font-medium">UI/UX Design</span>. I’m still learning the ropes, but I enjoy applying every new lesson to my class projects to build simple, responsive layouts. My focus right now is just to learn, improve, and write cleaner code.
                            </p>
                        </div>

                        <div class="pt-2">
                            <a href="{{ route('project') }}" class="group inline-flex items-center gap-3 text-white font-bold tracking-widest text-sm uppercase hover:text-blue-400 transition-colors">
                                View My Work 
                                <span class="bg-blue-600 h-[2px] w-8 group-hover:w-16 transition-all duration-300"></span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            
            <!-- Section: Skills / What I Do -->
            <section class="relative z-10 w-full pb-20">
                
                <div class="max-w-7xl mx-auto px-6 md:px-12 mb-12">
                     <hr class="border-gray-800">
                </div>

                <div class="max-w-7xl mx-auto w-full px-6 md:px-12">
                    
                    <div class="mb-8 md:mb-12 text-center md:text-left">
                        <h2 class="text-3xl md:text-5xl font-bold tracking-tighter">
                            What I <span class="text-blue-500">Do</span>
                        </h2>
                        <p class="text-gray-400 mt-2 text-sm md:text-base max-w-2xl">
                            Explore my areas of interest and expertise.
                        </p>
                    </div>

                    <!-- Dynamic Skill Cards -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        
                        @if(isset($listItems))
                            @foreach($listItems as $item)
                                @php
                                    $details = $serviceMap[$item] ?? [
                                        'icon' => 'fa-layer-group', 
                                        'description' => 'A passionate area of focus and continuous learning.'
                                    ];
                                    
                                    $slug = Str::slug($item);
                                @endphp

                                <div class="group relative bg-[#161b22] border border-gray-800 hover:border-blue-500/50 rounded-xl p-6 transition-all duration-300 hover:shadow-[0_0_20px_rgba(59,130,246,0.15)] hover:-translate-y-1 flex flex-col h-full">
                                    
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

            <!-- Section: MCGI -->
            <section id="mcgi" class="scroll-mt-24 md:scroll-mt-40">
                <div class="max-w-7xl mx-auto px-6 md:px-12 mb-12">
                    <hr class="border-gray-800">
                </div>

                <div class="max-w-7xl mx-auto w-full px-6 md:px-12 pb-12 md:pb-20">
                    <div class="flex flex-col md:grid md:grid-cols-12 gap-12 md:gap-16 items-center">

                        <!-- MCGI Image -->
                        <div class="order-2 md:order-1 md:col-span-5 relative flex justify-center md:justify-start items-center w-full">
                            
                            <div class="relative w-full max-w-[280px] sm:max-w-[350px] md:max-w-full">
                                <div class="pointer-events-none absolute inset-0 -z-10 bg-blue-500/10 blur-[60px] rounded-full"></div>
                            
                                <img 
                                    src="{{ asset('images/mcgi.jpg') }}" 
                                    alt="MCGI"
                                    class="w-full h-auto object-contain transition-all duration-700
                                    [mask-image:linear-gradient(to_bottom,black_85%,transparent_100%)]"
                                >
                            
                                <div class="absolute -top-4 -right-4 md:hidden animate-spin-slow text-blue-500">
                                    <i class="fas fa-star text-4xl drop-shadow-[0_0_10px_rgba(59,130,246,0.8)]"></i>
                                </div>
                            </div>
                        </div>

                        <!-- MCGI Text -->
                        <div class="order-1 md:order-2 md:col-span-7 flex flex-col justify-center space-y-6 md:space-y-10 text-center md:text-left">
                                
                            <h1 class="font-bold tracking-tighter leading-[0.9] text-[clamp(3.5rem,8vw,8rem)] text-white/90">
                                MCGI
                            </h1>

                            <div class="space-y-6 pl-0 md:pl-2 border-l-0 md:border-l-4 border-blue-500/30 md:ml-2">
                                <p class="text-gray-400 text-sm md:text-lg leading-relaxed max-w-2xl">
                                    As a dedicated member of the <span class="text-blue-400 font-medium">Members Church of God International (MCGI)</span>, my life and work are grounded in the biblical teaching of the <span class="text-blue-400 font-medium">"unprofitable servant"</span> (Luke 17:10). I believe that after doing all the good works I can possibly manage, I have merely fulfilled my inherent duty. This spiritual philosophy shapes my approach to every task, ensuring that I serve with genuine humility, free from the desire for recognition or personal praise.
                                </p>
                                
                                <p class="text-gray-400 text-sm md:text-lg leading-relaxed max-w-2xl">
                                    Driven by this commitment, I am an active participant in <span class="text-blue-400 font-medium">charitable works</span> and voluntary service. I offer my time, skills, and labor freely—without expectation of payment—strictly adhering to the principle of <span class="text-blue-400 font-medium">doing good to all</span>. Whether through organized community outreach or individual assistance, my goal is to remain a steadfast servant, executing duties with excellence for the benefit of others and the glory of God.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <!-- Section: Capture The Flag -->
            <section id="capture-the-flag" class="scroll-mt-24 md:scroll-mt-5">
                <div class="max-w-7xl mx-auto px-6 md:px-12 mb-12">
                    <hr class="border-gray-800">
                </div>

                <div class="max-w-7xl mx-auto w-full px-6 md:px-12 pb-12 md:pb-20">
                    <div class="flex flex-col md:grid md:grid-cols-12 gap-12 md:gap-16 items-center">

                        <!-- CTF Text -->
                        <div class="order-1 md:order-1 md:col-span-7 flex flex-col justify-center space-y-6 md:space-y-10 text-center md:text-left">
                                
                            <h1 class="font-bold tracking-tighter leading-[0.9] text-[clamp(3.5rem,6vw,6rem)] lg:text-[clamp(3.5rem,8vw,8rem)] text-white/90">
                                CAPTURE <br> THE FLAG
                            </h1>

                            <div class="space-y-6 pl-0 md:pl-2 border-l-0 md:border-l-4 border-blue-500/30 md:ml-2">
                                
                                <p class="text-gray-400 text-sm md:text-lg leading-relaxed max-w-2xl">
                                    My passion for cybersecurity was put to the test at the <span class="text-blue-400 font-medium">University Capture the Flag 2025: Defenders of the Digital Realm</span>, hosted by Trend Micro Careers Philippines. Competing on August 25, 2025, alongside 192 other squads, my team <span class="text-blue-400 font-medium">"Cyverdarian Heckers"</span> secured the <span class="text-white font-bold">62nd rank out of 193 teams</span>—a challenging experience that sharpened my skills in navigating the digital threat landscape.
                                </p>
                                
                                <p class="text-gray-400 text-sm md:text-lg leading-relaxed max-w-2xl">
                                    Continuing this pursuit of excellence, I participated in the <span class="text-blue-400 font-medium">9th ICT Week Celebration</span> on January 23, 2026. Leveraging the experience gained from previous competitions, my team achieved a podium finish as <span class="text-blue-400 font-bold">First Runner Up</span>, marking a significant milestone in my journey as a defender of the digital space.
                                </p>
                            </div>
                        </div>

                        <!-- CTF Image -->
                        <div class="order-2 md:order-2 md:col-span-5 relative flex justify-center md:justify-end items-center w-full">
                            
                            <div class="relative w-full max-w-[280px] sm:max-w-[350px] md:max-w-full">
                                    <div class="pointer-events-none absolute inset-0 -z-10 bg-blue-500/10 blur-[60px] rounded-full"></div>
                                
                                <img 
                                    src="{{ asset('images/final-ctf.png') }}" 
                                    alt="Capture The Flag"
                                    class="w-full h-auto object-contain transition-all duration-700
                                    [mask-image:linear-gradient(to_bottom,black_85%,transparent_100%)]"
                                >
                                
                                <div class="absolute -top-4 -right-4 md:hidden animate-spin-slow text-blue-500">
                                    <i class="fas fa-star text-4xl drop-shadow-[0_0_10px_rgba(59,130,246,0.8)]"></i>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <!-- Section: Projects Overview -->
            <section id="projects" class="scroll-mt-24 md:scroll-mt-30">
                <div class="max-w-7xl mx-auto px-6 md:px-12 mb-12">
                    <hr class="border-gray-800">
                </div>

                <div class="max-w-7xl mx-auto w-full px-6 md:px-12 pb-12 md:pb-20">
                    <div class="flex flex-col md:grid md:grid-cols-12 gap-12 md:gap-16 items-center">

                        <!-- Projects Image -->
                        <div class="order-2 md:order-1 md:col-span-5 relative flex justify-center md:justify-start items-center w-full">
                            
                            <div class="relative w-full max-w-[280px] sm:max-w-[350px] md:max-w-full">
                                <div class="pointer-events-none absolute inset-0 -z-10 bg-blue-500/10 blur-[60px] rounded-full"></div>
                            
                                <img 
                                    src="{{ asset('images/projects.png') }}" 
                                    alt="Projects"
                                    class="w-full h-auto object-contain transition-all duration-700
                                    [mask-image:linear-gradient(to_bottom,black_85%,transparent_100%)]"
                                >
                            
                                <div class="absolute -top-4 -right-4 md:hidden animate-spin-slow text-blue-500">
                                    <i class="fas fa-star text-4xl drop-shadow-[0_0_10px_rgba(59,130,246,0.8)]"></i>
                                </div>
                            </div>
                        </div>

                        <!-- Projects Text -->
                        <div class="order-1 md:order-2 md:col-span-7 flex flex-col justify-center space-y-6 md:space-y-10 text-center md:text-left">
                                
                            <h1 class="font-bold tracking-tighter leading-[0.9] text-[clamp(3.5rem,8vw,8rem)] text-white/90">
                                PROJECTS
                            </h1>

                            <div class="space-y-6 pl-0 md:pl-2 border-l-0 md:border-l-4 border-blue-500/30 md:ml-2">
                                
                                <p class="text-gray-400 text-sm md:text-lg leading-relaxed max-w-2xl">
                                    To optimize my own academic workflow, I developed <span class="text-blue-400 font-medium">Student Tracker</span>. This custom-built web application serves as my personal productivity hub, featuring tailored modules for generating reviewers, tracking daily activities, and managing complex schedules to ensure I stay ahead of my coursework.
                                </p>
                                
                                <p class="text-gray-400 text-sm md:text-lg leading-relaxed max-w-2xl">
                                    On the collaborative front, I worked with a team to launch <span class="text-blue-400 font-medium">Classched</span>. This platform digitizes school logistics, allowing us to say goodbye to lost paper schedules. It provides a secure, centralized system for administrators and students to organize classes, faculty, and room assignments seamlessly.
                                </p>
                            </div>

                            <div class="pt-2">
                                <a href="{{ route('project') }}" class="group inline-flex items-center gap-3 text-white font-bold tracking-widest text-sm uppercase hover:text-blue-400 transition-colors">
                                    View My Work 
                                    <span class="bg-blue-600 h-[2px] w-8 group-hover:w-16 transition-all duration-300"></span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <!-- Section: Video Editor -->
            <section id="video-editor" class="scroll-mt-24 md:scroll-mt-40">
                <div class="max-w-7xl mx-auto px-6 md:px-12 mb-12">
                    <hr class="border-gray-800">
                </div>

                <div class="max-w-7xl mx-auto w-full px-6 md:px-12 pb-12 md:pb-20">
                    <div class="flex flex-col md:grid md:grid-cols-12 gap-12 md:gap-16 items-center">

                        <!-- Editor Text -->
                        <div class="order-1 md:order-1 md:col-span-7 flex flex-col justify-center space-y-6 md:space-y-10 text-center md:text-left">
                                
                            <h1 class="font-bold tracking-tighter leading-[0.9] text-[clamp(3.5rem,8vw,8rem)] text-white/90">
                                VIDEO <br> EDITOR
                            </h1>

                            <div class="space-y-6 pl-0 md:pl-2 border-l-0 md:border-l-4 border-blue-500/30 md:ml-2">
                                
                                <p class="text-gray-400 text-sm md:text-lg leading-relaxed max-w-2xl">
                                    Beyond the lines of code, I find my creative rhythm in the timeline of a video editor. While I do not claim the title of a master post-production artist, my work is defined by a genuine <span class="text-blue-400 font-medium">love for the craft</span>. For me, editing is not just a technical task—it is a way to weave raw moments into lasting memories.
                                </p>
                                
                                <p class="text-gray-400 text-sm md:text-lg leading-relaxed max-w-2xl">
                                    I approach every project with the mindset of a <span class="text-blue-400 font-medium">visual storyteller</span>. I am constantly learning and experimenting with pacing, cuts, and transitions. My goal is simple: to transform scattered clips into a cohesive narrative, driven not by perfection, but by passion.
                                </p>
                            </div>
                        </div>

                        <!-- Editor Image -->
                        <div class="order-2 md:order-2 md:col-span-5 relative flex justify-center md:justify-end items-center w-full">
                            
                            <div class="relative w-full max-w-[280px] sm:max-w-[350px] md:max-w-full">
                                <div class="pointer-events-none absolute inset-0 -z-10 bg-blue-500/10 blur-[60px] rounded-full"></div>
                            
                                <img 
                                    src="{{ asset('images/video-editor.jpg') }}" 
                                    alt="Video Editor"
                                    class="w-full h-auto object-contain transition-all duration-700
                                    [mask-image:linear-gradient(to_bottom,black_85%,transparent_100%)]"
                                >
                            
                                <div class="absolute -top-4 -right-4 md:hidden animate-spin-slow text-blue-500">
                                    <i class="fas fa-star text-4xl drop-shadow-[0_0_10px_rgba(59,130,246,0.8)]"></i>
                                </div>
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