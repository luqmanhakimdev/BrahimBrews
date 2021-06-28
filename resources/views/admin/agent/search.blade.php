<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Welcome, <b>{{  Auth::user()->name }}</b>
        </h2>
    </x-slot>

    <div class="container" style="margin-top: 50px;">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <h4 class="text-center">Search</h4><hr>
                    <div class="form-group">
                        <label>Type a country name</label>
                        <input type="text" name="country" id="country" placeholder="Enter country name" class="form-control">
                    </div>
                    <div id="country_list"></div>                    
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <script type="text/javascript">
            $(document).ready(function () {
             
                $('#country').on('keyup',function() {
                    var query = $(this).val(); 
                    $.ajax({
                       
                        url:"{{ route('search') }}",
                  
                        type:"GET",
                       
                        data:{'country':query},
                       
                        success:function (data) {  
                            $('#country_list').html(data);
                        }
                    })
                    // end of ajax call
                });         
                $(document).on('click', 'li', function(){ 
                    var value = $(this).text();
                    $('#country').val(value);
                    $('#country_list').html("");
                });
            });
        </script>
</x-app-layout>