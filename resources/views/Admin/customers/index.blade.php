@extends('layouts.admin')

@section('main-content')
<main>
    <div class="container-fluid">
        <h2 class="mt-30 page-title">Customers</h2>
        <ol class="breadcrumb mb-30">
            <li class="breadcrumb-item"><a href="{{ route('dashboard) }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Customers</li>
        </ol>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card card-static-2 mb-30">
                    <div class="card-title-2">
                        <h4>All Customers</h4>
                    </div>
                    <div class="card-body-table">
                        <div class="table-responsive">
                            <table class="table ucp-table table-hover">
                                <thead>
                                    <tr>
                                        <th style="width:60px"><input type="checkbox" class="check-all">
                                        </th>
                                        <th style="width:60px">ID</th>
                                        <th style="width:100px">Image</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="checkbox" class="check-item" name="ids[]" value="10"></td>
                                        <td>1</td>
                                        <td>
                                            <div class="cate-img-6">
                                                <img src="images/avatar/img-1.jpg" alt="">
                                            </div>
                                        </td>
                                        <td>Joginder Singh</td>
                                        <td><a href="https://gambolthemes.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="93f9fcfbfdf7fcf6d3f6ebf2fee3fff6bdf0fcfe">[email&#160;protected]</a>
                                        </td>
                                        <td>+911234567890</td>
                                        <td class="action-btns">
                                            <a href="customer_view.html" class="view-shop-btn" title="View"><i class="fas fa-eye"></i></a>
                                            <a href="customer_edit.html" class="edit-btn" title="Edit"><i class="fas fa-edit"></i></a>
                                            <a href="#" class="delete-btn" title="Edit"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" class="check-item" name="ids[]" value="5"></td>
                                        <td>2</td>
                                        <td>
                                            <div class="cate-img-6">
                                                <img src="images/avatar/img-2.jpg" alt="">
                                            </div>
                                        </td>
                                        <td>Jassica William</td>
                                        <td><a href="https://gambolthemes.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d9b3b8aaaab0bab899bca1b8b4a9b5bcf7bab6b4">[email&#160;protected]</a>
                                        </td>
                                        <td>+911234567890</td>
                                        <td class="action-btns">
                                            <a href="customer_view.html" class="view-shop-btn" title="View"><i class="fas fa-eye"></i></a>
                                            <a href="customer_edit.html" class="edit-btn" title="Edit"><i class="fas fa-edit"></i></a>
                                            <a href="#" class="delete-btn" title="Edit"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" class="check-item" name="ids[]" value="4"></td>
                                        <td>3</td>
                                        <td>
                                            <div class="cate-img-6">
                                                <img src="images/avatar/img-3.jpg" alt="">
                                            </div>
                                        </td>
                                        <td>John Smith</td>
                                        <td><a href="https://gambolthemes.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5a303532341a3f223b372a363f74393537">[email&#160;protected]</a>
                                        </td>
                                        <td>+911234567890</td>
                                        <td class="action-btns">
                                            <a href="customer_view.html" class="view-shop-btn" title="View"><i class="fas fa-eye"></i></a>
                                            <a href="customer_edit.html" class="edit-btn" title="Edit"><i class="fas fa-edit"></i></a>
                                            <a href="#" class="delete-btn" title="Edit"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" class="check-item" name="ids[]" value="3"></td>
                                        <td>4</td>
                                        <td>
                                            <div class="cate-img-6">
                                                <img src="images/avatar/img-4.jpg" alt="">
                                            </div>
                                        </td>
                                        <td>Zoena Singh</td>
                                        <td><a href="https://gambolthemes.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="562c39333837253f38313e16332e373b263a337835393b">[email&#160;protected]</a>
                                        </td>
                                        <td>+911234567890</td>
                                        <td class="action-btns">
                                            <a href="customer_view.html" class="view-shop-btn" title="View"><i class="fas fa-eye"></i></a>
                                            <a href="customer_edit.html" class="edit-btn" title="Edit"><i class="fas fa-edit"></i></a>
                                            <a href="#" class="delete-btn" title="Edit"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" class="check-item" name="ids[]" value="2"></td>
                                        <td>5</td>
                                        <td>
                                            <div class="cate-img-6">
                                                <img src="images/avatar/img-5.jpg" alt="">
                                            </div>
                                        </td>
                                        <td>Amritpal Singh</td>
                                        <td><a href="https://gambolthemes.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ed8c809f84999d8c81ad88958c809d8188c38e8280">[email&#160;protected]</a>
                                        </td>
                                        <td>+911234567890</td>
                                        <td class="action-btns">
                                            <a href="customer_view.html" class="view-shop-btn" title="View"><i class="fas fa-eye"></i></a>
                                            <a href="customer_edit.html" class="edit-btn" title="Edit"><i class="fas fa-edit"></i></a>
                                            <a href="#" class="delete-btn" title="Edit"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" class="check-item" name="ids[]" value="1"></td>
                                        <td>6</td>
                                        <td>
                                            <div class="cate-img-6">
                                                <img src="images/avatar/img-6.jpg" alt="">
                                            </div>
                                        </td>
                                        <td>Davinder Singh</td>
                                        <td><a href="https://gambolthemes.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6e0a0f1807000a0b1c2e0b160f031e020b400d0103">[email&#160;protected]</a>
                                        </td>
                                        <td>+911234567890</td>
                                        <td class="action-btns">
                                            <a href="customer_view.html" class="view-shop-btn" title="View"><i class="fas fa-eye"></i></a>
                                            <a href="customer_edit.html" class="edit-btn" title="Edit"><i class="fas fa-edit"></i></a>
                                            <a href="#" class="delete-btn" title="Edit"><i class="fas fa-trash-alt"></i></a>
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
</main>
@endsection