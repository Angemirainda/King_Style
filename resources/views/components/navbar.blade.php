<div>
    <header id="navbar" class=" fixed w-full z-50 transition-all duration-500 py-10 px-5 bg-black/80 backdrop-blur-md border-b border-yellow-500/20">
        <div class="max-w-7xl mx-auto flex justify-between items-center px-6">

            <nav class="hidden md:flex space-x-8 text-sm uppercase tracking-widest text-white">
                <a href="/home" class="transition-colors duration-300 {{ request()->is('home') ? 'text-yellow-400' : 'text-white hover:text-yellow-400' }}">Accueil</a>
                <a href="/about" class="transition-colors duration-300 {{ request()->is('about') ? 'text-yellow-400' : 'text-white hover:text-yellow-400' }}">À propos</a>
                <a href="/services" class="transition-colors duration-300 {{ request()->is('services') ? 'text-yellow-400' : 'text-white hover:text-yellow-400' }}">Nos services</a>
                <a href="/destinations" class="transition-colors duration-300 {{ request()->is('destinations') ? 'text-yellow-400' : 'text-white hover:text-yellow-400' }}">Destinations</a>
            </nav>

            <div class="text-center group cursor-pointer">
                <h1 class="text-2xl md:text-3xl font-bold tracking-[0.2em] text-white transition-transform duration-500 group-hover:scale-105">
                    KING <span class="text-yellow-400">STYLE</span>
                </h1>
                <div class="h-px bg-yellow-500 w-full mt-1 scale-x-0 group-hover:scale-x-100 transition-transform duration-500"></div>
                <p class="text-yellow-400 text-[10px] uppercase tracking-[0.3em] mt-1">Premium conciergerie lifestyle</p>
            </div>

            <div class="flex items-center space-x-6 text-sm">
                <a href="/offers" class="hidden lg:block transition-colors duration-300 {{ request()->is('offers') ? 'text-yellow-400' : 'text-white hover:text-yellow-400' }}">Réservation</a>

                <div class="flex items-center space-x-3 border-l border-gray-700 pl-6">
                    <img src="https://flagcdn.com/w20/fr.png" class="cursor-pointer hover:opacity-70 transition-opacity" alt="FR">
                    <img src="https://flagcdn.com/w20/gb.png" class="cursor-pointer hover:opacity-70 transition-opacity" alt="EN">
                </div>

                <a href="#" class="bg-yellow-500 text-black px-6 py-2.5 rounded-sm font-semibold hover:bg-white transition-all duration-300 shadow-lg hover:shadow-yellow-500/20">
                    Se connecter
                </a>
            </div>
        </div>
    </header>
</div>