<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio 15</title>
</head>
<body>
    

    <?php 

        function printList($num, $type) {
            $output = ($type != "o" ? "<ul>" : "<ol>");                 // Se il tipo non è né 'o' né 'u' imposta di default a 'u'
            for ($i = 1; $i <= $num ; $i++) { 
                if($i % 5 == 0 || $i % 2 ==0)
                    $output.= "<li> $i </li> ";
            }
            return $output.= ($type != "o" ? "</ul>" : "</ol>");
        }

        $number = rand(10, 100);
        $type = (rand(0, 1) == 0)? "u" : "o"; 
        $final_list = printList($number, $type);

        echo "<p> Numero: $number </p> $final_list";
    ?>

</body>
</html>