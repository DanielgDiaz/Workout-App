


<div class="grid grid-cols-3 gap-4 mt-8">
    @foreach($workouts as $workout)
    <div class="bg-white shadow-lg rounded-lg px-4 py-6 text-center">
        <a href="{{ route('workout') }}">
            <img src="{{ $workout->image }}"class="rounded-md mb-2">
            <h2 class="text-lg text-gray-600 truncate uppercase">{{ $workout->name }}</h2>
            <h3 class="text-sm text-gray-500">{{ $workout->excerpt }}</h3>

            <img src="{{ $workout->user->avatar }}" class='rounded-full mt-4 mx-auto h-16 w-16'>
        </a>

    </div>

    @endforeach
</div>
