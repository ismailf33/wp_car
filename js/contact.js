$('#reg-form').submit(function(e){

  
    e.preventDefault(); // Prevent Default Submission
  
    $.ajax({
 url: 'contact.php',
 type: 'POST',
 data: $(this).serialize(), // it will serialize the form data
        dataType: 'html'
    })
    .done(function(data){
     $('#success-message').fadeOut('slow', function(){
          $('#success-message').fadeIn('slow').html(data);
        });
    })
    .fail(function(){
 alert('Ajax Submit Failed ...'); 
    });
});