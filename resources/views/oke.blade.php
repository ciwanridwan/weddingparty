<html>
    <head>
        <title>Success</title>
    </head>
    <body>
        <h1>Selamat data berhasil ditambah</h1>
    @if(session()->get('success'))
  <div class="alert alert-success">
    {{ session()->get('success') }}  
  </div><br/>
@endif
    </body>
</html>