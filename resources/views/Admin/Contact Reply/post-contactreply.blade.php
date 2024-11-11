@include('Admin.bin.header')


    <!----------------------------------Post-contact Reply-------------------------->

    <div class="container p-4">
        <h3 style="color:black;">Contact Reply</h3>
        <div class="row p-4">

            <div class="col border border-4 dark ">
                <div class="container p-4">
                    <form>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <p>User id</p>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <label for="exampleInputPassword1" class="form-label">Admin id</label>
                                <input type="text" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <label for="exampleInputPassword1" class="form-label">Message</label>
                                <input type="text" class="form-control" id="exampleInputPassword1">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <p>Status</p>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
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