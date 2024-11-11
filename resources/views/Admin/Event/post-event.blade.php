@include('Admin.bin.header')

    <!----------------------------------Post-event-------------------------->

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
        <h3 style="color:black;">Event Post</h3>
        <div class="row p-4">
            <div class="col border border-4 dark ">
                <div class="container p-4">
                    <form action="{{url('add-post-event')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <p>Event Name</p>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="events_name">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <label for="exampleInputPassword1" class="form-label">Event Description</label>
                                <textarea type="text" class="form-control" id="exampleInputPassword1"
                                    name="events_description"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <p>Event tittle </p>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="events_title">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <label for="exampleInputPassword1" class="form-label">Event date</label>
                                <input type="date" class="form-control" id="exampleInputPassword1" name="events_date">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <label for="exampleInputPassword1" class="form-label">Event time</label>
                                <input type="time" class="form-control" id="exampleInputPassword1" name="events_time">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <label for="exampleInputPassword1" class="form-label">Amount</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="amount">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <p>Booking Started</p>
                                <input type="date" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="start_booking_date">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <label for="exampleInputPassword1" class="form-label">Booking End</label>
                                <input type="date" class="form-control" id="exampleInputPassword1"
                                    name="end_booking_date">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <p>Event photo</p>
                                <input type="file" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="events_photo">
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

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <!---------------------------------Footer----------------------------------------------->
@include('Admin.bin.footer')