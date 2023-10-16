<x-layout>
    <div class="w-full p-4">
        <p>The following customers are registered in the flight <span class="font-bold">{{$flight->name}}</span>:</p>
        @foreach($customers as $customer)
            <ul class="list-disc list-inside">
                <li>
                    {{$customer->name}} {{$customer->surname}}
                </li>
            </ul>
        @endforeach
    </div>

</x-layout>
