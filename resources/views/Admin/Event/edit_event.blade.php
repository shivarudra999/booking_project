
@include('Admin.bin.header')

    <!----------------------------------Post-event-------------------------->

    <div class="container p-4">
        <h3 style="color:black;">Edit Event Post</h3>
        <div class="row p-4">

            <div class="col border border-4 dark ">
                <div class="container p-4">
                    <form action="{{url('update-events-post')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <p>Event Name</p>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="events_name" value="{{$data->events_name}}">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <label for="exampleInputPassword1" class="form-label">Event Description</label>
                                <textarea type="text" class="form-control" id="exampleInputPassword1"
                                    name="events_description">{{$data->events_description}}</textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <p>Event tittle </p>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="events_title" value="{{$data->events_title}}">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <label for="exampleInputPassword1" class="form-label">Event date</label>
                                <input type="date" class="form-control" id="exampleInputPassword1" name="events_date"
                                    value="{{$data->events_date}}">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <label for="exampleInputPassword1" class="form-label">Event time</label>
                                <input type="time" class="form-control" id="exampleInputPassword1" name="events_time"
                                    value="{{$data->events_time}}">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <label for="exampleInputPassword1" class="form-label">Amount</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="amount"
                                    value="{{$data->amount}}">
                            </div>
                        </div>
                        <input type="text" name="id" value="{{$data->id}}" hidden>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <p>Booking Started</p>
                                <input type="date" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="start_booking_date"
                                    value="{{$data->start_booking_date}}">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <label for="exampleInputPassword1" class="form-label">Booking End</label>
                                <input type="date" class="form-control" id="exampleInputPassword1"
                                    name="end_booking_date" value="{{$data->end_booking_date}}">
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
                                <select name="status" class="form-control" id="selEducation">
                                    @php
                                    $status = $data->status;
                                    @endphp
                                    <option value="1" {{$status == '1' ? 'selected' : ''}}>Active</option>
                                    <option value="2" {{$status == '2' ? 'selected' : ''}}>Inactive</option>
                                </select>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <!---------------------------------Footer----------------------------------------------->

    @include('Admin.bin.footer')