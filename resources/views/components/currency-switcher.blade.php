@php
    use App\Helpers\CurrencyHelper;
    $currentCurrency = CurrencyHelper::getCurrentCurrency();
    $availableCurrencies = CurrencyHelper::getAvailableCurrencies();
@endphp

<div class="relative" x-data="{ open: false }">
    <!-- Currency Switcher Button -->
    <button @click="open = !open" 
            class="flex items-center space-x-2 px-3 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"/>
        </svg>
        <span id="current-currency">{{ CurrencyHelper::getSymbol() }} {{ $currentCurrency }}</span>
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
        </svg>
    </button>

    <!-- Dropdown Menu -->
    <div x-show="open" 
         x-transition:enter="transition ease-out duration-100"
         x-transition:enter-start="transform opacity-0 scale-95"
         x-transition:enter-end="transform opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-75"
         x-transition:leave-start="transform opacity-100 scale-100"
         x-transition:leave-end="transform opacity-0 scale-95"
         @click.away="open = false"
         class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg border border-gray-200 z-50">
        
        <div class="py-1">
            <div class="px-4 py-2 text-xs font-semibold text-gray-500 uppercase tracking-wider border-b border-gray-100">
                Select Currency
            </div>
            
            @foreach($availableCurrencies as $code => $currency)
                <button onclick="switchCurrency('{{ $code }}')"
                        class="flex items-center w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 transition-colors {{ $currentCurrency === $code ? 'bg-blue-50 text-blue-700' : '' }}">
                    <span class="font-medium mr-2">{{ $currency['symbol'] }}</span>
                    <span>{{ $currency['name'] }} ({{ $code }})</span>
                    @if($currentCurrency === $code)
                        <svg class="w-4 h-4 ml-auto text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                    @endif
                </button>
            @endforeach
        </div>
    </div>
</div>

<!-- JavaScript for Currency Switching -->
<script>
function switchCurrency(currency) {
    // Show loading state
    const currentCurrencySpan = document.getElementById('current-currency');
    const originalText = currentCurrencySpan.textContent;
    currentCurrencySpan.textContent = 'Switching...';
    
    fetch('{{ route("currency.switch") }}', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({ currency: currency })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Update the current currency display
            currentCurrencySpan.textContent = data.symbol + ' ' + data.currency;
            
            // Show success message
            showNotification(data.message, 'success');
            
            // Reload the page to update all currency displays
            setTimeout(() => {
                window.location.reload();
            }, 1000);
        } else {
            currentCurrencySpan.textContent = originalText;
            showNotification(data.message, 'error');
        }
    })
    .catch(error => {
        currentCurrencySpan.textContent = originalText;
        showNotification('Error switching currency', 'error');
        console.error('Error:', error);
    });
}

function showNotification(message, type) {
    // Create notification element
    const notification = document.createElement('div');
    notification.className = `fixed top-4 right-4 px-4 py-2 rounded-lg text-white z-50 transition-all duration-300 ${
        type === 'success' ? 'bg-green-500' : 'bg-red-500'
    }`;
    notification.textContent = message;
    
    // Add to page
    document.body.appendChild(notification);
    
    // Remove after 3 seconds
    setTimeout(() => {
        notification.style.opacity = '0';
        setTimeout(() => {
            if (notification.parentNode) {
                notification.parentNode.removeChild(notification);
            }
        }, 300);
    }, 3000);
}
</script> 