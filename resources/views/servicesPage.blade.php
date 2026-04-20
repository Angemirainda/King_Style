<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Services & Expériences - KING STYLE</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        body { font-family: 'Poppins', sans-serif; scroll-behavior: smooth; }
        h1, h2, h3, h4 { font-family: 'Playfair Display', serif; }
        .bg-gold-gradient { background: linear-gradient(135deg, #D4AF37 0%, #B8962E 100%); }
    </style>
</head>
<body class="bg-white text-gray-900 overflow-x-hidden">
    <!-- Navbar -->
   <x-navbar />
     <!-- He -->
    <section class="relative h-[80vh] flex items-center justify-center bg-black">
        <div class="absolute inset-0 opacity-50">
            <img src="{{ asset('images/img1.jpeg') }}" class="w-full h-full object-cover">
        </div>
        <div class="pt-10 relative z-10 text-center px-6" data-aos="zoom-in">
            <h1 class="text-white text-5xl md:text-7xl font-bold mb-4">Nos Services Exclusifs</h1>
            <p class="text-yellow-500 uppercase tracking-[0.5em] text-sm font-light">L'Excellence sans limite au Cameroun</p>
        </div>
    </section>
<!-- Section Services -->
    <section class=" py-16 bg-stone-50">
        <div class="max-w-6xl  mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center gap-10">
                <div class="md:w-1/2" data-aos="fade-right">
                    <h2 class="text-4xl font-bold mb-8 italic">Le Cameroun, <br><span class="text-yellow-600 font-serif">Une terre de contrastes</span></h2>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Surnommé "L'Afrique en miniature", le Cameroun offre une diversité géographique, culturelle etculinaire unique au monde. Des sommets brumeux du Mont Cameroun aux plages de sable blanc de Kribi, chaque kilomètre est une découverte.
                    </p>
                    <div class="grid grid-cols-2 gap-6">
                        <div class="border-l-2 border-yellow-500 pl-4">
                            <h4 class="font-bold">Nature</h4>
                            <p class="text-xs text-gray-500 uppercase">Safari, Randonnée, Plages</p>
                        </div>
                        <div class="border-l-2 border-yellow-500 pl-4">
                            <h4 class="font-bold">Culture</h4>
                            <p class="text-xs text-gray-500 uppercase">250+ ethnies, Royautés</p>
                        </div>
                        <div class="border-l-2 border-yellow-500 pl-4">
                            <h4 class="font-bold">Culinaire</h4>
                            <p class="text-xs text-gray-500 uppercase">Plats traditionnels, Markets</p>
                        </div>
                    </div>
                </div>
                <div class="md:w-1/2 relative overflow-hidden rounded-2xl" data-aos="fade-left">
                    <div class="carousel h-200 flex transition-transform duration-1000 ease-in-out" id="carousel">
                        <img src="{{ asset('images/plage.jpeg') }}" class="rounded-2xl shadow-lg flex-shrink-0 w-full">
                        <img src="{{ asset('images/foret.jpeg') }}" class="rounded-2xl shadow-lg flex-shrink-0 w-full">
                        <img src="{{ asset('images/chute_eau.jpeg') }}" class="rounded-2xl shadow-lg flex-shrink-0 w-full">
                        <img src="{{ asset('images/Kribi.jpeg') }}" class="rounded-2xl shadow-lg flex-shrink-0 w-full">
                        <img src="{{ asset('images/Ouest.jpeg') }}" class="rounded-2xl shadow-lg flex-shrink-0 w-full">
                        <!-- Duplicates for seamless infinite loop -->
                        <img src="{{ asset('images/plage.jpeg') }}" class="rounded-2xl shadow-lg flex-shrink-0 w-full">
                        <img src="{{ asset('images/foret.jpeg') }}" class="rounded-2xl shadow-lg flex-shrink-0 w-full">
                        <img src="{{ asset('images/chute_eau.jpeg') }}" class="rounded-2xl shadow-lg flex-shrink-0 w-full">
                        <img src="{{ asset('images/Kribi.jpeg') }}" class="rounded-2xl shadow-lg flex-shrink-0 w-full">
                        <img src="{{ asset('images/Ouest.jpeg') }}" class="rounded-2xl shadow-lg flex-shrink-0 w-full">
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- Section Services -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold mb-16" data-aos="fade-up">Services <span class="text-yellow-500 italic">Signature</span></h2>
            
            <div class="grid md:grid-cols-3 gap-12">
                <div class="group p-8 bg-stone-50 rounded-3xl hover:bg-black hover:text-white transition-all duration-500 shadow-sm" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-yellow-500 text-4xl mb-6"><i class="fa-solid fa-helicopter"></i></div>
                    <h3 class="text-xl font-bold mb-4">Conciergerie Aérienne</h3>
                    <p class="text-sm opacity-70">Privatisation de jets, hélicoptères pour survoler le Mont Cameroun ou transferts rapides entre Douala et Yaoundé.</p>
                </div>
                <div class="group p-8 bg-stone-50 rounded-3xl hover:bg-black hover:text-white transition-all duration-500 shadow-sm" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-yellow-500 text-4xl mb-6"><i class="fa-solid fa-utensils"></i></div>
                    <h3 class="text-xl font-bold mb-4">Gastronomie Privée</h3>
                    <p class="text-sm opacity-70">Dîner aux chandelles sur la plage ou chef privé dans votre villa pour découvrir les saveurs du terroir sublimées.</p>
                </div>
                <div class="group p-8 bg-stone-50 rounded-3xl hover:bg-black hover:text-white transition-all duration-500 shadow-sm" data-aos="fade-up" data-aos-delay="300">
                    <div class="text-yellow-500 text-4xl mb-6"><i class="fa-solid fa-shield-halved"></i></div>
                    <h3 class="text-xl font-bold mb-4">Sécurité & Protection</h3>
                    <p class="text-sm opacity-70">Une équipe de protection discrète et professionnelle pour vous accompagner dans tous vos déplacements sensibles.</p>
                </div>
            </div>
        </div>
    </section>
<!-- Section Packs -->
    <section class="py-24 bg-black text-white">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-20" data-aos="fade-up">Le Contenu de <span class="text-yellow-500">Nos Expériences</span></h2>

            <div class="space-y-16">
                <div class="flex flex-col md:flex-row gap-12 items-center" data-aos="fade-right">
                    <div class="md:w-1/3 bg-white/5 p-8 rounded-2xl border border-white/10">
                        <h3 class="text-3xl font-bold text-gray-400">Pack Silver</h3>
                        <p class="text-yellow-500 font-bold text-xl mt-2">200.000 FCFA</p>
                    </div>
                    <div class="md:w-2/3 grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="flex gap-4">
                            <i class="fa-solid fa-circle-check text-yellow-500 mt-1"></i>
                            <p class="text-sm text-gray-400"><strong class="text-white">Accueil VIP :</strong> Assistance aux formalités aéroportuaires et salon d'honneur.</p>
                        </div>
                        <div class="flex gap-4">
                            <i class="fa-solid fa-circle-check text-yellow-500 mt-1"></i>
                            <p class="text-sm text-gray-400"><strong class="text-white">Hébergement :</strong> Sélection d'hôtels 4 étoiles partenaires.</p>
                        </div>
                        <div class="flex gap-4">
                            <i class="fa-solid fa-circle-check text-yellow-500 mt-1"></i>
                            <p class="text-sm text-gray-400"><strong class="text-white">Conciergerie :</strong> Assistance téléphonique 24h/24 pour vos besoins courants.</p>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col md:flex-row gap-12 items-center" data-aos="fade-left">
                    <div class="md:w-1/3 bg-yellow-500 p-8 rounded-2xl text-black">
                        <h3 class="text-3xl font-bold">Pack Gold</h3>
                        <p class="font-bold text-xl mt-2">500.000 FCFA</p>
                        <p class="text-xs uppercase mt-4 font-bold">Le plus plébiscité</p>
                    </div>
                    <div class="md:w-2/3 grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="flex gap-4">
                            <i class="fa-solid fa-circle-check text-yellow-500 mt-1"></i>
                            <p class="text-sm text-gray-400"><strong class="text-white">Tout le Pack Silver</strong> plus des privilèges supplémentaires.</p>
                        </div>
                        <div class="flex gap-4">
                            <i class="fa-solid fa-circle-check text-yellow-500 mt-1"></i>
                            <p class="text-sm text-gray-400"><strong class="text-white">Chauffeur Privé :</strong> Mise à disposition d'un véhicule de luxe avec chauffeur 12h/j.</p>
                        </div>
                        <div class="flex gap-4">
                            <i class="fa-solid fa-circle-check text-yellow-500 mt-1"></i>
                            <p class="text-sm text-gray-400"><strong class="text-white">Accès Clubs :</strong> Réservations garanties dans les établissements les plus sélects.</p>
                        </div>
                    </div>
                </div>

                <div class="text-center pt-10">
                    <a href="/offers" class="text-yellow-500 border-b border-yellow-500 pb-2 hover:text-white transition">Voir tous les détails des packs Platinum et VIP →</a>
                </div>
            </div>
        </div>
    </section>
<!-- Section Contact -->
    <section class="py-24 bg-white text-center">
        <div class="max-w-4xl mx-auto px-6" data-aos="zoom-in">
            <h2 class="text-4xl font-bold mb-8">Prêt à vivre une expérience <span class="text-yellow-600 italic">Royale</span> ?</h2>
            <p class="text-gray-500 mb-12">Contactez notre équipe de conciergerie pour personnaliser vos services ou commencez votre réservation dès maintenant.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-6">
                <a href="/reservation" class="bg-black text-white px-10 py-4 font-bold rounded-full hover:bg-yellow-500 hover:text-black transition-all shadow-xl">Réserver mon pack</a>
                <a href="#" class="border-2 border-black px-10 py-4 font-bold rounded-full hover:bg-black hover:text-white transition-all">Demande personnalisée</a>
            </div>
        </div>
    </section>

   <!-- Footer !-->
    <x-footer />

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 1000, once: true });

        // Carousel functionality
        const carousel = document.getElementById('carousel');
        let currentIndex = 0;
        const totalImages = 5;
        const transitionDuration = 1000; // 1 second
        const pauseDuration = 3000; // 3 seconds pause

        function nextSlide() {
            currentIndex++;
            carousel.style.transform = `translateX(-${currentIndex * 100}%)`;

            if (currentIndex >= totalImages) {
                setTimeout(() => {
                    carousel.style.transition = 'none';
                    currentIndex = 0;
                    carousel.style.transform = `translateX(0)`;
                    setTimeout(() => {
                        carousel.style.transition = 'transform 1s ease-in-out';
                    }, 50);
                }, transitionDuration);
            }
        }

        setInterval(nextSlide, transitionDuration + pauseDuration);
    </script>
</body>
</html>