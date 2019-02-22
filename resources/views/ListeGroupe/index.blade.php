<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>capacity</th>
        
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($groupes as $groupe)
    
      <tr>
        <td>{{$groupe['id']}}</td>
        <td>{{$groupe['libelleGroupe']}}</td>
        <td>{{$groupe['capacite']}}</td>
     
        
        <td><a href="{{action('groupeController@edit', $groupe['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('groupeController@destroy', $groupe['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>