<x-filament-panels::page>

    <ul>
        @foreach (App\Models\Client::all() as $client)
            <li>
                {{ ($this->editAction)(['client' => $client->id]) }}
                {{ $client->name }}
            </li>            
        @endforeach
    </ul>

</x-filament-panels::page>
