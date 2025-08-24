@b2bCanSeePrices
    @if ($prices['final']['price'] < $prices['regular']['price'])
        <p
            class="final-price font-medium text-zinc-500 line-through max-sm:leading-4"
            aria-label="{{ $prices['regular']['formatted_price'] }}"
        >
            {{ $prices['regular']['formatted_price'] }}
        </p>

        <p class="font-semibold max-sm:leading-4">
            {{ $prices['final']['formatted_price'] }}
        </p>
    @else
        <p class="final-price font-semibold max-sm:leading-4">
            {{ $prices['regular']['formatted_price'] }}
        </p>
    @endif
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
                <p class="text-xs text-red-700 mt-1">
                    Kontaktieren Sie unseren Kundenservice
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