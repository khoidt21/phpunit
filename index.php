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
    <style>
        .active{
            color:red;
        }
    </style>
    <div>
        <form id="form2" method="POST">
             Search: <input type="text" name="key" id="key">
             <input type="button" id="search" value="Search">
        </form>
        <div id="resultSearch"></div>
        <div>Menu</div>
        <ul id="nav">
            <li class="active">Li 1</li>
            <li>Li 2</li>
            <li>Li 3</li>
            <li>Li 4</li>
            <li>Li 5</li>
        </ul>
        <select id="country" name="country">
              <option value="0">--Chọn nước--</option>
              <option value="1">Viet Nam</option>
              <option value="2">Philipin</option>
              <option value="3">Malaysia</option>
              <option value="4">Thailand</option>              
        </select>
        <div id="box"></div>
        <script>
             $(document).ready(function () {
                   // event select 
                   $("#country").change(function (e) {
                       var value = $('select option:selected').val();
                       var text = $('select option:selected').text();
                       var response = value + " " + text;
                       $('#box').html(response); 
                       e.preventDefault();
                       
                   }); 

                   // menu 
                   $("#nav li").click(function (e) { 
                       $('#nav li.active').removeClass('active');
                       $(this).addClass('active');
                   }); 
                   
                   $("#search").click(function (e) { 
                       e.preventDefault();
                       $.ajax({
                           type: "POST",
                           url: "resultSearch.php",
                           data: {'key' : $('#key').val()},
                           dataType: "text",
                           success: function (response) {
                               $('#resultSearch').html(response);
                           }
                       });
                       
                   }); 
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