<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
		<form action="{{route('task.create')}}">
			<x-primary-button class="btn mt-1 mb-4 border border-gray-400">Create</x-primary-button>
		</form>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
				   @if (count($tasks) === 0)
				      <p> ЗАДАЧ НЕМА </p>
					  @else
				
				<ul>
                    @foreach ($tasks as $task)
					   <li> {{$task->title }} (<span class="text-green-600">{{$task->status}}</span>)</li>
					   <a href="{{route('task.edit', ['task'=>$task->id ])}}">РЕДАГУВАТИ</a>
					   @endforeach
					</ul>   
					@endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
