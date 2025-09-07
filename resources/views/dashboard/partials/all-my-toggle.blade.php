<div class="py-4 lg:block justify-end hidden text-right">
    <form method="GET" action="{{ route('dashboard') }}">
        <label class="inline-flex items-center cursor-pointer">
            <input type="checkbox" name="filter" value="mine" class="sr-only peer"
                {{ request('filter') === 'mine' ? 'checked' : '' }} onchange="this.form.submit()">
            <div
                class="w-11 h-6 bg-gray-200 peer-focus:outline-none
                            peer-focus:ring-2 peer-focus:ring-indigo-500
                            rounded-full peer peer-checked:after:translate-x-full
                            peer-checked:after:border-white after:content-['']
                            after:absolute after:top-0.5 after:left-[2px]
                            after:bg-white after:border-gray-300 after:border
                            after:rounded-full after:h-5 after:w-5 after:transition-all
                            peer-checked:bg-indigo-600 relative">
            </div>
            <span class="ml-3 text-sm text-gray-700">
                {{ request('filter') === 'mine' ? 'My Listings' : 'All Listings' }}
            </span>
        </label>
    </form>
</div>
