@extends('layouts.web')

@section('content')     
    <div class="grid grid-cols-3 gap-4">
        <div class="p-8 bg-gray-200 col-span-1">
            <ul class="flex flex-col">				
                <li class="font-medium text-sm text-gray-400 uppercase mb-4">
                    Contenido
                </li>   
                @foreach($workout->wods as $wod)
                    <li class="flex items-center text-gray-600 mt-2">
                        {{ $wod->name }}
                        @if($wod->free)
                            <span class="text-xs text-gray-500 font-semibold bg-gray-300 px-2 rounded-full ml-auto">Gratis</span>

                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="text-gray-700 col-span-2">
            <img src="{{ $workout->image }}">
            <h2 class="text-4xl truncate">{{ $workout->name }}</h2>
            <p>{{ $workout->description }}</p>
            <div class="flex mt-3">
           <img src="{{ $workout->user->avatar }}" class="h-10 w-10 rounded-full mr-2" />
           <div>    
             <p class="text-gray-500 text-sm">{{ $workout->user->name }}</p>
             <p class="text-gray-300 text-xs">{{ $workout->created_at->diffForHumans() }}</p>       
           </div>
         </div>
             <div class="grid grid-cols-2 gap-4 my-8">
                <div class="grid grid-cols-3 gap-4 mt-8"> 
                    @foreach($workout->similar() as $workout)
                    <x-workout-card :workout="$workout" />
                    @endforeach
                </div>  
             </div>
        </div>
    </div>
    
    <div class="text-center mt-12">
        <h1 class="text-3xl text-gray-700 mb-2 uppercase">Últimos Entrenamientos</h1>
        <h2 class="text-xl text-gray-600">Entrena online como un profesional</h2>
    </div>

    <livewire:workout-list>
@endsection