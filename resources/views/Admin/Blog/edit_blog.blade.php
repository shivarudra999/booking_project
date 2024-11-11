@include('Admin.bin.header')


    <!----------------------------------Edit-Post-Blog-------------------------->

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
                    <form action="{{url('add-blog-update')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <p>Blog Name</p>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="blog_name" value="{{$data->blog_name}}">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <label for="exampleInputPassword1" class="form-label">Blog Description</label>
                                <textarea type="text" class="form-control" id="exampleInputPassword1"
                                    name="blog_description">{{$data->blog_description}}</textarea>
                            </div>
                        </div>
                        <input type="text" name="id" value="{{$data->id}}" hidden>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <p>Blog Tittle </p>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="blog_title" value="{{$data->blog_title}}">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <label for="exampleInputPassword1" class="form-label">Publish Date</label>
                                <input type="date" class="form-control" id="exampleInputPassword1" name="publish_date"
                                    value="{{$data->publish_date}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <p>Keyword</p>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="keyword" value="{{$data->keyword}}">
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