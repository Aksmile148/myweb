<header class="bg-blue-900 text-white shadow-lg">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center py-4">
            <a href="/" class="flex-shrink-0">
                <h1 class="text-2xl font-bold">OXBRIDGE COLLEGE</h1>
                <p class="text-sm text-blue-200">Business, Health & Technology</p>
            </a>
            
            <!-- Desktop Navigation -->
            <nav class="hidden md:flex space-x-6">
                <a href="/" class="hover:text-blue-300 transition {{ request()->is('/') ? 'text-blue-300 font-semibold' : '' }}">Home</a>
                <a href="/about" class="hover:text-blue-300 transition {{ request()->is('about') ? 'text-blue-300 font-semibold' : '' }}">About</a>
                <a href="/programs" class="hover:text-blue-300 transition {{ request()->is('programs') ? 'text-blue-300 font-semibold' : '' }}">Programs</a>
                <a href="/admissions" class="hover:text-blue-300 transition {{ request()->is('admissions') ? 'text-blue-300 font-semibold' : '' }}">Admissions</a>
                <a href="/contact" class="hover:text-blue-300 transition {{ request()->is('contact') ? 'text-blue-300 font-semibold' : '' }}">Contact</a>
            </nav>
            
            <!-- Mobile Menu Button -->
            <button id="mobile-menu-btn" class="md:hidden text-white focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
        
        <!-- Mobile Navigation -->
        <nav id="mobile-menu" class="hidden md:hidden pb-4">
            <a href="/" class="block py-2 hover:text-blue-300 {{ request()->is('/') ? 'text-blue-300 font-semibold' : '' }}">Home</a>
            <a href="/about" class="block py-2 hover:text-blue-300 {{ request()->is('about') ? 'text-blue-300 font-semibold' : '' }}">About</a>
            <a href="/programs" class="block py-2 hover:text-blue-300 {{ request()->is('programs') ? 'text-blue-300 font-semibold' : '' }}">Programs</a>
            <a href="/admissions" class="block py-2 hover:text-blue-300 {{ request()->is('admissions') ? 'text-blue-300 font-semibold' : '' }}">Admissions</a>
            <a href="/contact" class="block py-2 hover:text-blue-300 {{ request()->is('contact') ? 'text-blue-300 font-semibold' : '' }}">Contact</a>
        </nav>
    </div>
    
    <script>
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
    </script>
</header>
