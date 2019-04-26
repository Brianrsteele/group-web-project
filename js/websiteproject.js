

// Wait until the page is loaded, before doing any DOM stuff

window.addEventListener("load", function() {    

  
    
   
   

    
    var mainForm = document.getElementById("mainForm");
    mainForm.addEventListener("submit", function(e) {
        
        
    var firstname = mainForm.elements['firstname'];
    var firstnameError = document.getElementById('firstname-error');
    var lastname = mainForm.elements['lastname'];
    var lastnameError = document.getElementById('lastname-error');
    
    var description = mainForm.elements['description'];
    var descriptionError = document.getElementById('description-error');
        
    var pr = mainForm.elements['pr'];
    var prError = document.getElementById('pr-error');
    
    
    
    
    if(firstname.value.length < 1){
     firstnameError.textContent = 'Please Enter your First Name';
    firstnameError.style.color = 'red';
    firstname.style.borderColor = 'red';
    firstname.focus();
        
        e.preventDefault();
        
        }
        
         
        
        
         if(lastname.value.length < 1){
     lastnameError.textContent = 'Please Enter your Last Name';
    lastnameError.style.color = 'red';
    lastname.style.borderColor = 'red';
    lastname.focus();
        e.preventDefault();
        }
        
        
        
        
        
           if(description.value.length < 1){
     descriptionError.textContent = 'Please Enter a description';
    descriptionError.style.color = 'red';
   description.style.borderColor = 'red';
    description.focus();
        e.preventDefault();
        }
        
        
        
            if(pr.value.length < 1){
     prError.textContent = 'Please Enter name or description of person';
    prError.style.color = 'red';
   pr.style.borderColor = 'red';
   pr.focus();
        e.preventDefault();
                
        }
        
        
        
     
    });
});