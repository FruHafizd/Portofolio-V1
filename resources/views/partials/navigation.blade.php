<div class="sticky top-0 z-50" x-data="{ isOpen: false }">
    <!-- Gradient backdrop overlay dengan opacity yang lebih baik -->
    <div class="absolute inset-0 bg-gradient-to-r from-gray-900/98 via-gray-800/98 to-gray-900/98 backdrop-blur-lg">
    </div>

    <header class="relative">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Logo dengan font weight yang lebih tebal -->
                <div class="flex-shrink-0">
                    <a href="#" class="group">
                        <span
                            class="text-3xl font-extrabold bg-gradient-to-r from-white via-indigo-200 to-white bg-clip-text text-transparent hover:from-indigo-300 hover:via-white hover:to-indigo-300 transition-all duration-300">
                            Fru Ha
                        </span>
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="flex sm:hidden">
                    <button @click="isOpen = !isOpen" type="button"
                        class="inline-flex items-center justify-center p-2 rounded-lg border-2 border-gray-600 text-gray-200 hover:border-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 transition-all duration-200">
                        <svg x-show="!isOpen" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg x-show="isOpen" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Desktop menu dengan font yang lebih tebal -->
                <div class="hidden sm:flex sm:items-center sm:space-x-8">
                    <div id="hs-navbar-dark"
                        class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow sm:block">
                        <div class="flex space-x-8">
                            <a href="#about"
                                class="relative text-gray-200 hover:text-white text-base font-bold tracking-wide transition-colors duration-300 ease-in-out group">
                                About
                                <span
                                    class="absolute bottom-0 left-0 w-0 h-0.5 bg-indigo-400 group-hover:w-full transition-all duration-300"></span>
                            </a>
                            <a href="#technologies"
                                class="relative text-gray-200 hover:text-white text-base font-bold tracking-wide transition-colors duration-300 ease-in-out group">
                                Technologies
                                <span
                                    class="absolute bottom-0 left-0 w-0 h-0.5 bg-indigo-400 group-hover:w-full transition-all duration-300"></span>
                            </a>
                            <a href="#educations"
                                class="relative text-gray-200 hover:text-white text-base font-bold tracking-wide transition-colors duration-300 ease-in-out group">
                                Educations
                                <span
                                    class="absolute bottom-0 left-0 w-0 h-0.5 bg-indigo-400 group-hover:w-full transition-all duration-300"></span>
                            </a>
                            <a href="#experiences"
                                class="relative text-gray-200 hover:text-white text-base font-bold tracking-wide transition-colors duration-300 ease-in-out group">
                                Experiences
                                <span
                                    class="absolute bottom-0 left-0 w-0 h-0.5 bg-indigo-400 group-hover:w-full transition-all duration-300"></span>
                            </a>
                            <a href="#project"
                                class="relative text-gray-200 hover:text-white text-base font-bold tracking-wide transition-colors duration-300 ease-in-out group">
                                Project
                                <span
                                    class="absolute bottom-0 left-0 w-0 h-0.5 bg-indigo-400 group-hover:w-full transition-all duration-300"></span>
                            </a>
                            <a href="#contact"
                                class="relative text-gray-200 hover:text-white text-base font-bold tracking-wide transition-colors duration-300 ease-in-out group">
                                Contact
                                <span
                                    class="absolute bottom-0 left-0 w-0 h-0.5 bg-indigo-400 group-hover:w-full transition-all duration-300"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile menu dengan font yang lebih tebal -->
            <div x-show="isOpen" class="sm:hidden transition-all duration-300" x-cloak>
                <div class="px-2 pt-2 pb-3 space-y-1">
                    <a href="#about"
                        class="block px-3 py-2 rounded-md text-base font-bold text-gray-200 hover:text-white hover:bg-gray-700/70 transition-all duration-300">About</a>
                    <a href="#technologies"
                        class="block px-3 py-2 rounded-md text-base font-bold text-gray-200 hover:text-white hover:bg-gray-700/70 transition-all duration-300">Technologies</a>
                    <a href="#educations"
                        class="block px-3 py-2 rounded-md text-base font-bold text-gray-200 hover:text-white hover:bg-gray-700/70 transition-all duration-300">Educations</a>
                    <a href="#experiences"
                        class="block px-3 py-2 rounded-md text-base font-bold text-gray-200 hover:text-white hover:bg-gray-700/70 transition-all duration-300">Experiences</a>
                    <a href="#project"
                        class="block px-3 py-2 rounded-md text-base font-bold text-gray-200 hover:text-white hover:bg-gray-700/70 transition-all duration-300">Project</a>
                    <a href="#contact"
                        class="block px-3 py-2 rounded-md text-base font-bold text-gray-200 hover:text-white hover:bg-gray-700/70 transition-all duration-300">Contact</a>
                </div>
            </div>
        </nav>
    </header>
</div>
