<?php 
require_once "db/database.php"
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Stream Check</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body class="main">
    <div class="header">
       <div class="information">
               <div class="telephone">Телефон: (499)340-94-71</div>
               <div class="email">Email: 
                    <div class="underline">info@future-group.ru</div>
               </div>
               <div class="header-text">Комментарии</div>
               
       </div>
       <div class="logo">
          <img src="logo.png" width="164" height="175" align="right"></img>
     </div>
    </div>
    <form id="add_comment" method="POST">
    <div class="content_section">
     <div class="content">
          <div class="comments_block" id="comments_block"></div>
          <hr class="spacer">
     </div>
     <div class="comment_section">
               <div class="comment_block_text">Оставить комментарий</div>
                    <div class="user_comment_block">
                         <div class="name_annotation">Ваше имя</div>
                         <input type="text" class="user_name" name="user_name_bl" id="user_name_bl" placeholder="Имя"></input>
                         <div class="comment_annotation">Ваш комментарий</div>
                         <input type="text" name="user_comment_bl" class="user_comment" id="user_comment_bl"></input>
                         <input type="submit" name="btn_send" id="btn_send" class="send_message" value="Отправить"></input>
                    </div>
          </div>
     </div>
     </div>
     </form>
     <div class="footer">
          <div class="footer_logo">
               <img src="logo.png" width="164" height="175" align="right"></img>
          </div>
          <div class="footer_information">
               <div class="telephone">Телефон: (499) 340-94-71</div>
               <div class="email">Email: 
                   <div class="underline"> info@future-group.ru</div>
               </div>
               <div class="address">Адрес: 
                    <div class="underline">115088 Москва, ул. 2-я Машиностроения, д.7 стр.1</div>
               </div>
               <div class="copyright">© 2010 - 2014 Future. Все права защищены</div>
       </div>
     </div>
     <script>
$(document).ready(function(){                     
     $('#btn_send').click(function(e) {           
          var user_name = $('#user_name_bl').val();
          var user_comment =$('#user_comment_bl').val();
               if(($.trim(user_name) != '')&&($.trim(user_comment) != ''))
               {
                $.ajax({
                    type: "POST",
                    url: "insert.php",
                    data: {user_name_bl:user_name,
                              user_comment_bl:user_comment},
                    success: function(data)
                    {
                         console.log(data)
                    }
               });
               e.preventDefault();
               }
     });
     setInterval(function() {
          $('#comments_block').load("load.php").fadeIn("slow");
     }, 1000);
});

</script>
</body>
<script src="../js/script.js"></script>
</html>