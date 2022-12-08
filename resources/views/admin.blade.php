<!DOCTYPE html>
<html lang="en">
<head>
    <title>TASK Form</title>
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
   background-color: RGB( 155, 39, 84 ) ;
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
   padding: 5px;
   color: white;
   
   
}
input[type='text']{
   font-size: 20px;
   border: none;
   outline: none;
   height: 30px;
   border-radius: 10px;
   margin-top: 15px;
   margin-left: -160px;
}
select{
   font-size: 12px;
   border: none;
   outline: none;
   height: 30px;
   border-radius: 10px;
   margin-top: 15px;
   margin-left: -160px;
   width: 245px;
}

input[type='submit'],
input[type='reset'],
input[type='export']{
   font-size: 15px;
   border: none;
   outline: none;
   height: 25px;
   width: 64px;
   margin-top: 15px;
   margin-left: 200px;
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
const user_name=document.getElementById('user_name')
const Task=document.getElementById('Task')
const Task_Type=document.getElementById('Task_Type')
const form=document.getElementById('form')
const errorElement=document.getElementById('error')
form.addEventListener('submit', (e)=>{
    let messages=[]
    if (Task.value==='' || Task.value==null ){
        messages.push('!! Task is required')
    }
    if (user_name.value==='' || user_name.value==null ){
        messages.push('!! Name is required')
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
   <br> Task Form 

   </h1> 
   <br>
   <br>
  
   <div id="error"></div>
   <form id="form" action="/addtask" method="post" >
@csrf

        
        <fieldset>
            
                <i class="fa fa-user-circle"></i>
                &ensp;Information Data</legend>
            <table>
                <tr>
                    <td>User Name : </td>
                    <td>
                        <select id="user_name" name = "name" required>
                            <option value="user_name" selected disabled> Select User Name From Data </option>
                            @foreach($users as $u)
<option value="{{$u->name}}">{{$u->name}}</option>
@endforeach
                        </select>
                        
                    </td>
                </tr>
                <tr>
                    <td>Task Name :</td>
                    <td>
                        <input id="Task" name="task" type="text" required>
                    </td>
                </tr>
                <tr>
                    <td>Task Type : </td>
                    <td>
                        <select id=" Task_Type" name="type" required>
                            <option value="Task_Type"> Select Task Type For User </option>
                            <option value="Pending"> Pending </option>
                            <option value="Done"> Done </option>
                        </select>
                        
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <input type="submit" value="Confirm">
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
    <a href="http://localhost:8000/user" target="_blank">
    <button>Go To User</button>
    </a>

    <a href="http://localhost:8000/show" target="_blank">
    <button onclick="downloadExcel('taskstable')">Download Excel</button>
    </a>
    
    
    

</body>
</html>


