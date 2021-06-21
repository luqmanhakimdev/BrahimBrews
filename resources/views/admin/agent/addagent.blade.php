<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Welcome, <b>{{  Auth::user()->name }}</b>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title text-center">Add agents</h5>
                            <form > 
                            <div class="mb-3">
                                <label for="labelname" class="form-label">Name</label>
                                <input type="name" class="form-control" id="labelname">
                            </div>
                            <div class="mb-3">
                                <label for="labelemail" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="labelemail" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                            <div class="mb-3">
                                <label for="labelic" class="form-label">IC</label>
                                <input type="ic" class="form-control" id="labelic" aria-describedby="icHelp">
                                <div id="icHelp" class="form-text">Ex: 980512-09-4543</div>
                            </div>
                            <div class="mb-3">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>State</option>
                                <option value="Perlis">Perlis</option>
                                <option value="Kedah">Kedah</option>
                                <option value="Penang">Penang</option>
                                <option value="Perak">Perak</option>
                                <option value="Selangor">Selangor</option>
                                <option value="Putrajaya">Putrajaya</option>
                                <option value="Kuala Lumpur">Kuala Lumpur</option>
                                <option value="Negeri Sembilan">Negeri Sembilan</option>
                                <option value="Melaka">Melaka</option>
                                <option value="Johor">Johor</option>
                                <option value="Pahang">Pahang</option>
                                <option value="Kelantan">Kelantan</option>
                                <option value="Terengganu">Terengganu</option>
                                <option value="Sabah">Sabah</option>
                                <option value="Sarawak">Sarawak</option>
                                <option value="Labuan">Labuan</option>
                            </select>
                            </div>
                            <div class="mb-3">
                                <label for="labelcity" class="form-label">City</label>
                                <input type="city" class="form-control" id="labelcity">
                            </div>
                            <div class="mb-3">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Agent Type</option>
                                <option value="1">Leader</option>
                                <option value="2">Standard agent</option>
                                <option value="3">Dropship</option>
                            </select>
                            </div>
                            <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
