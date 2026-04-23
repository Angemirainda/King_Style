<!-- Modale Réservation -->
<div id="reservationModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 p-6" onclick="closeReservationModal(event)">
    <div class="bg-white rounded-3xl shadow-2xl overflow-hidden w-full max-w-4xl max-h-[90vh] overflow-y-auto flex flex-col md:flex-row" onclick="event.stopPropagation()">
        
        <div class="bg-black text-white p-10 md:w-1/3">
            <h2 class="text-2xl font-bold mb-8">Votre Séjour</h2>
            <div class="space-y-6">
                <div>
                    <p class="text-gray-400 text-xs uppercase tracking-widest">Offre sélectionnée</p>
                    <p id="selectedPackName" class="text-yellow-500 text-xl font-bold uppercase">Silver</p>
                </div>
                <div class="pt-6 border-t border-white/10 text-sm space-y-4">
                    <p class="flex items-center"><i class="fas fa-lock text-yellow-500 mr-3"></i> Paiement 100% sécurisé</p>
                    <p class="flex items-center"><i class="fas fa-headset text-yellow-500 mr-3"></i> Support prioritaire</p>
                </div>
            </div>
            <img src="https://flagcdn.com/w80/cm.png" class="mt-20 opacity-30 w-16" alt="Cameroun">
        </div>

        <div class="p-10 md:w-2/3">
            <div class="flex justify-between items-center mb-8">
                <h1 class="text-3xl font-bold text-gray-800">Finalisez votre réservation</h1>
                <button onclick="closeReservationModal()" class="text-gray-500 hover:text-gray-700 text-2xl font-bold">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            
            <form action="#" method="POST" class="space-y-8">
                
                <div class="space-y-4">
                    <h3 class="text-sm font-bold text-gray-400 uppercase tracking-widest border-b pb-2">Informations Personnelles</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <input type="text" placeholder="Prénom & Nom" class="w-full bg-gray-50 border p-3 rounded-lg focus:ring-2 focus:ring-yellow-500 outline-none">
                        <input type="email" placeholder="Email" class="w-full bg-gray-50 border p-3 rounded-lg focus:ring-2 focus:ring-yellow-500 outline-none">
                        <input type="tel" placeholder="Téléphone (WhatsApp)" class="w-full bg-gray-50 border p-3 rounded-lg focus:ring-2 focus:ring-yellow-500 outline-none">
                        <input type="text" placeholder="Pays de provenance" class="w-full bg-gray-50 border p-3 rounded-lg focus:ring-2 focus:ring-yellow-500 outline-none">
                    </div>
                </div>

                <div class="space-y-4">
                    <h3 class="text-sm font-bold text-gray-400 uppercase tracking-widest border-b pb-2">Informations de Paiement</h3>
                    <div class="space-y-4">
                        <div class="relative">
                            <input type="text" placeholder="Numéro de Carte (VISA / MASTERCARD)" class="w-full bg-gray-50 border p-3 pl-12 rounded-lg focus:ring-2 focus:ring-yellow-500 outline-none">
                            <i class="fas fa-credit-card absolute left-4 top-4 text-gray-400"></i>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <input type="text" placeholder="Date d'expiration (MM/AA)" class="w-full bg-gray-50 border p-3 rounded-lg focus:ring-2 focus:ring-yellow-500 outline-none">
                            <input type="text" placeholder="CVV" class="w-full bg-gray-50 border p-3 rounded-lg focus:ring-2 focus:ring-yellow-500 outline-none">
                        </div>
                    </div>
                </div>

                <div class="pt-6">
                    <button type="submit" class="w-full bg-yellow-500 text-black py-4 rounded-xl font-bold text-lg hover:bg-black hover:text-white transition-all shadow-xl">
                        Confirmer & Payer la réservation
                    </button>
                    <p class="text-center text-[10px] text-gray-400 mt-4 uppercase">
                        Vos données sont cryptées par SSL 256 bits
                    </p>
                </div>
            </form>
        </div>

    </div>
</div>

<script>
function openReservationModal(packName) {
    document.getElementById('reservationModal').classList.remove('hidden');
    document.getElementById('selectedPackName').textContent = packName.charAt(0).toUpperCase() + packName.slice(1);
    document.body.style.overflow = 'hidden';
}

function closeReservationModal(event) {
    if (event && event.target.id !== 'reservationModal') return;
    document.getElementById('reservationModal').classList.add('hidden');
    document.body.style.overflow = 'auto';
}

// Fermer avec la touche Echap
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') closeReservationModal();
});
</script>
