@extends($activeTemplate.'layouts.master')

@section('content')
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="custom--card">
                    <div class="card-body">
                        <div class="text-end mb-3">
                            <a href="{{route('user.profile.setting') }}" class="btn btn-sm btn--base">
                             <i class="fa fa-key"></i>  @lang('Profile Setting')
                            </a>
                        </div>
                        <form action="" method="post" class="register">
                            @csrf
                            <div class="form-group">
                                <label for="current_password">@lang('Current Password')</label>
                                <input id="current_password" type="password" class="form--control" name="current_password" placeholder="@lang('Enter current password')" required autocomplete="current-password">
                            </div>
                            <div class="form-group hover-input-popup">
                                <label for="password">@lang('Password')</label>
                                <input id="password" type="password" class="form--control" name="password" placeholder="@lang('Enter new password')" required autocomplete="current-password">
                                @if($general->secure_password)
                                    <div class="input-popup">
                                      <p class="error lower">@lang('1 small letter minimum')</p>
                                      <p class="error capital">@lang('1 capital letter minimum')</p>
                                      <p class="error number">@lang('1 number minimum')</p>
                                      <p class="error special">@lang('1 special character minimum')</p>
                                      <p class="error minimum">@lang('6 character password')</p>
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="confirm_password">@lang('Confirm Password')</label>
                                <input id="password_confirmation" type="password" class="form--control" name="password_confirmation" placeholder="@lang('Enter confirmation password')" required autocomplete="current-password">
                            </div>
                            <div class="form-group row pt-5">
                                <div class="col-sm-12 text-center">
                                    <button type="submit" class="btn btn--base w-100">@lang('Change Password')</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
@push('style')
<style>
    .hover-input-popup {
        position: relative;
    }
    .hover-input-popup:hover .input-popup {
        opacity: 1;
        visibility: visible;
    }
    .input-popup {
        position: absolute;
        bottom: 70%;
        left: 50%;
        width: 280px;
        background-color: #1a1a1a;
        color: #fff;
        padding: 20px;
        border-radius: 5px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        -ms-border-radius: 5px;
        -o-border-radius: 5px;
        -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
        transform: translateX(-50%);
        opacity: 0;
        visibility: hidden;
        -webkit-transition: all 0.3s;
        -o-transition: all 0.3s;
        transition: all 0.3s;
    }
    .input-popup::after {
        position: absolute;
        content: '';
        bottom: -19px;
        left: 50%;
        margin-left: -5px;
        border-width: 10px 10px 10px 10px;
        border-style: solid;
        border-color: transparent transparent #1a1a1a transparent;
        -webkit-transform: rotate(180deg);
        -ms-transform: rotate(180deg);
        transform: rotate(180deg);
    }
    .input-popup p {
        padding-left: 20px;
        position: relative;
    }
    .input-popup p::before {
        position: absolute;
        content: '';
        font-family: 'Line Awesome Free';
        font-weight: 900;
        left: 0;
        top: 4px;
        line-height: 1;
        font-size: 18px;
    }
    .input-popup p.error {
        text-decoration: line-through;
    }
    .input-popup p.error::before {
        content: "\f057";
        color: #ea5455;
    }
    .input-popup p.success::before {
        content: "\f058";
        color: #6EBB2D;
    }
</style>
@endpush
@push('script-lib')
<script src="{{ asset('assets/global/js/secure_password.js') }}"></script>
@endpush
@push('script')
<script>
    (function ($) {
        "use strict";
        @if($general->secure_password)
            $('input[name=password]').on('input',function(){
                secure_password($(this));
            });
        @endif
    })(jQuery);
</script>
@endpush
