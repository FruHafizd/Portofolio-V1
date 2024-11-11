<style>
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes subtleFloat {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-10px);
        }
    }

    .animate-fadeInUp {
        animation: fadeInUp 0.8s ease-out forwards;
    }

    .animate-delay-200 { animation-delay: 200ms; }
    .animate-delay-400 { animation-delay: 400ms; }
    .animate-delay-600 { animation-delay: 600ms; }

    .bg-gradient-orb {
        animation: subtleFloat 8s ease-in-out infinite;
    }
</style>

<div class="bg-[#0A0F1C]">
    <div class="relative min-h-screen flex items-center justify-center overflow-hidden">
        <!-- Refined background gradients -->
        <div class="absolute top-0 left-0 w-full h-full">
            <div class="bg-gradient-orb absolute top-0 left-1/4 w-[40rem] h-[40rem] bg-blue-500/5 rounded-full filter blur-3xl"></div>
            <div class="bg-gradient-orb absolute bottom-0 right-1/4 w-[40rem] h-[40rem] bg-indigo-500/5 rounded-full filter blur-3xl" style="animation-delay: -4s"></div>
        </div>

        <!-- Main content -->
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <!-- Role title with refined styling -->
                <h2 class="text-blue-400 tracking-[0.2em] uppercase text-sm font-medium mb-6 animate-fadeInUp">
                    Turning Ideas into Code
                </h2>
                

                <!-- Name with subtle gradient -->
                <h1 class="text-5xl md:text-7xl font-bold mb-8 tracking-tight animate-fadeInUp animate-delay-200">
                    <span class="text-white">Muhammad</span>
                    <span class="bg-gradient-to-r from-blue-400 to-indigo-400 text-transparent bg-clip-text"> Hafizd</span>
                </h1>

                <!-- Description with optimized typography -->
                <p class="text-gray-400 text-lg md:text-xl leading-relaxed mb-16 animate-fadeInUp animate-delay-400 max-w-3xl mx-auto">
                    Hi there! I’m a full-stack developer with a passion for building elegant, user-focused applications. Every project is an opportunity to innovate and learn, and I look forward to collaborating on solutions that make a difference.
                </p>
                

                <!-- Refined scroll indicator -->
                <div class="animate-fadeInUp animate-delay-600">
                    <div class="w-px h-16 mx-auto bg-gradient-to-b from-blue-500/50 to-transparent"></div>
                    <svg class="w-6 h-6 mx-auto text-blue-500/50 mt-4 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>