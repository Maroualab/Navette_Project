<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - NavShuttle</title>
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
                <a href="/login"
                    class="bg-dutch-white text-wine px-4 py-2 rounded-md hover:bg-dutch-white/80 transition">Connexion</a>
                <a href="/register"
                    class="border border-dutch-white px-4 py-2 rounded-md hover:bg-dutch-white/20 transition">Inscription</a>
            </div>
        </div>
    </nav>


    <form action="{{ route("register.create") }}" method="POST">
        @csrf

      
        <!-- Register Form -->
        <div class="flex-grow flex items-center justify-center py-12 px-4">
            <div class="max-w-md w-full bg-white rounded-lg shadow-lg overflow-hidden">
               
            @guest
                <div class="bg-wine text-white py-4 px-6">
                    <h2 class="text-2xl font-bold">Inscription</h2>
                    <p class="text-dutch-white/80">Créez votre compte</p>
                </div>
            @endguest
                <div class="p-6">
                    <div class="mb-6">
                        <div class="flex justify-center space-x-4 mb-6">
                            <label class="w-full">
                                <input type="radio" name="user_type" value="user" class="hidden peer"{{ old('user_type')=='user'?'checked':'' }}  >
                                <div
                                    class="bg-wine text-white px-4 py-2 rounded-md font-medium w-full text-center peer-checked:bg-dutch-white peer-checked:text-wine cursor-pointer">
                                    Utilisateur</div>
                            </label>
                            <label class="w-full">
                                <input type="radio" name="user_type" value="transport_company" class="hidden peer" {{ old('user_type')=='company'?'checked':'' }} >
                                <div
                                    class="bg-wine text-white px-4 py-2 rounded-md font-medium w-full text-center peer-checked:bg-dutch-white peer-checked:text-wine cursor-pointer">
                                    Société</div>
                            </label>
                        </div>
                        @error('user_type')
                            <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
                        @enderror

                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 font-medium mb-2">Nom complet</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-wine focus:border-transparent"
                                required>
                        </div>
                        @error('name')
                            <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
                        @enderror

                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-wine focus:border-transparent"
                                required>
                        </div>
                        @error('email')
                            <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
                        @enderror
                        
                        <div class="mb-4">
                            <label for="password" class="block text-gray-700 font-medium mb-2">Mot de passe</label>
                            <input type="password" id="password" name="password"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-wine focus:border-transparent"
                                required>
                        </div>

                        @error('password')
                            <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
                        @enderror

                        <div class="mb-6">
                            <label for="password_confirmation" class="block text-gray-700 font-medium mb-2">Confirmer le
                                mot de passe</label>
                            <input type="password" id="password_confirmation" name="password_confirmation"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-wine focus:border-transparent"
                                required>
                        </div>
                    
                        <button type="submit"
                            class="w-full bg-wine text-white py-2 px-4 rounded-md font-medium hover:bg-wine/90 transition">S'inscrire</button>

                        </div>
                        <div class="text-center">
                            <p class="text-gray-600">Vous avez déjà un compte ? <a href="{{ route('login') }}"
                            class="text-wine font-medium hover:underline">Se connecter</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-6">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; {{ date('Y') }} NavShuttle. Tous droits réservés.</p>
        </div>
    </footer>
</body>

</html>