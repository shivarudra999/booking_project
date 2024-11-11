@include('Admin.bin.header')


    <!----------------------------------Post-offer-------------------------->

    <div class="container p-4">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <h3 style="color:black;">Offer</h3>
        <div class="row p-4">
            <div class="col border border-4 dark ">
                <div class="container p-4">
                    <form action="{{url('add-post-offer')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <p>Coupon Code</p>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="coupon_code">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <label for="exampleInputPassword1" class="form-label">Ammount</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="amount">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <p>Coupon vaild Date</p>
                                <input type="date" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="coupon_valid_date">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <p>Coupon Expire</p>
                                <input type="date" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="coupon_expire">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <p>Status</p>
                                <select name="status" id="" class="form-control">
                                    <option value="">Select status</option>
                                    <option value="1">Active</option>
                                    <option value="2">Inactive</option>
                                </select>
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