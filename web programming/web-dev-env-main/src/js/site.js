function hello(){
    alert("Welcome to my website");

}

function add(){
    document.write(5+6);

}

//document.getElementById(id)
//display or like echo
//document.write
//windows alert
//

function changeColor(){
    let color = document.getElementById('background').value;
    document.body.style.backgroundColor = color;
}

function changeFcolor(){
    let fcolor = document.getElementById('fcolor').value;
    document.body.style.color = fcolor;
}

// function ChangeColor(where,newColor){
//     if (where == 'background'){
//         document.body.style.background = newColor;
//     }
// }


// function changeBG() {
//     var selectedBGColor = document.getElementById("bgchoice").value;
//     document.body.style.backgroundColor = selectedBGColor;
//   }




//crud
function crud(){
    let fname=(document.form1.fname.value).trim();
    if (fname.length<5){
        alert("First Name must be at least 3 characters");
        return false;
    }
}


function fname(){
    let fname = (document.form1.fname.value).trim();
    if (name==null || name==""){  
        alert("Name can't be blank");  
        return false;  
      }

}



    
    // on mouse over example 
    function onm(){
        document.getElementById('mo').style.color = 'blue'; 
        document.getElementById('mo').style.fontStyle = 'italic';
        document.getElementById('mo').style.backgroundColor  = 'yellow';
        document.getElementById('mo').style.fontSize = '2em';
    }
    
    //on mouse out example 
    function ono(){
        document.getElementById('mo').style.color = 'red'; 
        document.getElementById('mo').style.fontStyle = 'normal';
        document.getElementById('mo').style.fontSize = '1.1em';
        document.getElementById('mo').style.backgroundColor  = 'white';
    }
    
    //JavaScript Form Validation
    
    function validateform(){  
    
        //validating name
        let name=document.myform.name.value;  
        // to check if name is empty of not  
        if (name==null || name==""){  
          alert("Name can't be blank");  
          return false;  
        }
        // to check if name has atleast 5 characters
        else if(name.length<5){  
            alert("Name can't less than 5 characters");  
            return false;  
          }
       
    
        //validating email 
        let email=document.myform.email.value;
        if (email==null || email==""){  
            alert("Email can't be blank");  
            return false;  
          }
    
        //validating password
        let password=document.myform.password.value;  
        let password1=document.myform.password1.value;
        if (password==null || password=="" || password.length<8){  
            alert("Password is required and it must have 8 characters");  
            return false;  
          }
        else if (password!== password1) {
          alert("Passwords do not match");  
            return false; 
        }
        }  
    
        //example of realtime input validation 
    function cname(){
        let name=document.myform.name.value;  
        // to check if name is empty of not  
        if (name==null || name==""){  
          alert("Name can't be blank");  
          return false;  
        }
        // to check if name has atleast 5 characters
        else if(name.length<5){  
            alert("Name can't less than 5 characters");  
            return false;  
          }
        // // to ensure name cannot be more than 5 characters
        else if(name.length>15){  
            alert("Name can't more than 15 characters");  
            return false;  
          }
        }