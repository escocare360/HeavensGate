<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Checkout example · Bootstrap v4.6</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/checkout/">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap core CSS -->
    <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
          .occupied {
      background-color: red;
      color: white;
     }
      .available {
        background-color: white;
        color: black;
      }
          table {
        border-collapse: collapse;
        width: 90%;
        margin: 20px auto;
        text-align: center;
      }
      th, td {
        border: 1px solid #333;
        padding: 10px;
      }
          .select2-container--bootstrap4 .select2-selection--multiple {
        min-height: calc(2.25rem + 2px);
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        line-height: 1.5;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
      }

      .select2-container--bootstrap4 .select2-selection--multiple .select2-selection__choice {
        background-color: #17a2b8;
        border: none;
        color: #fff;
        font-size: 0.875rem;
        padding: 0.25rem 0.5rem;
      }

      .select2-container--bootstrap4 .select2-results__option--highlighted {
        background-color: #7f8eff !important;
        color: white;
      }

      .select2-container--bootstrap4 .select2-results__group {
        font-weight: bold;
        padding: 0.5rem 0.75rem;
      }
      .select2-selection__choice__display{
                background-color: #17a2b8;
        border: none;
        color: #fff;
        font-size: 0.875rem;
        padding: 0.25rem 0.5rem;
      }
      .select2-selection__choice__remove{
      background-color: #17a2b8;
        border: none;
        color: #fff;
        font-size: 0.875rem;
        padding: 0.25rem 0.5rem;
      }
      .select2-container--default .select2-selection--multiple .select2-selection__choice__remove{
          background-color: #17a2b8 !important;
      border-right:1px #17a2b8 solid !important;
        color: #fff;
        font-size: 0.875rem;
        padding: 0.25rem 0.5rem;
      }
      .select2-container--default .select2-selection--multiple .select2-selection__choice{
          background-color: #17a2b8 !important;
        border: 1px #17a2b8 solid !important;
        padding: 2px;
      }
      .select2-selection__choice{
            background-color: #17a2b8;
        border: 1px black solid;
        color: #fff;
        font-size: 0.875rem;
        padding: 0.25rem 0.5rem;
      }
      .select2-selection.select2-selection--multiple {
          width: 300px !important;
            overflow-x: hidden;
      }
      .select2.select2-container.select2-container--default{
          width: 300px !important;
            overflow-x: hidden;
      }
      .select2.select2-container.select2-container--default.select2-container--below.select2-container--focus.select2-container--open{
          width: 300px !important;
            overflow-x: hidden;
      }
      .select2-results__options{
          width: 300px !important;
            overflow-x: hidden;
      }
      .select2-results{
            width: 300px !important;
              overflow-x: hidden;
      }
      .select2-dropdown.select2-dropdown--below{
          width: 300px !important;
            overflow-x: hidden;
      }
      .select2-dropdown.select2-dropdown--above{
          width: 300px !important;
          overflow-x: hidden;
      }
      span[aria-hidden="true"] {
        
        color: #fff !important;
      }
      .select2-search__field{
          font-size: 13px !important;
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="Assets/Css/form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    
<div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-3" src="Assets/img/Logo.png" alt="" width="202" height="102">
    <h2>Make A Reservation Now</h2>
    <p class="lead">Secure a burial slot now to ensure peace of mind for you and your loved ones—because planning ahead is the greatest gift you can give.</p>
  </div>

  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Inclusion</span>
        <span class="badge badge-warning badge-pill">PHP 7,000</span>
      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Burial Assistance</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">PHP 3,000</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Prayer</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">PHP 500</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Materials</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">PHP 3,000</span>
        </li>
        {{-- <li class="list-group-item d-flex justify-content-between bg-light">
          <div class="text-success">
            <h6 class="my-0">Promo code</h6>
            <small>EXAMPLECODE</small>
          </div>
          <span class="text-success">-$5</span>
        </li> --}}
        <li class="list-group-item d-flex justify-content-between">
          <span>Total (PHP)</span>
          <strong>PHP 7,000</strong>
        </li>
      </ul>

      {{-- <form class="card p-2"  autocomplete="off">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Promo code" autocomplete="off">
          <div class="input-group-append">
            <button type="submit" class="btn btn-secondary">Redeem</button>
          </div>
        </div>
      </form> --}}
    </div>
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Billing address</h4>
      <form class="needs-validation" novalidate  autocomplete="off">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">First name</label>
            <input type="text" class="form-control" id="firstName" placeholder="" value="" required autocomplete="off">
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Last name</label>
            <input type="text" class="form-control" id="lastName" placeholder="" value="" required autocomplete="off">
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>
        {{-- <span class="text-muted"> (Optional)</span> --}}
        <div class="row">
          <div class="col-md-4 mb-3">
            <label for="Nickname">Nickname</label>
            <input type="text" class="form-control" id="Nickname" placeholder="Tuklas" required value="" autocomplete="off">
        
          </div>
          <div class="col-md-8 mb-3">
            <label for="mobileNumber">Mobile Number</label>
            <input type="text" class="form-control" id="mobileNumber" placeholder="09213349212" value="" required autocomplete="off">
            <div class="invalid-feedback">
              Valid Mobile Number is required.
            </div>
          </div>
        </div>
        <div class="mb-3">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" required placeholder="you@example.com" autocomplete="off">
          <div class="invalid-feedback">
            Please enter a valid email address.
          </div>
        </div>

        <div class="mb-3">
          <label for="address">Address</label>
          <input type="text" class="form-control" id="address" placeholder="1234 Main St" required autocomplete="off">
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>

        <div class="mb-3">
          <label for="Package">Lot Type</label>
            <select class="custom-select d-block w-100" id="Lot_type" required>
              <option value="">Choose your Lot Type...</option>
              <option value="Lawn">Lawn Lot</option>
              <option value="Apartment">Apartment Lot</option>
            </select>
        </div>
        <div class="mb-3">
          <label for="Package">Package</label>
            <select class="custom-select d-block w-100" id="country" required>
              <option value="">Choose your package...</option>
              <option>Package 1</option>
              <option>Package 2</option>
              <option>Package 3</option>
              <option>Package 4</option>
              <option>Package 5</option>
            </select>
        </div>
        {{-- <div class="mb-3">
          <input type="checkbox" aria-label="Radio button for following text input">
          <label for="Package" style="font-size: 1.05rem; font-weight: bold;">Rush Burial?</label>
        </div> --}}
        {{-- <hr class="mb-4"> --}}
        {{-- <div class="col-md-3 col-sm-3 col-xl-4 mr-auto pl-0">
            <span class="btn btn-info btn-sm btn-block my-2" id="chooseLot" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><span style="font: 600;font-size:13px;">Choose your lot here</span></span>
        </div> --}}
        <div class="row">
            <div class="col-md-12">
                    <div class="card card-body">
                        <div class=" justify-content-center d-flex">
                            <select id="LotGroup" class="custom-select d-block col-11"  role="button" aria-expanded="false" aria-controls="collapseExample" required>
                              <option value="">Lot Group</option>
                            </select>
                        </div>

                     <div class="collapse" id="collapseExample">
                        <table id="table_lot_group">
                            <tr>
                            <td>Lot 1</td>
                            <td>Lot 2</td>
                            <td>Lot 3</td>
                            <td>Lot 4</td>
                            <td class="occupied">Occupied</td>
                            </tr>
                            <tr>
                            <td>Lot 6</td>
                            <td>Lot 7</td>
                            <td>Lot 8</td>
                            <td>Lot 9</td>
                            <td>Lot 10</td>
                            </tr>
                            <tr>
                            <td>Lot 11</td>
                            <td>Lot 12</td>
                            <td>Lot 13</td>
                            <td class="occupied">Occupied</td>
                            <td>Lot 15</td>
                            </tr>
                            <tr>
                            <td>Lot 16</td>
                            <td>Lot 17</td>
                            <td>Lot 18</td>
                            <td>Lot 19</td>
                            <td class="available">Lot 20</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
            <div class="row mb-4 mt-2" id="optionsLot">
                <div class="col-md-5">
                    <select class="select2 form-control select2-multiple" multiple="multiple" data-placeholder="Choose your lot here" style="border:solid #dedcdc 1px; height: calc(2.25rem + 2px);padding: 10.375rem 0.75rem;font-size: 1rem;line-height: 3.5;">
                        <optgroup label="Available Lot">
                        <option value="AK">Lot 1</option>
                        <option value="HI">Lot 2</option>
                        <option value="AK">Lot 3</option>
                        <option value="HI">Lot 5</option>
                        <option value="AK">Lot 6</option>
                        <option value="HI">Lot 7</option>
                        <option value="AK">Lot 110</option>
                        <option value="HI">Lot 111</option>
                        <option value="AK">Lot 112</option>
                        <option value="HI">Lot 113</option>
                        </optgroup>
                    </select>
                </div>
            </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
      </form>
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2017-2022 Company Name</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> --}}
    <script>window.jQuery || document.write('<script src="../Sample/assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
    <script src="../Sample/assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="Assets/Js/form-validation.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            var ctr = 0;
            $('.select2').select2();
            $('#optionsLot').hide();
            $("#chooseLot").on("click", function() {
                  if(ctr==0){
                      $('#optionsLot').show();
                      ctr++;
                  }else{
                      $('#optionsLot').hide();
                      ctr--;
                  }
              });

              $('#LotGroup').on('change', function () {
              var selectedValue = $(this).val();

              if (selectedValue) {
                $('#collapseExample').collapse('show');
              } else {
                $('#collapseExample').collapse('hide');
              }
            });

            $('#Lot_type').on('change', function () { //append Lot group dropdown
               $("#LotGroup").children().not(":first").remove();
               $('#table_lot_group tr').remove();
               var selectedValue = $(this).val();
               if(selectedValue){
                var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
          
                $.ajax({
                    type: "GET",
                    url: "{{ route('Lot_group') }}", 
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    contentType: "application/json; charset=utf-8",
                    data: {
                        Lot_type: selectedValue
                    },
                    dataType: "json",
                    success: function (response) {

                      $("#LotGroup").children().not(":first").remove();

                      $.each(response.Lot_group, function(index, item) {
                          $("#LotGroup").append('<option value="' + item.Lot_group + '">' + item.Lot_group + '</option>');
                      });

                    },
                    error: function (xhr, status, error) {
                        console.error('Error:', error);
                    }
                });
               }else{

               }
            });
            
            $('#LotGroup').on('change', function () { //append Lot group dropdown
               var selectedValue = $(this).val();
               if(selectedValue){
                var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
          
                $.ajax({
                    type: "GET",
                    url: "{{ route('Available_lot') }}", 
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    contentType: "application/json; charset=utf-8",
                    data: {
                        Lot_group: selectedValue
                    },
                    dataType: "json",
                    success: function (response) {
             
                    $('#table_lot_group tr').remove();
                    let row = "<tr>";
                    let count = 0;

                    $.each(response.Available_lot, function(index, item) {
                        if (item.Lot_status == "Available") {
                            row += "<td>" + item.Lot_name + "</td>";
                        }else if(item.Lot_status == "Occupied") {
                            row += "<td class='occupied'>Occupied</td>";
                        }else{
                          row += "<td class=''>No data</td>";
                        }

                        count++;

                        // If 5 cells added, close row and append it, then reset
                        if (count % 5 === 0) {
                            row += "</tr>";
                            $("#table_lot_group").append(row);
                            row = "<tr>"; // Start a new row
                        }
                    });

                    // If remaining <td>s are less than 5, pad the row
                    if (count % 5 !== 0) {
                        let remaining = 5 - (count % 5);
                        for (let i = 0; i < remaining; i++) {
                            row += "<td>"+"No data"+"</td>"; 
                        }
                        row += "</tr>";
                        $("#table_lot_group").append(row);
                    }


                    },
                    error: function (xhr, status, error) {
                        console.error('Error:', error);
                    }
                });
               }else{

               }
            });
        });
    </script>
  </body>
</html>
