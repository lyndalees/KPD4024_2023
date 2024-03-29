<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
    box-sizing: border-box;
}
img {
    width: 100%;
    height: auto;
}
.row:after {
    content: "";
    clear: both;
    display: table;
}
[class*="col-"] {
    float: left;
    padding: 15px;
    width: 100%;
}
@media only screen and (min-width: 600px) {
    .col-s-1 {width: 8.33%;}
    .col-s-2 {width: 16.66%;}
    .col-s-3 {width: 25%;}
    .col-s-4 {width: 33.33%;}
    .col-s-5 {width: 41.66%;}
    .col-s-6 {width: 50%;}
    .col-s-7 {width: 58.33%;}
    .col-s-8 {width: 66.66%;}
    .col-s-9 {width: 75%;}
    .col-s-10 {width: 83.33%;}
    .col-s-11 {width: 91.66%;}
    .col-s-12 {width: 100%;}
}
@media only screen and (min-width: 768px) {
    .col-1 {width: 8.33%;}
    .col-2 {width: 16.66%;}
    .col-3 {width: 25%;}
    .col-4 {width: 33.33%;}
    .col-5 {width: 41.66%;}
    .col-6 {width: 50%;}
    .col-7 {width: 58.33%;}
    .col-8 {width: 66.66%;}
    .col-9 {width: 75%;}
    .col-10 {width: 83.33%;}
    .col-11 {width: 91.66%;}
    .col-12 {width: 100%;}
}
html {
    font-family: "Lucida Sans", sans-serif;
}
.header {
    background-color: darkred;
    color: #ffffff;
    padding: 15px;
}
.menu ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}
.menu li {
    padding: 8px;
    margin-bottom: 7px;
    background-color :pink;
    color: #ffffff;
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}
.menu li:hover {
    background-color: #f08080;
}
.aside {
    background-color: #f08080;
    padding: 15px;
    color: #ffffff;
    text-align: center;
    font-size: 14px;
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}
.footer {
    background-color: pink;
    color: #ffffff;
    text-align: center;
    font-size: 12px;
    padding: 15px;
}

.active{
	color: white;
}

</style>
</head>
<body>

<div class="header">
  <h1>|     SYARIKAT MOBILE SDN. BHD.    |</h1>
</div>

<div class="row">

<div class="col-3 col-s-3 menu">
  <ul> 			
	<li> <a class="active" href ="index.php">Home</a> </li>
	<li> <a href ="borang.php">Form</a> </li>
	<li> <a href ="contact.php">Contact</a> </li>
	</ul>
</div>

<div class="col-6 col-s-9">
<center>
  <h1>Pengenalan<h1>
 <h3>Syarikat Mobile Sdn. Bhd merupakan sebuah syarikat menjual pelbagai jenis telefon bimbit, aksesori telefon bimbit dan jualan
 produk topup.Alamat syarikat ini ialah Syarikat Mobile Sdn. Bhd, No 566, Jalan Pendidikan, Taman Universiti Skudai, 81300 Skudai
 , Johor. Syarikat ini menjual pelbagai produk topup seperti "Maxxis","Celcom","Digit" dan "Umobil" . Setiap produk topup ini menawarkan
 nilai topup sebanyak RM5, RM10, RM30, dan RM50 kepada pengguna produk topup tersebut


</div>

<div class="col-3 col-s-12">
  <div class="aside">
    <h2>Terma dan syarat</h2>
    <p>Jualan prepaid ini termasuk Gst 0.6%</p>
   
  </div>
</div>

</div>


<div class="footer">
  <p>Sistem penjualan ini tertakluk kepada terma dan syarat</p>
</div>

</body>
</html>

