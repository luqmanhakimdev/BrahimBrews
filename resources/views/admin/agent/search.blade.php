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
                                        <div id="result">

                                        </div>
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
                $( "#result" ).html("<b>Blogs information will be show here...</b>");}
                else {
                    $.get( "{{ url('demos/search?id=') }}"+str, function( data ) {
                    $( "#result" ).html( data );
            });
            }
            });
            });
        </script>
</x-app-layout>