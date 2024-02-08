<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TO_DO_List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container justify-content-center">
        <div>
    <a class="btn btn-primary "
     href="{{route('items.create')}}"
     >
     Create New Task</a>
     @include('items.message')
    <table class="table">
        <tr>
            <th>ID</th>
            <th>title</th>
            <th> description </th>
            <th>Due Date</th>
            <th> status </th>
             <th>delete</th>

              <th> edit</th>
        </tr>
        {{-- @dump($students) --}}

        @foreach (  $items as $itm)
        <tr>
            <td>{{ $itm->id }}</td>
            <td>{{ $itm->title }}</td>
            <td>{{ $itm->description }}</td>
            <td>{{ $itm->date }}</td>
            <td>{{ $itm->status }}</td>








<!-- Delete button -->
<td>

    <!-- Delete button -->


    <a class="btn btn-danger delete-btn"
    data-id="{{  $itm->id }}"
    data-bs-toggle="modal" data-bs-target="#deleteConfirmationModal"
 href="{{ route('items.delete',  $itm->id) }}">Delete</a>



<!-- Modal -->
<div class="modal fade" id="deleteConfirmationModal" tabindex="-1" role="dialog" aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteConfirmationModalLabel">Delete Confirmation</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to delete this Task?</p>
        </div>
        <div class="modal-footer">

          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <a class="btn btn-danger" id="confirmDeleteButton"
           href="{{ route('items.delete',  $itm->id) }}">Delete</a>
        </div>
      </div>
    </div>
  </div>

  <!-- JavaScript to trigger the modal -->
  <script>
    $(document).ready(function () {
      $('.delete-btn').click(function (e) {
        e.preventDefault(); // Prevent the default link behavior
        var postId = $(this).data('id');
        $('#confirmDeleteButton').attr('href', "{{ route('items.delete', ':id') }}".replace(':id', postId));
        $('#deleteConfirmationModal').modal('show');
      });
    });
  </script>




                    </td>

                <td>

                   <a class="btn btn-info "
        href="{{route('items.edit', $itm->id )}}"
        > edit</a>
                </td>

            </tr>
        @endforeach




    </table>

        </div>
        {{ $items->links() }}
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
