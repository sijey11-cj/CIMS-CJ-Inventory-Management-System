<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{ asset('images/favicon_ims.png') }}">
        <link rel="shortcut icon" type="image/png" href="{{ asset('images/favicon_ims.png') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <style>
            /* Enhanced animations and styling for guest layout */
            @keyframes float {
                0%, 100% { transform: translateY(0px) rotate(0deg); }
                33% { transform: translateY(-20px) rotate(1deg); }
                66% { transform: translateY(-10px) rotate(-1deg); }
            }
            
            @keyframes floatHorizontal {
                0%, 100% { transform: translateX(0px) translateY(0px) rotate(0deg); }
                25% { transform: translateX(15px) translateY(-10px) rotate(2deg); }
                50% { transform: translateX(-10px) translateY(-20px) rotate(-1deg); }
                75% { transform: translateX(20px) translateY(-5px) rotate(1deg); }
            }
            
            @keyframes floatDiagonal {
                0%, 100% { transform: translate(0px, 0px) rotate(0deg) scale(1); }
                25% { transform: translate(30px, -15px) rotate(3deg) scale(1.05); }
                50% { transform: translate(-20px, -30px) rotate(-2deg) scale(0.95); }
                75% { transform: translate(25px, -10px) rotate(2deg) scale(1.02); }
            }
            
            @keyframes orbitalMove {
                0% { transform: rotate(0deg) translateX(50px) rotate(0deg); }
                100% { transform: rotate(360deg) translateX(50px) rotate(-360deg); }
            }
            
            @keyframes parallaxSlow {
                0%, 100% { transform: translateY(0px) translateX(0px); }
                50% { transform: translateY(-30px) translateX(15px); }
            }
            
            @keyframes parallaxFast {
                0%, 100% { transform: translateY(0px) translateX(0px) rotate(0deg); }
                33% { transform: translateY(-40px) translateX(-20px) rotate(2deg); }
                66% { transform: translateY(-60px) translateX(25px) rotate(-1deg); }
            }
            
            @keyframes morphShape {
                0%, 100% { border-radius: 50% 40% 60% 30%; transform: scale(1); }
                25% { border-radius: 40% 60% 30% 50%; transform: scale(1.1); }
                50% { border-radius: 60% 30% 50% 40%; transform: scale(0.9); }
                75% { border-radius: 30% 50% 40% 60%; transform: scale(1.05); }
            }
            
            @keyframes pulse-glow {
                0%, 100% { box-shadow: 0 0 20px rgba(139, 189, 242, 0.3); }
                50% { box-shadow: 0 0 40px rgba(139, 189, 242, 0.6), 0 0 60px rgba(106, 169, 167, 0.4); }
            }
            
            .animate-float {
                animation: float 8s ease-in-out infinite;
            }
            
            .animate-float-horizontal {
                animation: floatHorizontal 12s ease-in-out infinite;
            }
            
            .animate-float-diagonal {
                animation: floatDiagonal 15s ease-in-out infinite;
            }
            
            .animate-orbital {
                animation: orbitalMove 20s linear infinite;
            }
            
            .animate-parallax-slow {
                animation: parallaxSlow 25s ease-in-out infinite;
            }
            
            .animate-parallax-fast {
                animation: parallaxFast 18s ease-in-out infinite;
            }
            
            .animate-morph {
                animation: morphShape 20s ease-in-out infinite;
            }
            
            .animate-pulse-glow {
                animation: pulse-glow 3s ease-in-out infinite;
            }
            
            .gradient-mesh {
                background: 
                    radial-gradient(circle at 20% 30%, rgba(106, 169, 167, 0.12) 0%, transparent 40%),
                    radial-gradient(circle at 80% 70%, rgba(189, 221, 252, 0.15) 0%, transparent 45%),
                    radial-gradient(circle at 60% 20%, rgba(136, 189, 242, 0.1) 0%, transparent 35%),
                    radial-gradient(circle at 30% 80%, rgba(56, 73, 89, 0.08) 0%, transparent 30%),
                    linear-gradient(135deg, rgba(106, 169, 167, 0.05) 0%, rgba(189, 221, 252, 0.08) 50%, rgba(56, 73, 89, 0.06) 100%);
            }
            
            .inventory-pattern {
                background-image: 
                    repeating-linear-gradient(
                        45deg,
                        transparent,
                        transparent 20px,
                        rgba(106, 169, 167, 0.03) 20px,
                        rgba(106, 169, 167, 0.03) 40px
                    ),
                    repeating-linear-gradient(
                        -45deg,
                        transparent,
                        transparent 30px,
                        rgba(189, 221, 252, 0.04) 30px,
                        rgba(189, 221, 252, 0.04) 60px
                    );
            }
        </style>
    </head>
    <body class="font-sans text-slate-800 antialiased bg-gradient-to-br from-slate-100 via-blue-100/50 to-slate-200 gradient-mesh inventory-pattern overflow-x-hidden min-h-screen">
        <!-- Abstract Inventory Background Elements -->
        <div class="fixed inset-0 overflow-hidden pointer-events-none z-0" id="backgroundContainer">
            <!-- Floating warehouse/storage elements -->
            <div class="absolute -top-32 -left-32 w-96 h-96 opacity-[0.08] animate-float-diagonal">
                <svg viewBox="0 0 400 400" class="w-full h-full">
                    <defs>
                        <linearGradient id="stormy1" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" style="stop-color:#6AA9A7;stop-opacity:0.3" />
                            <stop offset="50%" style="stop-color:#BDDCFC;stop-opacity:0.2" />
                            <stop offset="100%" style="stop-color:#384959;stop-opacity:0.1" />
                        </linearGradient>
                    </defs>
                    <!-- Abstract warehouse/box shapes -->
                    <rect x="50" y="150" width="80" height="60" fill="url(#stormy1)" rx="4"/>
                    <rect x="140" y="120" width="70" height="90" fill="url(#stormy1)" rx="4"/>
                    <rect x="220" y="140" width="90" height="70" fill="url(#stormy1)" rx="4"/>
                    <rect x="80" y="220" width="60" height="80" fill="url(#stormy1)" rx="4"/>
                    <rect x="160" y="240" width="85" height="65" fill="url(#stormy1)" rx="4"/>
                </svg>
            </div>
            
            <!-- Supply chain network on the right -->
            <div class="absolute top-1/4 -right-20 w-80 h-80 opacity-[0.06] animate-parallax-slow">
                <svg viewBox="0 0 320 320" class="w-full h-full">
                    <defs>
                        <linearGradient id="stormy2" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" style="stop-color:#88BDF2;stop-opacity:0.4" />
                            <stop offset="50%" style="stop-color:#6AA9A7;stop-opacity:0.2" />
                            <stop offset="100%" style="stop-color:#BDDCFC;stop-opacity:0.3" />
                        </linearGradient>
                    </defs>
                    <!-- Network nodes -->
                    <circle cx="80" cy="80" r="25" fill="url(#stormy2)"/>
                    <circle cx="240" cy="100" r="30" fill="url(#stormy2)"/>
                    <circle cx="160" cy="180" r="35" fill="url(#stormy2)"/>
                    <circle cx="60" cy="220" r="20" fill="url(#stormy2)"/>
                    <circle cx="260" cy="240" r="28" fill="url(#stormy2)"/>
                </svg>
            </div>
            
            <!-- Inventory grid pattern bottom left -->
            <div class="absolute -bottom-24 -left-24 w-72 h-72 opacity-[0.04] animate-float-horizontal">
                <svg viewBox="0 0 288 288" class="w-full h-full">
                    <defs>
                        <linearGradient id="stormy3" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" style="stop-color:#BDDCFC;stop-opacity:0.4" />
                            <stop offset="100%" style="stop-color:#384959;stop-opacity:0.2" />
                        </linearGradient>
                    </defs>
                    <!-- Grid of inventory items -->
                    <g fill="url(#stormy3)">
                        <rect x="20" y="20" width="40" height="40" rx="3"/>
                        <rect x="80" y="20" width="40" height="40" rx="3"/>
                        <rect x="140" y="20" width="40" height="40" rx="3"/>
                        <rect x="200" y="20" width="40" height="40" rx="3"/>
                        <rect x="20" y="80" width="40" height="40" rx="3"/>
                        <rect x="80" y="80" width="40" height="40" rx="3"/>
                        <rect x="140" y="80" width="40" height="40" rx="3"/>
                        <rect x="200" y="80" width="40" height="40" rx="3"/>
                    </g>
                </svg>
            </div>
            
            <!-- Large decorative shapes with stormy morning colors -->
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[40rem] h-[40rem] bg-gradient-to-r from-slate-400/3 via-blue-300/5 to-slate-500/4 rounded-full blur-3xl animate-morph"></div>
            
            <!-- Moving particles -->
            <div class="absolute top-10 left-10 w-2 h-2 bg-blue-400/20 rounded-full animate-orbital" style="animation-duration: 30s; animation-delay: -5s;"></div>
            <div class="absolute top-1/3 right-1/3 w-3 h-3 bg-slate-500/15 rounded-full animate-float-diagonal" style="animation-duration: 22s; animation-delay: -8s;"></div>
            <div class="absolute bottom-20 left-1/4 w-1.5 h-1.5 bg-slate-400/20 rounded-full animate-parallax-fast" style="animation-duration: 28s; animation-delay: -12s;"></div>
            <div class="absolute top-2/3 right-10 w-2.5 h-2.5 bg-blue-300/15 rounded-full animate-float-horizontal" style="animation-duration: 35s; animation-delay: -15s;"></div>
        </div>

        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 relative z-10">
            <div class="animate-float">
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-slate-600 hover:text-slate-700 transition-colors duration-300 drop-shadow-lg" />
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-8 py-8 bg-white/95 backdrop-blur-xl shadow-2xl overflow-hidden sm:rounded-2xl border border-slate-200/50 relative group">
                <!-- Decorative elements -->
                <div class="absolute top-0 right-0 w-20 h-20 bg-gradient-to-br from-slate-400/10 to-blue-400/10 rounded-full blur-xl"></div>
                <div class="absolute bottom-0 left-0 w-24 h-24 bg-gradient-to-br from-blue-300/10 to-slate-500/10 rounded-full blur-xl"></div>
                
                <div class="relative z-10">
                    {{ $slot }}
                </div>
            </div>
        </div>

        <!-- Interactive JavaScript -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const backgroundContainer = document.getElementById('backgroundContainer');
                let mouseX = 0, mouseY = 0;
                let targetX = 0, targetY = 0;
                
                // Track mouse movement
                document.addEventListener('mousemove', function(e) {
                    mouseX = (e.clientX / window.innerWidth) * 2 - 1;
                    mouseY = (e.clientY / window.innerHeight) * 2 - 1;
                });
                
                // Smooth parallax animation
                function updateParallax() {
                    targetX += (mouseX - targetX) * 0.03;
                    targetY += (mouseY - targetY) * 0.03;
                    
                    if (backgroundContainer) {
                        const elements = backgroundContainer.children;
                        for (let i = 0; i < elements.length; i++) {
                            const element = elements[i];
                            const speed = (i + 1) * 0.3; // Gentler movement for login page
                            const xOffset = targetX * speed * 5;
                            const yOffset = targetY * speed * 5;
                            
                            element.style.transform = `translate(${xOffset}px, ${yOffset}px)`;
                        }
                    }
                    
                    requestAnimationFrame(updateParallax);
                }
                
                updateParallax();
                
                // Enhanced floating particles
                function createFloatingParticle() {
                    const particle = document.createElement('div');
                    const size = Math.random() * 3 + 1;
                    const startX = Math.random() * window.innerWidth;
                    const colors = ['#6AA9A7', '#BDDCFC', '#88BDF2', '#384959'];
                    const color = colors[Math.floor(Math.random() * colors.length)];
                    
                    particle.style.cssText = `
                        position: fixed;
                        width: ${size}px;
                        height: ${size}px;
                        background: ${color}20;
                        border-radius: 50%;
                        pointer-events: none;
                        z-index: 1;
                        left: ${startX}px;
                        top: 100vh;
                        animation: floatUp ${10 + Math.random() * 15}s linear infinite;
                    `;
                    
                    document.body.appendChild(particle);
                    
                    setTimeout(() => {
                        if (particle.parentNode) {
                            particle.parentNode.removeChild(particle);
                        }
                    }, 25000);
                }
                
                // Add CSS for floating particles
                const style = document.createElement('style');
                style.textContent = `
                    @keyframes floatUp {
                        0% {
                            transform: translateY(0) rotate(0deg);
                            opacity: 0;
                        }
                        10% {
                            opacity: 1;
                        }
                        90% {
                            opacity: 1;
                        }
                        100% {
                            transform: translateY(-100vh) rotate(360deg);
                            opacity: 0;
                        }
                    }
                `;
                document.head.appendChild(style);
                
                // Create particles periodically
                setInterval(createFloatingParticle, 4000);
            });
        </script>
    </body>
</html>
