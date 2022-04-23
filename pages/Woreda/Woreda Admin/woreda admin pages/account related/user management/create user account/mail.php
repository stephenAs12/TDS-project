<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
  margin: 0;
  padding: 0;
}

body {
  font-family: "Open Sans";
  font-size: 14px;
}

.container {
  width: 500px;
  margin: 25px auto;
}

form {
  padding: 20px;
  background: #2c3e50;
  color: #fff;
  -moz-border-radius: 4px;
  -webkit-border-radius: 4px;
  border-radius: 4px;
}
form label,
form input,
form button {
  border: 0;
  margin-bottom: 3px;
  display: block;
  width: 100%;
}
form input {
  height: 25px;
  line-height: 25px;
  background: #fff;
  color: #000;
  padding: 0 6px;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
form button {
  height: 30px;
  line-height: 30px;
  background: #e67e22;
  color: #fff;
  margin-top: 10px;
  cursor: pointer;
}
form .error {
  color: #ff0000;
}
    </style>
</head>
<body>
<div class="container">
  <h2>Registration</h2>
  <form action="" name="registration">

    <label for="firstname">First Name</label>
    <input type="text" name="firstname" id="firstname" placeholder="John"/>

    <label for="lastname">Last Name</label>
    <input type="text" name="lastname" id="lastname" placeholder="Doe"/>

    <label for="email">Email</label>
    <input type="email" name="email" id="email" placeholder="john@doe.com"/>

    <label for="password">Password</label>
    <input type="password" name="password" id="password" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;"/>

    <button type="submit">Register</button>

  </form>
</div>

<script src="../../../../../../vendors/jquery/dist/jquery.min.js"></script>
<script src="../../../../../../vendors/jquery/dist/jquery.validate.js"></script>

<script>
    $(document).ready(function() { 
            $("input").focusout(function() { 
                if($(this).val()=='') { 
                    $(this).css('border', 'solid 2px red'); 
                }
                else {
                      
                    // If it is not blank.
                    $(this).css('border', 'solid 2px green');    
                }    
            }) .trigger("focusout");
        }); 
</script>
</body>
</html>