<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <div>
        <form id="form2" method="POST">
             Search: <input type="text" name="key" id="key">
             <input type="button" id="search" value="Search">
        </form>
        <script>
             $(document).ready(function () {
                    
             });   
        </script>
        <form id="form1" method="POST">
            Name: <input type="text" name="name" id="name"><br/><br/>
            Email: <input type="text" name="email" id="email"><br/><br/>
            Address: <input type="text" name="address" id="address"><br/><br/>            
            <input type="button" id="click" value="Add">
        </form>
        <div id="list"></div>
        <script>
                $(document).ready(function () {                   
                    $("#click").click(function (e) { 
                        
                        $.ajax({
                            type: "POST",
                            url: "result.php",
                            data: {'name' : $('#name').val(), 'email' : $('#email').val(),'address' : $('#address').val()},
                            success: function (data) {
                                 $('#list').html(data);
                            },
                            error : function (throwException){
                                 alert(throwException);
                            },                            
                        });
                        e.preventDefault();
                    });
                });
        </script>
    <div>
</body>
</html>