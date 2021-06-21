<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Welcome, <b>{{  Auth::user()->name }}</b>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <h5 class="card-title text-center">All agents</h5>
       
         <table class="table table align-middle" >
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">I/C</th>
                    <th scope="col">City</th>
                    <th scope="col">State</th>
                    <th scope="col">Type</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
            @php($count=1)
            @foreach($agents as $agent)
                <tr>
                    <th scope="row">{{  $count }}</th>
                    <td>{{ $agent->name }}</td>
                    <td>{{ $agent->email }}</td>
                    <td>{{ $agent->ic }}</td>
                    <td>{{ $agent->city }}</td>
                    <td>{{ $agent->state }}</td>
                    <td>{{ $agent->divison_id }}</td>
                    
                    <td>
                        <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $agent->id }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                              <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                            </svg>
                        </a>
                    </td>
                    
                    <td>
                    <a href="{{ route('delete.agent', $agent->id) }}" onclick="return confirm('Delete {{ $agent->name }}?')">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="#B22222">
                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                        </svg>
                        </a>
                    </td>
                </tr>
            @php($count++)
            <!-- Button trigger modal -->
            <!-- Modal -->
                            <div class="modal fade" id="exampleModal{{ ($agent->id) }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Update {{ $agent->name }}</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                          <div class="modal-body">
                                            <form action="{{ route('update.agent') }}" method="POST">    
                                              @csrf
                                                <div class="mb-3">
                                                  <input type="hidden" name="id" value="{{ ($agent->id) }}"></input>
                                                  <label for="stock_in" class="col-form-label">Email:</label>
                                                  <input type="text" class="form-control" name="email" value="{{ ($agent->email) }}" >
                                                  <label for="stock_in" class="col-form-label">City:</label>
                                                  <input type="text" class="form-control" name="city" value="{{ ($agent->city) }}" >
                                                  <label for="stock_in" class="col-form-label">State:</label>
                                                  <input type="text" class="form-control" name="state" value="{{ ($agent->state) }}" >
                                                  
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
            {{ $agents->links() }}
            
             
            </div>
        </div>
    </div>
</div>



                            
                            




<script type="text/javascript">
      var myModal = document.getElementById('myModal')
      var myInput = document.getElementById('myInput')
      myModal.addEventListener('shown.bs.modal', function () {
        myInput.focus()
      })                 
</script>

        </div>
    </div>
</x-app-layout>
