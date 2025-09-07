<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 text-gray-900 dark:text-gray-100">
        <h3 class="text-lg font-semibold mb-3">My Listings</h3>
        {{-- @if ($myListings->isEmpty()) --}}
        @if (true)
            <p class="text-sm text-gray-500">You don’t have any listings yet.</p>
        @else
            <ul class="space-y-2">
                @foreach ($myListings as $listing)
                    <li>
                        <a href="{{ route('listings.show', $listing) }}"
                            class="block px-2 py-1 rounded hover:bg-gray-100 dark:hover:bg-gray-800">
                            {{ $listing->title }}
                        </a>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
</div>
