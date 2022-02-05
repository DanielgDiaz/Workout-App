
<div class="grid grid-cols-3 gap-4 mt-8"> <!-- Componente Livewire -->
    @foreach($workouts as $workout)
        <x-workout-card :workout="$workout" />
    @endforeach
</div>  