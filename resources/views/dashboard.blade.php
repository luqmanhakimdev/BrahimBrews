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
                    <td><div class="text-center"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Update</button></div></td>
                </tr>
            @endforeach
            </tbody>
            </table>


        <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update stock</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
        @csrf
          <div class="mb-3">
            <label for="stock_in" class="col-form-label">Stock in:</label>
            <input type="text" class="form-control" id="stock_in">
          </div>
          <div class="mb-3">
            <label for="stock_out" class="col-form-label">Stock out:</label>
            <input type="text" class="form-control" id="stock_out"></input>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-success">Update</button>
      </div>
    </div>
  </div>
</div>

<script>
            var exampleModal = document.getElementById('exampleModal')
            exampleModal.addEventListener('show.bs.modal', function (event) {
            // Button that triggered the modal
            var button = event.relatedTarget
            // Extract info from data-bs-* attributes
            var recipient = button.getAttribute('data-bs-target')
            // If necessary, you could initiate an AJAX request here
            // and then do the updating in a callback.
            //
            // Update the modal's content.
            var modalTitle = exampleModal.querySelector('.modal-title')
            var modalBodyInput = exampleModal.querySelector('.modal-body input')

            modalTitle.textContent = 'Update stock ' + recipient
            modalBodyInput.value = recipient
            })

</script>

        </div>
    </div>
</x-app-layout>
