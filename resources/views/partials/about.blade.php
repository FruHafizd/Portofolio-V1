<!-- resources/views/about.blade.php -->
<div class="bg-[#0A0F1C] text-white">
    <div class="relative min-h-screen flex items-center justify-center overflow-hidden">
        <!-- Enhanced Background Elements -->
        <div class="absolute inset-0">
            <div class="absolute top-20 left-10 w-[500px] h-[500px] bg-[#1E3A8A]/10 rounded-full filter blur-[130px] animate-pulse-slow"></div>
            <div class="absolute bottom-20 right-10 w-[500px] h-[500px] bg-[#3B82F6]/5 rounded-full filter blur-[130px] animate-pulse-slow delay-700"></div>
            <!-- Additional subtle light effects -->
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-[#1E40AF]/5 rounded-full filter blur-[150px] animate-pulse-slower"></div>
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <!-- Enhanced Header -->
            <div class="text-center mb-16">
                <div class="relative inline-block">
                    <h1 class="font-bold text-4xl mb-4 tracking-wide font-['Montserrat'] relative z-10 animate-fadeInDown">
                        <span class="bg-white bg-clip-text text-transparent">
                            About Me
                        </span>
                    </h1>
                    <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-full">
                        <div class="w-24 h-[2px] mx-auto bg-gradient-to-r from-[#3B82F6] to-[#1E40AF] rounded-full animate-fadeInUp"></div>
                        <!-- Decorative elements -->
                        <div class="flex justify-center gap-1 mt-2">
                            <div class="w-1 h-1 rounded-full bg-[#3B82F6]"></div>
                            <div class="w-2 h-1 rounded-full bg-[#2563EB]"></div>
                            <div class="w-1 h-1 rounded-full bg-[#1E40AF]"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Enhanced Main Content -->
            <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
                <!-- Enhanced Personal Image -->
                <div class="relative group animate-fadeInLeft">
                    <!-- Multiple layered glows -->
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-[#3B82F6] to-[#1E40AF] rounded-xl blur opacity-20 group-hover:opacity-40 transition duration-700"></div>
                    <div class="absolute -inset-1 bg-gradient-to-r from-[#3B82F6]/50 to-[#1E40AF]/50 rounded-xl blur-lg opacity-10 group-hover:opacity-20 transition duration-700"></div>
                    
                    <!-- Image Container with Enhanced Decorations -->
                    <div class="relative overflow-hidden rounded-xl bg-[#0A0F1C] p-1">
                        <!-- Decorative Corner Elements with Animation -->
                        <div class="absolute top-0 left-0 w-20 h-20 border-l-2 border-t-2 border-[#3B82F6] rounded-tl-xl transform -translate-x-1 -translate-y-1 group-hover:translate-x-0 group-hover:translate-y-0 transition duration-500"></div>
                        <div class="absolute bottom-0 right-0 w-20 h-20 border-r-2 border-b-2 border-[#3B82F6] rounded-br-xl transform translate-x-1 translate-y-1 group-hover:translate-x-0 group-hover:translate-y-0 transition duration-500"></div>
                        
                        <!-- Additional corner decorations -->
                        <div class="absolute top-0 right-0 w-16 h-16 border-t-[1px] border-r-[1px] border-[#3B82F6]/30 rounded-tr-xl"></div>
                        <div class="absolute bottom-0 left-0 w-16 h-16 border-b-[1px] border-l-[1px] border-[#3B82F6]/30 rounded-bl-xl"></div>
                        
                        <div class="relative">
                            <img src="{{ asset('images/profile.jpg') }}" alt="Your Name" 
                                 class="w-full aspect-[4/5] object-cover transform transition duration-700 group-hover:scale-105">
                            
                            <!-- Enhanced Overlay -->
                            <div class="absolute inset-0 bg-gradient-to-t from-[#0A0F1C] via-[#0A0F1C]/20 to-transparent opacity-60"></div>
                        </div>
                    </div>
                </div>

                <!-- Enhanced Personal Information -->
                <div class="space-y-8 animate-fadeInRight px-6">
                    <div class="space-y-6">
                        <div class="relative inline-block">
                          
                            <h2 class="relative text-3xl font-semibold font-['Montserrat'] text-white tracking-wide">
                                Hi, I'm Muhammad Hafizd
                            </h2>
                        </div>
                        
                        <div class="space-y-6 font-['Inter']">
                            <!-- Enhanced text sections with decorative elements -->
                            <div class="relative pl-4 border-l border-[#3B82F6]/30">
                                <p class="text-[#94A3B8] leading-relaxed text-base">
                                    I was born and raised in Banjarmasin, and I am a person who is always curious, enthusiastic, and passionate about exploring new ideas and learning new things. I constantly seek opportunities to grow, expand my knowledge, and improve my skills in various areas.
                                </p>
                            </div>
                            
                            <div class="relative pl-4 border-l border-[#3B82F6]/30">
                                <p class="text-[#94A3B8] leading-relaxed text-base">
                                    I started coding in 2023 when I first entered SMKN 4 Banjarmasin, specializing in Software Engineering. It was during this time that I discovered my passion for programming and began developing a strong foundation in software development.
                                </p>
                            </div>
                            

                            <div class="relative pl-4 border-l border-[#3B82F6]/30">
                                <p class="text-[#94A3B8] leading-relaxed text-base">
                                    Outside of coding, I enjoy reading about tech advancements and am an avid gamer. I believe that staying curious and engaged in different fields helps me bring fresh perspectives into my work.
                                </p>
                            </div>
                            
                            <div class="relative pl-4 border-l border-[#3B82F6]/30">
                                <p class="text-[#94A3B8] leading-relaxed text-base">
                                    If you're interested in my work or have any questions, don't hesitate to
                                    <a href="" class="text-[#3B82F6] hover:underline">
                                        contact me
                                    </a>.
                                    I'm always open to new opportunities and discussions.
                                </p>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add to your layout for custom fonts -->
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Inter:wght@400;500&display=swap');
</style>