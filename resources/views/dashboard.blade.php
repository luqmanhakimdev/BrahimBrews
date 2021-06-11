<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div> -->

         <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Flavor</th>
                    <th scope="col">Stock In</th>
                    <th scope="col">Stock Out</th>
                </tr>
            </thead>
            <tbody>

            @foreach($flavors as $flavor)
                <tr>
                    <th scope="row">{{  $flavor->id }}</th>
                    <td>{{ $flavor->flavor_name }}</td>
                    <td>{{ $flavor->stock_in }}</td>
                    <td>{{ $flavor->stock_out }}</td>
                </tr>
            @endforeach
            </tbody>
            </table>

        </div>
    </div>
</x-app-layout>
