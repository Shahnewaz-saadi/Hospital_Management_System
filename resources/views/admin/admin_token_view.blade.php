

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')

    
    <style>
        h1 {
            text-align: center;
            color: #00ca1e;
        }
    </style>

  </head>
  <body>
    <div class="container-scroller">

      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->

        

</head>
<body>
    <div class="container" style="padding: 120px">
        <h1>Payment Create Form</h1>
        <form action="{{ url('payment') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="payment_name" class="form-label">Payment Name</label>
                <input type="text" name="payment_name" class="form-control" placeholder="Enter payment name">
            </div>
            <div class="mb-3">
                <label for="payment_amount" class="form-label">Total amount</label>
                <input type="number" min="0" name="payment_amount" class="form-control" placeholder="Enter total amount">
            </div>


            {{-- <div class="mb-3">
                <label for="minimum_purchase_amount" class="form-label">Minimum Purchase Amount</label>
                <input type="number" min="0" name="minimum_purchase_amount" class="form-control">
            </div>
            <div class="mb-3">
                <label for="validity_till" class="form-label">Expiry Date</label>
                <input type="date" name="validity_till" class="form-control">
            </div>
            <div class="mb-3 form-check form-switch">
                <input class="form-check-input" name="is_active" type="checkbox" role="switch" id="activeStatus" checked>
                <label class="form-check-label" for="activeStatus">Active or Inactive</label>
            </div> --}}

            
            <button type="submit" class="btn btn-success">Store</button>
        </form>
    </div>
</body>
</html>

          
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>



