

<!DOCTYPE html>
<html lang="en">
  <head>

    <base href="/public">
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


                <form action="{{ url('sendmail',$data->id) }}" method="POST" >

                    @csrf

                    <div style="padding: 15px;" >
                        <label>Greeting</label>
                        <input type="text" style="color:gray" name="greeting" placeholder="">
                    </div>

                    <div style="padding: 15px;" >
                        <label>Body</label>
                        <input type="text" style="color:gray" name="body" placeholder="Message">
                    </div>


                    <div style="padding: 15px;" >
                        <label>Action Text </label>
                        <input type="text" style="color:gray" name="actiontext" placeholder="">
                    </div>

                    <div style="padding: 15px;" >
                        <label>Action Url </label>
                        <input type="text" style="color:gray" name="actionurl" placeholder="">

                    </div>

                    <div style="padding: 15px;" >
                        <label>End Part</label>
                        <input type="text" style="color:gray" name="endpart" placeholder="Example: 102">
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