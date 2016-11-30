@extends('app.app')
@section('content')

  <nav style="background-color: #5fc775 !important" class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><img style="max-width: 62px;max-height: 62px" src="{{url('icon/mosquegreen.png')}}"><a id="logo-container" href="#" class="brand-logo">TimeToSholat</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="http://muslimsalat.com/">MuslimSalatAPI</a></li>
      </ul>

      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 style="color: #09541a !important" class="header center orange-text">Sholatlah sebelum di Sholatkan</h1>
      <div class="row center">
        <h5 class="header col s12 light" id="place"></h5>
      </div>
      <!-- <div class="row center">
        <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light orange">Get Started</a>
      </div> -->
      <br><br>

    </div>
  </div>

  <div class="container">
    <div class="section">
    <div class="row">
        <div class="col s4 m4">
          <div class="card blue-grey darken-1">
            <div style="background-color: #a9a4a4" class="card-content white-text">
              <span class="card-title"><i class="fa fa-clock-o" aria-hidden="true"></i> Subuh</span>
              <div id="SubuhTime">
		
			  </div>
            </div>
          </div>
        </div>

        <div class="col s4 m4">
          <div class="card blue-grey darken-1">
            <div style="background-color: #ecad39" class="card-content white-text">
              <span class="card-title"><i class="fa fa-clock-o" aria-hidden="true"></i> Dzuhur</span>
              <div id="DzuhurTime">
		
			  </div>
            </div>
          </div>
        </div> 

        <div class="col s4 m4">
          <div class="card blue-grey darken-1">
            <div style="background-color: #52a4ad" class="card-content white-text">
              <span class="card-title"><i class="fa fa-clock-o" aria-hidden="true"></i> Ashar</span>
              <div id="AsharTime">
		
			  </div>
            </div>
          </div>
        </div>
        </div>

        <div class="row">
        <div class="col s12 m6">
          <div class="card blue-grey darken-1">
            <div style="background-color: #da6a28" class="card-content white-text">
              <span class="card-title"><i class="fa fa-clock-o" aria-hidden="true"></i> Maghrib</span>
              <div id="MaghribTime">
		
			  </div>
            </div>
          </div>
        </div>

        <div class="col s12 m6">
          <div class="card blue-grey darken-1">
            <div style="background-color: #464544" class="card-content white-text">
              <span class="card-title"><i class="fa fa-clock-o" aria-hidden="true"></i> Isya</span>
              <div id="IsyaTime">
		
			  </div>
            </div>
          </div>
        </div>
      </div>


    </div>
    <br><br>

    <div class="section">

    </div>
  </div>

  <footer style="background-color: #5fc775 !important" class="page-footer orange">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Rizda Annisa</h5>
          <p class="grey-text text-lighten-4">Website ini berfungsi untuk menampilkan waktu shalat berdasarkan wilayah anda.</p>


        </div>
        
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="../../bin/materialize.js"></script>
  <script src="js/init.js"></script>
@endsection