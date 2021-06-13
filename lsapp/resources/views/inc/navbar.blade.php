{{-- <nav class="navbar navbar-inverse navbar-fixed-top"> --}}
<nav class="navbar navbar-inverse">   
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/lsapp/public">{{config('app.name', 'LSAPP2')}}</a>
      </div>
      {{-- <div id="navbar" class="collapse navbar-collapse"> --}}
      <div id="navbar">
        <ul class="nav navbar-nav">
          <li><a href="/lsapp/public">Home</a></li>
          <li><a href="/lsapp/public/about">About</a></li>
          <li><a href="/lsapp/public/services">Services</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>