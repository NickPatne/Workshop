<!DOCTYPE html>
<html>
<head>
   <title>View Users</title>

   <style>
body{

background:url(back2.jpg);
background-size: cover;

}
</style>

<script>
function getUser(str) {
   if (str == "") {
      document.getElementById("displayUser").innerHTML="";
      return;
   }else{
      httpR = new XMLHttpRequest();
      httpR.onreadystatechange = function() {
         if (this.readyState == 4 && this.status == 200) {
            document.getElementById("displayUser").innerHTML=this.responseText;
         }
      };

      httpR.open("GET","data.php?q="+str,true);
      httpR.send();
   }
}
</script>
<style>
select{

width:300px;
height:45px;
background-color:black;
color:white;
font-size:20px;
margin-left:600px;
margin-top:80px;
padding:10px;
}

button{
   width:200px;
height:40px;
background-color:black;
color:white;
font-size:20px;
margin-left:1200px;
margin-top:50px;
}
h1{

   text-align:center;
   color:white;
   font-size:50px;


}
</style>


</head>
<body>

<a href="Display.php">
<button class="DeleteButton">Delete User</button></a>


<h1>User Records</h1>
<select name="user" onchange="getUser(this.value)">
   <option value="">Select User</option>
   <!-- <option value="all">All</option> -->

   <?php
   $host = "host=127.0.0.1";
   $port = "port=5432";
   $dbname = "dbname=User_info";
   $credentials = "user=postgres password=Nickpatne";
   $db = pg_connect( "$host $port $dbname $credentials" );

   $users = pg_query("SELECT * FROM info");
   while ($u = pg_fetch_row($users)) {
   ?>
   <option value="<?php echo $u['username'] ?>"> <?php echo $u['username'] ?> </option>
   <?php
   }
   ?>
</select>
</form>
<div id="displayUser"></div>
</body>
</html>
