<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Welcome, <b>{{  Auth::user()->name }}</b>
        </h2>
    </x-slot>
<script>
var i = 0;
var fornamechart = []; 
var forvaluechart = [];
</script>
        <div class="py-12">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <h5 class="card-title text-center">Today's update</h5>                            
                       <canvas id="myChart" style="align:center; height:45vh; width:80vw;"></canvas>                                              
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-8">
                <div class="card mb-4">
                  <div class="card-body ">
                    <h5 class="card-title text-center">Flavor stock</h5>
                      <table class="table align-middle">
                        <thead>
                              <tr> 
                                  <th scope="row">No</th>         
                                  <th scope="col">Flavor</th>
                                  <th scope="col"><div class="text-center">Stock left</div></th>
                                  <th colspan="2"><div class="text-center">Action</div></th>
                              </tr>
                        </thead>
                        <tbody>
                          @php($count = 1)
                          @foreach($flavors as $flavor)
                              <tr>
                                  <th scope="row">{{ $count }}</th>                                 
                                  <td>{{ $flavor->flavor_name }}</td>
                                  <td><div class="text-center">{{ ($flavor->stock) }}</div></td>
                                  <td><div class="text-center"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{ ($flavor->id) }}" >Update</button></div></td>
                                  <td>
                                  <a href="{{ route('delete.flavor', $flavor->id) }}" onclick="return confirm('Delete {{ $flavor->flavor_name }}?')">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="#B22222">
                                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                  </svg>
                                  </a>
                                  </td>
                              </tr>
                              <!-- Button trigger modal -->
                              <!-- Modal -->
                            <div class="modal fade" id="exampleModal{{ ($flavor->id) }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Update {{ $flavor->flavor_name }} stock</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                          <div class="modal-body">
                                            <form action="{{ route('update.stock') }}" method="POST">    
                                              @csrf
                                                <div class="mb-3">
                                                  <input type="hidden" name="id" value="{{ ($flavor->id) }}"></input>
                                                  <input type="hidden" name="stock_left" value="{{ ($flavor->stock) }}"></input>
                                                  <label for="stock_in" class="col-form-label">Stock in:</label>
                                                  <input type="text" class="form-control" name="stock_in" >
                                                  <label for="stock_out" class="col-form-label">Stock out:</label>
                                                  <input type="text" class="form-control" name="stock_out" >
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
                                          <script>
                                          fornamechart[i]="{{ $flavor->flavor_name }}"; 
                                          forvaluechart[i]="{{ $flavor->stock }}";
                                          i+=1;
                                          </script>                   @php($count++)
                            @endforeach
                        </tbody>
                      </table>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="card mb-4">
                  <div class="card-body">
                    <h5 class="card-title">Add new flavor</h5>
                    <p class="card-text">Add new flavor to the system.</p>     
                      <form action=" {{ route('add.flavor') }} " method="POST">               
                       @method('PUT')
                       @csrf 
                       <div class="mb-3">
                            <label for="flavor_name" class="form-label">Flavor</label>
                            <input type="text" class="form-control" name="add_flavor">
                            @error('add_flavor')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>                             
                       <button type="submit" class="btn btn-primary">Add flavor</button>
                    </form>
                  </div>
                </div>
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


<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<script>

var barColors = [
  "#19647e",
  "#119da4",
  "#ffc857",
  "#4b3f72",
  "#1f2041",
  
  "#337CA0",
  "#4CC9F0",
  "#C98686",
  "#966B9D",
  "#54478c",
  
  "#8ecae6",
  "#219ebc",
  "#023047",
  "#ffb703",
  "#fb8500"
];

new Chart("myChart", {
  type: "pie",
  data: {
    labels: fornamechart,
    datasets: [{
      backgroundColor: barColors,
      data: forvaluechart
    }]
  },
  options: {
    title: {
      display: true,
      text: "Flavor stock"
    }
  }
});
</script>

</x-app-layout>
