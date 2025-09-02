@php
    use App\Helpers\CurrencyHelper;
    $currentCurrency = CurrencyHelper::getCurrentCurrency();
    $availableCurrencies = CurrencyHelper::getAvailableCurrencies();
@endphp

<div class="relative" 
     x-data="{ 
        open: false,
        currentCurrency: '{{ $currentCurrency }}',
        switching: false,
        switchCurrency(currency) {
            if (this.switching) return;
            
            this.switching = true;
            const originalCurrency = this.currentCurrency;
            this.currentCurrency = 'Switching...';
            
            fetch('{{ route('currency.switch') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name=csrf-token]').getAttribute('content')
                },
                body: JSON.stringify({ currency: currency })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    this.currentCurrency = data.currency;
                    this.showNotification(data.message, 'success');
                    setTimeout(() => window.location.reload(), 1000);
                } else {
                    this.currentCurrency = originalCurrency;
                    this.showNotification(data.message, 'error');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                this.currentCurrency = originalCurrency;
                this.showNotification('Error switching currency', 'error');
            })
            .finally(() => {
                this.switching = false;
            });
        },
        showNotification(message, type) {
            const notification = document.createElement('div');
            notification.className = `fixed top-4 right-4 px-4 py-2 rounded-lg text-white z-50 transition-all duration-300 ${
                type === 'success' ? 'bg-green-500' : 'bg-red-500'
            }`;
            notification.textContent = message;
            document.body.appendChild(notification);
            
            setTimeout(() => {
                notification.style.opacity = '0';
                setTimeout(() => {
                    notification.parentNode?.removeChild(notification);
                }, 300);
            }, 3000);
        }
     }">
    <!-- Currency Switcher Button -->
    <button @click="open = !open" 
            class="flex items-center space-x-2 px-3 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
        
        <span class="text-sm" x-text="currentCurrency"></span>
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
                <button @click="switchCurrency('{{ $code }}')"
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