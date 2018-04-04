<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta http-equiv="content-type" content="text/html; charset=utf-8" /> 

<title>UniRent</title> 

<link rel="stylesheet" href="style.css" type="text/css" media="screen">

<script type="text/javascript" src="js/jquery-1.7.min.js"></script>
<script type="text/javascript" src="js/jquery.countdown.js"></script>
<script type="text/javascript" src="js/jquery.tipsy.js"></script>
<script type="text/javascript" src="js/jquery.subscribe.js"></script>
<script type="text/javascript" src="js/jquery.contact.js"></script>
<script type="text/javascript" src="js/custom.js"></script>

</head> 
 
<body> 
  <div id="wrapper">
    <header>
      <a class="logo" href="index.php"><img src="images/logo_2.png" alt="logo" title="logo" height="250" width="600"/></a>
    </header>
    
    <div id="book">   
    
      <div id="ribbon" class="contact">clique para revelar o formulário de contacto</div>    
      <div class="top-page"></div>
      
      <div class="content-page">
        <div class="top-spiral"></div>
        <div class="bottom-spiral"></div>
        
        <div id="cform">
          <div class="row"></div>
          <h3>Entre em contacto conosco:</h3>
          <div class="form-wrapper in-touch">
            <div id="message"></div>
            <form method="post" action="php/contact.php" name="contactform" id="contactform">
              <input type="text" name="name" placeholder="Nome" id="name" />
              <input type="text" name="email" placeholder="Email" id="email" />
              <input type="text" name="phone" placeholder="Telemóvel" id="phone" />
              <input type="text" name="subject" placeholder="Assunto" id="subject" />
              <textarea placeholder="Mensagem" name="comments" id="comments"></textarea>
              <div id="captcha">
                <span>3+1=</span>
                <input type="text" name="verify" id="verify" />
              </div>
             
              <input type="submit" name="send" value="ENVIAR" id="submit" class="orange" /> 
            </form>
          </div>
        </div>
      
        <div id="home">
          <div class="row"></div>
          <h2>Estamos atualmente em construção!</h2>          
          <div class="row"></div>
          <div class="row"></div>
          <h3>Estamos trabalhando muito e acreditamos que lançaremos o site em:</h3>
          
          <div id="countdown"></div>  
          <div class="clear"></div>
          <div class="row"></div>
          <div class="form-wrapper email-list">
            <div id="mesaj"></div>
            <form id="subscribe" method="post" action="php/subscribe.php" name="subscribe">
              <input type="text" id="semail" name="YourEmail" placeholder="Subscreva a nossa lista de email" />
             
              <input type="submit" id="ssubmit" name="subscribe" value="SE INSCREVER" class="orange" />
            </form>
          </div>
        </div>
        
      </div>
      
      <div class="bottom-page">
        <ul class="social">

          <li><a class="facebook tooltip" href="#" title="Facebook"></a></li>
          <li><a class="twitter tooltip" href="#" title="Twitter"></a></li>
          <li><a class="skype tooltip" href="#" title="Skype"></a></li>
          
        </ul>
      </div>
    </div>
    
    <p class="copyright">Copyright &copy; UniRent - All Rights Reserved</p>

  </div>
<script type="text/javascript" src="js/jquery.placeholder.js"></script>
</body> 
</html>

