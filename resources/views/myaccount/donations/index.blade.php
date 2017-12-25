@extends('layout.myaccount.master')
@section('myaccount')
<div class="nk-social-menu-inline">
    <ul>
        <li class="active"><a href="#">Opt 1</a></li>
        <li><a href="#">Opt 2</a></li>
        <li><a href="#">Opt 3</a></li>
        <li><a href="#">Opt 4</a></li>
        <li><a href="#">Opt 5</a></li>
    </ul>
</div>

<div class="nk-box-3 bg-dark-1">
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Donation</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Total</th>
                    <th>&nbsp;</th>
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
                    <td><a href="#" class="nk-btn link-effect-4">View</a></td>
                </tr>
                <tr class="order">
                    <td><a href="#">#00018</a></td>
                    <td>
                        <time datetime="2016-07-23">16 July 2017</time>
                    </td>
                    <td>Approved</td>
                    <td>$250.00</td>
                    <td><a href="#" class="nk-btn link-effect-4">View</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection