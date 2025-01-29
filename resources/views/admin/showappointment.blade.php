

<!DOCTYPE html>
<html lang="en">
  <head>

    @include('admin.css')

  </head>
          <body>
            <div class="container-scroller">

                    @include('admin.sidebar')

                    @include('admin.navbar')

                    <div class="container-fluid page-body-wrapper">

                        <div align="center" style="padding-top:100px;" >

                            <table>
                                <tr style="background-color:green">
                                    <th style="padding: 10px" >Name </th>
                                    <th style="padding: 10px">Email</th>
                                    <th style="padding: 10px">Phone</th>
                                    <th style="padding: 10px">Doctor</th>
                                    <th style="padding: 10px">Date</th>
                                    <th style="padding: 10px">Message</th>
                                    <th style="padding: 10px">Status</th>
                                    <th style="padding: 10px">Approved</th>
                                    <th style="padding: 10px">Cancel</th>
                                    {{-- <th style="padding: 10px">Send Mail</th> --}}
                                </tr>

                                @foreach ($data as $appoinment )


                                <tr align="center" style="background-color:rgba(69, 129, 98, 0.519) " >
                                    <td>{{ $appoinment -> name}}</td>
                                    <td>{{ $appoinment -> email}}</td>
                                    <td>{{ $appoinment -> phone}}</td>
                                    <td>{{ $appoinment -> doctor}}</td>
                                    <td>{{ $appoinment -> date}}</td>
                                    <td>{{ $appoinment -> message}}</td>
                                    <td>{{ $appoinment -> status}}</td>
                                    <td style="padding-right: 10px;"> <a class="btn btn-success" href="{{ url('approved',$appoinment->id) }}" > Approved   </td>
                                    <td style="padding-right: 10px;"> <a class="btn btn-danger" href="{{ url('canceled',$appoinment->id) }}" > Canceled   </td>
                                    
                                        {{-- <td style="padding-right: 10px;"> <a class="btn btn-primary" href="{{ url('emailview',$appoinment->id) }}" > Send Mail  </td> --}}
                                </tr>

                                @endforeach
                            </table>
                        </div>


                    </div>


             </div>
    
                 @include('admin.script')


             </body>


</html>