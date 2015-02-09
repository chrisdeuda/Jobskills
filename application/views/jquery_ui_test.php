<html>
    <head>
        <link rel="stylesheet" href="<?php echo base_url(). 'public/css/jquery-ui.min.css';?>">
        <script src="<?php echo base_url(). 'js/jquery-2.1.3.min.js';?>"></script>
        <script src="<?php echo base_url(). 'public/js/jquery-ui.min.js';?>"></script>

        <script>
  $(function() {
    var availableTags = [
      "ActionScript",
      "AppleScript",
      "Asp",
      "BASIC",
      "C",
      "C++",
      "Clojure",
      "COBOL",
      "ColdFusion",
      "Erlang",
      "Fortran",
      "Groovy",
      "Haskell",
      "Java",
      "JavaScript",
      "Lisp",
      "Perl",
      "PHP",
      "Python",
      "Ruby",
      "Scala",
      "Scheme"
    ];
    $( "#tags" ).autocomplete({
      source: availableTags
    });
  });
  </script>


    </head>
    <body>

        <input type="text" name="date" id="date">

        <div class="ui-widget">
            <label for="tags">Tags: </label>
            <input id="tags">
        </div>
        <script type="text/javascript">
            $( "#date" ).datepicker();

        </script>

    </body>


</html>