<div class="p-6 bg-white rounded-lg shadow-md max-w-md mx-auto mt-6 border border-gray-200">
    <!-- Input-like Text Display -->
    <div class="flex items-center justify-between bg-gray-100 border border-gray-300 rounded-md px-4 py-3 mb-6">
        <p class="text-gray-800 text-lg font-medium">
            {{ $text }}
        </p>
    </div>

    <!-- Button -->
    <button 
        wire:click="handleClick" 
        class="w-full px-6 py-3 bg-blue-500 text-black font-bold text-lg rounded-full border border-blue-700 shadow-lg hover:bg-blue-600 hover:shadow-xl focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-2 transition-transform transform hover:scale-105">
        Click Me
    </button>
</div>




