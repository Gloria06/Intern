
<!DOCTYPE HTML>
<html>  
<body>

<form action="insert" method="post"> 
{{csrf_field()}}

Id     : <input type="text" name="id"><br>
Name   : <input type="text" name="name"><br>
Address: <input type="text" name="address"><br>
Dob    : <input type="text" name="dob"><br>
Gender : <input type="text" name="gender"><br>
Email  : <input type="text" name="email"><br>
City   : <input type="text" name="city"><br>
Country: <input type="text" name="country"><br>

<input type="submit" value="Submit">

</form>


</body>
</html>
