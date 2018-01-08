@extends('layout.myaccount.master')
@section('myaccount')
<div class="nk-social-menu-inline">
    <ul>
        <li class="active">
            <a href="#">My Donations</a>
        </li>
        <li>
            <a href="#">Donate Now <i class="ion-ios-heart text-main-5"></i></a>
        </li>
    </ul>
</div>

<div class="nk-box-3 bg-dark-1">
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Donation #ID</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Total</th>
                </tr>
            </thead>
            
            <tbody>
                <tr class="order">
                    <td><a href="#">#00024</a></td>
                    <td>
                        <time datetime="2016-07-23">23 July 2017</time>
                    </td>
                    <td>Processing</td>
                    <td>$104.99</td>
                </tr>
                <tr class="order">
                    <td><a href="#">#00018</a></td>
                    <td>
                        <time datetime="2016-07-23">16 July 2017</time>
                    </td>
                    <td>Approved</td>
                    <td>$250.00</td>
                </tr>
            </tbody>
            
        </table>
    </div>
</div>
@endsection