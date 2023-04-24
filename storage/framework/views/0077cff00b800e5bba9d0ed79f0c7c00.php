<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #00CED1;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #ddd;
  color: black;
  
}

</style>
</head>
<body>

<div class="topnav">
<a href="/"><i class="fa fa-home"></i>Home</a>
<a href="/Neighbourhoods"></i>Neighbourhoods<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-houses-fill" viewBox="0 0 16 16">
  <path d="M7.207 1a1 1 0 0 0-1.414 0L.146 6.646a.5.5 0 0 0 .708.708L1 7.207V12.5A1.5 1.5 0 0 0 2.5 14h.55a2.51 2.51 0 0 1-.05-.5V9.415a1.5 1.5 0 0 1-.56-2.475l5.353-5.354L7.207 1Z"/>
  <path d="M8.793 2a1 1 0 0 1 1.414 0L12 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l1.854 1.853a.5.5 0 0 1-.708.708L15 8.207V13.5a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 4 13.5V8.207l-.146.147a.5.5 0 1 1-.708-.708L8.793 2Z"/>
</svg></a>
<a href="/Contact">Contact</a>
<a href="/About"></i>About<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
  <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
</svg></a>
<a href="/FAQs" ></i>FAQs </a>
<a href="/Login" >Login<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
  <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
</svg></a>


</div>

        <head>
    <title style="color: purple;">Neighbourhoods For You</title>
  </head>
  <head>
    <title>Neighbourhoods For You</title>
    <style>
      h1 {
        color: #333;
        text-align: center;
      }
      
      p {
        font-size: 18px;
        line-height: 1.5;
        margin: 0 auto;
        max-width: 600px;
        padding: 20px;
      }
    </style>  
  </head>
  <body>
 

        <title>FAQ page</title>

        <style type="text/css">
      body{
        background: #eee;
        padding-top: 20px;
        font-family: monospace;
      }
      .header{
        border-radius: 20px 20px 0px 0px;
        padding: 10px 0px;
        background: purple;
        color: #fff;
        width: 100%;
        display: flex;
        align-content: center;
        justify-content: center;
      }
      .faq-item{
        margin-bottom: 40px;
        margin-top: 40px;
      }
      .faq-body{
        display: none;
        margin-top: 30px;
      }
      .faq-wrapper{
        width: 75%;
        margin: 0 auto;
      }
      .faq-inner{
        padding: 30px;
        background: aliceblue;
      }
      .faq-plus{
        float: right;
        font-size: 1.4em;
        line-height: 1em;
        cursor: pointer;
      }
      hr{
        background-color: #9b9b9b;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="faq-wrapper">
         
          <div class="faq-inner">
            <div class="faq-item">
              <h3>
                How do look at the attributes of the neighbourhoods?
                <span class="faq-plus">&plus;</span>
              </h3>
              <div class="faq-body">
              if you want to view different neighbourhoods and there attributes you are easily able to do so as when you click the read more section it takes you to a page with the neighbourhood of your choice and it will show you their attributes. <a href="/Neighbourhoods">Link</a>
            </div>
            </div>
            <hr>
            <div class="faq-item">
              <h3>
                How do i look at different types of neighbourhoods?
                <span class="faq-plus">&plus;</span>
              </h3>
              <div class="faq-body">
              when clicking on the <a href="/Neighbourhoods">Link</a> it will take you to the neighbourhoods page allowing you to view different neighbourhoods and if you want to see a neighbourhood with the most shops you simply go onto the left navbar and you have a variety of choosings.
            </div>
            </div>
            <hr>
            <div class="faq-item">
              <h3>
                What is this website about
                <span class="faq-plus">&plus;</span>
              </h3>
              <div class="faq-body">
             if you go to the <a href="/About">About</a>page it will allow you to understand what this website serves and its purpose for it.
            </div>
            </div>
            <hr>
            <div class="faq-item">
              <h3>
                Do you have a favourite page where i can come back after looking at neighbourhoods?
                <span class="faq-plus">&plus;</span>
              </h3>
              <div class="faq-body">
             No but it is in the works as it will allow the users to explore different neighbourhoods with ease.
            </div>
            </div>
            <hr>
            <div class="faq-item">
              <h3>
                What is an FAQ page ?
                <span class="faq-plus">&plus;</span>
              </h3>
              <div class="faq-body">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript">
      $(".faq-plus").on('click',function(){
        $(this).parent().parent().find('.faq-body').slideToggle();
      });
    </script>
  </body>

</html>
<?php /**PATH C:\xampp\htdocs\Neighbourhoods-For-You\resources\views/FAQs.blade.php ENDPATH**/ ?>