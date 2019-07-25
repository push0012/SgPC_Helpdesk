<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
<body>

<div class="container">
    <div class="row justify-content-center" >
    <div class="col-md-12">
        <div class="card justify-content-center">
            <div class="card-header">
            <h3>සබරගමුව උපකාරක කවුළුව : වෘත්තීය මංපෙත</h3>
            <h3>ක්ෂණික තොරතුරු ඉල්ලුම් පත්</h3>
            </div>
            <div class="card-body">
                <h5 class="card-title">

                <h4>You have New Message From</h4> 
                <p>{{ $email['name'] }}</p>
                <p>{{ $email['address'] }} </p>
                <p>{{ $email['email'] }} </p>
                <p>{{ $email['phone'] }} </p>
                
                </h5>
                <div style="background-color: #d6d6c2; padding: 10px; max-width: 60%;">
                <p style="font-size: 1.5em;">{{ $email['subject'] }}  </p>
                <br/>
                <p class="card-text">{{ $email['message'] }}</p>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
</body>
</html>