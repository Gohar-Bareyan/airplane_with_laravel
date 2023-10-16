<x-layout>
    @if($flights->isEmpty())
        <p>There are no such flights</p>
    @else
        <h1>Flight Search Results</h1>
        <ul>
            @foreach($flights as $flight)
                <li>
                    Flight Name: {{ $flight->name }}
                </li>
                <li>
                    DateTime: {{ $flight->datetime }}
                </li>
            @endforeach
        </ul>
    @endif
</x-layout>
