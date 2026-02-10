<header class="sticky top-0 z-50 flex-shrink-0 w-full backdrop-blur-md bg-[#0f1115]/80 border-b border-white/5 transition-all duration-300">
    <nav class="max-w-7xl mx-auto px-6 md:px-12 py-4 md:py-8 flex justify-between items-center">
        <div class="text-2xl font-bold tracking-tighter">Marwin.</div>
        <ul class="hidden md:flex space-x-8 text-sm uppercase tracking-widest font-medium text-gray-400">
            <li>
                <a href="{{ route('home') }}" 
                   class="transition-all duration-300 {{ request()->routeIs('home') ? 'text-blue-500 font-bold' : 'hover:text-blue-500' }}">
                   Home
                </a>
            </li>
            <li>
                <a href="{{ route('about') }}" 
                   class="transition-all duration-300 {{ request()->routeIs('about') ? 'text-blue-500 font-bold' : 'hover:text-blue-500' }}">
                   About Me
                </a>
            </li>
            <li>
                <a href="{{ route('project') }}" 
                   class="transition-all duration-300 {{ request()->routeIs('project') ? 'text-blue-500 font-bold' : 'hover:text-blue-500' }}">
                   Projects
                </a>
            </li>
        </ul>
    </nav>
</header>