<!DOCTYPE html>
<html lang="en" class="wf-loading">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Cribbb</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.min.css">
</head>
<body>
  <header>
    <nav>
      @if (Auth::check())

<!--
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#">Link</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li class="divider"></li>
          <li><a href="#">Separated link</a></li>
        </ul>
      </li>
    </ul>
-->

        <ul>
          <li class="dropdown">
            <a href="#" class="header-dropdown">{{{$user->username}}}</a>
            <ul>
              <li>Option</li>
              <li>Option</li>
              <li>Option</li>
            </ul>
          </li>
        </ul>
      @else
        <a href="/login" class="button button-grey">Sign in</a>
      @endif
    </nav>
  </header>

  <div class="site-container">
    @yield('content')
  </div>
</body>
<script type="text/javascript">
  (function() {
    var config = {
      kitId: 'vrw3gep',
      scriptTimeout: 3000
    };
    var h=document.getElementsByTagName("html")[0];h.className+=" wf-loading";var t=setTimeout(function(){h.className=h.className.replace(/(\s|^)wf-loading(\s|$)/g," ");h.className+=" wf-inactive"},config.scriptTimeout);var tk=document.createElement("script"),d=false;tk.src='//use.typekit.net/'+config.kitId+'.js';tk.type="text/javascript";tk.async="true";tk.onload=tk.onreadystatechange=function(){var a=this.readyState;if(d||a&&a!="complete"&&a!="loaded")return;d=true;clearTimeout(t);try{Typekit.load(config)}catch(b){}};var s=document.getElementsByTagName("script")[0];s.parentNode.insertBefore(tk,s)
  })();
</script>
</html>
