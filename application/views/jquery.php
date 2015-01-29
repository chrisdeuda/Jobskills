<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Demo</title>
</head>
<body>
    <a href="http://jquery.com/">hazely</a>
    <script src="jquery.js"></script>
    <script>
 
    $( document ).ready(function() {
        $( "a" ).click(function( event ) {
            alert( "hello" );
            event.preventDefault();
        });
    });
 
    </script>
</body>
</html>