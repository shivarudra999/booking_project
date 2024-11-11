@include('Admin.bin.header')

    <!----------------------------------contact us-------------------------->

    <div class="container text-center p-4">
        <h1 style="color:black;">Admin Login</h1>
        <div class="row bg-info p-4">
            <div class="col border border-4 dark">
           <img src="{{asset('assets/img/login.png')}}" alt="" style="height:403px;">
            </div>
            <div class="col border border-4 dark ">
                <div class="container mt-5">
                    <form action="{{url('adminlogin')}}" method="post">
                    @csrf
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Email</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputEmail1" name="password"
                                aria-describedby="emailHelp">
                        </div>
                        <button type="submit" class="btn btn-primary">Login <i class="fa-solid fa-music"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <!---------------------------------Footer----------------------------------------------->

    @include('Admin.bin.footer')