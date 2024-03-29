{{--<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Test Email</title>
</head>
<body>

<h1>{{$details['title']}} has submitted review</h1>
<p>{{$details['body']}}</p>
<p>Company name: {{$details['company']}}</p>
<p>With {{$details['ratings']}} Star Ratings</p>
<p>Thank you, stay with Vimbiso</p>

</body>
</html> --}}

 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Test Email</title>

	<style type="text/css">
       

@import url("https://fonts.googleapis.com/css?family=Varela+Round");
* {
  margin: 0;
  padding: 0;
  font-family: Varela Round, "Segoe UI", "Arial", "san serif";
}

img {
  display: inline-block;
}

.container {
  max-width: 500px;
  margin: 20px auto;
  border-radius: 4px;
  border: 1px solid rgba(0, 0, 0, 0.1);
  min-height: 100px;
  position: relative;
}
.container::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 3px;
  background: linear-gradient(to right, #0267C1, #D65108);
}

.logo {
  display: flex;
  margin: 30px auto 0;
  align-items: center;
  justify-content: center;
}
.logo a {
  display: block;
  width: 30px;
  height: 30px;
}
.logo img {
  width: 180px;
}
.logo .c-name {
  display: inline-block;
  font-weight: 600;
}

.thumbs {
  width: 100px;
  margin: auto;
  height: 136px;
}
.thumbs img {
  width: 100%;
}

.illustration {
  width: 100%;
  text-align: center;
  box-shadow: 0 10px 20px -5px rgba(0, 0, 0, 0.05);
  border-radius: 0 0 50% 50%/1%;
  text-align: center;
}

.illustration img {
  width: 70%;
  margin: 50px auto;
}

.separator {
  display: block;
  height: 3px;
  width: 70%;
  margin: 10px auto;
  background-color: rgba(0, 0, 0, 0.05);
  border-radius: 10px;
  position: relative;
  overflow: hidden;
}
.separator::before, .separator::after {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  width: 33%;
  border-radius: inherit;
  opacity: 0.05;
}
.separator::before {
  left: 0;
  background: #EFA00B;
}
.separator::after {
  left: initial;
  right: 0;
  background: #D65108;
}

.hgroup {
  text-align: center;
  padding: 50px 30px 30px;
}

.name {
  display: block;
  color: #0267C1;
  font-weight: 600;
  font-size: 1.1rem;
}

.hgroup h1 {
  font-size: 20px;
  font-weight: 600;
  color: #333;
}

.hgroup h2 {
  font-size: 19px;
}

.hgroup p {
  font-size: 15px;
  color: slategrey;
  margin-top: 15px;
  text-align: justify;
  line-height: 25px;
}

.items {
  padding: 30px;
  display: grid;
  grid-template-columns: repeat(2, 1fr);
}

.item {
  margin-bottom: 10px;
  text-align: center;
  width: 100%;
  margin: 0 auto 50px;
}

.item .icon {
  margin-bottom: 10px;
}

.item .icon img {
  width: 60px;
}

.item .title {
  margin-bottom: 5px;
  font-size: 16px;
  font-weight: 600;
}

.item .subtitle {
  font-size: 13px;
  color: slategrey;
  padding: 1rem;
}

.button-wrap {
  text-align: center;
  padding: 2rem;
}

button.explore {
  padding: 15px 25px;
  font: inherit;
  background: linear-gradient(to right, #0267C1, #0280EF);
  border-radius: 50px;
  border: 0;
  color: #fff;
  margin: auto;
  display: inline-block;
  transition: all 0.2s ease-in-out;
  cursor: pointer;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
}

button.explore:hover {
  transform: translateY(-5px);
  box-shadow: 0 15px 10px -7px rgba(0, 0, 0, 0.1);
}

footer {
  font-size: 12px;
  color: slategrey;
  text-align: center;
  padding: 30px;
}

.rad {
  margin: 0 !important;
  text-align: center !important;
  font-size: 18px !important;
}

.raised {
  font-size: 16px;
  color: #777;
  display: block;
  color: steelblue;
}




	</style>

</head>
<body>

<div class="container">
  <div class="logo"><img src="https://vimbiso.org/images/vimbiso_logo.png" alt="cc-logo" border="0">
  </div>
  <div class="illustration">
    <div class="hgroup">
      <span class="name">{{$details['title']}} has submitted review</span>
      <h1>Company name: {{$details['company']}}</h1>
	  <p>With {{$details['ratings']}} Star Ratings</p>
      <div class="thumbs">
        <a href="https://vimbiso.org/"><img src="https://vimbiso.org/images/logo-no-bg-2.png" alt="good" border="0"></a>
      </div>
      <!-- <p class="rad">Rad stuff is here</p> -->
    </div>
  </div>

  <div class="hgroup">
  
    {{$details['body']}}

  </div>

  <!-- <div class="hgroup">
    <h2>What we offer</h2>
  </div>
  <div class="items">
    <div class="item">
      <div class="icon">
        <img src="https://i.ibb.co/tHZQHTB/desktop.png" alt="desktop" border="0">
      </div>
      <div class="title">Advance Backend</div>
      <div class="subtitle">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet sed culpa cupiditate?
      </div>
    </div>
    <div class="item">
      <div class="icon">
        <img src="https://i.ibb.co/zSD3NkX/smartphone.png" alt="smartphone" border="0">
      </div>
      <div class="title">Mobile Platform</div>
      <div class="subtitle">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet sed culpa cupiditate?
      </div>
    </div>
  </div> -->
  <div class="button-wrap">
  Thank you, stay with Vimbiso
  {{--<button class="explore">
      Explore
    </button>--}}
  </div>
  <footer>
     Vimbiso © 2022
    <br>
    www.vimbiso.org
    <br>
    info@vimbiso.org
  </footer>
</div>



</body>
</html> 