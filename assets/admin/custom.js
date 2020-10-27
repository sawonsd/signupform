$(document).ready(function (){

    $('#showsignup').click(function () {
        $('#loginbox').hide(5000);
        $('#signupbox').show(5000);
    });

    $('#signin').click(function () {
        $('#loginbox').show(5000);
        $('#signupbox').hide(5000);
    });

    $('#forgetpass').click(function () {
        $('#loginbox').hide(5000);
        $('#forgetpassform').show(5000);
    });

    $('#back').click(function () {
        $('#forgetpassform').hide(5000);
        $('#loginbox').show(5000);

    });


    $('#registeruser').click(function (e) {

        if ($('#register-form')[0].checkValidity()){

            e.preventDefault();
            $('#registeruser').val('Loading...').attr('disabled',true);

            if($('#name').val()===''){
                $('#name').addClass('is-invalid');
            }else {
                $('#name').removeClass('is-invalid');
            }
            if($('#email').val()===''){
                $('#email').addClass('is-invalid');
            }else {
                $('#email').removeClass('is-invalid');
            }
            if($('#pass').val()===''){
                $('#pass').addClass('is-invalid');
            }else {
                $('#pass').removeClass('is-invalid');
            }


        }

        if($('#name').val()!=='' && $('#email').val()!=='' ){
            $.ajax({

                url: 'action.php',
                method: 'post',
                data : $('#register-form').serialize(),
                success: function (response){
                    console.log(response);
                }

            })

        }

        $('registeruser').val('Sign Up').attr('disabled',false)

    });

});

