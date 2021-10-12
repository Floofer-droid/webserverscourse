<!DOCTYPE html> 
<html> 
    <head> 
        <title>midterm_response</title> 
    </head> 
    <body>
        <p>you bought <?=(int)($_POST['Quantity']) ?>
        <?=htmlspecialchars($_POST['product_name']) ?></p>
    </body> 
</html>
