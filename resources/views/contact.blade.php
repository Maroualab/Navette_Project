<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - NavShuttle</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'dutch-white': '#EFDFBB',
                        'wine': '#722F37',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-dutch-white/30 min-h-screen flex flex-col">
    <!-- Navigation -->
    <nav class="bg-wine text-white shadow-md">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <a href="/" class="text-2xl font-bold">NavShuttle</a>
            <div class="flex items-center space-x-4">
                <a href="/offres" class="hover:text-dutch-white transition">Offres</a>
                <a href="/demandes/create" class="hover:text-dutch-white transition">Soumettre une demande</a>
                @guest
                    <a href="/login" class="bg-dutch-white text-wine px-4 py-2 rounded-md hover:bg-dutch-white/80 transition">Connexion</a>
                    <a href="/register" class="border border-dutch-white px-4 py-2 rounded-md hover:bg-dutch-white/20 transition">Inscription</a>
                @endguest
                @auth
                    <a href="/logout" class="bg-dutch-white text-wine px-4 py-2 rounded-md hover:bg-dutch-white/80 transition">Déconnexion</a>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Header -->
    <div class="bg-wine text-white py-8">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl font-bold">Contactez-nous</h1>
            <p class="mt-2">Nous sommes là pour répondre à vos questions et vous aider</p>
        </div>
    </div>

    <!-- Contact Content -->
    <div class="flex-grow container mx-auto px-4 py-8">
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="p-6">
                    <h2 class="text-2xl font-semibold mb-6 text-wine">Formulaire de contact</h2>
                    <form>
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nom complet</label>
                            <input type="text" id="name" name="name" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-wine focus:border-transparent" required>
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Adresse e-mail</label>
                            <input type="email" id="email" name="email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-wine focus:border-transparent" required>
                        </div>
                        <div class="mb-4">
                            <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Sujet</label>
                            <select id="subject" name="subject" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-wine focus:border-transparent" required>
                                <option value="">Sélectionnez un sujet</option>
                                <option value="question">Question générale</option>
                                <option value="subscription">Abonnement</option>
                                <option value="technical">Problème technique</option>
                                <option value="partnership">Partenariat</option>
                                <option value="other">Autre</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                            <textarea id="message" name="message" rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-wine focus:border-transparent" required></textarea>
                        </div>
                        <div class="flex justify-end">
                            <button type="submit" class="bg-wine text-white px-6 py-2 rounded-md hover:bg-wine/90 transition">Envoyer</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="p-6">
                    <h2 class="text-2xl font-semibold mb-6 text-wine">Informations de contact</h2>
                    <div class="space-y-4">
                        <div>
                            <h3 class="text-lg font-semibold mb-2">Adresse</h3>
                            <p>123 Rue de la Navette</p>
                            <p>20000 Casablanca, Maroc</p>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold mb-2">Téléphone</h3>
                            <p>+212 5XX XX XX XX</p>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold mb-2">Email</h3>
                            <p>contact@navshuttle.com</p>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold mb-2">Heures d'ouverture</h3>
                            <p>Lundi - Vendredi: 9h00 - 18h00</p>
                            <p>Samedi: 9h00 - 13h00</p>
                            <p>Dimanche: Fermé</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">NavShuttle</h3>
                    <p class="text-gray-300">La plateforme de référence pour les navettes et abonnements de transport interurbain.</p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Liens rapides</h4>
                    <ul class="space-y-2">
                        <li><a href="/" class="text-gray-300 hover:text-dutch-white transition">Accueil</a></li>
                        <li><a href="/offres" class="text-gray-300 hover:text-dutch-white transition">Offres</a></li>
                        <li><a href="/demandes/create" class="text-gray-300 hover:text-dutch-white transition">Soumettre une demande</a></li>
                        <li><a href="/contact" class="text-gray-300 hover:text-dutch-white transition">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Pour les sociétés</h4>
                    <ul class="space-y-2">
                        <li><a href="/societes/inscription" class="text-gray-300 hover:text-dutch-white transition">Devenir partenaire</a></li>
                        <li><a href="/societes/login" class="text-gray-300 hover:text-dutch-white transition">Espace société</a></li>
                        <li><a href="/offres/create" class="text-gray-300 hover:text-dutch-white transition">Créer une offre</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Contact</h4>
                    <ul class="space-y-2 text-gray-300">
                        <li>contact@navshuttle.com</li>
                        <li>+212 5XX XX XX XX</li>
                        <li>Casablanca, Maroc</li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-300">
                <p>&copy; 2025 NavShuttle. Tous droits réservés.</p>
            </div>
        </div>
    </footer>
</body>
</html>

