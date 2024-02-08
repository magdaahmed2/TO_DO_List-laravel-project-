<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>

    <div class="container  justify-content-center">
        <div>

    {{-- @dump($data); --}}


    <form action="{{route('items.update',$data['id'])}}" method="POST" >@method("put")
      {{-- 419 page expired -- csrf --}}
      @csrf
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">title</label>
        <input type="text" class="form-control" id="exampleInputEmail1"

        aria-describedby="emailHelp" name="title" value="{{ old('title', $data->title)}}">
          @error("title")
            <div class="text-danger"> {{$message}} </div>
          @enderror
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">description</label>
        <input type="text" class="form-control" id="exampleInputPassword1"
         name="description" value="{{ old('description', $data->description)}}">
        @error("description")
          <div class="text-danger"> {{$message}} </div>
        @enderror
      </div>
     <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Due Date</label>
        <input type="date" class="form-control" id="exampleInputPassword1"
        name="date"  value="{{ old('date', $data->date)}}">

      </div>
      <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <select class="form-select" id="status" name="status">
            <option selected disabled>Select status</option>
            <option value="completed" {{ old('status', $data->status) == 'completed' ? 'selected' : '' }}>Completed</option>
            <option value="incompleted" {{ old('status', $data->status) == 'incompleted' ? 'selected' : '' }}>Incompleted</option>
        </select>

        @error("status")
        <div class="text-danger"> {{$message}} </div>
      @enderror
    </div>



      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
