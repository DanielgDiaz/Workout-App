
<div class="grid grid-cols-3 gap-4 mt-8"> <!-- Componente Livewire -->
    @foreach($workouts as $workout)
    <div class="bg-white shadow-lg rounded-lg px-4 py-6 text-center">
        <a href="{{ route('workout', $workout) }}">
            <img src="{{ $workout->image }}" class="rounded-md mb-2">

            <h2 class="text-lg text-gray-600 truncate uppercase font-semibold">{{ $workout->name }}</h2>
            <h3 class="text-md text-gray-500">{{ $workout->excerpt }}</h3>

            <img src="{{ $workout->user->avatar }}" alt="{{ $workout->user->name }}" class="rounded-full mx-auto mt-4 h-16 w-16">
        </a>
    </div>  
    @endforeach
</div>  