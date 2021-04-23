<!DOCTYPE html>
<html lang="en">
<html lang="kz">
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <link rel="stylesheet" href="login.css"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('login.css') }}">
    <title>Log In</title>
</head>
<body>
    <h1 id="h1">{{__('lang.Registration in our school')}}</h1>
    <div class="design">
       <div id="circle1"></div>
       <div id="circle2"></div>
    </div>
        <div class="box">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    

    <div class="login">
        <form action="{{ route('addstudent') }}" method="post" enctype="multipart/form-data">
        {{ @csrf_field() }}
            <div class="name">
                        <h1>{{__('lang.Full Name')}}</h1>
                    <input type="text" id="namee" name="full_name" placeholder="Name"> <br>
                    </div>
                    <div class="gmail">
                        <h1>{{__('lang.Gmail')}}</h1>
                    <input type="text" id="gmaill" name="gmail" placeholder="Gmail"> <br>
                    </div>
                    <div class="pass">
                        <h1>{{__('lang.Password')}}</h1>
                    <input type="password" id="passs" name="password" placeholder="password"> <br>
                    </div>
                    <div>
                        <h1>{{__('lang.Image to upload:')}}</h1>
                        <input type="file" name="photo" class="custom-file-input">
                        <label class="custom-file-label">Choose file</label>
                    </div>
                    
                    <button id="btn" name="submit">{{__('lang.Log In')}}</button>
        </form>
        
    </div>

<!-- ------------------------------------------------------------Mobile---------------------------------------------------------------------- -->
    <div class="diz1"></div>
    <div class="diz2"></div>


    <div class="login1">
        <h4 id="h4">Registration in our school</h4>
        <input type="text" id="name1" placeholder="Your Name">
        <input type="text" id="gmail1" placeholder="Your Gmail">
        <input type="password" id="pass" placeholder="Your Password">
        <button id="btn1" onclick="login1(name1.value)">Log in</button>
    </div>
    <div class="regester1" id="id">
        <img src="https://image.flaticon.com/icons/png/512/236/236831.png" alt="" width="50px">
        <p id="user_name1"></p>
        <p id="user_gmail1"></p>
        
        <p>You have successfully registered in our school</p>
        <p>thank you for choosing us</p>
    </div>
<!-- ======================================================================================================================================== -->
    <div class="regester" id="id">
        <img src="https://image.flaticon.com/icons/png/512/236/236831.png" alt="" width="50px">
        <p id="user_name"></p>
        <p id="user_gmail"></p>
        
        <p>{{__('lang.You have successfully registered in our school')}}</p>
        <p>{{__('lang.thank you for choosing us')}}</p>
    </div>
    <script type="text/javascript" src="login.js"></script>


</body>
</html>