
<!DOCTYPE html>
<html lang="en">
  <head>

    <style>
        label
        {
            display: inline-black;
            width: 200px;
        }
        
    </style>
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

           



            <div class="container" align="center" style="padding-top: 100px;">

                @if (session()->has('message'))

                <div class="alert alert-success">
    
                    <button type="button" class="close" data-dismiss="alert">
                        x
                    </button>
    
                    {{ session()->get('message') }}
    
                </div>
                    
                @endif


                <form action="{{ url('add_doctor') }}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div style="padding: 15px;" >
                        <label>Doctor Name: </label>
                        <input type="text" style="color:gray" name="name" placeholder="Example: Dr. Sohan Ali">
                    </div>

                    <div style="padding: 15px;" >
                        <label>Phone: </label>
                        <input type="number" style="color:gray" name="number" placeholder="Example: 01XXX-XXXXXX">
                    </div>

                    <div style="padding: 15px;" >
                        <label>Speciality: </label>
                        <select name="speciality" style="color: gray" width:200px>
                            <option>--Select--</option>
                            <option value="skin">Darmatologist</option>
                            <option value="heart">Cardiology</option>
                            <option value="eye">Eye Ear and Nose</option>
                            <option value="nose">Medicine</option>
                        </select>
                    </div>

                    <div style="padding: 15px;" >
                        <label>Room Number: </label>
                        <input type="text" style="color:gray" name="room" placeholder="Example: 102">
                    </div>

                    <div style="padding: 15px;" >
                        <label>Doctor Image: </label>
                        <input type="file" name="file">
                    </div>

                    <div style="padding: 15px;" >
                        <input type="submit"class="btn btn-success">
                    </div>

                </form>
            </div>
        </div>

    
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>