@include('partials.header')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-12">
            <h4 class="pl-4 pt-4">Burial Lot</h4>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="mr-auto pl-3">
                            <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-warning" id="BurialLot">Add Burial Lot</button>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" >
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add Burial Lot</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Lot Number:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">Burial Lot Type:</label>
                                            <select class="form-control" aria-label="Default select example">
                                                <option selected>Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">Group Building:</label>
                                            <select class="form-control" aria-label="Default select example">
                                                <option selected>Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                    </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Send message</button>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <table class="table  m-3" style="">
                            <thead>
                                <tr style="background-color:#eef2f7;">
                                <th scope="col">Lot Number</th>
                                <th scope="col">Lot Type</th>
                                <th scope="col">Group Building</th>
                                <th class="text-center" scope="col">Availability</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Lot 1</th>
                                    <td>Lawn Lot</td>
                                    <td>Lawn Land 1</td>
                                    <td class=" d-flex justify-content-center align-items-center">
                                        <div class="spinner-grow text-success" role="status">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Lot 2</th>
                                    <td>Apartment Lot</td>
                                    <td>Apartment Building 1</td>
                                    <td class=" d-flex justify-content-center align-items-center">
                                        <div class="spinner-grow text-success" role="status">
                                        </div>
                                    </td>
                                </tr>
                                                                <tr>
                                    <th scope="row">Lot 3</th>
                                    <td>Apartment Lot</td>
                                    <td>Apartment Building 1</td>
                                    <td class=" d-flex justify-content-center align-items-center">
                                        <div class="spinner-grow text-danger" role="status">
                                        </div>
                                    </td>
                                </tr>
                                                                <tr>
                                    <th scope="row">Lot 4</th>
                                    <td>Lawn Lot</td>
                                    <td>Lawn Land 1</td>
                                    <td class=" d-flex justify-content-center align-items-center">
                                        <div class="spinner-grow text-success" role="status">
                                        </div>
                                    </td>
                                </tr>
                                                                <tr>
                                    <th scope="row">Lot 5</th>
                                    <td>Apartment Lot</td>
                                    <td>Apartment Building 2</td>
                                    <td class=" d-flex justify-content-center align-items-center">
                                        <div class="spinner-grow text-danger" role="status">
                                        </div>
                                    </td>
                                </tr>
                                                                <tr>
                                    <th scope="row">Lot 6</th>
                                    <td>Lawn Lot</td>
                                    <td>Lawn Land 2</td>
                                    <td class=" d-flex justify-content-center align-items-center">
                                        <div class="spinner-grow text-success"  role="status">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('partials.footer')
<script>
    $(document).ready(function() {
       // $("#BurialLot")

    });
   
</script>