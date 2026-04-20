<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KING STYLE - Premium Concierge</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
        }
        h1, h2, h3 {
            font-family: 'Playfair Display', serif;
        }
        /* Custom scrollbar pour le look premium */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #000; }
        ::-webkit-scrollbar-thumb { background: #D4AF37; border-radius: 10px; }
    </style>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        gold: '#D4AF37',
                        goldLight: '#E6C97A',
                        goldDark: '#B8962E'
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-white text-gray-800 ">
   
<!-- Navbar -->
 <x-navbar />

<section class="relative h-screen flex items-center justify-center text-center text-white overflow-hidden">
    <img src="{{ asset('images/img1.jpeg') }}" class="absolute w-full h-full object-cover scale-110 animate-[pulse_10s_infinite]" alt="Hero Image">
  
    <div class="absolute inset-0 bg-gradient-to-b from-black/70 via-black/40 to-black/70"></div>

    <div class="pt-20 relative z-10 max-w-4xl px-6" data-aos="fade-up" data-aos-duration="1500">
        <h1 class="text-5xl md:text-7xl font-bold mb-6 leading-tight">
            Découvrez le Cameroun <span class="text-yellow-400 italic">autrement</span>.
        </h1>

        <p class="text-lg md:text-xl mb-10 text-gray-200 max-w-2xl mx-auto font-light" data-aos="fade-up" data-aos-delay="300">
            Entre plages sauvages, cultures vibrantes et expériences uniques, 
            vivez un séjour d’exception au cœur de l’Afrique en miniature.
        </p>

        <div class="flex justify-center gap-6 flex-wrap" data-aos="zoom-in" data-aos-delay="600">
            <a href="#" class="group relative bg-yellow-500 text-black px-10 py-4 font-bold overflow-hidden">
                <span class="relative z-10">Découvrir nos offres</span>
                <div class="absolute inset-0 bg-white translate-y-full group-hover:translate-y-0 transition-transform duration-300"></div>
            </a>

            <a href="#" class="border-2 border-white px-10 py-4 font-bold hover:bg-white hover:text-black transition-all duration-300">
                Planifier mon séjour
            </a>
        </div>

        <p class="mt-12 text-xs uppercase tracking-[0.5em] opacity-60 animate-bounce">
            Faites défiler pour explorer
        </p>
    </div>
</section>

<section class="py-24 bg-white text-center px-6">
    <div data-aos="fade-down">
        <h2 class="text-4xl md:text-5xl font-bold mb-6">
            Pourquoi choisir <span class="text-yellow-500">le Cameroun</span> ?
        </h2>
        <p class="max-w-2xl mx-auto text-gray-500 mb-16 italic text-lg">
            "L’Afrique en miniature : plages, montagnes, cultures et expériences uniques réunies dans un seul pays."
        </p>
    </div>

    <div class="grid md:grid-cols-3 gap-10 max-w-7xl mx-auto">
        <div class="group cursor-pointer" data-aos="fade-up" data-aos-delay="100">
            <div class="relative overflow-hidden rounded-xl shadow-xl mb-6">
                <img src="{{asset('images/plage.jpeg')}}" class="h-80 w-full object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-black/20 group-hover:bg-black/0 transition-colors"></div>
            </div>
            <h3 class="text-2xl font-bold group-hover:text-yellow-600 transition-colors">Plages paradisiaques</h3>
            <p class="text-gray-400 mt-2 text-sm uppercase tracking-widest">Kribi & Limbé</p>
            <div class="mt-4 flex items-center justify-center text-yellow-500 font-bold group-hover:gap-4 transition-all">
                <span>Explorer</span>
                <i class="fa-solid fa-arrow-right ml-2"></i>
            </div>
        </div>

        <div class="group cursor-pointer" data-aos="fade-up" data-aos-delay="200">
            <div class="relative overflow-hidden rounded-xl shadow-xl mb-6">
                <img src="{{asset('images/danse.PNG')}}" class="h-80 w-full object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-black/20 group-hover:bg-black/0 transition-colors"></div>
            </div>
            <h3 class="text-2xl font-bold group-hover:text-yellow-600 transition-colors">Cultures vibrantes</h3>
            <p class="text-gray-400 mt-2 text-sm uppercase tracking-widest">Tradition & Folklore</p>
            <div class="mt-4 flex items-center justify-center text-yellow-500 font-bold group-hover:gap-4 transition-all">
                <span>Découvrir</span>
                <i class="fa-solid fa-arrow-right ml-2"></i>
            </div>
        </div>

        <div class="group cursor-pointer" data-aos="fade-up" data-aos-delay="300">
            <div class="relative overflow-hidden rounded-xl shadow-xl mb-6">
                <img src="{{asset('images/foret.jpeg')}}" class="h-80 w-full object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-black/20 group-hover:bg-black/0 transition-colors"></div>
            </div>
            <h3 class="text-2xl font-bold group-hover:text-yellow-600 transition-colors">Paysages variés</h3>
            <p class="text-gray-400 mt-2 text-sm uppercase tracking-widest">Montagnes & Savanes</p>
            <div class="mt-4 flex items-center justify-center text-yellow-500 font-bold group-hover:gap-4 transition-all">
                <span>S'évader</span>
                <i class="fa-solid fa-arrow-right ml-2"></i>
            </div>
        </div>
    </div>
</section>

<section class="py-24 bg-stone-900 text-white overflow-hidden">
    <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-16 items-center px-6">
        <div data-aos="fade-right">
            <h2 class="text-4xl md:text-5xl font-bold mb-8">
                Plus qu’un voyage, une <br><span class="text-yellow-500 underline decoration-1 underline-offset-8">expérience exclusive</span>
            </h2>
            <p class="text-gray-400 mb-10 text-lg leading-relaxed">
                Avec KING STYLE, redéfinissez vos standards de voyage. Nous nous occupons de chaque détail technique pour que vous ne gardiez que l'essentiel : l'émotion.
            </p>
            <ul class="grid grid-cols-2 gap-6">
                <li class="flex items-center space-x-3 group">
                    <span class="bg-yellow-500/10 p-2 rounded text-yellow-500 group-hover:bg-yellow-500 group-hover:text-black transition-all">✔</span>
                    <span>Accueil VIP</span>
                </li>
                <li class="flex items-center space-x-3 group">
                    <span class="bg-yellow-500/10 p-2 rounded text-yellow-500 group-hover:bg-yellow-500 group-hover:text-black transition-all">✔</span>
                    <span>Hôtels de Luxe</span>
                </li>
                <li class="flex items-center space-x-3 group">
                    <span class="bg-yellow-500/10 p-2 rounded text-yellow-500 group-hover:bg-yellow-500 group-hover:text-black transition-all">✔</span>
                    <span>Chauffeur privé</span>
                </li>
                <li class="flex items-center space-x-3 group">
                    <span class="bg-yellow-500/10 p-2 rounded text-yellow-500 group-hover:bg-yellow-500 group-hover:text-black transition-all">✔</span>
                    <span>Sécurité 24/7</span>
                </li>
            </ul>
        </div>
        <div class="relative" data-aos="fade-left">
            <div class="absolute -inset-4 border border-yellow-500/30 rounded-lg translate-x-4 translate-y-4"></div>
            <img src="{{asset('images/img3.PNG')}}" class="relative rounded-lg shadow-2xl grayscale hover:grayscale-0 transition-all duration-1000">
        </div>
    </div>
</section>

<section class="py-24 text-center px-6 bg-gray-50">
    <h2 class="text-4xl font-bold mb-16" data-aos="fade-up">
        Nos destinations <span class="text-yellow-500">phares</span>
    </h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 max-w-7xl mx-auto">
        @foreach(['Douala' => 'Douala2.jpeg', 'Yaoundé' => 'Yaounde.jpeg', 'Kribi' => 'Kribi.jpeg', 'Ouest' => 'Ouest.jpeg'] as $city => $img)
        <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-500 group" data-aos="zoom-in-up">
            <div class="h-64 overflow-hidden relative">
                <img src="{{asset('images/'.$img)}}" class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                    <button class="bg-white text-black px-6 py-2 rounded-full font-bold transform translate-y-4 group-hover:translate-y-0 transition-transform">Explorer</button>
                </div>
            </div>
            <div class="p-6">
                <h4 class="text-xl font-bold">{{ $city }}</h4>
                <p class="text-sm text-gray-500 mt-2 italic">Découvrez la magie de {{ $city }}</p>
            </div>
        </div>
        @endforeach
    </div>
</section>

<section id="offres" class="py-24 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-6">
        
        <div class="text-center mb-16" data-aos="fade-down">
            <h2 class="text-4xl md:text-5xl font-bold mb-6">
                Des offres pensées <span class="text-yellow-500">pour vous</span>
            </h2>
            <div class="h-1 w-24 bg-yellow-500 mx-auto mb-8"></div>
            <p class="max-w-2xl mx-auto text-gray-600 text-lg leading-relaxed">
                Que vous veniez pour vous détendre, explorer ou vivre une expérience haut de gamme, nous avons conçu des offres adaptées à vos attentes.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            
            <div class="group relative bg-gray-50 p-8 rounded-2xl border border-gray-200 transition-all duration-500 hover:shadow-2xl hover:-translate-y-4" data-aos="fade-up" data-aos-delay="100">
                <div class="absolute inset-0 border-2 border-transparent group-hover:border-gray-300 rounded-2xl transition-all"></div>
                <h3 class="text-xl font-bold mb-4 text-gray-400">Silver</h3>
                <p class="text-2xl font-semibold mb-6">L’essentiel, simplement</p>
                <ul class="space-y-3 mb-8 text-sm text-gray-600">
                    <li><i class="fa-solid fa-check text-green-500 mr-2"></i>Accueil Aéroport</li>
                    <li><i class="fa-solid fa-check text-green-500 mr-2"></i>Hébergement Standard+</li>
                    <li><i class="fa-solid fa-check text-green-500 mr-2"></i>Assistance 24h/7j</li>
                </ul>
            </div>

            <div class="group relative bg-white p-8 rounded-2xl border-2 border-yellow-500/30 transition-all duration-500 hover:shadow-2xl hover:-translate-y-4" data-aos="fade-up" data-aos-delay="200">
                <div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-yellow-500 text-black text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-tighter">Recommandé</div>
                <h3 class="text-xl font-bold mb-4 text-yellow-600">Gold</h3>
                <p class="text-2xl font-semibold mb-6">Confort et sérénité</p>
                <ul class="space-y-3 mb-8 text-sm text-gray-600">
                    <li><i class="fa-solid fa-check text-yellow-500 mr-2"></i>Tout le pack Silver</li>
                    <li><i class="fa-solid fa-check text-yellow-500 mr-2"></i>Chauffeur Privé (8h/j)</li>
                    <li><i class="fa-solid fa-check text-yellow-500 mr-2"></i>Petit-déjeuner inclus</li>
                </ul>
            </div>

            <div class="group relative bg-stone-900 p-8 rounded-2xl border border-gray-800 transition-all duration-500 hover:shadow-2xl hover:-translate-y-4 text-white" data-aos="fade-up" data-aos-delay="300">
                <h3 class="text-xl font-bold mb-4 text-yellow-400">Platinum</h3>
                <p class="text-2xl font-semibold mb-6 text-white">Expérience complète</p>
                <ul class="space-y-3 mb-8 text-sm text-gray-300">
                    <li><i class="fa-solid fa-check text-yellow-400 mr-2"></i>Tout le pack Gold</li>
                    <li><i class="fa-solid fa-check text-yellow-400 mr-2"></i>Hôtels 5 étoiles</li>
                    <li><i class="fa-solid fa-check text-yellow-400 mr-2"></i>Activités exclusives</li>
                </ul>
            </div>

            <div class="group relative overflow-hidden p-8 rounded-2xl border border-yellow-500 bg-gradient-to-br from-yellow-600 to-yellow-800 text-white transition-all duration-500 hover:shadow-[0_20px_50px_rgba(212,175,55,0.3)] hover:-translate-y-4" data-aos="fade-up" data-aos-delay="400">
                <div class="absolute top-0 right-0 p-4 opacity-20">
                    <i class="fa-solid fa-crown text-6xl rotate-12"></i>
                </div>
                <h3 class="text-xl font-bold mb-4 text-black/50">VIP Signature</h3>
                <p class="text-2xl font-semibold mb-6">L’excellence sur mesure</p>
                <ul class="space-y-3 mb-8 text-sm text-white/90">
                    <li><i class="fa-solid fa-star text-white mr-2"></i>Accès Conciergerie Privée</li>
                    <li><i class="fa-solid fa-star text-white mr-2"></i>Sécurité Personnalisée</li>
                    <li><i class="fa-solid fa-star text-white mr-2"></i>Itinéraire 100% libre</li>
                </ul>
            </div>

        </div>

        <div class="mt-20 text-center" data-aos="zoom-in">
            <p class="text-xl italic text-gray-700 mb-8">
                "Avec <span class="text-yellow-600 font-bold">KING STYLE</span>, vous choisissez votre niveau d’expérience. Nous nous occupons du reste."
            </p>
            <a href="/reservation" class="inline-flex items-center gap-3 bg-black text-white px-10 py-4 rounded-full font-bold hover:bg-yellow-500 hover:text-black transition-all duration-300 shadow-xl group">
                reserver mon séjour
                <i class="fa-solid fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
            </a>
        </div>
    </div>
</section>

<section class="py-24 bg-yellow-500 text-black text-center relative overflow-hidden">
    <div class="absolute top-0 left-0 w-32 h-32 bg-white/20 rounded-full -translate-x-16 -translate-y-16 blur-3xl"></div>
    <div class="relative z-10 max-w-3xl mx-auto px-6">
        <h2 class="text-4xl md:text-5xl font-bold mb-8" data-aos="scale-in">
            Prêt pour l'exceptionnel ?
        </h2>
        <p class="text-lg mb-10 font-medium opacity-80">
            Rejoignez le cercle restreint de ceux qui voyagent avec style et sérénité.
        </p>
        <div class="flex justify-center gap-6">
            <a href="#" class="bg-black text-white px-10 py-4 rounded-sm font-bold hover:scale-105 transition-transform shadow-xl">
                Réserver mon séjour
            </a>
            <a href="#" class="border-2 border-black px-10 py-4 rounded-sm font-bold hover:bg-black hover:text-yellow-500 transition-all">
                Contact Privé
            </a>
        </div>
    </div>
</section>



 <x-footer />

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    // Initialisation AOS
    AOS.init({
        duration: 1000,
        easing: 'ease-out-quart',
        once: true,
        offset: 50
    });

    // Gestion du scroll Navbar
    window.addEventListener('scroll', function() {
        const nav = document.getElementById('navbar');
        if (window.scrollY > 100) {
            nav.classList.remove('py-4', 'bg-black/80');
            nav.classList.add('py-2', 'bg-black/95', 'shadow-2xl');
        } else {
            nav.classList.add('py-4', 'bg-black/80');
            nav.classList.remove('py-2', 'bg-black/95', 'shadow-2xl');
        }
    });
</script>

</body>
</html>