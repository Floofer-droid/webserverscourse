<!DOCTYPE php> 
<html> 
    <head> 
        <title>php page</title> 
    </head> 
    <body> 
        <p>Your watch is from <?=htmlspecialchars($_POST['brands']) ?></p>
        <p>with a serial number of <?=htmlspecialchars($_POST['serialnum']) ?></p>
    </body> 

</html> 