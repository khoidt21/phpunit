<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js"></script>
    </head>
    <body>
        <select id="example" multiple="multiple" style="width:300px">
             <option value="1">PHP</option>
             <option value="2">Java</option>
             <option value="3">C#</option>
             <option value="4">NodeJS</option>
             <option value="5">Angular JS</option>              
        </select>
        
        <br/><br/>
        <div id="result"></div>
        <input type="button" id="click" value="click">
        <script>
            $(document).ready(function () {
                    var select2 = $('#example').select2();
                    select2.on("select2:select", function (e) {
                    var languages = $(e.currentTarget).val();
                    $("#click").click(function (e) {
                        $.ajax({
                            type: "POST",
                            url: "pass.php",
                            data: {'example' : languages},
                            dataType: "text",
                            success: function (response) {
                                $('#result').html(response);
                            }
                        });
                        e.preventDefault();
                        
                    });
                 });
            });
        </script>
    </body>
</html>