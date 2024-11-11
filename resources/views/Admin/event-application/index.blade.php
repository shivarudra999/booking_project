@include('Admin.bin.header')


    <!----------------------------------Post-event-------------------------->

    <div class="container p-4">
        <h1 style="color:black;" class="text-center">Event Application</h1>
        @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
        @endif
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($data as $data)
            <div class="col">
                <div class="card">
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <p>User Name:- {{$data->name}} </p>
                       <p>User Email:- {{$data->email}} </p>
                        <p>Event Name:- {{$data->events_name}} </p>
                        <p>Event Amount:- {{$data->amount}} </p>
                        <p>Event Date:- {{$data->events_date}}</p>
                        <p>Event price:- {{$data->end_booking_date}}</p>
                        <p>Event Start Booking date:-{{$data->start_booking_date}}</p>
                        <p>Event End Booking date:-{{$data->end_booking_date}}</p>
                        <p>Event Start date:-{{$data->start_booking_date}}</p>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>



    <!---------------------------------Footer----------------------------------------------->

    @include('Admin.bin.footer')