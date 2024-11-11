@include('Admin.bin.header')


    <!----------------------------------Post-membership-------------------------->

    <div class="container p-4">
        <h3 style="color:black;">Membership</h3>
        <div class="row p-4">

            <div class="col border border-4 dark ">
                <div class="container p-4">
                <form action="{{url('add-post-membership')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <p>User id</p>
                                <input type="id" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="user_id">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <label for="exampleInputPassword1" class="form-label">Paid Payment</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="paid_payment">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <p>Cancel Payment </p>
                                <input type="amount" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="cancel_payment">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <label for="exampleInputPassword1" class="form-label">Payment Option</label>
                                <input type="payment" class="form-control" id="exampleInputPassword1" name="payment_option">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <p>Refund Payment</p>
                                <input type="date" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="refund_payment">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                            <label for="exampleInputPassword1" class="form-label">Status</label>
                                <select class="form-select" name="status" aria-label="Default select example">
                                    <option value="">select</option>
                                    <option value="1">Active</option>
                                    <option value="2">Inactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <p>Order id</p>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="order_id">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <label for="exampleInputPassword1" class="form-label">Transation id</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="transation_id">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <label for="exampleInputPassword1" class="form-label">Fee</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="fee">
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