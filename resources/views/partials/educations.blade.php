
<!-- Add to your layout for custom fonts and animations -->
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Inter:wght@400;500&display=swap');

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

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

    .animate-fadeIn {
        animation: fadeIn 1s ease-out;
    }

    .animate-fadeInDown {
        animation: fadeInDown 1s ease-out;
    }

    .animate-fadeInUp {
        animation: fadeInUp 1s ease-out;
    }
</style>


<div class="bg-[#0A0F1C] text-white">
    <div class="relative min-h-[80vh] flex items-center justify-center overflow-hidden"> <!-- Mengurangi tinggi minimum -->
        <!-- Background Elements -->
        <div class="absolute inset-0">
            <div class="absolute top-20 left-20 w-72 h-72 bg-blue-500 rounded-full mix-blend-multiply filter blur-3xl opacity-10 animate-pulse"></div>
            <div class="absolute bottom-20 right-20 w-72 h-72 bg-purple-500 rounded-full mix-blend-multiply filter blur-3xl opacity-10 animate-pulse"></div>
        </div>

        <div class="container mx-auto px-4 relative z-10 pt-24 pb-10"> <!-- Padding atas ditambah, bawah dikurangi -->
            <!-- Enhanced Header -->
            <div class="text-center mb-12"> <!-- Mengurangi margin bawah -->
                <div class="relative inline-block">
                    <h1 class="font-bold text-4xl mb-4 tracking-wide font-['Montserrat'] relative z-10 animate-fadeInDown">
                        <span class="bg-gradient-to-r from-white to-gray-300 bg-clip-text text-transparent">
                            Educational Journey
                        </span>
                    </h1>
                    <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-full">
                        <div class="w-24 h-[2px] mx-auto bg-gradient-to-r from-[#3B82F6] to-[#1E40AF] rounded-full animate-fadeInUp"></div>
                        <div class="flex justify-center gap-1 mt-2">
                            <div class="w-1 h-1 rounded-full bg-[#3B82F6]"></div>
                            <div class="w-2 h-1 rounded-full bg-[#2563EB]"></div>
                            <div class="w-1 h-1 rounded-full bg-[#1E40AF]"></div>
                        </div>
                    </div>
                </div>
                <p class="text-gray-400 mt-4 max-w-2xl mx-auto font-['Inter'] animate-fadeIn"> <!-- Mengurangi margin top -->
                    Embarking on a journey of continuous learning and growth through academic excellence and practical experience.
                </p>
            </div>

            <!-- Timeline Education Content -->
            <div class="max-w-screen-lg mx-auto"> <!-- Set max-width to limit content width -->
                <div class="space-y-8">
                    <!-- Education Item 1 -->
                    <div class="relative pl-8 py-6 rounded-lg transition-all duration-300 transform shadow-lg">
                        <div class="absolute left-0 top-1/2 transform -translate-y-1/2 w-1 h-full bg-gradient-to-b from-blue-500 to-blue-700"></div>
                        <div class="flex flex-col md:flex-row md:items-center gap-4">
                            <div class="flex-1">
                                <span class="text-blue-400 text-sm font-semibold tracking-wider">2023 - Present</span>
                                <h3 class="text-xl font-bold mt-2 font-['Montserrat'] text-white">Rekayasa Perangkat Lunak</h3>
                                <h4 class="text-blue-300 font-semibold mt-1">SMKN 4 Banjarmasin</h4>
                                <p class="text-gray-400 mt-3 font-['Inter']">
                                    Specializing in Software Engineering with a focus on web development, programming, and Android app development. Developing a strong foundation in coding, problem-solving, and software development principles.
                                </p>
                            </div>
                            <div class="flex items-center gap-2">
                                <div class="px-4 py-2 rounded-full bg-blue-500/10 text-blue-400 text-sm">Software Engineering</div>
                                <div class="px-4 py-2 rounded-full bg-green-500/10 text-green-400 text-sm">Web Development</div>
                                <div class="px-4 py-2 rounded-full bg-purple-500/10 text-purple-400 text-sm">Android Developer</div> <!-- Android Developer Label -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


