<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pruebas</title>
</head>
<body>
    <section id="conent">dfa</section>



    <script
  src="http://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
<script>
    $( document ).ready(function() {
        contenido();
        
    });

    var contenido = function() {
        $.ajax({
            type:"POST",
            url:'datareturn.php',
            success:function(data){
                console.log(data);
            }
        });
    }
</script>
</body>
</html>