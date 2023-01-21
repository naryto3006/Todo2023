<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            редагування завдання
        </h2>
    </x-slot>
     <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{route('task.update', ['task'=>$task->id])}}">
					@method('PUT')
                    @csrf
					<div class="form-groupe"
 <label for="title">Назва завдання</label>
 
<input id="title"
    type="text"
	name="title"
	value="{{$task->title}}"
    class="@error('title') is-invalid @enderror">
 
@error('title')
    <div class="alert alert-danger">{{ $message }}</div>
	@enderror
	</div>
	<div class="form-group">
	<label for="status">статус</label>
	<select class="form-select" name="status">
	@foreach ($statuses as $status)
	<option value="{{ $status }}" @selected(old('status') == $status)>
		{{ $status }}
	</option>
	@endforeach
	</select>
    <button type="submit" class="btn btn-primary">Зберегти</button>
</form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>