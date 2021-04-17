<!doctype html>
<html>
<head>
    <?php include("views/head.php"); ?>
    <style>
    html * {
    font-family: 'Baloo Paaji 2', cursive;
    }
    .container{
        width:500px;
        max-width: 95vw;
        margin: auto;
    }
    .form-group{
        margin-bottom: 4px;
        display: flex;
        flex-wrap: wrap;
    }
    .form-group label{
        width: 40%;
    }
    .form-group input, .form-group textarea{
        width: 55%;
        max-width: 55%;
        min-width: 55%;
    }
    @media (max-width: 400px){
        .form-group label{
            width: 95%;
            margin: 8px 0;
        }
        .form-group input, .form-group textarea{
            width: 95%;
            max-width: 95%;
            min-width: 95%;
        }
    }
    .boton-enviar{
        margin-bottom: 10px;
        background-color: black;
        color: #fff;
        font-size: 18px;
    }
    </style>
</head>
<body>

    <?php include("views/header.php"); ?>

    <div class="section_title"><h1>Contact us</h1></div>
    <div class="section_title"><h2> contacto@modernkitchens.com</h2></div>
 
    
   
        <div class="container-wrapper">
          
            <div class="container">
          <!--  <form method="post" action="mail.php">-->
            <form method="post" action="#">
                  <div class="row">
                      <div class="form-group col-md-6">
                          <label for="inputName">Name *</label>
                          <input name="name" type="text" required="true" class="form-control" id="inputName" placeholder="Name">
                      </div>
                      <div class="form-group col-md-6">
                          <label for="inputEmail">Email *</label>
                          <input name="email"  type="email" required="true" class="form-control" id="inputEmail" placeholder="your@email">
                      </div>
                  </div>
                  <div class="row">                
                      <div class="form-group col-md-6">
                          <label for="inputPhone">Phone or (Whatsapp)</label>
                          <input type="text" name="phone" class="form-control" id="inputPhone" placeholder="+1 234 567 890">
                      </div>
                      <div class="form-group col-md-6">
                          <label for="inputCity">City, Country</label>
                          <input type="text" name="city" class="form-control" id="inputCity" placeholder="City, Country">
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="inputMessage">Mensaje *</label>
                      <textarea required="true" name="message" class="form-control" id="inputMessage" placeholder="Write your message" rows="5"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="inputMessage"></label>
                    <button type="submit" class="boton-enviar">Send</button>
                  </div>
              </form>
             </div>
        </div>
    <script>
        if (document.location.search=="?success=mail_result"){
            alert("Mensaje enviado");
        }
    </script>
</body>