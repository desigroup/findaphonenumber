<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap');

        body{
            background-repeat: no-repeat;
            background-size: 100%;
            color: black;
            font-family: Montserrat;
            font-weight:bold;
        }
        .user-input-wrp {
	position: relative;
	width: 50%;
}
.user-input-wrp .inputText{
	width: 100%;
  height: 25px;
	outline: none;
	border:none;
	border-bottom: 1px solid #777;
 	box-shadow: none !important;
    background-color: white;
    color: black;
}
.user-input-wrp .inputText:focus{
	border-color: blue;
	border-width: medium medium 2px;
    
}
.user-input-wrp .floating-label {
	position: absolute;
	pointer-events: none;
	top: 18px;
	left: 10px;
	transition: 0.2s ease all;
    
}
.user-input-wrp input:focus ~ .floating-label,
.user-input-wrp input:not(:focus):valid ~ .floating-label{
	top: 0px;
	left: 10px;
	font-size: 13px;
	opacity: 1;
}

select{
    background-color:white;
}
button{
    background-color:white;
}
input{
  font-weight:bold;
}
    </style>
</head>

<body>
<center>
      <h3>PCU</h3>
    </center>
<center>
      <form action="nurse/pcucode.php" method="POST">
            <!--Here is my first input, this is name-->
            <div class="user-input-wrp">
  <br/>
  <input type="text" class="inputText" name="docname" required/>
  <span class="floating-label">Name</span>
</div>
        <br>
        <br>
        <!--Here is my second input, this is email-->
        
        
        <div class="user-input-wrp">
  <br/>
  <input type="name" class="inputText" name="numbers" required/>
  <span class="floating-label">Phone Number</span>
</div>
<br>
<br>


    <select name="room1">
          <option value="2301">2301</option>
          <option value="2302">2032</option>
          <option value="2303">2303</option>
          <option value="2304">2304</option>
          <option value="2305">2305</option>
          <option value="2306">2306</option>
          <option value="2307">2307</option>
          <option value="2308">2038</option>
          
          </select>
          <select name="room2">
          <option value="na">----</option>
          <option value="2301">2301</option>
          <option value="2302">2032</option>
          <option value="2303">2303</option>
          <option value="2304">2304</option>
          <option value="2305">2305</option>
          <option value="2306">2306</option>
          <option value="2307">2307</option>
          <option value="2308">2038</option>
          
          </select>
          <select name="room3">
          <option value="na">----</option>
          <option value="2301">2301</option>
          <option value="2302">2032</option>
          <option value="2303">2303</option>
          <option value="2304">2304</option>
          <option value="2305">2305</option>
          <option value="2306">2306</option>
          <option value="2307">2307</option>
          <option value="2308">2038</option>
          
          </select>
          <select name="room4">
          <option value="na">----</option>
          <option value="2301">2301</option>
          <option value="2302">2032</option>
          <option value="2303">2303</option>
          <option value="2304">2304</option>
          <option value="2305">2305</option>
          <option value="2306">2306</option>
          <option value="2307">2307</option>
          <option value="2308">2038</option>
          
          </select>
          <select name="room5">
          <option value="na">----</option>
          <option value="2301">2301</option>
          <option value="2302">2032</option>
          <option value="2303">2303</option>
          <option value="2304">2304</option>
          <option value="2305">2305</option>
          <option value="2306">2306</option>
          <option value="2307">2307</option>
          <option value="2308">2038</option>
          
          </select>
          <select name="room6">
          <option value="na">----</option>
          <option value="2301">2301</option>
          <option value="2302">2032</option>
          <option value="2303">2303</option>
          <option value="2304">2304</option>
          <option value="2305">2305</option>
          <option value="2306">2306</option>
          <option value="2307">2307</option>
          <option value="2308">2038</option>
          
          </select>
          <select name="room7">
          <option value="na">----</option>
          <option value="2301">2301</option>
          <option value="2302">2032</option>
          <option value="2303">2303</option>
          <option value="2304">2304</option>
          <option value="2305">2305</option>
          <option value="2306">2306</option>
          <option value="2307">2307</option>
          <option value="2308">2038</option>
          
          </select>
          <select name="room8">
          <option value="na">----</option>
          <option value="2301">2301</option>
          <option value="2302">2032</option>
          <option value="2303">2303</option>
          <option value="2304">2304</option>
          <option value="2305">2305</option>
          <option value="2306">2306</option>
          <option value="2307">2307</option>
          <option value="2308">2038</option>
          
          </select>
        <br>
        <br>
        <button name="submit">Add Number (PCU)</button>
        
        <br> 
        <br>
        
        
</form>
</center>
</body>


</html>
