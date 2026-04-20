<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Offres Premium - KING STYLE</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        body { font-family: 'Poppins', sans-serif; }
        h1, h2, h3 { font-family: 'Playfair Display', serif; }
        .gold-gradient { background: linear-gradient(135deg, #D4AF37 0%, #B8962E 100%); }
    </style>
</head>
<body class="bg-stone-50">
    <!-- Navbar -->
    <x-navbar />

    <section class="pt-32 pb-20 px-6">
        <div class="max-w-7xl mx-auto">
            <div class=" text-center mb-16" data-aos="fade-down">
                <h1 class="text-5xl md:text-6xl font-bold mt-10">Choisissez votre <span class="text-yellow-600">Niveau d'Expérience</span></h1>
                <p class="mt-5 text-gray-600 max-w-2xl mx-auto text-lg">
                    Chaque pack a été pensé pour transformer votre séjour au Cameroun en un moment inoubliable.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                
                <div class="group relative bg-gray-50 p-8 rounded-2xl border border-gray-200 transition-all duration-500 hover:shadow-2xl hover:-translate-y-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="absolute inset-0 border-2 border-transparent group-hover:border-gray-300 rounded-2xl transition-all"></div>
                    <h3 class="text-xl font-bold mb-4 text-gray-400">Silver</h3>
                    <p class="text-2xl font-bold mb-6">200.000 FCFA</p>
                    <p class="text-gray-400 text-sm mb-10">"L’essentiel, simplement"</p>
                    <ul class="space-y-3 mb-8 text-sm text-gray-600">
                        <li><i class="fa-solid fa-check text-green-500 mr-2"></i>Accueil Aéroport</li>
                        <li><i class="fa-solid fa-check text-green-500 mr-2"></i>Hébergement Standard+</li>
                        <li><i class="fa-solid fa-check text-green-500 mr-2"></i>Assistance 24h/7j</li>
                    </ul>
                    <a href="/reservation?pack=silver" class="w-full text-center py-4 bg-black text-white font-bold rounded-xl hover:bg-yellow-600 transition-all duration-300 hover:scale-105 hover:shadow-lg inline-block">Choisir Silver</a>
                </div>

                <div class="group relative bg-white p-8 rounded-2xl border-2 border-yellow-500/30 transition-all duration-500 hover:shadow-2xl hover:-translate-y-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-yellow-500 text-black text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-tighter">Recommandé</div>
                    <h3 class="text-xl font-bold mb-4 text-yellow-600">Gold</h3>
                    <p class="text-2xl font-bold mb-6">500.000 FCFA</p>
                    <p class="text-gray-400 text-sm mb-10">"Confort et sérénité"</p>
                    <ul class="space-y-3 mb-8 text-sm text-gray-600">
                        <li><i class="fa-solid fa-check text-yellow-500 mr-2"></i>Tout le pack Silver</li>
                        <li><i class="fa-solid fa-check text-yellow-500 mr-2"></i>Chauffeur Privé (8h/j)</li>
                        <li><i class="fa-solid fa-check text-yellow-500 mr-2"></i>Petit-déjeuner inclus</li>
                    </ul>
                    <a href="/reservation?pack=gold" class="w-full text-center py-4 bg-yellow-500 text-black font-bold rounded-xl hover:bg-black hover:text-white transition-all duration-300 hover:scale-105 hover:shadow-lg inline-block">Choisir Gold</a>
                    
                </div>

                <div class="group relative bg-stone-900 p-8 rounded-2xl border border-gray-800 transition-all duration-500 hover:shadow-2xl hover:-translate-y-4 text-white" data-aos="fade-up" data-aos-delay="300">
                    <h3 class="text-xl font-bold mb-4 text-yellow-400">Platinum</h3>
                    <p class="text-2xl font-bold mb-6 text-white">900.000 FCFA</p>
                    <p class="text-gray-200 text-sm mb-10">"Expérience complète"</p>
                    <ul class="space-y-3 mb-8 text-sm text-gray-300">
                        <li><i class="fa-solid fa-check text-yellow-400 mr-2"></i>Tout le pack Gold</li>
                        <li><i class="fa-solid fa-check text-yellow-400 mr-2"></i>Hôtels 5 étoiles</li>
                        <li><i class="fa-solid fa-check text-yellow-400 mr-2"></i>Activités exclusives</li>
                    </ul>
                    <a href="/reservation?pack=platinum" class="w-full text-center py-4 bg-white text-black font-bold rounded-xl hover:bg-yellow-500 transition-all duration-300 hover:scale-105 hover:shadow-lg inline-block">Choisir Platinum</a>
                </div>

                <div class="group relative overflow-hidden p-8 rounded-2xl border border-yellow-500 bg-gradient-to-br from-yellow-600 to-yellow-800 text-white transition-all duration-500 hover:shadow-[0_20px_50px_rgba(212,175,55,0.3)] hover:-translate-y-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="absolute top-0 right-0 p-4 opacity-20">
                        <i class="fa-solid fa-crown text-6xl rotate-12"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-black/50">VIP Signature</h3>
                    <p class="text-2xl font-bold mb-6">1.500.000 FCFA</p>
                    <p class="text-gray-200 text-sm mb-10">"L’excellence sur mesure"</p>
                    <ul class="space-y-3 mb-8 text-sm text-white/90">
                        <li><i class="fa-solid fa-star text-white mr-2"></i>Accès Conciergerie Privée</li>
                        <li><i class="fa-solid fa-star text-white mr-2"></i>Sécurité Personnalisée</li>
                        <li><i class="fa-solid fa-star text-white mr-2"></i>Itinéraire 100% libre</li>
                    </ul>
                    <a href="/reservation?pack=vip" class="w-full text-center py-4 bg-black text-white font-bold rounded-xl hover:bg-white hover:text-black transition-all duration-300 hover:scale-105 hover:shadow-lg inline-block">Choisir  VIP Signature</a>
                </div>

            </div>
        </div>
    </section>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>AOS.init();</script>

    <!-- Footer !-->
    <x-footer />
</body>
</html>