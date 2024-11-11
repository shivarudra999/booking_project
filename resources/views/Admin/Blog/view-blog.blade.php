@include('Admin.bin.header')
    <!-----------------------------------view-blog-------------------------->

    <div class="container p-4">
        <h1 style="color:black;" class="text-center">Blog</h1>
        @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
        @endif
        <a href="{{url('admin/post-blog')}}" class="btn btn-primary m-2">Add Blog</a>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($data as $data)
            <div class="col">
                <div class="card">
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <p>Blog Name:-{{$data->blog_name}} </p>
                        <p>Blog Description:- {{$data->blog_description}}</p>
                        <p>Blog Title:- {{$data->blog_title}}</p>
                        <p>Blog Title:-{{$data->blog_title}}</p>
                        <p>Public Date:-{{$data->publish_date}}</p>

                        <a href="{{url('admin/blog-edit') . '/' . $data->id}}" class="btn btn-info text-white">Edit</a>
                        <a href="{{url('blog-delete') . '/' . $data->id}}" class="btn btn-danger text-white">Delete</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>



    <!---------------------------------Footer----------------------------------------------->

@include('Admin.bin.footer')