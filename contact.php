
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">

    <title>Document</title>
</head>
<body>

<?php

$result = mail("selim03gaaloul@gmail.com","essai mail","coucou les amis","");
if($result)
{
    echo "<p> mail envoyer </p>" ;
}

?>



    
</body>
</html>




