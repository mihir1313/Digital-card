<!DOCTYPE html>
<html>
<head>
<style>

  .container {
    width: 435px;
    height: 90%;
    background-color: lightblue;
    background-image: url('{{ public_path('ABC.jpg') }}');
    background-size: cover; 
    /*background-position: center center; */
    /*margin: 0 auto;*/
    text-align: center;
  }

  .main {
    width: 70%;
    text-align: -webkit-center;
    float: right;
    margin-top: 30px;
}

.main a {
    display: block;
    margin-bottom: 28px; 
  }
.web{
  font-size: 12px;
  margin-left: 95px;
  margin-top: 40px;
}
.address{
  text-align: justify;
  font-size: 12px;
  margin-left: 92px;
}
.heading{
  font-size: 25px;
  margin:30px 0px 0px 100px;
}
.mail{
  margin-top: 26px;
  margin-left: 94px;
  font-size: 15px;
}
.num{
  margin:10px 0px 0px 0px !important;
  text-align: start !important;
}
.para{
  margin:0px 0px 0px 100px;
}
</style>
</head>
<body>
  <div class="container">
    <h3></h3>
    <h3 class="heading">Narendra Madhu Associates</h3>
    <p class="para">Law firm</p>
    <div class="main">
      <a class="num" href="9687541230">+91 9687541230</a>
      <a class="mail" href="narendramadhu.legal@gmail.com">narendramadhu.legal@gmail.com</a>
      <a class="web" href="https://ecard.narendramadhuassociates.com/">https://ecard.narendramadhuassociates.com/</a>
      <a class="address" href="mail@gmail.com">906-907, Satyam 64, S. G. Highway, Sola, Ahmedabad - 380060 (Opposites Gujarat High Court)</a>

    </div>
  </div>
</body>
</html>
