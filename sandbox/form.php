<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="form.css">
</head>
<body onload="prepareBoard()">
   
    <div id="grid-container">
    <?php
    for ( $i=8; $i >= 1 ; $i--)
    {
        for ($j=65; $j <= 72 ; $j++) {
            $id = chr($j).$i;
            if( ($i + $j) % 2 )
               $class = "black";
            else
               $class = "white";    
            echo "<div id=\"$id\" class=\"$class\">";
            echo "</div>"; 

        }

    }


    ?>
    </div>    
    <form action="form.php" id="moveForm" method="POST">
       <input type="hidden" name="source" id="source">
       <input type="hidden" name="target" id="target">
       

    </form>


    <?php
       if(isset($_REQUEST['source']) && isset($_REQUEST['target']))
       {
             $source = $_REQUEST['source'];
             $target = $_REQUEST['target'];
             echo "przesuwam pionek z pola $source na pole $target";


       }



    ?>
    <script>
      
       function prepareBoard() // szachownica
       {
           let container = document.getElementById('grid-container');
           container.childNodes.forEach(function(element){
              element.addEventListener("click", fieldClick);
       });

       }
       
        function fieldClick(e) {
            let source = document.getElementById('source');
            let target = document.getElementById('target');

              if(source.value) { 
                target.value = e.currentTarget.id; 
                document.getElementById('moveForm').submit();
              }  else {
                source.value = e.currentTarget.id;

              } 
        }
    </script>    
</body>
</html>