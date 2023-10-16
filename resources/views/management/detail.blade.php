<x-layout>
    <div class="w-full p-4">
        <h1 class="text-xl font-bold mb-4">
            The {{$airplane->name}} Airplane is registered in the following flights:
        </h1>
        <ul class="list-disc list-inside">
            @foreach($flights as $flight)
                <li class="mb-2">{{$flight->name}} <a class="text-blue-500" href={{ route('flight.show', $flight) }}>See
                        More</a></li>
            @endforeach
        </ul>
    </div>
</x-layout>
