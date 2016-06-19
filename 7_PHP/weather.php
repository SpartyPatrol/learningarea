<!doctype html>
<html>
<head>
    <title>My Weather Webpage</title>
    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

<style>
    html, body {
        height:100%;
    }

    .center {
        text-align:center;
    }
    
    .white {
        color:white;
    }
    
    .alert {
        margin-top:20px;
        display:none;
    }
.container {
    background-image:url("img/annapurna.jpg");
    width:100%;
    height:100%;
    background-size:cover;
    background-position:center;
    padding-top:50px;
    }

</style>


</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 center">
            
            <h1 class="white center">Weather Prediction</h1>
                <p class="lead white center">Enter your city below. </p>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" name="city" id="city" placeholder="eg. London, Arlington, Paris, San Francisco" />
                    </div>
                    <button id="findmyweather_btn" class="btn btn-success btn-lg">Find My Weather</button>
                   
                </form>
                
                <div id="success" class="alert alert-success">Success!</div>
                <div id="fail" class="alert alert-danger">Could not find weather data for that city. Please try again.</div>
                <div id="noCity" class="alert alert-danger">Please enter a city.</div>

        </div>    



    </div>
   
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    
    <script>
        /*global $*/
        $("#findmyweather_btn").click(function(event) {
            event.preventDefault();
            $(".alert").hide();
            
            if($("#city").val()!="") {
                $.get("scraper.php?city="+$("#city").val(), function(data ) {

                if  (data == "") {
                    $("#fail").fadeIn();
                } else {
                    $("#success").html(data).fadeIn();
                }
                
                });
            } else {
                $("#noCity").fadeIn();
            }
        })
        
    </script>        
        

</div>
</body>


</html>
