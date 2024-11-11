@include('Admin.bin.header')


    <!----------------------------------view-membership-------------------------->

    <div class="container p-4">
        <h1 style="color:black;" class="text-center">Membership</h1>
        @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
        @endif
        <a href="{{url('admin/post-membership')}}" class="btn btn-primary m-2">Add membership</a>
        <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach($data as $data)
            <div class="col">
                <div class="card">
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <p>User id:- {{$data->user_id}}</p>
                        <p>Paid payment:- {{$data->paid_payment}}</p>
                        <p>Cancel payment:- {{$data->cancel_payment}}</p>
                        <p>Payment Option	:- {{$data->payment_option	}}</p>
                        <p>Refund payment:- {{$data->refund_payment}}</p>
                        <p>Order id:- {{$data->order_id}}</p>
                        <p>Transation id:- {{$data->transation_id}}</p>
                        <p>Fee:- {{$data->fee}}</p>
                        <a href="{{url('admin/membership-edit') . '/' . $data->id}}" class="btn btn-info text-white">Edit</a>
                        <a href="{{url('membership-delete') . '/' . $data->id}}" class="btn btn-danger text-white">Delete</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>



    <!---------------------------------Footer----------------------------------------------->

    @include('Admin.bin.footer')