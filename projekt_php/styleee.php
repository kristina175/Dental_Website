<style type="text/css">
*{
padding: 0;
margin: 0;
box-sizing: border-box;
font-family: system-ui;
}
.cover{
width: 100%;
margin: 0 auto;
background: whitesmoke;
padding: 5px 5%;
}
form{
width: 90%;
height: 650px;
margin: auto;
position: relative;
}
.form{
background: whitesmoke;
   padding: 10px;
   position: absolute;
   width: 80%;
   height: 300px;
   left: 10%;
   top: 100px;
   display: none;
}
form h1{
width: 80%;
   margin: 50px auto;
   color: #57BECD;
   display: flex;
   align-items: center;
}
form h1 i{
font-size: 30px;
margin: 0 5px;
}
.form.active{
display: block;
}
.field{
padding: 5px;
}
label{
display: block;
   padding: 20px;
   font-size: 18px;
   color: #00b8b8;
}
input{
width: 96%;
   padding: 8px;
   border: 1px solid #ccc;
   margin-left: 20px;
   border-radius: 3px;
   outline: none;
   font-size: 16px;
}
.field span{
margin-left: 20px;
display: block;
font-style: italic;
color: red;
}
button{
margin: 20px;
   padding: 8px 20px;
   width: 100px;
   border: none;
   outline: none;
   cursor: pointer;
   border-radius: 4px;
   background: linear-gradient( 45deg, #C44685, cyan);
   color: #00b8b8;
   float: left;
   font-weight: bold;
   position: relative;
   top: 50%;
   left: 10%;
}
button:nth-of-type(1){
display: none;
}
.page-indicator{
   height: 50px;
   width: 100%;
   display: flex;
   align-items: center;
   justify-content: center;
   position: absolute;
   bottom: 10%;
}
em{
display: block;
width: 30px;
height: 30px;
border-radius: 30px;
background: #ccc;
margin: 0 10px;
}
em.cur-page{
background: linear-gradient( 45deg, #C44685, cyan);
}
</style>
<body>
<section class="cover">
<form action="connect.php" method="post">
<h1><i class='bx bx-user-plus'></i> <span>Rregjistrohu ketu per -10%ulje!</span></h1>
<div class="">
<div class="field">
<label for="name">Emri</label>
<input type="text" placeholder="emri" name="emri">
       <span></span>
</div>
<div>
<label for="email">Email</label>
<input type="text" placeholder="email" name="email">
       <span></span>
</div>
<div>
<label for="password">Password</label>
       <input type="password" placeholder="password" name="password">
       <span></span>
</div>
<div>
<label for="password">Konfirmo</label>
       <input type="password" placeholder="Konfirmo" name="Konfirmo">
       <input type="submit" value="submit">
       <span></span>
</div>
</div>
</form>
</section>
</body>
</html>