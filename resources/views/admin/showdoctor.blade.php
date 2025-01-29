

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')

  </head>
  <body>
    <div class="container-scroller">

      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

            <div align="center" style="padding-top:100px;" >

                <table>
                    <tr style="background-color:green">
                        <th style="padding: 10px" >Doctor Name </th>
                        <th style="padding: 10px">Phone</th>
                        <th style="padding: 10px">Speciality</th>
                        <th style="padding: 10px">Room No</th>
                        <th style="padding: 10px">Image</th>
                        <th style="padding: 10px">Delete</th>
                        <th style="padding: 10px">Update</th>
                        
                    </tr>

                    @foreach ($data as $doctor )
                    <tr align="center" style="background-color: rgba(17, 163, 154, 0.566)">
                      <td>{{ $doctor->name }}</td>
                      <td>{{ $doctor->phone }}</td>
                      <td>{{ $doctor->specialty }}</td>
                      <td>{{ $doctor->room }}</td>

                      <td><img height="100" width="100" src="doctorimage/{{ $doctor->image }}"> </td>

                      <td><a onclick="return confirm('Are Yor Sure to Delete This? ')" class="btn btn-danger" href="{{ url('deletedoctor',$doctor->id) }}">Delete </a></td>
                      <td><a class="btn btn-primary" href="{{ url('updatedoctor',$doctor->id) }}">Edit</a> </td>

                    </tr>
                    @endforeach

                
            </div>
        </div>

          
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>