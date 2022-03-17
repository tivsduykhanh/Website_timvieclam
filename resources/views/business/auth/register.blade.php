<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="/template/auth/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="/template/auth/css/style.css">
</head>

<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Register Business</h2>
                        <form action="{{ route('register.business') }}" method="POST" class="register-form">
                            @csrf
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name" required autofocus />
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" required
                                    autofocus />
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password" required />
                                @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="sdt"><i class="zmdi zmdi-phone"></i></label>
                                <input type="text" name="sdt" id="sdt" placeholder="Phone Number" required autofocus />
                                @if ($errors->has('sdt'))
                                    <span class="text-danger">{{ $errors->first('sdt') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="tencongty"><i class="zmdi zmdi-case"></i></label>
                                <input type="text" name="tencongty" id="tencongty" placeholder="Tên Công Ty" required autofocus />
                                @if ($errors->has('tencongty'))
                                    <span class="text-danger">{{ $errors->first('tencongty') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="vitricongtac"><i class="zmdi zmdi-case"></i></label>
                                <input type="text" name="vitricongtac" id="vitricongtac" placeholder="Vị trí công tác" required autofocus />
                                @if ($errors->has('vitricongtac'))
                                    <span class="text-danger">{{ $errors->first('vitricongtac') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="diadiemlamviec"><i class="zmdi zmdi-gps-dot""></i></label>
                                <input type="text" name="diadiemlamviec" id="diadiemlamviec" placeholder="Địa điểm làm việc" required autofocus />
                                @if ($errors->has('diadiemlamviec'))
                                    <span class="text-danger">{{ $errors->first('diadiemlamviec') }}</span>
                                @endif
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit"
                                    value="Register" />
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="/template/auth/images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="login" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="/template/auth/vendor/jquery/jquery.min.js"></script>
    <script src="/template/auth/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
