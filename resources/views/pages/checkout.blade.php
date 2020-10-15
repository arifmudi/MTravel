@extends('layouts.checkout')

 @push('prepend-style')
    <link rel="stylesheet" href="{{ url('frontend/libraries/gijgo/css/gijgo.min.css') }}" />
 @endpush

 @section('title')
    Checkout - Mutiara Travel<
 @endsection

 @section('content')
 <main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
        <div class="container">
            <div class="row">
                <div class="col p-0">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Paket Travel</li>
                            <li class="breadcrumb-item">Details</li>
                            <li class="breadcrumb-item active">Checkout</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-details">
                        <h1>Who is Going?</h1>
                        <p>Trip to Ubud, Bali, Indonesia</p>

                        <div class="attendee">
                            <table class="table table-responsive-sm text-center">
                                <thead>
                                    <tr>
                                        <td>Picture</td>
                                        <td>Name</td>
                                        <td>Nationality</td>
                                        <td>VISA</td>
                                        <td>Passport</td>
                                        <td></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <img src="{{ url('frontend/images/Mask Group 3.png') }}" alt="nisa" height="60px" />
                                        </td>
                                        <td class="align-middle">Nurul Ilmi</td>
                                        <td class="align-middle">ID</td>
                                        <td class="align-middle">N/A</td>
                                        <td class="align-middle">Active</td>
                                        <td class="align-middle">
                                            <a href="#">
                                                <img src="{{ url('frontend/images/ic_remove.png') }}" alt="remove" />
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="{{ url('frontend/images/Mask Group 3.png') }}" alt="nisa" height="60px" />
                                        </td>
                                        <td class="align-middle">Nurul Ilmi</td>
                                        <td class="align-middle">ID</td>
                                        <td class="align-middle">N/A</td>
                                        <td class="align-middle">Active</td>
                                        <td class="align-middle">
                                            <a href="#">
                                                <img src="{{ url('frontend/images/ic_remove.png') }}" alt="remove" />
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="member mt-3">
                            <h2>Add Member</h2>
                            <form action="#" class="form-inline">
                                <label for="inputUsername" class="sr-only">Name</label>
                                <input type="text" name="inputUsername" class="form-control mr-sm-2 mb-2" id="inputUsername" placeholder="Username" />

                                <label for="inputVisa" class="sr-only">Visa</label>
                                <select name="inputVisa" id="inputVisa" class="custom-select mb-2 mr-sm-2">
                <option value="Visa" selected>Visa</option>
                <option value="30 Days">30 Days</option>
                <option value="N/A">N/A</option>
              </select>

                                <label for="doePasport" class="sr-only">Visa</label>
                                <div class="mb-2 mr-sm-2 input-group">
                                    <input class="form-control datepicker" id="doePasport" name="doePasport" placeholder="DOE Passport" />
                                </div>

                                <button type="submit" class="btn btn-add-now mb-2 px-2">
                Add now
              </button>
                            </form>

                            <h3 class="mt-2 mb-0">Note</h3>
                            <p class="disclaimer mb-0">
                                You are only able to invite member that has registered in Nomads.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-details card-right">
                        <h2>Checkout Informations</h2>
                        <table class="trip-informations">
                            <tr>
                                <th width="50%">Members</th>
                                <td class="text-right">2 person</td>
                            </tr>
                            <tr>
                                <th width="50%">Additional VISA</th>
                                <td class="text-right">$ 190,00</td>
                            </tr>
                            <tr>
                                <th width="50%">Trip Price</th>
                                <td class="text-right">$ 80,00 / person</td>
                            </tr>
                            <tr>
                                <th width="50%">Sub Total</th>
                                <td class="text-right">$ 280,00</td>
                            </tr>
                            <tr>
                                <th width="50%">Total (+Unique Code)</th>
                                <td class="text-right text-total">
                                    <span class="text-blue">$ 279,</span>
                                    <span class="text-orange">33</span>
                                </td>
                            </tr>
                        </table>
                        <hr />
                        <div class="paymentdeta">
                            <h2>Payment Instructions</h2>
                            <p>
                                Please complete your payment before tocontinue the wonderful trip
                            </p>
                        </div>
                        <div class="bank">
                            <div class="bank-item pb-3">
                                <img src="{{ url('frontend/images/ic_bank.png') }}" alt="bank" class="bank-image" />
                                <div class="bank-description">
                                    <h3>PT Mutiara Travel</h3>
                                    <p>
                                        0812 7530 3300 <br /> Bank Central Asia
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="bank-item pb-3">
                                <img src="{{ url('frontend/images/ic_bank.png') }}" alt="bank" class="bank-image" />
                                <div class="bank-description">
                                    <h3>PT Mutiara Travel</h3>
                                    <p>
                                        0823 9044 9323 <br /> Bank Rakyat Indonesia
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="join-container">
                        <a href="{{ route('sukses') }}" class="btn btn-block btn-join-now mt-3 py-2">I Have Made Payment</a>
                    </div>
                    <div class="text-center mt-3">
                        <a href="#" class="text-muted">Cancel Booking</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
 @endsection

@push('footer')
    @include('includes.footer')
@endpush


 @push('addon-script')
    <script src="{{ url('frontend/libraries/gijgo/js/gijgo.min.js') }}"></script>
    <script>
        $(".datepicker").datepicker({
            uiLibrary: "bootstrap4",
            icons: {
                rightIcon: '<img src="{{ url('frontend/images/ic_doe.png') }}" />',
            },
        });
    </script>
    
 @endpush