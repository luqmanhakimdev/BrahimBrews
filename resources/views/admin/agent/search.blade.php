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
                                <div class="input-group mb-0">
                                    <input type="text" class="form-control" placeholder="Search agent, details etc" id="search">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div id="result">
                                <h2 class="card-title text-center">All agents</h2>
                          <table class="table table align-middle" >
                              <thead>
                                  <tr>
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
                              @foreach($agents as $agent)
                                  <tr>
                                      <td>{{ $agent->name }}</td>
                                      <td>{{ $agent->email }}</td>
                                      <td>{{ $agent->ic }}</td>
                                      <td>{{ $agent->city }}</td>
                                      <td>{{ $agent->state }}</td>
                                      <td>
                                      @if ($agent->divison_id == 1)
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                {{ $agent->divison->divison_name }}
                                            </span>
                                        @elseif ($agent->divison_id == 2)
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                                {{ $agent->divison->divison_name }}
                                            </span>
                                        @else
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                                {{ $agent->divison->divison_name }}
                                            </span>
                                        @endif
                                      </td>
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
                                                                    <label class="col-form-label">Email:</label>
                                                                    <input type="text" class="form-control" name="email" value="{{ ($agent->email) }}" >
                                                                    <label class="col-form-label">City:</label>
                                                                    <input type="text" class="form-control" name="city" value="{{ ($agent->city) }}" >
                                                                    <label class="col-form-label">State:</label>
                                                                    <input type="text" class="form-control" name="state" value="{{ ($agent->state) }}" >
                                                                    <label class="col-form-label">Type:</label>
                                                                    <select class="form-select" name="divison_id" aria-label="Default select example">
                                                                        <option selected value="{{ ($agent->divison_id) }}" disabled>{{ ($agent->divison->divison_name) }}</option>
                                                                        <option value="1">Leader</option>
                                                                        <option value="2">Agent</option>
                                                                        <option value="3">Dropship</option>
                                                                    </select>
                                                                    
                                                                    
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
                </div>


            </div>
        </div>
    

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <script type="text/javascript">  
            $(document).ready(function(){
            $("#search").keyup(function(){
            var str=  $("#search").val();
            if(str == "") {
                $( "#result" ).html("<b>Blogs...</b>");}
                else {
                    $.get( "{{ url('demos/search?id=') }}"+str, function( data ) {
                    $( "#result" ).html( data );
            });
            }
            });
            });
        </script>
        <script type="text/javascript">
        var myModal = document.getElementById('myModal')
        var myInput = document.getElementById('myInput')
        myModal.addEventListener('shown.bs.modal', function () {
            myInput.focus()
        })                 
        </script>
</x-app-layout>