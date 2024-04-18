<header class="header">
  <div class="header__bottom">
    <div class="container">
      <nav class="navbar navbar-expand-xl p-0 align-items-center">
        <a class="site-logo site-title" href="{{ route('home') }}"><img src="{{ getImage(imagePath()['logoIcon']['path'] .'/logo.png') }}" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="menu-toggle"></span>
        </button>
        <div class="collapse navbar-collapse mt-lg-0 mt-3" id="navbarSupportedContent">
          <ul class="navbar-nav main-menu ms-auto">
            <li><a href="{{ route('home') }}">@lang('Home')</a></li>
            <li><a href="{{ route('property.search') }}">@lang('Properties')</a></li>
            @foreach($pages as $k => $data)
            <li><a href="{{route('pages', $data->slug)}}">{{__($data->name)}}</a></li>
            @endforeach
            <li><a href="{{ route('blog') }}">@lang('Blog')</a></li>
            <li><a href="{{ route('contact') }}">@lang('Contact')</a></li>
          </ul>
          <div class="nav-right d-flex flex-wrap" style="gap:10px">
            <select class="language-select langSel">
              @foreach($language as $item)
              <option value="{{$item->code}}" @if(session('lang')==$item->code) selected @endif>{{ __($item->name) }}</option>
              @endforeach
<option value="ar" @if(session('lang')=='ar') selected @endif>العربية</option>
<option value="fr" @if(session('lang')=='fr') selected @endif>Français</option>
<option value="es" @if(session('lang')=='es') selected @endif>Español</option>
<option value="de" @if(session('lang')=='de') selected @endif>Deutsch</option>
<option value="pt" @if(session('lang')=='pt') selected @endif>Português</option>
<option value="ru" @if(session('lang')=='ru') selected @endif>Русский</option>
<option value="ja" @if(session('lang')=='ja') selected @endif>日本語</option>
<option value="zh" @if(session('lang')=='zh') selected @endif>中文</option>
<option value="it" @if(session('lang')=='it') selected @endif>Italiano</option>
<option value="hi" @if(session('lang')=='hi') selected @endif>हिन्दी</option>
<option value="ko" @if(session('lang')=='ko') selected @endif>한국어</option>
<option value="tr" @if(session('lang')=='tr') selected @endif>Türkçe</option>
<option value="pl" @if(session('lang')=='pl') selected @endif>Polski</option>
<option value="sv" @if(session('lang')=='sv') selected @endif>Svenska</option>
<option value="nl" @if(session('lang')=='nl') selected @endif>Nederlands</option>
<option value="da" @if(session('lang')=='da') selected @endif>Dansk</option>
<option value="fi" @if(session('lang')=='fi') selected @endif>Suomi</option>
<option value="no" @if(session('lang')=='no') selected @endif>Norsk</option>
<option value="el" @if(session('lang')=='el') selected @endif>Ελληνικά</option>
<option value="cs" @if(session('lang')=='cs') selected @endif>Čeština</option>
<option value="th" @if(session('lang')=='th') selected @endif>ไทย</option>
<option value="vi" @if(session('lang')=='vi') selected @endif>Tiếng Việt</option>
<option value="id" @if(session('lang')=='id') selected @endif>Bahasa Indonesia</option>
<option value="uk" @if(session('lang')=='uk') selected @endif>Українська</option>
<option value="hu" @if(session('lang')=='hu') selected @endif>Magyar</option>
<option value="ro" @if(session('lang')=='ro') selected @endif>Română</option>
<option value="fa" @if(session('lang')=='fa') selected @endif>فارسی</option>
<option value="he" @if(session('lang')=='he') selected @endif>עברית</option>
<option value="tl" @if(session('lang')=='tl') selected @endif>Filipino</option>
<option value="sk" @if(session('lang')=='sk') selected @endif>Slovenský</option>
<option value="bg" @if(session('lang')=='bg') selected @endif>български</option>
<option value="hr" @if(session('lang')=='hr') selected @endif>Hrvatski</option>

            </select>

            @if (!auth()->check() && !auth()->guard('owner')->check())
            <div class="d-flex flex-wrap" style="gap:10px">
              {{-- <a href="{{ route('user.login') }}" class="btn btn-sm btn-outline--base">@lang('User Login')</a>
              <a href="{{ route('owner.login') }}" class="btn btn-sm btn--base">@lang('Owner Login')</a> --}}
            </div>
            @endif

            @auth
            <a href="{{ route('user.home') }}" class="btn btn-sm btn--base">@lang('Dashboard')</a>
            @endauth

            @auth('owner')
            <a href="{{ route('owner.dashboard') }}" class="btn btn-sm btn--base">@lang('Dashboard')</a>
            @endauth


          </div>
        </div>
      </nav>
    </div>
  </div><!-- header__bottom end -->
</header>