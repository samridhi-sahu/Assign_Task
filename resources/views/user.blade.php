<!DOCTYPE html>
<html lang="en">
<head>
    <title>USERS Form</title>
    <script defer src="script.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link rel="shortcut icon" type="image/png" href="icon.jpeg">
    <style>
        body{
   
   color: black;
   
   background-size:cover;
   background-repeat: no-repeat;
}
h1{
   text-align: center;
   text-shadow: 0 0 3px red;
}
.headerclone{
   text-align: center;

   text-shadow: 0 0 10px white;
   color: blue;
}
h3,a{
   text-align: center;
  
}
sup{
   color: red;
}
p{
   text-align: center;
}
.fa{
   color: white;
}
img {
   height: 235px;
   margin: -224px 10px -15px 1250px;
   opacity: 0.5;
   border: 2px solid bisque;
   border-radius: 5px;


}

fieldset{
   border: 1px solid white;
   background-color: RGB( 155, 39, 84 )  ;
   box-shadow: 0 0 10px black;
   border-top-right-radius: 20px;
   border-bottom-left-radius: 20px;
   height: 350px;
   width: 550px;
  
   margin-left: 350px;
}
legend{

   padding: 12px 25px;
   border: 2px solid white;
   border-top-right-radius: 20px;
   border-bottom-left-radius: 20px;
   font-size: 20px;
   color: white;
}


td{
   padding: 3px;
   color: white;
   
   
}
input[type='text'],
input[type='number'],
input[type='email']{
   font-size: 20px;
   border: none;
   outline: none;
   height: 40px;
   border-radius: 10px;
   margin-top: 15px;
   margin-left: -160px;
}

input[type='submit'],
input[type='reset']{
   font-size: 15px;
   border: none;
   outline: none;
   height: 25px;
   width: 60px;
   margin-top: 15px;
   margin-left: 230px;
}


textarea{
   border: none;
   outline: none;
   border-radius: 10px;
   width: 210px;
}
input[type='text']:focus,
input[type='email']:focus,
input[type='number']:focus,
textarea:focus{
   background-color: #dcb692;
   box-shadow: 0 0 5px darkred;
}


    </style>

    <script>
        const Full_Name=document.getElementById('Full_Name')
const Email_Adress=document.getElementById('Email_Adress')
const Mobile_number=document.getElementById('Mobile_number')
const form=document.getElementById('form')
const errorElement=document.getElementById('error')
form.addEventListener('submit', (e)=>{
    let messages=[]
    if (Full_Name.value==='' || Full_Name.value==null ){
        messages.push('!! Name is required')
    }
    if (Mobile_number.value.length<9 || Mobile_number.value.length>10){
        messages.push('!! enter correct mobile number')
    }
    if(messages.length>0){
        e.preventDefault()
        errorElement.innerText=messages.join(', ')
    }
    
})
    </script>
    
</head>
<body>

    
   <h1>
                  Hackerkernel
   <br> (Software & App Development Company)
   <br> Users Form 

   </h1> 
   <br>
   <br>
  
    <div id="error"></div>
    <form id="form" action="/adduser" method="POST">
    @csrf 
        
        <fieldset>
            
                <i class="fa fa-user-circle"></i>
                &ensp; Personal Information</legend>

               
                

            <table>
                <tr>
                    <td>Full Name : </td>
                    <td>
                        <input id="Full_Name" name="name" type="text" required>
                        
                    </td>
                </tr>
                <tr>
                    <td>Email Adress :</td>
                    <td>
                        <input id="Email_Adress" name="email" type="email" required>
                    </td>
                </tr>
                <tr>
                    <td>Mobile number : </td>
                    <td>
                        <input id="Mobile_number" name="mobile" type="text" name="idNumber" pattern="[0-9]{10}" required>

                    </td>
                </tr>
                
                <tr>
                   
                    <td>
                        <input type="submit" value="Submit">
                    </td>
                   
                </tr>
                
                <tr>
                    <td>
                        <input type="reset" value="Reset">
                    </td>
                </tr>

               
                
            </table>
        </fieldset>
      
    </form>
    <a href="http://localhost:8000/admin" target="_blank">
    <button>Go To Admin</button>
    </a>

    <a href="http://localhost:8000/view" target="_blank">
    <button onclick="downloadExcel('userstable')">Download Excel</button>
    </a>
    
   
</body>
</html>
