@include('partials.header')
<div class="container-fluid" style="overflow:auto; ">
    <div class="row">
        <div class="col-md-12">
            <h4 class="pl-4 pt-4">Burial Lot Information</h4>
        </div>
    </div>
        <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="table-responsive">
                            <div class="col-12">
                                <table class="table m-3" style="">
                                <thead>
                                    <tr style="background-color:#eef2f7;">
                                    <th class="text-nowrap"scope="col">Lot Number</th>
                                    <th class="text-nowrap"scope="col">Owner</th>
                                    <th class="text-nowrap"scope="col">Package</th>
                                    <th class="text-nowrap"scope="col">Remaining Balance</th>
                                    <th class="text-nowrap"scope="col">Total Payment</th>
                                    <th class="text-nowrap"scope="col">Lot Type</th>
                                    <th class="text-nowrap"scope="col">Group Building</th>
                                    <th class="text-nowrap"scope="col">Started Date</th>
                                    <th class="text-nowrap"scope="col">Renewal Date</th>
                                    <th class="text-nowrap"scope="col" class="text-center">Time Left Until</th>
                                    <th class="text-nowrap"scope="col">Status</th>
                                    <th class="text-nowrap"class="text-center" scope="col">Availability</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th class="text-nowrap"scope="row">Lot 1</th>
                                        <td class="text-nowrap">Mikael Lazaro</td>
                                        <td class="text-nowrap">Package 1</td>
                                        <td class="text-nowrap">PHP 0</td>
                                        <td class="text-nowrap">PHP 25,000</td>
                                        <td class="text-nowrap">Lawn Lot</td>
                                        <td class="text-nowrap">Lawn Land 1</td>
                                        <td class="text-nowrap">Jan 31, 2026</td>
                                        <td class="text-nowrap"></td>
                                        <td class="text-nowrap" class="text-center">2years 1month 20days</td>
                                        <td class="text-nowrap">New</td>
                                        <td class="text-nowrap" class=" d-flex justify-content-center align-items-center">
                                            <div class="spinner-grow text-success" role="status">
                                            </div>
                                        </td>
                                    </tr>
                                        <tr>
                                        <th class="text-nowrap"scope="row">Lot 2</th>
                                        <td class="text-nowrap">Camille Lazaro</td>
                                        <td class="text-nowrap">Package 2</td>
                                        <td class="text-nowrap">PHP 0</td>
                                        <td class="text-nowrap">PHP 20,000</td>
                                        <td class="text-nowrap">Lawn Lot</td>
                                        <td class="text-nowrap">Lawn Land 1</td>
                                        <td class="text-nowrap">Jan 31, 2026</td>
                                        <td class="text-nowrap">Dec 1, 2040</td>
                                        <td class="text-nowrap" class="text-center">50 days</td>
                                        <td class="text-nowrap">Renew</td>
                                        <td class="text-nowrap" class=" d-flex justify-content-center align-items-center">
                                            <div class="spinner-grow text-success" role="status">
                                            </div>
                                        </td>
                                    </tr>
                                        <tr>
                                        <th class="text-nowrap"scope="row">Lot 3</th>
                                        <td class="text-nowrap">Jezreel Lazaro</td>
                                        <td class="text-nowrap">Package 2</td>
                                        <td class="text-nowrap">PHP 0</td>
                                        <td class="text-nowrap">PHP 20,000</td>
                                        <td class="text-nowrap">Lawn Lot</td>
                                        <td class="text-nowrap">Lawn Land 1</td>
                                        <td class="text-nowrap">Jan 31, 2026</td>
                                        <td class="text-nowrap"></td>
                                        <td class="text-nowrap" class="text-center">0 days</td>
                                        <td class="text-nowrap">Expired</td>
                                        <td class="text-nowrap" class=" d-flex justify-content-center align-items-center">
                                            <div class="spinner-grow text-danger" role="status">
                                            </div>
                                        </td>
                                    </tr>
                                        <tr>
                                        <th class="text-nowrap"scope="row">Lot 4</th>
                                        <td class="text-nowrap">Lewel Lazaro</td>
                                        <td class="text-nowrap">Package 3</td>
                                        <td class="text-nowrap">PHP 0</td>
                                        <td class="text-nowrap">PHP 15,000</td>
                                        <td class="text-nowrap">Lawn Lot</td>
                                        <td class="text-nowrap">Lawn Land 1</td>
                                        <td class="text-nowrap">Mar 31, 2026</td>
                                        <td class="text-nowrap"></td>
                                        <td class="text-nowrap" class="text-center">1year 1month 20 days</td>
                                        <td class="text-nowrap">New</td>
                                        <td class="text-nowrap" class=" d-flex justify-content-center align-items-center">
                                            <div class="spinner-grow text-warning" role="status">
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
    </div>
</div>

@include('partials.footer')