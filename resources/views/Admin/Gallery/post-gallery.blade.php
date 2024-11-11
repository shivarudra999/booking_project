@include('Admin.bin.header')


    <!----------------------------------Post-gallery-------------------------->

    <div class="container p-4">
        <h3 style="color:black;">Gallery</h3>
            <div class="col border border-4 dark ">
                <div class="container p-4">
                    <form action="{{url('add-post-gallery')}}" method="post">
                    @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <p>Photo</p>
                                <input type="file" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="photo">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <label for="exampleInputPassword1" class="form-label">Photo Description</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="photo_description">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <p>Photo tittle </p>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="photo_title">
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