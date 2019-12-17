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
                    <h3>සබරගමුව උපකාරක කවුළුව : වෘත්තීය මංපෙත -  </h3>
                </div>
                <div class="card-body">
                    <div style="background-color: #d6d6c2; padding: 10px; max-width: 60%;">
                            <p>ඔබගේ ඩිප්ලෝමාධාරී ලියාපදිංචි වීමට 
                                අදාල අයදුම්පත හා සහතිකපත් පරීක්ෂා කරන ලදුව එය සත්‍ය අයදුම්පතක් 
                                බවට තහවුරු කරගන්නා ලදී.</p>
                            <p>ඒ අනුව ඔබගේ ලියාපදිංචියට අදාල තොරතුරු පහත පරිදි වේ.</p>
                            <p><label>University/Institute : </lable>{{ $email['clg_name'] }}</p>
                         
                            <p><label>Diploma : </lable>{{ $email['cos_title'] }}</p>
                            
                            <p><label>Registered Date : </lable>{{ $email['reg_date'] }}</p>
                            <p><label>Registration No : </lable>{{ $email['reg_no'] }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>