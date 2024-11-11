@include('frontend.bin.header')

    <!--------------------------------About card----------------------->

    <div class="container p-4">
        <div class="card row shadow-lg p-3 mb-5 bg-white rounded">
            <div class="card-body col border border-4 dark ">
                <div class="col-12 text-center">
                    <div class="card col-6">
                        <img src="{{asset('assets/events_photo'.'/'. $data->events_photo)}}" alt="slow">
                    </div>
                </div>
                <p class="card-text">
                <h6>Events Name:- {{$data->events_name}}</h6>
                <h3>Event Description:- {{$data->events_description}}</h3>
                <h3>Ticket Amount:- {{$data->amount}}</h3>
                </p><br>
                <a href="{{url('book-ticket-now') . '/' . $data->id}}" class="btn btn-success btn-lg">Book Now <i
                        class="fa-solid fa-music"></i></a>


            </div>
        </div>
    </div>
    <!---------------------------------Footer----------------------------------------------->

    @include('frontend.bin.footer')