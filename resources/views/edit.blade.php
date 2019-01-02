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
    <a href="/output"><input type="submit" name="submit" value="Kembali" class="btn btn-danger"></a>
    <p><center><h2>Edit Data</h2></center></p>
    <br>
    <hr>
    <form action="{{ url('/update/'.$data->id_login) }}" method="post">
      <table>
        <tr>
          <td>Username</td>
          <td>:</td>
          <td><input type="text" name="username" value="{{ $data->username }}"></td>
        </tr>
        <tr>
          <td>Email/Gmail</td>
          <td>:</td>
          <td><input type="text" name="email" value="{{ $data->email }}"></td>
        </tr>
        <tr>
          <td>Hak Akses</td>
          <td>:</td>
          <td><select name="hak_akses">
            <option value="Konsultan">Konsultan JAFRA</option>
            <option value="Pembisnis">Pembisnis</option>
          </select></td>
          <tr>
            <td><input type="submit" name="ok" value="Simpan" class="btn btn-success"></td>
          </tr>
        </tr>
      </table>
      {{ csrf_field() }}
    </form>
  </body><br><br>

</html>
