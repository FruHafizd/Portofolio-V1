<div id="project" class="bg-[#0A0F1C] text-white py-20">
    <div class="relative flex items-center justify-center">
        <div class="container mx-auto px-4">
            <!-- Enhanced Header with Minimalist Design -->
            <div class="text-center mb-20">
                <div class="relative inline-block">
                    <h1 class="font-bold text-4xl mb-4 tracking-wide font-['Montserrat'] relative z-10 animate-fadeInDown">
                        <span class="text-white bg-clip-text relative">
                            Recent Projects
                            <div class="absolute -bottom-4 left-0 w-full h-[1px] bg-gradient-to-r from-transparent via-blue-500 to-transparent"></div>
                        </span>
                    </h1>
                </div>
                <p class="text-gray-400 max-w-2xl mx-auto mt-6 text-sm font-['Inter']">
                    A collection of projects that showcase my skills in web development, 
                    design, and problem-solving
                </p>
            </div>

            <!-- Enhanced Project Grid with Clean Design -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
                <!-- Enhanced Project Card with Minimal Design -->
                <div class="group relative rounded-xl bg-white/[0.02] border border-white/[0.05] p-6 transition-all duration-300 hover:-translate-y-2 hover:bg-white/[0.05]">
                    <div class="relative z-10">
                        <!-- Project Image with Enhanced Container -->
                        <div class="relative h-48 mb-6 overflow-hidden rounded-lg">
                            <img src="{{ url('img/project1.png') }}" alt="Project 1" 
                                 class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-105">
                            <!-- Minimal Overlay -->
                            <div class="absolute inset-0 bg-gradient-to-t from-[#0A0F1C] opacity-40"></div>
                        </div>
                        
                        <!-- Enhanced Content Layout -->
                        <div class="space-y-4">
                            <!-- Project Title with Hover Effect -->
                            <h3 class="text-xl font-bold font-['Montserrat'] text-white group-hover:text-blue-400 transition-colors duration-300">
                                FruHafizd's Blog
                            </h3>
                            
                            <!-- Refined Description -->
                            <p class="text-gray-400 text-sm font-['Inter'] leading-relaxed">
                                FruHafizd's Blog is a blogging platform that I developed using Laravel and Tailwind. This blog is designed to provide a comfortable and informative reading experience, equipped with interesting features and a responsive interface.
                            </p>
                            
                            <!-- Enhanced Tech Stack Tags -->
                            <div class="flex flex-wrap gap-2">
                                <span class="px-2.5 py-1 text-[10px] font-medium rounded-md bg-blue-500/10 text-blue-400 border border-blue-500/20">
                                    Laravel
                                </span>
                                <span class="px-2.5 py-1 text-[10px] font-medium rounded-md bg-blue-500/10 text-blue-400 border border-blue-500/20">
                                    Livewire
                                </span>
                                <span class="px-2.5 py-1 text-[10px] font-medium rounded-md bg-blue-500/10 text-blue-400 border border-blue-500/20">
                                    Alpine Js
                                </span>
                                <span class="px-2.5 py-1 text-[10px] font-medium rounded-md bg-blue-500/10 text-blue-400 border border-blue-500/20">
                                    Tailwind
                                </span>
                            </div>
                            
                            <!-- Enhanced Footer with Links -->
                            <div class="flex items-center justify-between pt-4 border-t border-white/[0.05]">
                                <a href="https://github.com/FruHafizd/Blog" target="_blank" 
                                   class="inline-flex items-center gap-2 text-sm text-gray-400 hover:text-blue-400 transition-colors duration-300 group/link">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/>
                                    </svg>
                                    <span class="text-xs">View Source</span>
                                </a>
                                <a href="" class="text-xs text-blue-400 hover:text-blue-300 transition-colors duration-300">
                                    Live Demo →
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="group relative rounded-xl bg-white/[0.02] border border-white/[0.05] p-6 transition-all duration-300 hover:-translate-y-2 hover:bg-white/[0.05]">
                    <div class="relative z-10">
                        <!-- Project Image with Enhanced Container -->
                        <div class="relative h-48 mb-6 overflow-hidden rounded-lg">
                            <img src="{{ url('img/project2.png') }}" alt="Project 2" 
                                 class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-105">
                            <!-- Minimal Overlay -->
                            <div class="absolute inset-0 bg-gradient-to-t from-[#0A0F1C] opacity-40"></div>
                        </div>
                        
                        <!-- Enhanced Content Layout -->
                        <div class="space-y-4">
                            <!-- Project Title with Hover Effect -->
                            <h3 class="text-xl font-bold font-['Montserrat'] text-white group-hover:text-blue-400 transition-colors duration-300">
                                Dynamic Portfolio
                            </h3>
                            
                            <!-- Refined Description -->
                            <p class="text-gray-400 text-sm font-['Inter'] leading-relaxed">
                                Dynamic Portfolio is an interactive portfolio that I developed using Laravel and Filament. This platform makes it easy to update portfolio data directly from the admin panel. With a modern design and dynamic features, users can elegantly showcase their projects and experiences and customize the appearance of the portfolio without changing the code.
                            </p>
                            
                            <!-- Enhanced Tech Stack Tags -->
                            <div class="flex flex-wrap gap-2">
                                <span class="px-2.5 py-1 text-[10px] font-medium rounded-md bg-blue-500/10 text-blue-400 border border-blue-500/20">
                                    Laravel
                                </span>
                                <span class="px-2.5 py-1 text-[10px] font-medium rounded-md bg-blue-500/10 text-blue-400 border border-blue-500/20">
                                    Filament
                                </span>
                                <span class="px-2.5 py-1 text-[10px] font-medium rounded-md bg-blue-500/10 text-blue-400 border border-blue-500/20">
                                    Livewire
                                </span>
                                <span class="px-2.5 py-1 text-[10px] font-medium rounded-md bg-blue-500/10 text-blue-400 border border-blue-500/20">
                                    Tailwind
                                </span>
                            </div>
                            
                            <!-- Enhanced Footer with Links -->
                            <div class="flex items-center justify-between pt-4 border-t border-white/[0.05]">
                                <a href="https://github.com/FruHafizd/Dynamic-Portfolio" target="_blank" 
                                   class="inline-flex items-center gap-2 text-sm text-gray-400 hover:text-blue-400 transition-colors duration-300 group/link">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/>
                                    </svg>
                                    <span class="text-xs">View Source</span>
                                </a>
                                <a href="" class="text-xs text-blue-400 hover:text-blue-300 transition-colors duration-300">
                                    Live Demo →
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="group relative rounded-xl bg-white/[0.02] border border-white/[0.05] p-6 transition-all duration-300 hover:-translate-y-2 hover:bg-white/[0.05]">
                    <div class="relative z-10">
                        <!-- Project Image with Enhanced Container -->
                        <div class="relative h-48 mb-6 overflow-hidden rounded-lg">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='600' height='400' viewBox='0 0 600 400'%3E%3Crect width='600' height='400' fill='%23f1f5f9'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-family='Montserrat, sans-serif' font-size='24' fill='%23cbd5e1'%3ENo New Projects%3C/text%3E%3C/svg%3E" alt="No new projects" 
                                 class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-105">
                            <!-- Minimal Overlay -->
                            <div class="absolute inset-0 bg-gradient-to-t from-[#0A0F1C] opacity-40"></div>
                        </div>
                        
                        <!-- Enhanced Content Layout -->
                        <div class="space-y-4">
                            <!-- Project Title with Hover Effect -->
                            <h3 class="text-xl font-bold font-['Montserrat'] text-white group-hover:text-blue-400 transition-colors duration-300">
                                No New Projects
                            </h3>
                            
                            <!-- Refined Description -->
                            <p class="text-gray-400 text-sm font-['Inter'] leading-relaxed">
                                Unfortunately, there are no new projects to showcase at this time. However, the design you see here is created using Laravel components and Tailwind CSS, providing a modern, elegant, and professional look and feel.
                            </p>
                            
                            <!-- Enhanced Tech Stack Tags -->
                            <div class="flex flex-wrap gap-2">
                                <span class="px-2.5 py-1 text-[10px] font-medium rounded-md bg-blue-500/10 text-blue-400 border border-blue-500/20">
                                    Laravel
                                </span>
                                <span class="px-2.5 py-1 text-[10px] font-medium rounded-md bg-blue-500/10 text-blue-400 border border-blue-500/20">
                                    Tailwind CSS
                                </span>
                            </div>
                            
                            <!-- Enhanced Footer with Links -->
                            <div class="flex items-center justify-between pt-4 border-t border-white/[0.05]">
                                <a href="https://github.com/your-repo" target="_blank" 
                                   class="inline-flex items-center gap-2 text-sm text-gray-400 hover:text-blue-400 transition-colors duration-300 group/link">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/>
                                    </svg>
                                    <span class="text-xs">View Source</span>
                                </a>
                                <a href="#" class="text-xs text-blue-400 hover:text-blue-300 transition-colors duration-300">
                                    Live Demo →
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Duplicate card for more projects -->
                
            </div>
        </div>
    </div>
</div>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Inter:wght@400;500&display=swap');
</style>