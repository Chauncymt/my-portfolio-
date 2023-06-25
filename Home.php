
<!DOCTYPE html>
<html>
<head>
<title>my school</title>
</head>
<style>
body{
padding:1;
margin:1;
font-family:impact;
 background-color:brown;
background-size:cover;
background-position:center;
background-repeat:no-repeat;
}
.input-form{
  width:300px;
  background:;
  padding:20px;
 margin:10% auto 0;
 text-align:center;
 box-shadow:0 0 3px
 rgba(0,0,0,0.3)
}
body{
padding:1;
margin:1;
font-family:impact;
 background-color:rgb(82, 219, 224);
background-size:cover;
background-position:center;
background-repeat:no-repeat;
.name-bt{
padding :9px;
margin:8px 0;
width:80%;
border:1px solid black;
align:left;
border-color:rgb(186, 131, 207);
}
button{
padding:11px;
width:90%;
margin:9px;
border-radius:14px;
border-color:rgb(223, 247, 12);
}
</style>

<body background="istockphoto-820219934-1024x1024.jpg">
<div class="input-form">
<form action="register.php" method="post">
<h1><font size="29px"color="red">  Chauncy Mills Programing school </h1></font>
<p style="color:rgb(220, 235, 22)">Register with us</p>
<form action="insert.php" method="POST">
  <table>
   <tr>
    <td>Name :</td>
    <td><input type="text" name="username" required></td>
   </tr>
   <tr>
    <td>Password :</td>
    <td><input type="password" name="password" required></td>
   </tr>
   <tr>
    <td>Gender :</td>
    <td>
     <input type="radio" name="gender" value="m" required>Male
     <input type="radio" name="gender" value="f" required>Female
    </td>
   </tr>
   <tr>
    <td>Email :</td>
    <td><input type="email" name="email" required></td>
   </tr> 
   <tr>
    <td>Phone no :</td>
    <td>
     <select name="phoneCode" required>
      <option selected hidden value="">Select Code</option>
      <option value="977">+265</option>
      <option value="978">+2657</option>
      <option value="979">+979</option>
      <option value="973">+973</option>
      <option value="972">+972</option>
      <option value="974">+974</option>
     </select>
     <input type="phone" name="phone" required>
    </td>
   </tr>
   <tr>
    <td><input type="submit" value="Submit" name="submit"></td>
   </tr>
  </table>
 </form>
<button type="submit" name="button" value="">   submit</button>
<p><hr /> <font color="white">Make sure you entered correct informatin!</font> <hr /></p>
<br/>
<img src="CCCC.jpg" width="100px" length="10000px"><img><br/>
<a href="my assignment.html">SKIP</a>
</html>
