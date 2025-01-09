$(document).ready(function(){
  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$('#register').on("click",function(e){
          e.preventDefault();
          $('.error').text('');
            $('#register-success').text('');

          let formname = document.getElementById('registerform');
          let FormDataPass = new FormData(formname);
          console.log(FormDataPass);
                $.ajax({
                  url: '/register',
                  type: 'POST',
                  data:FormDataPass,
                  processData: false,
                  contentType: false,
                  success: function (response) {

                    if (response.success) {
                      $('#registerform')[0].reset(); 
                      Swal.fire({
                        title: 'Registerd Successful!',
                        text: response.message,
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 4000 // Message will show for 4 seconds
                    }).then(() => {
                        // Redirect to index page after 4 seconds
                        window.location.href ='login';// Change this to your desired page URL
                    });
                  }   
                  },
                  error: function (xhr) {
                            if (xhr.status === 422) { // Validation error
                                const errors = xhr.responseJSON.errors;
                                if (errors.name) {
                                    $('#name-error').text(errors.name[0]);
                                }
                                if (errors.email) {
                                    $('#email-error').text(errors.email[0]);
                                }
                                if (errors.password) {
                                    $('#password-error').text(errors.password[0]);
                                }
                                if (errors.password_confirmation) {
                                    $('#password-confirmation-error').text(errors.password_confirmation[0]);
                                }
                            } else {
                                alert('Something went wrong. Please try again.');
                            }
                        }
                });
});
    $('#login').on("click",function(e){
      e.preventDefault();
      let formname = document.getElementById('loginform');
      let FormDataPass = new FormData(formname);
      console.log(FormDataPass);
      $.ajax({
        url: '/login',
        type: 'POST',
        data:FormDataPass,
        processData: false,
        contentType: false,
        success: function (response) {
            if (response.success) {
              Swal.fire({
                title: 'Login Successful!',
                text: response.message,
                icon: 'success',
                showConfirmButton: false,
                timer: 4000 // Message will show for 4 seconds
            }).then(() => {
                // Redirect to index page after 4 seconds
                window.location.href ='admin/index';// Change this to your desired page URL
            });
               // Redirect to the dashboard
            }
        },
        error:function(xhr)
        {
             if (xhr.status === 422) { // Validation error
                                const errors = xhr.responseJSON.errors;
                                if (errors.email) {
                                    $('#email-error').text(errors.email[0]);
                                }
                                if (errors.password) {
                                    $('#password-error').text(errors.password[0]);
                                }
                            } else {
                                alert('Something went wrong. Please try again.');
                            }
        }
      });
    });
  });