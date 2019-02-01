<html>
<body>
<h2 align="center">Assignment 1</h2>


</body>
</html>

<?php

echo"<h3 align='center'> PHP general  information</h3>";
phpinfo(INFO_GENERAL);  //phpinfo(1);

echo"<h3 align='center'> PHP Configuration information</h3>";
phpinfo(INFO_CONFIGURATION);  //phpinfo(4);



echo"<h3 align='center'> PHP Environment information</h3>";
phpinfo(INFO_ENVIRONMENT);    //phpinfo(16);


echo"<h3 align='center'> PHP License information</h3>";
phpinfo(INFO_LICENSE);     //phpinfo(64);

?>