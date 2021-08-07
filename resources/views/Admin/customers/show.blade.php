@extends('layouts.admin')

@section('main-content')
<main>
    <div class="container-fluid">
        <h2 class="mt-30 page-title">Customers</h2>
        <ol class="breadcrumb mb-30">
            <li class="breadcrumb-item"><a href="{{ route('dashboard) }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('customers) }}">Customers</a></li>
            <li class="breadcrumb-item active">{{}}</li>
        </ol>
        <div class="row">
            <div class="col-lg-5 col-md-6">
                <div class="card card-static-2 mb-30">
                    <div class="card-body-table">
                        <div class="shopowner-content-left text-center pd-20">
                            <div class="customer_img">
                                <img src="images/avatar/img-1.jpg" alt="">
                            </div>
                            <div class="shopowner-dt-left mt-4">
                                <h4>Joginder Singh</h4>
                                <span>Customer</span>
                            </div>
                            <ul class="product-dt-purchases">
                                <li>
                                    <div class="product-status">
                                        Purchased <span class="badge-item-2 badge-status">15</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="product-status">
                                        Rewards <span class="badge-item-2 badge-status">5</span>
                                    </div>
                                </li>
                            </ul>
                            <div class="shopowner-dts">
                                <div class="shopowner-dt-list">
                                    <span class="left-dt">Name</span>
                                    <span class="right-dt">Joginder Singh</span>
                                </div>
                                <div class="shopowner-dt-list">
                                    <span class="left-dt">Username</span>
                                    <span class="right-dt">joginder</span>
                                </div>
                                <div class="shopowner-dt-list">
                                    <span class="left-dt">Email</span>
                                    <span class="right-dt"><a href="https://gambolthemes.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="deadb4bfadefeceeec9eb9b3bfb7b2f0bdb1b3">[email&#160;protected]</a></span>
                                </div>
                                <div class="shopowner-dt-list">
                                    <span class="left-dt">Phone</span>
                                    <span class="right-dt">+918437176189</span>
                                </div>
                                <div class="shopowner-dt-list">
                                    <span class="left-dt">Address</span>
                                    <span class="right-dt">Ludhiana, Punjab</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection