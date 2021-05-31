<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="author" content="Seeam, Nafiz, Rifat">
    <meta name ="description" content="login">
    <link rel="stylesheet" type="text/css" href="style_login.css">
    <link rel="icon" type="png/img/gif" href="img/login.png">
    <link rel="stylesheet" type = "text/css" href="bg.css">

    <title> Login </title>
  </head>

  <body>

    <div>
      <h1>Homepage</h1>
      <p>If you are an user type your order ID to track parcel.<br>ex: 123545, 135463, 235354, 385634</p>
      <p>If you are a merchant then sign in with your username and password. <br> For the demo, you may use 'Apex' as user name and 'apex123' as password.</p>
    </div>

    <div>
      <form method="post" action="backend_files/search_result.php">
      <label for="orderid_input"> Type your order ID here: </label>
      <input type="text" name="orderid_input">
      <input type="submit" value="search" style="margin-left: 10px; margin-top: 20px;">
      </form> 
    </div>

    <div class="login_form">
      <form method="post" action="backend_files/login_backend.php">
        <table>
          <tr>
          <th>
            <label for="username"> Username: </label>
          </th>
          <th>
            <input type="text" name="username_input" placeholder="Enter Username.">
          </th>
        </tr>

        <tr>
        <th>
          <label for="password"> Password: </label>
        </th>
        <th>
          <input type="text" name="password_input" placeholder="Enter Password.">
        </th>
        </tr>
           <th > <input type="submit" value="Login" style="margin-left: 100px; margin-top: 20px;"> </th>
        <tr>
        <tr>
        </tr>


        </tr>
        </table>
      </form>
    </div>


  </body>

  <footer>
  </footer>


</html>
