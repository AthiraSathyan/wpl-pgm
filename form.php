<html>
    <head>
        <style>
            body{
                background-color: lightblue;
                font-size:15px;

            }
            h1{
                font-family: arial;
                background-color: pink;

            }
            table{
                font-size:20px;
                
            }</style>
            <script type="text/javascript">
                function validateform()
                {
                    var w=document.forms["form2"]["name"].value;
                    var x=document.forms["form2"]["price"].value;
                    if (w=="")
                    {
                        alert("please enter productname");
                        return false;
                    }
                    if (x=="")
                    {
                        alert("enter price");
                        return false;
                    }
                    if(isNaN(x))
                    {
                        alert("enter valid price");
                        return false;
                    }
                    else{
                        return true;
                    }
                }
            </script>
            </head>
            <body><center><h1><u>ADD YOUR DETAILS</u></h1>
                <form action="answer3.php" method="POST" name="form2" onsubmit="return validateform()"><table border="1" height="50%" width="50%">
                   <tr><th>
                    NAME:</th><th><input type="text" name="name"></th></tr>
                    <tr><th>
                    TYPE:</th><th><input type="text" name="type"></th></tr>
                    <tr><th>
                    QUANTITY:</th><th><input type="text" name="quantity"></th></tr>
                    <tr><th>
                    PRICE:</th><th><input type="text" name="price"></th></tr><tr><th>
                    <input type="submit" name="s1" value="save"></th><th>
                    <input type="submit" name="s2" value="show details"></th></tr>
                </center>
        </form>
        </body>
        </html>