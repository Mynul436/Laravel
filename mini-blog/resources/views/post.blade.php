<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Post') }}
        </h2>
    </x-slot>
     
    <form method="POST" >
        @csrf
        <div>
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}">
            @error('title')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <br>
        <br>
        <div>
            <label for="body">Body:</label>
            <textarea name="body" id="body">{{ old('body') }}</textarea>
            @error('body')
                <span>{{ $message }}</span>
            @enderror
        </div>
      <button type="submit">Submit</button>
        {{-- <input type="button" value="Post"> --}}
    </form>
    
</x-app-layout>
