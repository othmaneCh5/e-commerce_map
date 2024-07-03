@extends('user.layouts.app')
@section('content')
    <div class="page-heading contact-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>contact us</h4>
              <h2>let’s get in touch</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="find-us">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Our Location on Maps</h2>
            </div>
          </div>
          <div class="col-md-8">
            <div id="map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3307.080634297762!2d-6.83646462563912!3d34.01614111963797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda76b87747297eb%3A0xba53842a8694bfa9!2s.MAP%2C%20Rabat%20Hassan!5e0!3m2!1sen!2sma!4v1719398958987!5m2!1sen!2sma" width="100%" height="330px" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
          <div class="col-md-4">
            <div class="left-content">
              <h4>About our office</h4>
              <p>Créée le 18 novembre 1959, l’Agence Maghreb Arabe Presse (MAP) est l’Agence Marocaine de Presse qui développe une information complète, diversifiée et objective couvrant toute l’actualité nationale et internationale.</p>
              <ul class="social-icons">
                <li><a href="https://www.facebook.com/agencemarocainedepresse/"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://www.instagram.com/agence_map/"><i class="fa fa-instagram"></i></a></li>
                <li><a href="https://www.linkedin.com/company/maghreb-arabe-presse"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="https://www.linkedin.com/company/maghreb-arabe-presse"><i class="fa fa-youtube"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="send-message">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Send us a Message</h2>
            </div>
          </div>
          <div class="col-md-12">
            <div class="contact-form">
              <form id="contact" action="/message" method="post">
                @csrf
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="filled-button">Send Message</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
@endsection
    