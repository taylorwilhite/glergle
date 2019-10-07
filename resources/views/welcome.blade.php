@extends('layouts.app')

    @section('content')
                    @auth
                        <div id="home"></div>
                        <form method="POST" action="/glerks">
                            @csrf
                            <input type="text" name="content">
                            <button type="submit">Submit</button>
                        </form>
                        @foreach ($glerks as $glerk)
                            <p>{{$glerk->content}}</p>
                        @endforeach
                    @else
                        <div class="w-full max-h-full flex justify-between">
                            <div class="hidden md:block w-1/2 h-full px-10 py-10">
                                <img src={{ asset('img/undraw_profile.svg') }} />
                            </div>

                            <div class="w-full md:w-1/2 h-full">
                                <div class="w-4/5 md:w-2/3 mx-auto bg-grey text-white my-10 rounded">
                                    <div class="px-4 py-10">
                                        <div class="text-lg pb-6">{{ __('Login') }}</div>
                        
                                        <div class="card-body">
                                            <form method="POST" action="{{ route('login') }}">
                                                @csrf
                        
                                                <div class="pb-6">
                                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                        
                                                    <div class="col-md-6">
                                                        <input id="email" type="email" class="rounded-full pl-2 text-grey-dark form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        
                                                        @error('email')
                                                            <span class="block text-red" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                        
                                                <div class="pb-6">
                                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                        
                                                    <div class="">
                                                        <input id="password" type="password" class="rounded-full pl-2 text-grey-dark @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        
                                                        @error('password')
                                                            <span class="block text-red" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                        
                                                <div class="form-group row">
                                                    <div class="col-md-6 offset-md-4">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        
                                                            <label class="form-check-label" for="remember">
                                                                {{ __('Remember Me') }}
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                        
                                                <div class="form-group row mb-0">
                                                    <div class="col-md-8 offset-md-4">
                                                        <button type="submit" class="btn btn-primary">
                                                            {{ __('Login') }}
                                                        </button>
                        
                                                        @if (Route::has('password.request'))
                                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                                {{ __('Forgot Your Password?') }}
                                                            </a>
                                                        @endif
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    @endauth


            
@endsection
