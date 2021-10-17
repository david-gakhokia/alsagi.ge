<!DOCTYPE html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>D.G | ავტორიზაცია </title>
    <link rel="shortcut icon" href="Backend/images/logo/logo.png" type="image/x-icon" />
    <link rel="icon" href="Backend/images/logo/logo.png" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro@8af0edd/css/all.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link href="{{ asset('Backend/css/themes/lite-purple.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('Backend/css/plugins/perfect-scrollbar.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('Backend/css/plugins/sweetalert2.min.css') }}" rel="stylesheet" />


    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
    <link rel="stylesheet" href="//cdn.web-fonts.ge/fonts/bpg-ingiri-arial/css/bpg-ingiri-arial.min.css">
    <link rel="stylesheet" href="//cdn.web-fonts.ge/fonts/bpg-ingiri/css/bpg-ingiri.min.css">


    <style>
       *{
         font-family: "BPG Ingiri Arial", sans-serif;
         /* font-family: "BPG Ingiri", sans-serif; */
        } 
    </style>
</head>
<div class="auth-layout-wrap" style="background-image: url({{ asset('Backend/images/photo-wide-4.jpg') }})">
    <div class="auth-content">
        <div class="card o-hidden">
            <div class="row">
                <div class="col-md-6">
                    <div class="p-4">
                        <div class="auth-logo text-center mb-4"><img src="{{ asset('Backend/images/logo/logo.png') }}" alt=""></div>
                        <h1 class="mb-3 text-18">ავტორიზაცია</h1>
                        <form method="POST" action="{{ route('login') }}">
                             @csrf
                            <div class="form-group">
                                <label for="email">ელ.ფოსტა</label>
                                <input id="email" type="email" class="form-control form-control-rounded @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                {{-- <input class="form-control form-control-rounded" id="email" type="email"> --}}
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                                
                            </div>
                            <div class="form-group">
                                <label for="password">პაროლი</label>
                                <input id="password" type="password" class="form-control form-control-rounded @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">                                
                                {{-- <input class="form-control form-control-rounded" id="password" type="password"> --}}
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                                
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('დამახსოვრება') }}
                                        </label>
                                    </div>
                                </div>
                            </div> 
                                <button type="submit" class="btn btn-rounded btn-primary btn-block mt-2">
                                    {{ __('შესვლა') }}
                                </button>  
                                                                                    
                            {{-- <button class="btn btn-rounded btn-primary btn-block mt-2">შესვლა</button> --}}                            
                        </form>
                        <div class="mt-3 text-center"><a class="text-muted" href="#0">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('დაგავიწყდა პაროლი?') }}
                                    </a>
                                @endif                             
                                {{-- <u>დაგავიწყდა პაროლი?</u></a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-6 text-center" style="background-size: cover; background-image: url({{ asset('Backend/images/photo-long-2.jpg') }})">
                    <div class="pr-3 auth-right"><a class="btn btn-rounded btn-outline-primary btn-outline-email btn-block btn-icon-text" href="signup.html"><i class="i-Mail-with-At-Sign"></i> Sign up with Email</a><a class="btn btn-rounded btn-outline-google btn-block btn-icon-text"><i class="i-Google-Plus"></i> Sign up with Google</a><a class="btn btn-rounded btn-block btn-icon-text btn-outline-facebook"><i class="i-Facebook-2"></i> Sign up with Facebook</a></div>
                </div>
            </div>
        </div>
    </div>
</div>