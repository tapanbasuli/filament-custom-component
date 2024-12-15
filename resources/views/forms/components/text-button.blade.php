<div class="space-y-2">
    <!-- Text Input -->
    <input
        type="text"
        wire:model="{{ $getStatePath() }}"
        placeholder="Enter some text"
        class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
    />

    <!-- Button -->
    <button
        type="button"
        class="mt-2 px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700"
    >
        Click Me
    </button>
</div>
