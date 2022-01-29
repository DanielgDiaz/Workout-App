<?php

namespace App\Http\Livewire;

use App\Models\Workout;
use Livewire\Component;

class WorkoutList extends Component
{
    public function render()
    {
        return view('livewire.workout-list', [
            'workouts' => Workout::latest()->with('user')->take(9)->get()
        ]);
    }
}
