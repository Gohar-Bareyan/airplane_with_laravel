<x-layout>
    @foreach($airplanes as $airplane)
        <ul class="ml-40 mt-5">
            <li>
                {{$airplane->id}}. {{$airplane->name}} -> Maximum Passenger Count: {{$airplane->max_passenger_count}}
                <a class="text-blue-500 pl-10" href={{ route('management.show', $airplane) }}>More</a>
            </li>
        </ul>
    @endforeach

    <div class="mt-20 ml-40">
        <form method="GET" action="{{ route('flights.search') }}" id="flight-search-form">
            @csrf
            <div class="mb-4">
                <label for="from_country" class="block font-bold">From:</label>
                <select name="from_country" id="from_country" class="border border-gray-300 rounded-md p-2">
                    <option value="">Select Departure Country</option>
                    @foreach($countries as $country)
                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="to_country" class="block font-bold">To:</label>
                <select name="to_country" id="to_country" class="border border-gray-300 rounded-md p-2">
                    <option value="">Select Destination Country</option>
                    @foreach($countries as $country)
                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="bg-blue-500 text-white rounded-md p-2">Search</button>
        </form>
</x-layout>
