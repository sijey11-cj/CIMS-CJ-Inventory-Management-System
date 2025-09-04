<svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" {{ $attributes }}>
    <defs>
        <linearGradient id="logoGradient1" x1="0%" y1="0%" x2="100%" y2="100%">
            <stop offset="0%" style="stop-color:#6AA9A7;stop-opacity:1" />
            <stop offset="50%" style="stop-color:#88BDF2;stop-opacity:1" />
            <stop offset="100%" style="stop-color:#384959;stop-opacity:1" />
        </linearGradient>
        <linearGradient id="logoGradient2" x1="0%" y1="0%" x2="100%" y2="100%">
            <stop offset="0%" style="stop-color:#BDDCFC;stop-opacity:1" />
            <stop offset="100%" style="stop-color:#6AA9A7;stop-opacity:1" />
        </linearGradient>
        <linearGradient id="logoGradient3" x1="0%" y1="0%" x2="100%" y2="100%">
            <stop offset="0%" style="stop-color:#88BDF2;stop-opacity:1" />
            <stop offset="100%" style="stop-color:#384959;stop-opacity:1" />
        </linearGradient>
    </defs>
    
    <!-- Main warehouse/building structure -->
    <rect x="30" y="80" width="140" height="90" fill="url(#logoGradient1)" rx="8" stroke="#384959" stroke-width="2"/>
    
    <!-- Warehouse roof -->
    <polygon points="25,80 100,40 175,80" fill="url(#logoGradient2)" stroke="#384959" stroke-width="2"/>
    
    <!-- Warehouse door -->
    <rect x="85" y="120" width="30" height="50" fill="url(#logoGradient3)" rx="4"/>
    <circle cx="108" cy="145" r="2" fill="#BDDCFC"/>
    
    <!-- Storage boxes/inventory items -->
    <g fill="url(#logoGradient2)" stroke="#384959" stroke-width="1.5">
        <!-- Left stack -->
        <rect x="45" y="140" width="20" height="15" rx="2"/>
        <rect x="45" y="125" width="20" height="15" rx="2"/>
        <rect x="45" y="110" width="20" height="15" rx="2"/>
        
        <!-- Right stack -->
        <rect x="135" y="140" width="20" height="15" rx="2"/>
        <rect x="135" y="125" width="20" height="15" rx="2"/>
        <rect x="135" y="110" width="20" height="15" rx="2"/>
    </g>
    
    <!-- Analytics/chart element on roof -->
    <g transform="translate(90,50)">
        <!-- Chart background -->
        <rect x="0" y="0" width="20" height="15" fill="white" rx="2" opacity="0.9"/>
        <!-- Chart bars -->
        <rect x="2" y="10" width="3" height="5" fill="#6AA9A7"/>
        <rect x="6" y="8" width="3" height="7" fill="#88BDF2"/>
        <rect x="10" y="6" width="3" height="9" fill="#BDDCFC"/>
        <rect x="14" y="4" width="3" height="11" fill="#384959"/>
    </g>
    
    <!-- Inventory tracking symbols -->
    <g fill="#BDDCFC">
        <!-- Left side barcode -->
        <rect x="35" y="90" width="1" height="8"/>
        <rect x="37" y="90" width="2" height="8"/>
        <rect x="40" y="90" width="1" height="8"/>
        <rect x="42" y="90" width="1" height="8"/>
        
        <!-- Right side location pin -->
        <circle cx="155" cy="94" r="4" fill="#88BDF2"/>
        <circle cx="155" cy="94" r="2" fill="white"/>
    </g>
    
    <!-- Supply chain connection lines -->
    <g stroke="#6AA9A7" stroke-width="2" fill="none" opacity="0.7">
        <path d="M15 100 Q25 95 35 100"/>
        <path d="M165 100 Q175 95 185 100"/>
        <circle cx="10" cy="100" r="3" fill="#6AA9A7"/>
        <circle cx="190" cy="100" r="3" fill="#6AA9A7"/>
    </g>
    
    <!-- Company initial in a badge -->
    <g transform="translate(100,25)">
        <circle cx="0" cy="0" r="12" fill="url(#logoGradient1)" stroke="#384959" stroke-width="2"/>
        <text x="0" y="4" text-anchor="middle" font-family="Arial, sans-serif" font-size="12" font-weight="bold" fill="white">I</text>
    </g>
</svg>
