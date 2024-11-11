@include('Admin.bin.header')


    <!----------------------------------Post-membership-------------------------->

    <div class="container p-4">
        <h3 style="color:black;">Membership</h3>
        <div class="row p-4">

            <div class="col border border-4 dark ">
                <div class="container p-4">
                    <form action="{{url('add-membership-update')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <p>User id</p>
                                <input type="id" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="user_id" value="{{$data->user_id}}">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <label for="exampleInputPassword1" class="form-label">Paid Payment</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="paid_payment"
                                    value="{{$data->paid_payment}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <p>Cancel Payment </p>
                                <input type="amount" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="cancel_payment"
                                    value="{{$data->cancel_payment}}">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <label for="exampleInputPassword1" class="form-label">Payment Option</label>
                                <input type="payment" class="form-control" id="exampleInputPassword1"
                                    name="payment_option" value="{{$data->payment_option}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <p>Refund Payment</p>
                                <input type="date" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="refund_payment"
                                    value="{{$data->refund_payment}}">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <label for="exampleInputPassword1" class="form-label">Status</label>
                                <select name="status" class="form-control" id="selEducation">
                                    @php
                                    $status = $data->status;
                                    @endphp
                                    <option value="1" {{$status == '1' ? 'selected' : ''}}>Active</option>
                                    <option value="2" {{$status == '2' ? 'selected' : ''}}>Inactive</option>
                                </select>
                            </div>
                        </div>
                        <input type="text" name="id" value="{{$data->id}}" hidden>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <p>Order id</p>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="order_id" value="{{$data->order_id}}">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <label for="exampleInputPassword1" class="form-label">Transation id</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="transation_id"
                                    value="{{$data->transation_id}}">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <label for="exampleInputPassword1" class="form-label">Fee</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="fee"
                                    value="{{$data->fee}}">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <!---------------------------------Footer----------------------------------------------->

    @include('Admin.bin.footer')