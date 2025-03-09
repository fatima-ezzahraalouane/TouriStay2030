<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TouriStay 2030 - Inscription</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .worldcup-gradient {
            background: linear-gradient(135deg, #862633 0%, #009A44 100%);
        }

        .form-input:focus {
            border-color: #862633;
            box-shadow: 0 0 0 2px rgba(134, 38, 51, 0.1);
        }

        .register-card {
            animation: fadeIn 0.5s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center">
                    <a href="" class="flex items-center">
                        <i class="fas fa-futbol text-[#862633] text-2xl mr-2"></i>
                        <span class="text-2xl font-bold">
                            TouriStay 2030
                        </span>
                    </a>
                </div>

                <!-- <div class="flex items-center space-x-4">
                    <a href="{{ route('login') }}" 
                       class="text-[#862633] hover:text-[#009A44] transition-colors duration-300 flex items-center">
                        <i class="fas fa-sign-in-alt mr-2"></i>
                        Se connecter
                    </a>
                </div> -->
            </div>
        </div>
    </nav>

    <div class="container mx-auto px-4 py-12">
        <!-- Registration Form Card -->
        <div class="max-w-md mx-auto register-card">
            <!-- Card Header -->
            <div class="worldcup-gradient rounded-t-xl shadow-lg p-6">
                <h1 class="text-2xl font-bold text-white text-center flex items-center justify-center">
                    <i class="fas fa-user-plus mr-3"></i>
                    Inscription
                </h1>
                <p class="text-white text-center mt-2">
                    Rejoignez-nous pour la Coupe du Monde 2030
                </p>
            </div>
            <!-- Card Body -->
            <div class="bg-white rounded-b-xl shadow-lg p-8">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Name -->
                    <div class="mb-6">
                        <label for="name" class="block text-sm font-medium text-[#862633] mb-2">Nom complet</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="far fa-user text-[#009A44]"></i>
                            </div>
                            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus
                                autocomplete="name"
                                class="w-full border border-gray-300 rounded-lg pl-10 py-3 focus:outline-none focus:ring-2 focus:ring-[#862633]/20 focus:border-[#862633] transition-all"
                                placeholder="Entrer votre nom complet">
                        </div>
                        @error('name')
                        <p class="text-[#862633] text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email Address -->
                    <div class="mb-6">
                        <label for="email" class="block text-sm font-medium text-[#862633] mb-2">Adresse email</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="far fa-envelope text-[#009A44]"></i>
                            </div>
                            <input id="email" type="email" name="email" value="{{ old('email') }}" required
                                autocomplete="username"
                                class="w-full border border-gray-300 rounded-lg pl-10 py-3 focus:outline-none focus:ring-2 focus:ring-[#862633]/20 focus:border-[#862633] transition-all"
                                placeholder="Entrer votre adresse email">
                        </div>
                        @error('email')
                        <p class="text-[#862633] text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="mb-6">
                        <label for="password" class="block text-sm font-medium text-[#862633] mb-2">Mot de passe</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-lock text-[#009A44]"></i>
                            </div>
                            <input id="password" type="password" name="password" required
                                autocomplete="new-password"
                                class="w-full border border-gray-300 rounded-lg pl-10 py-3 focus:outline-none focus:ring-2 focus:ring-[#862633]/20 focus:border-[#862633] transition-all"
                                placeholder="Entrer votre mot de passe">
                        </div>
                        @error('password')
                        <p class="text-[#862633] text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div class="mb-6">
                        <label for="password_confirmation" class="block text-sm font-medium text-[#862633] mb-2">Confirmer le mot de passe</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-lock text-[#009A44]"></i>
                            </div>
                            <input id="password_confirmation" type="password" name="password_confirmation" required
                                autocomplete="new-password"
                                class="w-full border border-gray-300 rounded-lg pl-10 py-3 focus:outline-none focus:ring-2 focus:ring-[#862633]/20 focus:border-[#862633] transition-all"
                                placeholder="Confirmer votre mot de passe">
                        </div>
                        @error('password_confirmation')
                        <p class="text-[#862633] text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Role Selection -->
                    <div class="mb-8">
                        <label for="role" class="block text-sm font-medium text-[#862633] mb-2">Type de compte</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-user-tag text-[#009A44]"></i>
                            </div>
                            <select id="role" name="role"
                                class="w-full border border-gray-300 rounded-lg pl-10 py-3 focus:outline-none focus:ring-2 focus:ring-[#862633]/20 focus:border-[#862633] transition-all appearance-none bg-white">
                                <option value="touriste">Touriste</option>
                                <option value="proprietaire">Propriétaire</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <i class="fas fa-chevron-down text-[#009A44]"></i>
                            </div>
                        </div>
                        @error('role')
                        <p class="text-[#862633] text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Register Button -->
                    <button type="submit"
                        class="w-full worldcup-gradient text-white px-6 py-3 rounded-lg font-bold shadow-lg transition duration-300 hover:opacity-90 flex items-center justify-center">
                        <i class="fas fa-user-plus mr-2"></i>
                        Créer mon compte
                    </button>

                    <!-- Login Link -->
                    <div class="mt-6 text-center">
                        <p class="text-gray-600">
                            Déjà membre ?
                            <a href="{{ route('login') }}"
                                class="text-[#862633] hover:text-[#009A44] font-semibold transition-colors duration-300">
                                Se connecter
                            </a>
                        </p>
                    </div>
                </form>
            </div>

            <!-- Quick Links -->
            <!-- <div class="bg-white rounded-xl shadow-lg p-6 mt-8">
                <h2 class="text-xl font-bold text-[#862633] mb-4 flex items-center">
                    <i class="fas fa-link mr-2"></i>
                    Accès rapides
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <a href="" class="bg-gray-50 hover:bg-[#862633]/5 rounded-lg p-4 flex items-center transition-all duration-300">
                        <div class="rounded-full bg-[#862633]/10 p-3 mr-3">
                            <i class="fas fa-home text-[#862633]"></i>
                        </div>
                        <span class="text-gray-700">Accueil</span>
                    </a>
                    <a href="#" class="bg-gray-50 hover:bg-[#009A44]/5 rounded-lg p-4 flex items-center transition-all duration-300">
                        <div class="rounded-full bg-[#009A44]/10 p-3 mr-3">
                            <i class="fas fa-info-circle text-[#009A44]"></i>
                        </div>
                        <span class="text-gray-700">À propos</span>
                    </a>
                    <a href="#" class="bg-gray-50 hover:bg-[#862633]/5 rounded-lg p-4 flex items-center transition-all duration-300">
                        <div class="rounded-full bg-[#862633]/10 p-3 mr-3">
                            <i class="fas fa-question-circle text-[#862633]"></i>
                        </div>
                        <span class="text-gray-700">Aide</span>
                    </a>
                </div>
            </div> -->
        </div>
    </div>

    <!-- Footer -->
    <footer class="worldcup-gradient text-white mt-12 py-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Brand Section -->
                <div>
                    <h3 class="text-xl font-bold mb-4 flex items-center">
                        <i class="fas fa-futbol mr-2"></i>
                        TouriStay 2030
                    </h3>
                    <p class="text-white/80">
                        Votre plateforme officielle d'hébergement pour la Coupe du Monde 2030.
                    </p>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Liens rapides</h3>
                    <ul class="space-y-2">
                        <li>
                            <a href="#" class="text-white/80 hover:text-white transition-colors duration-300 flex items-center">
                                Accueil
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-white/80 hover:text-white transition-colors duration-300 flex items-center">
                                Comment ça marche
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-white/80 hover:text-white transition-colors duration-300 flex items-center">
                                À propos
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-white/80 hover:text-white transition-colors duration-300 flex items-center">
                                Contact
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Contact</h3>
                    <ul class="space-y-3">
                        <li class="flex items-center text-white/80">
                            <i class="fas fa-envelope mr-3"></i>
                            contact@touristay2030.com
                        </li>
                        <li class="flex items-center text-white/80">
                            <i class="fas fa-phone mr-3"></i>
                            +212 5XX XXX XXX
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Copyright -->
            <div class="border-t border-white/20 mt-8 pt-6 text-center">
                <p class="text-white/80">
                    &copy; TouriStay 2030. Tous droits réservés.
                </p>
            </div>
        </div>
    </footer>
</body>

</html>