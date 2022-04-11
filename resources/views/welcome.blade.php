<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Make Country, State and City Dropdown with REST API & jQuery | PHPLift.net</title>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <style type="text/css">
            img {border-width: 0}
            * {font-family:'Lucida Grande', sans-serif;}
        </style>
        <style type="text/css">
            .block a:hover{
                color: silver;
            }
            .block a{
                color: #fff;
            }
            .block {
                position: fixed;
                background: #2184cd;
                padding: 20px;
                z-index: 1;
                top: 240px;
            }
        </style>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="{{ asset('js/countrystatecity.js') }}"></script>
    </head>
    
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h3>Country</h3>
                    <select name="country" class="countries form-control" id="countryId">
                        <option value="">Select Country</option>
                    </select>
                </div>

                <div class="col-sm-4">
                    <h3>State</h3>
                    <select name="state" class="states form-control" id="stateId">
                        <option value="">Select State</option>
                    </select>
                </div>

                <div class="col-sm-4">
                    <h3>City</h3>        
                    <select name="city" class="cities form-control" id="cityId">
                        <option value="">Select City</option>
                    </select>
                </div>
            </div>
        </div>
  </body>
</html>
