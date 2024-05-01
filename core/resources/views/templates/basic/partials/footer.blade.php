@php
    $footer = getContent('footer.content', true);
    $contact = getContent('contact_us.content', true);
    $socials = getContent('social_icon.element');
    $policyPages = getContent('policy_pages.element');
@endphp
<footer class="footer footer__bottom bg_img" style="background-image: url('{{ getImage('assets/images/frontend/footer/'.$footer->data_values->background_image, '1920x840') }}');">      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <p>&copy; {{ date('Y') }} {{ __($general->sitename ) }}. @lang('All Right Reserved')</p>
          </div>
        </div>
  </footer>
