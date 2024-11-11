@include('frontend.bin.header')
    <!---------------------------------Gallery------------------------------>
    
    <div class="container p-4">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card">
                    <img src="{{asset('assets\img\abcd.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Its a musicial event 
                            musicial evening </p>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="{{asset('assets\img\bcde.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                             longer.</p>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="{{asset('assets\img\cdef.avif')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">This is a longer a natural lead-in to
                            additional content.</p>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="{{asset('assets\img\abcd.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Its a .PLease come and enjoy the
                            musicial evening </p>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="{{asset('assets\img\bcde.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">This is a longer natural lead-in to
                            additional content. This content is a little bit longer.</p>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="{{asset('assets\img\cdef.avif')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">This is a longer ural lead-in to
                            additional content.</p>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <!---------------------------------Footer----------------------------------------------->

    @include('frontend.bin.footer')