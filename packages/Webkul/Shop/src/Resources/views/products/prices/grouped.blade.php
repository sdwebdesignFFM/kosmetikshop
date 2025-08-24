@b2bCanSeePrices
    <p class="price-label text-sm text-zinc-500 max-sm:leading-4">
        @lang('shop::app.products.prices.grouped.starting-at')
    </p>

    <p class="font-semibold max-sm:leading-4">
        {{ $prices['final']['formatted_price'] }}
    </p>
@elseb2bCanSeePrices
    @auth('customer')
        @b2bIsPending
            <div class="text-center p-4 bg-yellow-50 border border-yellow-200 rounded-lg">
                <p class="text-sm text-yellow-800 font-medium">
                    <i class="icon-clock text-yellow-600 mr-2"></i>
                    B2B-Freigabe läuft noch
                </p>
                <p class="text-xs text-yellow-700 mt-1">
                    Die Prüfung dauert max. 24 Stunden
                </p>
            </div>
        @else
            <div class="text-center p-4 bg-red-50 border border-red-200 rounded-lg">
                <p class="text-sm text-red-800 font-medium">
                    <i class="icon-exclamation text-red-600 mr-2"></i>
                    B2B-Zugang erforderlich
                </p>
            </div>
        @endb2bIsPending
    @else
        <div class="text-center p-4 bg-blue-50 border border-blue-200 rounded-lg">
            <p class="text-sm text-blue-800 font-medium">
                <i class="icon-user text-blue-600 mr-2"></i>
                Für Preise anmelden
            </p>
            <a href="{{ route('shop.customer.session.index') }}" class="text-xs text-blue-700 underline mt-1 block">
                Jetzt anmelden
            </a>
        </div>
    @endauth
@endb2bCanSeePrices