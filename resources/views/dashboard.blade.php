<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Welcome, <b>{{  Auth::user()->name }}</b>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <!-- <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div> -->
            
         <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Flavor</th>
                    <th scope="col"><div class="text-center">Stock left</div></th>
                    <th scope="col"><div class="text-center">Action</div></th>
                </tr>
            </thead>
            <tbody>
            @foreach($flavors as $flavor)
                <tr>
                    <th scope="row">{{  $flavor->id }}</th>
                    <td>{{ $flavor->flavor_name }}</td>
                    <td><div class="text-center">{{ ($flavor->stock) }}</div></td>
                    <td><div class="text-center"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{ ($flavor->id) }}" >Update</button></div></td>
                </tr>
        <!-- Button trigger modal -->
        <!-- Modal -->

              <div class="modal fade" id="exampleModal{{ ($flavor->id) }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Update stock</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form action="{{ route('update.stock') }}" method="POST">
                      @csrf
                        <div class="mb-3">
                          <input type="hidden" name="id" value="{{ ($flavor->id) }}"></input>
                          <input type="hidden" name="stock_left" value="{{ ($flavor->stock) }}"></input>
                          <label for="stock_in" class="col-form-label">Stock in:</label>
                          <input type="text" class="form-control" name="stock_in">
                          <label for="stock_in" class="col-form-label">Stock out:</label>
                          <input type="text" class="form-control" name="stock_out">
                        </div> 
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cancel</button>
                      <button type="submit" class="btn btn-success">Update</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
              </tbody>
            </table>

<script>
            v<script type="text/javascript">
          var myModal = document.getElementById('myModal')
          var myInput = document.getElementById('myInput')
          myModal.addEventListener('shown.bs.modal', function () {
            myInput.focus()
          })
        </script>

</script>

        </div>
    </div>
</x-app-layout>
