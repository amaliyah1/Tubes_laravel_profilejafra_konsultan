<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="/css/master.css">
    <link rel="stylesheet" href="/css/job1.css">
    <link rel="stylesheet" href="/css/job2.css">
    <link rel="stylesheet" href="/js/job.js">
  </head>
  <body>

    <p><center><h2>Login Konsul JAFRA</h2></center></p><br>
    <hr>
    <center><form action="/user"  method="post">
      <table>
        <tr>
          <td>Username</td>
          <td>:</td>
          <td><input type="text" name="username" value=""></td>
        </tr>
        <tr>
          <td>Password</td>
          <td>:</td>
          <td><input type="password" placeholder="Password" name="password" value=""></td>
        </tr>
          <tr>
            <td><input type="submit" name="ok" value="Login" class="btn btn-success"></td>
          </tr>
        </tr>
      </table>
      {{ csrf_field() }}
    </form></center>
  </body><br><br>
</html>
