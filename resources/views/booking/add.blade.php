<x-layout>
    @if(session('booking'))
        <div id="alert-message"
             class="fixed top-0 left-1/2 transform -translate-x-1/2 w-64 p-4 bg-green-800 border border-green-400 text-white rounded-lg shadow-lg transition-opacity duration-500">
            {{ session('booking') }}
        </div>
    @endif

        @if(session('error'))
            <div id="alert-message"
                 class="fixed top-0 left-1/2 transform -translate-x-1/2 w-64 p-4 bg-green-800 border border-green-400 text-white rounded-lg shadow-lg transition-opacity duration-500">
                {{ session('error') }}
            </div>
        @endif

    <div class="bg-gray-50 border border-gray-200 p-10 max-w-lg mx-auto mt-20">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Book a flight
            </h2>
        </header>

        <form method="POST" action={{route('booking.store')}}>
            @csrf

            <div class="mb-3">
                <label for="name" class="inline-block text-lg mb-2">Name</label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="name"
                    value="{{old('name')}}"
                />
                @error('name')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="surname" class="inline-block text-lg mb-2">Surname</label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="surname"
                    value="{{old('surname')}}"
                />
                @error('surname')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="flight" class="inline-block text-lg mb-2">Flight Name</label>
                <select
                    class="border border-gray-200 rounded p-2 w-full"
                    name="flight_id">
                    @foreach($flights as $flight)
                        <option value={{$flight->id}}>
                            {{$flight->name}}: {{$flight->from_country->name}} - {{$flight->to_country->name}}
                        </option>
                    @endforeach
                </select>

                @error('flight')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="category" class="inline-block text-lg mb-2">Choose a category</label>
                <select
                    class="border border-gray-200 rounded p-2 w-full"
                    name="category_id">
                    @foreach($categories as $category)
                        <option value={{$category->id}}>{{$category->name}}</option>
                    @endforeach
                </select>

                @error('category')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <button
                    type="submit"
                    class="bg-green-500 text-white rounded py-2 px-10 hover:bg-green-300"
                >
                    Add
                </button>
            </div>
        </form>
    </div>
</x-layout>
