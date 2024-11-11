@include('frontend.bin.header')

<div>
    <div class="message">
        <h3>Please Sumbit Your Email For Query</h3>
    </div>
    <form >
        @csrf
        <input type="text" class="form-control testemail" placeholder="Email address">
        <button class="btn btn-primary test" type="button">Select</button>
    </form>
</div>





@include('frontend.bin.footer')