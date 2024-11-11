@include('Admin.bin.header')


    <!----------------------------------Post-Blog-------------------------->

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
        <h3 style="color:black;">Blog</h3>
        <div class="row p-4">

            <div class="col border border-4 dark ">
                <div class="container p-4">
                    <form action="{{url('add-post-blog')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <p>Blog Name</p>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="blog_name">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <label for="exampleInputPassword1" class="form-label">Blog Description</label>
                                <input type="text" class="form-control" id="exampleInputPassword1"
                                    name="blog_description">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <p>Blog Tittle </p>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="blog_title">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <label for="exampleInputPassword1" class="form-label">Publish Date</label>
                                <input type="date" class="form-control" id="exampleInputPassword1" name="publish_date">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <p>Keyword</p>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="keyword">
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