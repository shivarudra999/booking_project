$(document).ready(function () {
    // alert('welcome to our website');
    // console.log('hello');

    // $(document).on('click', '.newsletterbutton', function () {
    //     alert('welcome to our website');
    // });

    // $(document).on('keyup','.newsletteremail',function(){
    //     $('.newsletterbutton').hide();
    // });

    $(document).on('click', '.newsletterbutton', function () {
        var email = $('.newsletteremail').val();
        var csrf = $("[name=_token]").val();
        var option = "";
        var base_url = window.location.origin;
        var url = base_url + '/add-newsletter';
        jQuery.ajax({
            type:'post',
            url:url,
            data:{
                "email":email,
                "_token":csrf,
            },
            success:function(result){
                $('.message').html();
            }
        });
    });
    $(document).on('click', '.test', function () {
        var email = $('.testemail').val();
        var csrf = $("[name=_token]").val();
        var option = "";
        var base_url = window.location.origin;
        var url = base_url + '/add-testform';
        jQuery.ajax({
            type:'post',
            url:url,
            data:{

                "email":email,
                "_token":csrf,
            },
            success:function(result){
                $('.message').html(result.returnback);
                $('.testemail').val('');
                setTimeout(function () {
                    $('.message').hide();
                }, 5000);
            }
        });
    });




});