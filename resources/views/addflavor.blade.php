<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Welcome, <b>{{  Auth::user()->name }}</b>
        </h2>
    </x-slot>

        <div class="py-12">
          <div class="container">
            <div class="row">
              <div class="col-sm-4 mx-auto">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title text-center">Add new flavor</h5>                   
                        <form action=" {{ route('insert.flavor') }} " method="POST">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="flavor_name" class="form-label">Flavor</label>
                            <input type="text" class="form-control" name="add_flavor">
                            @error('add_flavor')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>                     
                        <button type="submit" class="btn btn-primary" action="{{ route('add.flavor') }}">Add flavor</button>
                        </form>                         
                  </div>
                </div>
              </div>
            </div>
            

</x-app-layout>
