

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
                    <tr style="background-color:green" align="center">
                        <th style="padding: 10px" >Token Name        </th>
                        <th style="padding: 10px">Amount          </th>
                        
                    </tr>

                    @foreach ($show as $token )
                    <tr align="center" style="background-color: rgba(17, 163, 154, 0.566)">
                      <td>{{ $token->token_name	 }}</td>
                      <td>{{ $token->token_amount}}</td>



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