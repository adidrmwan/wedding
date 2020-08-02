<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Adi and Astrid are getting married</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


        <!-- Styles -->
        <style>
            body{
              background:rgba(181,204,189,1);
                height:4600px;
            }   

            /* foreground (balloons/landscape)*/
            div#parallax-bg-1{
                position: fixed;
                width: 1200px;
                top: 0;
                left: 50%; 
                margin-left: -600px; 
                z-index: 1;
            }
            /* background middle layer*/
            div#parallax-bg-2{
                position: fixed;
                width: 1200px;
                top: 0;
                left: 50%; 
                margin-left: -600px; 
                z-index: 2;
            }
            /* background layer */
            div#parallax-bg-3{
                position: fixed;
                width: 960px;
                top: 0;
                left: 50%; 
                margin-left: -470px; 
                z-index: 3;
            }
            /* foreground */
            div#parallax-bg-3 div{
                background-repeat:no-repeat;
                position:absolute;
                display:block;
                overflow:hidden;
                
            }
            div#bg-3-1{
                background:url('images/balon-web.png');
                width:530px;
                height:758px;
                top:150px;
                left: calc(50% - 500px/2); 
                -webkit-animation:balloons 6s ease-in-out infinite;
                -moz-animation:balloons 6s ease-in-out infinite;
                -o-animation:balloons 6s ease-in-out infinite;
                animation:balloons 6s ease-in-out infinite;
                animation-duration:10s;
                z-index: 4;
            }
            
            @keyframes balloons {
              0%,100%{ transform:translateY(0) rotate(-4deg); }
              50%{ transform:translateY(-25px) rotate(4deg); }
            }

            @media (min-width: 360px) and (max-width: 640px) {
                div#bg-3-1 {
                    background:url('images/balon-mobile.png');
                    width:265px;
                    height:379px;
                    top:150px;
                    left:calc(50% - 280px/2); 
                }
              
                div#bg-2-1{
                    width: 10%;
                    height: auto;
                }

                div#parallax-bg-2 div{
                    background-repeat:no-repeat;
                    position:absolute;
                    display:block;
                    top: 100px;
                    left: calc(50% + 105px/2);
                }  
            }

            div#bg-3-2{
                background:url('http://schulzmarcel.de/x/drafts/parallax/img/balloon2.png');
                width:603px;
                height:583px;
                top:1050px;
                right:70px;
            }
            div#bg-3-3{
                background:url('http://schulzmarcel.de/x/drafts/parallax/img/balloon3.png');
                width:446px;
                height:713px;
                top:1800px;
                right:110px;
            }
            div#bg-3-4{
                width:250%;
                height:auto;
                top: 3150px;
                right: -500px;
            }
            /* middle layer clouds */
            div#parallax-bg-2 div{
                /*background:url('http://schulzmarcel.de/x/drafts/parallax/img/cloud-lg1.png');*/
                background-repeat:no-repeat;
                position:absolute;
                display:block;
                /*width:488px;
                height:138px;*/
                /*overflow:hidden;*/
            }

            div#bg-2-1{
                top:200px;
                left:950px;

            }
            div#bg-2-2{
                top:270px;
                right:-70px;
            }
            div#bg-2-3{
                top:870px;
                left:-300px;
            }
            div#bg-2-4{
                top:1120px;
                right:-130px;
            }
            div#bg-2-5{
                top:1620px;
                left:140px;
            }
            div#bg-2-6{
                top:720px;
                left:340px;
            }

            /*background layer clouds */
            div#parallax-bg-1 div{
                background-repeat:no-repeat;
                position:absolute;
                display:block;
                /*overflow:hidden;*/
            }
            div#bg-1-1{
                top:100px;
                left:1000px;
            }
            .sun {
                width:150%;
                height:auto;
            }
            .ground {
                width:150%;
                height:auto;
            }
            div#bg-1-2{
                background-image:url('http://schulzmarcel.de/x/drafts/parallax/img/cloud-lg2.png');
                top:420px;
                left:0px;

            }
            div#bg-1-3{
                background:url('http://schulzmarcel.de/x/drafts/parallax/img/cloud-sm1.png');
                top:850px;
                right:-290px;
            }
            div#bg-1-4{
                background:url('http://schulzmarcel.de/x/drafts/parallax/img/cloud-sm1.png');
                top:1350px;
                left:200px;
            }
            div#bg-1-5{
                background:url('http://schulzmarcel.de/x/drafts/parallax/img/cloud-lg2.png');
                top:1200px;
                left:-200px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div id="parallax-bg-3">
                <div id="bg-3-1"></div>
<!--                 <div id="bg-3-2"></div>
                <div id="bg-3-3"></div> -->
                <div id="bg-3-4"><img src="images/ground.png" class="ground"></div>
            </div>
            <div id="parallax-bg-2">
                <div id="bg-2-1"><img src="images/sun.png" class="sun"></div>
                <div id="bg-2-2"></div>
                <div id="bg-2-3"></div> 
                <div id="bg-2-4"></div>
                <div id="bg-2-5"></div>
                <div id="bg-2-6"></div>
            </div>
            <div id="parallax-bg-1" class="parallax-bg">
                <div id="bg-1-1"></div>
                <div id="bg-1-2"></div>
                <div id="bg-1-3"></div>
                <div id="bg-1-4"></div>
                <div id="bg-1-5"></div>
            </div>

        </div>
    </body>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.blImageCenter.js"></script>
    <script type="text/javascript">

    jQuery(document).ready(function(){
      $(window).scroll(function(e){
        parallaxScroll();
        });
         
        function parallaxScroll(){
            var scrolled = $(window).scrollTop();
            $('#parallax-bg-1').css('top',(0-(scrolled*.25))+'px');
            $('#parallax-bg-2').css('top',(0-(scrolled*.4))+'px');
            $('#parallax-bg-3').css('top',(0-(scrolled*.75))+'px');
        }
     
     }); 

    var windw = this;

    $.fn.followTo = function ( pos ) {
        var $this = this,
            $window = $(windw);
        
        $window.scroll(function(e){
            if ($window.scrollTop() > pos) {
                $this.css({
                    position: 'absolute',
                    top: pos
                });
            } else {
                $this.css({
                    position: 'fixed',
                    top: 150,
                    "margin-left" : 10

                });
            }
        });
    };

    $('#bg-3-1').followTo(100000000);
    </script>
</html>
