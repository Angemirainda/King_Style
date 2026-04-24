<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À Propos - KING STYLE</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        body { font-family: 'Poppins', sans-serif; scroll-behavior: smooth; }
        h1, h2, h3 { font-family: 'Playfair Display', serif; }
        .glass { background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.1); }
        .carousel-slide { opacity: 0; transition: opacity 1s ease-in-out; }
        .carousel-slide.active { opacity: 1; }
        .carousel-dot { background: rgba(255,255,255,0.55); }
        .carousel-dot.active { background: rgba(212,175,55,0.95); }
    </style>

    <script>
        tailwind.config = {
            theme: { extend: { colors: { gold: '#D4AF37', goldDark: '#B8962E' } } }
        }
    </script>
</head>
<body class="bg-stone-50 text-gray-900 overflow-x-hidden">

  <!-- Composant Navbar -->
    <x-navbar />

<!-- Section Hero : bannière immersive avec image de fond et titre -->
<section class="relative h-[65vh] flex items-center justify-center bg-black overflow-hidden">
    <div class="absolute inset-0 opacity-40">
        <img src="{{ asset('images/limbe.jpg') }}" class="w-full h-full object-cover scale-110 animate-[pulse_15s_infinite]">
    </div>
    <div class="relative z-10 text-center px-6" data-aos="zoom-out">
        <h1 class="text-white text-5xl md:text-7xl font-bold mt-4">L'Art de l'Excellence</h1>
        <p class="text-gold uppercase tracking-[0.4em] text-sm">Notre vision, votre héritage</p>
    </div>
</section>

<!-- Section Qui sommes-nous : présentation de l'agence et de ses valeurs -->
<section class="py-24 max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">
    <div data-aos="fade-right">
        <h2 class="text-4xl font-bold mb-8">Qui sommes-nous ?</h2>
        <p class="text-gray-600 leading-relaxed mb-6">
            Née de la passion pour l'Afrique et du désir d'offrir un service irréprochable, <strong>KING STYLE</strong> est bien plus qu'une agence de voyage. Nous sommes les gardiens de vos moments les plus précieux au Cameroun.
        </p>
        <div class="grid grid-cols-1 gap-4">
            <div class="flex items-start gap-4">
                <span class="text-gold text-2xl mt-1"><i class="fa-solid fa-gem"></i></span>
                <div>
                    <h4 class="font-bold">Luxe Sur-Mesure</h4>
                    <p class="text-sm text-gray-500">Chaque itinéraire est sculpté selon vos envies, sans aucun compromis.</p>
                </div>
            </div>
            <div class="flex items-start gap-4">
                <span class="text-gold text-2xl mt-1"><i class="fa-solid fa-earth-africa"></i></span>
                <div>
                    <h4 class="font-bold">Impact Local</h4>
                    <p class="text-sm text-gray-500">Valoriser la culture camerounaise tout en préservant son authenticité.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="relative" data-aos="fade-left">
        <img src="{{ asset('images/logo2.png') }}" class="rounded-lg shadow-2xl relative z-10">
        <div class="absolute -top-4 -right-4 w-full h-full border-2 border-gold rounded-lg -z-0"></div>
    </div>
</section>

<!-- Section Explorez le Cameroun : cartes thématiques avec carrousels et texte descriptif -->
<section class="py-20 bg-stone-900 text-white">
    <div class="max-w-6xl mx-auto px-6">
        <div class="text-center mb-20" data-aos="fade-up">
            <h2 class="text-4xl font-bold mb-4">Explorez le Cameroun</h2>
            <div class="h-1 w-20 bg-gold mx-auto"></div>
        </div>

        <!-- Plages section: balnéaire, relaxation et itinéraires côtiers -->
        <div id="plages" class="grid md:grid-cols-2 gap-12 items-center mb-32" data-aos="fade-up">
            <div class="order-2 md:order-1">
                <div class="explore-carousel relative overflow-hidden rounded-xl shadow-lg h-[28rem] sm:h-[30rem]">
                    <div class="carousel-slide absolute inset-0 active">
                        <img src="{{ asset('images/limbe.jpg') }}" class="w-full h-full object-cover">
                    </div>
                    <div class="carousel-slide absolute inset-0">
                        <img src="{{ asset('images/chute1.jpg') }}" class="w-full h-full object-cover">
                    </div>
                    <div class="carousel-slide absolute inset-0">
                        <img src="{{ asset('images/kribi2.jpg') }}" class="w-full h-full object-cover">
                    </div>
                    <div class="carousel-slide absolute inset-0">
                        <img src="{{ asset('images/Kribi.jpeg') }}" class="w-full h-full object-cover">
                    </div>
                    <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex gap-2 z-10">
                        <button type="button" class="carousel-dot w-3 h-3 rounded-full border border-white" data-index="0" aria-label="Slide 1"></button>
                        <button type="button" class="carousel-dot w-3 h-3 rounded-full border border-white" data-index="1" aria-label="Slide 2"></button>
                        <button type="button" class="carousel-dot w-3 h-3 rounded-full border border-white" data-index="2" aria-label="Slide 3"></button>
                        <button type="button" class="carousel-dot w-3 h-3 rounded-full border border-white" data-index="3" aria-label="Slide 4"></button>
                    </div>
                </div>
            </div>
            <div class="order-1 md:order-2">
                <span class="text-gold uppercase tracking-widest text-xs font-bold">Évasion Balnéaire</span>
                <h3 class="text-3xl font-bold mt-2 mb-6">Plages Paradisiaques</h3>
                <p class="text-gray-400 mb-8">
                    De la finesse du sable blanc de Kribi aux plages de sable noir volcanique de Limbé, le littoral camerounais est une ode à la détente. Profitez de nos campements privés et dégustez des fruits de mer fraîchement pêchés sous vos yeux.
                </p>
                <a href="#reservation" class="inline-block border-b-2 border-gold pb-1 hover:text-gold transition">Organiser ma retraite balnéaire →</a>
            </div>
        </div>

        <!-- Culture section: traditions, festivals et découverte patrimoniale -->
        <div id="culture" class="grid md:grid-cols-2 gap-12 items-center mb-32" data-aos="fade-up">
            <div>
                <span class="text-gold uppercase tracking-widest text-xs font-bold">Patrimoine Vivant</span>
                <h3 class="text-3xl font-bold mt-2 mb-6">Cultures Vibrantes</h3>
                <p class="text-gray-400 mb-8">
                    Découvrez plus de 250 ethnies. KING STYLE vous ouvre les portes des chefferies traditionnelles de l'Ouest et vous invite aux festivals ancestraux. Une immersion rare au cœur des traditions Bamiléké, Sawa et du Grand Nord.
                </p>
                <a href="#reservation" class="inline-block border-b-2 border-gold pb-1 hover:text-gold transition">Découvrir l'histoire →</a>
            </div>
            <div class="relative">
                <div class="explore-carousel relative overflow-hidden rounded-xl shadow-lg h-[28rem] sm:h-[30rem]">
                    <div class="carousel-slide absolute inset-0 active">
                        <img src="{{ asset('images/Cameroun.jpg') }}" class="w-full h-full object-cover">
                    </div>
                    <div class="carousel-slide absolute inset-0">
                        <img src="{{ asset('images/fete.jpg') }}" class="w-full h-full object-cover">
                    </div>
                    <div class="carousel-slide absolute inset-0">
                        <img src="{{ asset('images/traditionnel.jpeg') }}" class="w-full h-full object-cover">
                    </div>
                    <div class="carousel-slide absolute inset-0">
                        <img src="{{ asset('images/ngondo.jpg') }}" class="w-full h-full object-cover">
                    </div>
                    <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex gap-2 z-10">
                        <button type="button" class="carousel-dot w-3 h-3 rounded-full border border-white" data-index="0" aria-label="Slide 1"></button>
                        <button type="button" class="carousel-dot w-3 h-3 rounded-full border border-white" data-index="1" aria-label="Slide 2"></button>
                        <button type="button" class="carousel-dot w-3 h-3 rounded-full border border-white" data-index="2" aria-label="Slide 3"></button>
                        <button type="button" class="carousel-dot w-3 h-3 rounded-full border border-white" data-index="3" aria-label="Slide 4"></button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Paysages section: nature sauvage, randonnées et panoramas divers -->
        <div id="paysages" class="grid md:grid-cols-2 gap-12 items-center" data-aos="fade-up">
            <div class="order-2 md:order-1">
                <div class="explore-carousel relative overflow-hidden rounded-xl shadow-lg h-[28rem] sm:h-[30rem]">
                    <div class="carousel-slide absolute inset-0 active">
                        <img src="{{ asset('images/paysa1.jpg') }}" class="w-full h-full object-cover">
                    </div>
                    <div class="carousel-slide absolute inset-0">
                        <img src="{{ asset('images/paysa2.jpg') }}" class="w-full h-full object-cover">
                    </div>
                    <div class="carousel-slide absolute inset-0">
                        <img src="{{ asset('images/foret.jpeg') }}" class="w-full h-full object-cover">
                    </div>
                    <div class="carousel-slide absolute inset-0">
                        <img src="{{ asset('images/paysa3.jpg') }}" class="w-full h-full object-cover">
                    </div>
                    <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex gap-2 z-10">
                        <button type="button" class="carousel-dot w-3 h-3 rounded-full border border-white" data-index="0" aria-label="Slide 1"></button>
                        <button type="button" class="carousel-dot w-3 h-3 rounded-full border border-white" data-index="1" aria-label="Slide 2"></button>
                        <button type="button" class="carousel-dot w-3 h-3 rounded-full border border-white" data-index="2" aria-label="Slide 3"></button>
                        <button type="button" class="carousel-dot w-3 h-3 rounded-full border border-white" data-index="3" aria-label="Slide 4"></button>
                    </div>
                </div>
            </div>
            <div class="order-1 md:order-2">
                <span class="text-gold uppercase tracking-widest text-xs font-bold">Nature Sauvage</span>
                <h3 class="text-3xl font-bold mt-2 mb-6">Paysages Variés</h3>
                <p class="text-gray-400 mb-8">
                    L'Afrique en miniature porte bien son nom. Des forêts denses du bassin du Congo aux savanes du Septentrion, en passant par le majestueux Mont Cameroun, nous organisons vos safaris et randonnées avec un confort premium.
                </p>
                <a href="#reservation" class="inline-block border-b-2 border-gold pb-1 hover:text-gold transition">Partir à l'aventure →</a>
            </div>
        </div>

        <!-- Gastronomie section: cuisine locale et expériences culinaires authentiques -->
        <div id="gastronomie" class="grid md:grid-cols-2 gap-12 items-center mb-32" data-aos="fade-up">
            <div>
                <span class="text-gold uppercase tracking-widest text-xs font-bold">Gastronomie Variee</span>
                <h3 class="text-3xl font-bold mt-2 mb-6">Dégustations Authentiques</h3>
                <p class="text-gray-400 mb-8">
                    Découvrez plus de 250 ethnies. KING STYLE vous ouvre les portes des chefferies traditionnelles de l'Ouest et vous invite aux festivals ancestraux. Une immersion rare au cœur des traditions Bamiléké, Sawa et du Grand Nord.
                </p>
                <a href="#reservation" class="inline-block border-b-2 border-gold pb-1 hover:text-gold transition">Découvrir l'histoire →</a>
            </div>
            <div class="relative">
                <div class="explore-carousel relative overflow-hidden rounded-xl shadow-lg h-[28rem] sm:h-[30rem]">
                    <div class="carousel-slide absolute inset-0 active">
                        <img src="{{ asset('images/plage.jpeg') }}" class="w-full h-full object-cover">
                    </div>
                    <div class="carousel-slide absolute inset-0">
                        <img src="{{ asset('images/danse.PNG') }}" class="w-full h-full object-cover">
                    </div>
                    <div class="carousel-slide absolute inset-0">
                        <img src="{{ asset('images/foret.jpeg') }}" class="w-full h-full object-cover">
                    </div>
                    <div class="carousel-slide absolute inset-0">
                        <img src="{{ asset('images/poisson.jpg') }}" class="w-full h-full object-cover">
                    </div>
                    <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex gap-2 z-10">
                        <button type="button" class="carousel-dot w-3 h-3 rounded-full border border-white" data-index="0" aria-label="Slide 1"></button>
                        <button type="button" class="carousel-dot w-3 h-3 rounded-full border border-white" data-index="1" aria-label="Slide 2"></button>
                        <button type="button" class="carousel-dot w-3 h-3 rounded-full border border-white" data-index="2" aria-label="Slide 3"></button>
                        <button type="button" class="carousel-dot w-3 h-3 rounded-full border border-white" data-index="3" aria-label="Slide 4"></button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Conciergerie section: service premium et assistance VIP au voyage -->
        <div id="conciergerie" class="grid md:grid-cols-2 gap-12 items-center" data-aos="fade-up">
            <div class="order-2 md:order-1">
                <div class="explore-carousel relative overflow-hidden rounded-xl shadow-lg h-[28rem] sm:h-[30rem]">
                    <div class="carousel-slide absolute inset-0 active">
                        <img src="{{ asset('images/plage.jpeg') }}" class="w-full h-full object-cover">
                    </div>
                    <div class="carousel-slide absolute inset-0">
                        <img src="{{ asset('images/danse.PNG') }}" class="w-full h-full object-cover">
                    </div>
                    <div class="carousel-slide absolute inset-0">
                        <img src="{{ asset('images/foret.jpeg') }}" class="w-full h-full object-cover">
                    </div>
                    <div class="carousel-slide absolute inset-0">
                        <img src="{{ asset('images/poisson.jpg') }}" class="w-full h-full object-cover">
                    </div>
                    <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex gap-2 z-10">
                        <button type="button" class="carousel-dot w-3 h-3 rounded-full border border-white" data-index="0" aria-label="Slide 1"></button>
                        <button type="button" class="carousel-dot w-3 h-3 rounded-full border border-white" data-index="1" aria-label="Slide 2"></button>
                        <button type="button" class="carousel-dot w-3 h-3 rounded-full border border-white" data-index="2" aria-label="Slide 3"></button>
                        <button type="button" class="carousel-dot w-3 h-3 rounded-full border border-white" data-index="3" aria-label="Slide 4"></button>
                    </div>
                </div>
            </div>
            <div class="order-1 md:order-2">
                <span class="text-gold uppercase tracking-widest text-xs font-bold">L'excellence King Style</span>
                <h3 class="text-3xl font-bold mt-2 mb-6">Service Premium</h3>
                <p class="text-gray-400 mb-8">
                    L'Afrique en miniature porte bien son nom. Des forêts denses du bassin du Congo aux savanes du Septentrion, en passant par le majestueux Mont Cameroun, nous organisons vos safaris et randonnées avec un confort premium.
                </p>
                <a href="#reservation" class="inline-block border-b-2 border-gold pb-1 hover:text-gold transition">Partir à l'aventure →</a>
            </div>
        </div>

        <!-- Hospitalité section: accueil chaleureux et atmosphère camerounaise -->
        <div id="gastronomie" class="grid md:grid-cols-2 gap-12 items-center mb-32" data-aos="fade-up">
            <div>
                <span class="text-gold uppercase tracking-widest text-xs font-bold">Hospitalite</span>
                <h3 class="text-3xl font-bold mt-2 mb-6">Accueil Chaleureux</h3>
                <p class="text-gray-400 mb-8">
                    Découvrez plus de 250 ethnies. KING STYLE vous ouvre les portes des chefferies traditionnelles de l'Ouest et vous invite aux festivals ancestraux. Une immersion rare au cœur des traditions Bamiléké, Sawa et du Grand Nord.
                </p>
                <a href="#reservation" class="inline-block border-b-2 border-gold pb-1 hover:text-gold transition">Découvrir l'histoire →</a>
            </div>
            <div class="relative">
                <div class="explore-carousel relative overflow-hidden rounded-xl shadow-lg h-[28rem] sm:h-[30rem]">
                    <div class="carousel-slide absolute inset-0 active">
                        <img src="{{ asset('images/plage.jpeg') }}" class="w-full h-full object-cover">
                    </div>
                    <div class="carousel-slide absolute inset-0">
                        <img src="{{ asset('images/danse.PNG') }}" class="w-full h-full object-cover">
                    </div>
                    <div class="carousel-slide absolute inset-0">
                        <img src="{{ asset('images/foret.jpeg') }}" class="w-full h-full object-cover">
                    </div>
                    <div class="carousel-slide absolute inset-0">
                        <img src="{{ asset('images/poisson.jpg') }}" class="w-full h-full object-cover">
                    </div>
                    <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex gap-2 z-10">
                        <button type="button" class="carousel-dot w-3 h-3 rounded-full border border-white" data-index="0" aria-label="Slide 1"></button>
                        <button type="button" class="carousel-dot w-3 h-3 rounded-full border border-white" data-index="1" aria-label="Slide 2"></button>
                        <button type="button" class="carousel-dot w-3 h-3 rounded-full border border-white" data-index="2" aria-label="Slide 3"></button>
                        <button type="button" class="carousel-dot w-3 h-3 rounded-full border border-white" data-index="3" aria-label="Slide 4"></button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Section Réservation : incitation à la prise de contact ou réservation -->
<section id="reservation" class="py-24 bg-white text-center">
    <div class="max-w-3xl mx-auto px-6" data-aos="zoom-in">
        <h2 class="text-4xl md:text-5xl font-bold mb-8">Le voyage d'une vie vous attend.</h2>
        <p class="text-gray-600 mb-10 italic">
            "Ne vous contentez pas de voir le Cameroun. Vivez-le avec l'élégance qu'il mérite."
        </p>
        <div class="flex flex-col sm:flex-row justify-center gap-6">
            <a href="#" class="bg-black text-white px-10 py-4 font-bold rounded hover:bg-gold hover:text-black transition-all shadow-xl">
                Réserver mon expérience VIP
            </a>
            <a href="#" class="border-2 border-black px-10 py-4 font-bold rounded hover:bg-black hover:text-white transition-all">
                Parler à un expert
            </a>
        </div>
    </div>
</section>

<!-- Section Pied de page : liens de contact et mentions légales -->
    <x-footer />

<!-- Scripts : initialisation des animations et comportement des carrousels -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({ duration: 1200, once: true });

    document.addEventListener('DOMContentLoaded', function() {
        const carousels = document.querySelectorAll('.explore-carousel');
        const slideDelay = 5000;

        carousels.forEach(container => {
            const slides = container.querySelectorAll('.carousel-slide');
            const dots = container.querySelectorAll('.carousel-dot');
            let currentIndex = 0;
            let timer;

            function showSlide(index) {
                slides.forEach((slide, idx) => {
                    slide.classList.toggle('active', idx === index);
                });
                dots.forEach((dot, idx) => {
                    dot.classList.toggle('active', idx === index);
                });
                currentIndex = index;
            }

            function nextSlide() {
                showSlide((currentIndex + 1) % slides.length);
            }

            function startCarousel() {
                timer = setInterval(nextSlide, slideDelay);
            }

            function resetCarousel() {
                clearInterval(timer);
                startCarousel();
            }

            dots.forEach(dot => {
                dot.addEventListener('click', function() {
                    showSlide(Number(this.dataset.index));
                    resetCarousel();
                });
            });

            if (slides.length) {
                showSlide(0);
                startCarousel();
            }
        });
    });
</script>
</body>
</html>