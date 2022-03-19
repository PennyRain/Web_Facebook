function popup(popup_name){
          get_popup=document.getElementById(popup_name)
         if(get_popup.style.display=="flex") {
              get_popup.style.display="none";
         }else{
              get_popup.style.display="flex";
         }
    }



(function () {
    'use strict'
  
   
    var forms = document.querySelectorAll('.needs-validation')
  

    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }
  
          form.classList.add('was-validated')
        }, false)
      })
  })()