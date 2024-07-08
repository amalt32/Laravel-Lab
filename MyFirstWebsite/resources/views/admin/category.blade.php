<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.acss')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @include('admin.header')
    <h1>ADD CATEGORY</h1>
    <form  action ="{{url('add_category')}}" method = post class="form-inline">
        @csrf 
        <div class="form-group mb-2">
          <label for="staticEmail2" class="sr-only">Add Category</label>
          <input type="text"  name="categoryname" >
        </div>
        
        <button type="submit" class="btn btn-primary mb-2">ADD</button>
      </form>
      <table>
        <tr>
          <th>Category_name</th>
        </tr>
        @foreach($data as $data)
        <tr>
          <td>{{$data->category_name}}</td>
          <td>{{$data->id}}</td>
          <td> <button type="submit" class="btn btn danger" href="{{url('delete_category','$data->id')}}"> DELETE</button></td>
        </tr>
        @endforeach
      </table>

</body>
</html>