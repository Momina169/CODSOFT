<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{secure_asset('/css_bootstrap.min.css')}}">
    <script rel="jquery" src="{{secure_asset('/jquery_3.6.4_jquery.min.js')}}"></script>

    <title>Checkout</title>

</head>
<body>
    <!-- payment section -->
    <div class=" d-flex justify-content-center align-items-center flex-column">
            <div class="row">
                <div class="col-6 gy-5 ">
                    <h3 class="fs-3">One Last Step, Pay Appointment fee</h3>
                    <p>Thanks for requesting an appointment </p>
                    <p>Pay Fixed Appointment fee of $25 to proceed</p>
                </div>
                <div class="col-6 gy-5">
                    <form action="{{ url(route('session'))}}" method="get">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    
                    <label for="name">Name</label><br>
                    <input type="text" name="name" placeholder="Enter Your Name"><br><br>

                    <label for="name">Email</label><br>
                    <input type="text" name="email" placeholder="abc@gmail.com"><br><br>

                    <label for="amount" class="text-danger">Total Amount</label><br>
                    <input class="p-3" type="number" value="25" readonly  name="total_amount"> Dollars<br>
                    <input type="submit" class="btn btn-primary mt-5" value="Checkout">
                    </form>
                </div>
            </div>
    </div>
  


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
<script src="{{ secure_asset('/cdn.jsdelivr.net_npm.js') }}"></script>
<script src="{{ secure_asset('/js_bootstrap.min.js') }}"></script>  
</body>
</html>