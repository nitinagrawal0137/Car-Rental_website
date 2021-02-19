<html>
<head>
<title>Signin for Page</title>
<script>
function validation()
{
	var result=true;
	var i=document.getElementsByTagName("input");
	if(i[0].value.length==0)
	{
		alert("Please Enter the Name");
		result=false;
	}
	if((i[1].value.length!=0)&& (i[1].value.search("@")) && (i[1].value.search(".com")))
	{
		
		result=true;
	}
	else{
		alert("Please Enter the Valid Email ID");
		result=false;
	}
	if(i[2].value.length==0)
         {
		alert("Invalid Password");
        result=false;	
    }		
	return(result);
}</script>
<style>
body {
    background-image: url(https://images.unsplash.com/photo-1532598618269-1f8b82e0e0e5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60);
      
      color: black;
      padding: 20px;
      text-emphasis: none;
      color:aliceblue;
      min-height:1000px;
	 background-position: center;
    	background-size:cover;
	  position:relative;
     
    }
    input[type=text],input[type=password]{
	width:250px;
	padding:10px;
	margin:5px 0 20px 0;
	background:#f1f1f1;
	background-color:transparent;
	color:white;
}
.sub{
	background-color:#4CAF50;
	color:white;
	cursor:pointer;
	border:none;
	
	padding: 10px;
	opacity:0.9;
    
}
body,html{
     height:100;
}
*{
	box-sizing: border-box;
}
h1{
	position:center;
	color:white;
	padding:20px;
	right:500;
}


    </style>
</head>
<body>
    <h1><b>Signin To Join</b> </h1>
    
    <form action="http://localhost/project2/registration1.php" method ="post" class="container" onsubmit="return validation()" >
        <p><font color="white">Name</font> </p>  <input type="text" name="username" placeholder="Name"/><br>
        <p><font color="white">Email</font> </p>  <input type="text" name="t1" placeholder="Email"/><br>
        <p><font color="white">Set Password</font> </p><input type="password" name="t2" placeholder="password"/><br>

        <br>
        <input type="submit" class="sub"/>
        </form>
</body>
</html>
