<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Admin Log In</title>
<style>

body{
  background-color: #c7c5f0;
}
input[type=submit] {
  background-color: #643b9f;
  color: #fff;
  padding: 10px 30px;
  font-size: 18px;
  margin-left: 50%;
}
input[type=button] {
  background-color: #fff;
  color: #643b9f;
  padding: 10px 30px;
  font-size: 18px;
  margin-left: 50%;
}

</style>

<link rel="stylesheet" href="https://colorlib.com/etc/regform/colorlib-regform-7/fonts/material-icon/css/material-design-iconic-font.min.css">

<link rel="stylesheet" href="style.css">

<meta name="robots" content="noindex, follow">
<script nonce="a8620b6a-94d4-463b-9a23-45298e5a2253">(function(w,d){!function(f,g,h,i){f[h]=f[h]||{};f[h].executed=[];f.zaraz={deferred:[],listeners:[]};f.zaraz.q=[];f.zaraz._f=function(j){return function(){var k=Array.prototype.slice.call(arguments);f.zaraz.q.push({m:j,a:k})}};for(const l of["track","set","debug"])f.zaraz[l]=f.zaraz._f(l);f.zaraz.init=()=>{var m=g.getElementsByTagName(i)[0],n=g.createElement(i),o=g.getElementsByTagName("title")[0];o&&(f[h].t=g.getElementsByTagName("title")[0].text);f[h].x=Math.random();f[h].w=f.screen.width;f[h].h=f.screen.height;f[h].j=f.innerHeight;f[h].e=f.innerWidth;f[h].l=f.location.href;f[h].r=g.referrer;f[h].k=f.screen.colorDepth;f[h].n=g.characterSet;f[h].o=(new Date).getTimezoneOffset();if(f.dataLayer)for(const s of Object.entries(Object.entries(dataLayer).reduce(((t,u)=>({...t[1],...u[1]})))))zaraz.set(s[0],s[1],{scope:"page"});f[h].q=[];for(;f.zaraz.q.length;){const v=f.zaraz.q.shift();f[h].q.push(v)}n.defer=!0;for(const w of[localStorage,sessionStorage])Object.keys(w||{}).filter((y=>y.startsWith("_zaraz_"))).forEach((x=>{try{f[h]["z_"+x.slice(7)]=JSON.parse(w.getItem(x))}catch{f[h]["z_"+x.slice(7)]=w.getItem(x)}}));n.referrerPolicy="origin";n.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(f[h])));m.parentNode.insertBefore(n,m)};["complete","interactive"].includes(g.readyState)?zaraz.init():f.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>
<body>
<div class="main" style="background-color: #c7c5f0;">

<section class="sign-in">
<div class="container">
<div class="signin-content">
<div class="signin-image">
<figure><img src="4.jpg" alt="sing up image"></figure>
<a href="register.php" class="signup-image-link">अकाऊंट तयार करा</a>
</div>
<div class="signin-form" style="color: #643b9f">
<h2 class="form-title" style="color: #643b9f">ॲडमिन लॉग इन</h2>
<form method="POST" action="log - Copy.php" class="register-form" id="login-form">
<div class="form-group">
<label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
<input type="text" name="name" id="your_name" placeholder="तुमचे नाव" style="color: #643b9f"/>
</div>
<div class="form-group">
<label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
<input type="password" name="pass" id="your_pass" placeholder="पासवर्ड" style="color: #643b9f" />
</div>
<div class="form-group">
  <label for="admin_pass"><i class="zmdi zmdi-lock"></i></label>
<input type="password" name="adminpass" id="admin_pass" placeholder="ॲडमिन पासवर्ड" style="color:#643b9f " />
</div>
<div class="d-flex justify-content-end pt-3">
<button type="button" class="btn btn-light btn-lg" value="Go back!" onclick="history.back()"style="background-color:#ebe7f2; font-family:'Times New Roman';color:#643b9f; padding: 10px 30px;font-size: 18px;margin-left:20px;margin-top: 10%;border: none;border-radius: 5px;margin:10px 20px">मागे जा</button>
<button type="submit" class="btn btn-warning btn-lg ms-2"style="background-color:#643b9f; color:white; padding: 10px 30px;font-family:'Times New Roman';font-size: 18px;margin-top: 10%;border: none;border-radius: 5px;">लॉग इन</button>
</div>
</form>
</div>
</div>
</div>
</section>
</div>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="js/main.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon='{"rayId":"7bb5ed7708f78587","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2023.3.0","si":100}' crossorigin="anonymous"></script>
</body>
</html>