(() => {
    'use strict'

    const forms = document.querySelectorAll('.needs-validation')

    Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }
  
        form.classList.add('was-validated')
      }, false)
    })
  })()

  $(document).ready(function(){
    $("#alertSI").hide();
    $("#alertNO").hide();
    $("#form1").submit(function(e){
        e.preventDefault();
        user = $.trim($("#user").val());
        clave = $.trim($("#clave").val());
        if(user.length>0 && clave.length>0){
            $("#alertSI").fadeTo(2000, 500).slideUp(500, function(){
                $("#alertSI").slideUp(500);
            });
        }else{
            $("#alertNO").fadeTo(2000, 500).slideUp(500, function(){
                $("#alertNO").slideUp(500);
            });
        }
    });

});