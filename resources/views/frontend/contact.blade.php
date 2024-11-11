@include('frontend.bin.header')

    <!----------------------------------contact us-------------------------->

    <div class="container text-center p-4">
        <h1 style="color:black;">Events Information</h1>
        <div class="row bg-info p-4">
            <div class="col border border-4 dark">
                <p>
                <h6>It is a music related organization. Colorful musical programs and
                    cultural programs are organized here. This institution has participated in many government programs
                    and has presented the folk genres of Bihar at the Indian level.
                    All types of programs are organized by our organization.</h6>
                <h3>If you also want to organize any type of program then please contact us.</h3>

                <h5><br>City:-muzaffarpur <br>Email:- <br>Contact:- <br>
                    If any querry or suggestion and bookinf programs, you can leave a message here</h5>
                </p>
            </div>
            <div class="col border border-4 dark ">
                <div class="container p-4">
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Email</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Mobile Number</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" name="mobile_number">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Message</label>
                            <textarea type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" name="message"> </textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <!---------------------------------Footer----------------------------------------------->

    @include('frontend.bin.footer')