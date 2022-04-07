<!DOCTYPE html>
<html lang="en">
   <!-- Basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
   <!-- Site Metas -->
   <title>Soccer FC</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- Site Icons -->
   <link rel="shortcut icon" href="" type="image/x-icon" />
   <link rel="apple-touch-icon" href="">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- Site CSS -->
   <link rel="stylesheet" href="style.css">
   <!-- Colors CSS -->
   <link rel="stylesheet" href="css/colors.css">
   <!-- ALL VERSION CSS -->	
   <link rel="stylesheet" href="css/versions.css">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- Custom CSS -->
   <link rel="stylesheet" href="css/custom.css">
   <!-- font family -->
   <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
   <!-- end font family -->
   <link rel="stylesheet" href="css/3dslider.css" />
   <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
   <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
   <script src="js/3dslider.js"></script>
   </head>
   <body class="game_info" data-spy="scroll" data-target=".header">
      
      <section id="top">
         <header>
            <div class="container">
               <div class="header-top">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="full">
                           <div class="logo">
                             <center> <a href="index.html"><img src="images/logo.png" alt="#" /></a></center>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="right_top_section">
                           <!-- button section -->
                           <ul class="login">
                              <li class="login-modal">
                                 <a href="{{ url('login') }}" class="login"><i class="fa fa-user"></i>Login</a>
                              </li>
                              <li>
                                 <div class="cart-option">
                                    <a href="{{ url('register') }}"><i class="fa fa-shopping-cart"></i>Register</a>
                                 </div>
                              </li>
                           </ul>
                           <!-- end button section -->
                        </div>
                     </div>
                  </div>
               </div>
             
            </div>
         </header>
         <div class="full-slider">
            <div id="carousel-example-generic" class="carousel slide">
               <!-- Indicators -->
               <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
         
               </ol>
               <!-- Wrapper for slides -->
               <div class="carousel-inner" role="listbox">
                  <!-- First slide -->
                  <div class="item active deepskyblue" data-ride="carousel" data-interval="5000">
                     
                  </div>
                  <!-- /.item -->
                  
                 
               </div>
               <!-- /.carousel-inner -->
               <!-- Controls -->
               
            </div>
            <!-- /.carousel -->
           
         </div>
      </section>

      <div class="team-holder theme-padding">
         <div class="container">
            <div class="main-heading-holder">
               <div class="main-heading sytle-2">
                  <h2>Meet Your Team</h2>
                  <p>A football club is a type of sports club which is an organized or incorporated body.<br> Typically these will have a committee, secretary, president or chairperson</p>
               </div>
            </div>
            <div id="team-slider">
               <div class="container">
                  <div class="col-md-3">
                     <div class="team-column style-2">
                        <img src="images/mbappe.png" alt="">
                        <div class="player-name">
                           <div class="desination-2">Forwader</div>
                           <h5>Mbappe</h5>
                           <span class="player-number">12</span>
                        </div>
                       
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="team-column style-2">
                        <img src="images/neymar.png" alt="">
                        <div class="player-name">
                           <div class="desination-2">Forwarder</div>
                           <h5>Neymar</h5>
                           <span class="player-number">12</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="team-column style-2">
                        <img src="images/messi.png" alt="">
                        <div class="player-name">
                           <div class="desination-2">Forwader</div>
                           <h5>Leo Messi</h5>
                           <span class="player-number">12</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="team-column style-2">
                        <img src="images/ramos.png" alt="">
                        <div class="player-name">
                           <div class="desination-2">Defender</div>
                           <h5>Sergio Ramos</h5>
                           <span class="player-number">12</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="matchs-info">
         <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="row">
               <div class="full">
                  <div class="matchs-vs">
                     <div class="vs-team">
                        <div class="team-btw-match">
                           <ul>
                              <li>
                                 <img src="images/img-03.png" alt="">
                                 <span>Uinted Club</span>
                              </li>
                              <li class="vs"><span>vs</span></li>
                              <li>
                                 <img src="images/img-04.png" alt="">
                                 <span>Football Champions</span>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="row">
               <div class="full">
                  <div class="right-match-time">
                     <h2>Next Match</h2>
                     <ul id="countdown-1" class="countdown">
                        <li><span class="days">10 </span>Day </li>
                        <li><span class="hours">5 </span>Hours </li>
                        <li><span class="minutes">25 </span>Minutes </li>
                        <li><span class="seconds">10 </span>Seconds </li>
                     </ul>
                     <span>12/04/2022 /19:00pm</span>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <section id="contant" class="contant">
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-sm-4 col-xs-12">
                  <div class="content-widget top-story" style="background: url(images/top-story-bg.jpg);">
                     <div class="top-stroy-header">
                        <h2>Rules of Football</h2>
                     </div>
                     <div style="padding: 30px ">
                        <p>Normal play consists of two teams of 11 players on field </p>
                        <p>There are usually three ‘time-outs’ per half for each team,</p>
                        <p>The purpose of the game is to move the ball into the opposition's ‘end zone’,</p>
                        <p>A touchdown is scored when a team crosses the opposition's goal pne with the ball, or catches or collects the ball in the end zone.</p>
                        <p>A team will usually attempt these on the fourth down - if the kicker is close enough to the end zone to kick the ball through between the upright posts.</p>
                     </div>
                  </div>
                  <h4>Match Fixture</h4>
                  <aside id="sidebar" class="left-bar">
                     <div class="feature-matchs">
                        <div class="team-btw-match">
                           <ul>
                              <li>
                                 <img src="images/img-01_002.png" alt="">
                                 <span>Sunderland</span>
                              </li>
                              <li class="vs"><span>vs</span></li>
                              <li>
                                 <img src="images/img-02.png" alt="">
                                 <span>Liverpool</span>
                              </li>
                           </ul>
                           <ul>
                              <li>
                                 <img src="images/img-03_002.png" alt="">
                                 <span>Sunderland</span>
                              </li>
                              <li class="vs"><span>vs</span></li>
                              <li>
                                 <img src="images/img-04_003.png" alt="">
                                 <span>Norwich City</span>
                              </li>
                           </ul>
                           <ul>
                              <li>
                                 <img src="images/img-05_002.png" alt="">
                                 <span>Liverpool</span>
                              </li>
                              <li class="vs"><span>vs</span></li>
                              <li>
                                 <img src="images/img-06.png" alt="">
                                 <span>Chelsea</span>
                              </li>
                           </ul>
                           <ul>
                              <li>
                                 <img src="images/img-07_002.png" alt="">
                                 <span>Norwich City</span>
                              </li>
                              <li class="vs"><span>vs</span></li>
                              <li>
                                 <img src="images/img-08.png" alt="">
                                 <span>West Brom</span>
                              </li>
                           </ul>
                          
                        </div>
                     </div>
                  </aside>
                  <h4>Points Table</h4>
                  <aside id="sidebar" class="left-bar">
                     <div class="feature-matchs">
                        <table class="table table-bordered table-hover">
                           <thead>
                              <tr>
                                 <th>#</th>
                                 <th>Team</th>
                                 <th>P</th>
                                 <th>W</th>
                                 <th>L</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>1</td>
                                 <td><img src="images/img-01_004.png" alt="">Liverpool</td>
                                 <td>10</td>
                                 <td>12</td>
                                 <td>20</td>
                              </tr>
                              <tr>
                                 <td>2</td>
                                 <td><img src="images/img-02_002.png" alt="">Chelsea</td>
                                 <td>10</td>
                                 <td>12</td>
                                 <td>20</td>
                              </tr>
                              <tr>
                                 <td>3</td>
                                 <td><img src="images/img-03_003.png" alt="">Norwich City</td>
                                 <td>20</td>
                                 <td>15</td>
                                 <td>20</td>
                              </tr>
                              <tr>
                                 <td>4</td>
                                 <td><img src="images/img-04_002.png" alt="">West Brom</td>
                                 <td>60</td>
                                 <td>10</td>
                                 <td>60</td>
                              </tr>
                              <tr>
                                 <td>5</td>
                                 <td><img src="images/img-05.png" alt="">sunderland</td>
                                 <td>30</td>
                                 <td>06</td>
                                 <td>30</td>
                              </tr>
                             
                           </tbody>
                        </table>
                     </div>
                  </aside>
                 
               </div>
               <div class="col-lg-8 col-sm-8 col-xs-12">
                  <h2>Quotes by Footballers</h2>
                  <div class="news-post-holder">
                     @foreach ($quotes as $quote)
                        <div class="news-post-widget">
                           <div class="news-post-detail">
                              <p>{{ $quote->description }} - <b>{{ $quote->author }}</b></p> 
                           </div>
                        </div>
                     @endforeach
                  </div>
               </div>
              
               <div class="content-widget top-story"  style="background: url(images/top-story-bg.jpg);">
                  <div class="top-stroy-header">
                     <h2>Latest News</h2> <span>Fetch from <a href="newsapi.org">newsapi</a></span>
                  </div>
                  <div style="padding: 30px" id="news">
                    
                  </div>
               </div>
            </div>

         </div>
      </section>
      

      <footer id="footer" class="footer">
         
         <div class="footer-bottom">
            <div class="container">
               <p>Copyright © 2022 </p>
            </div>
         </div>
      </footer>

      <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
      <!-- ALL JS FILES -->
      <script src="js/all.js"></script>
      <!-- ALL PLUGINS -->
      <script src="js/custom.js"></script>

      <script>
        fetch('https://newsapi.org/v2/everything?q=football&from=2022-04-03&to=2022-04-03&apiKey=a806d423ffec4070add781990cae44a3')
         .then(response => response.json())
         .then((data) => {
            const articles = data.articles;
            const divg = document.getElementById('news')
            for(let article of articles) {

               let p = document.createElement("p");
               var text = document.createTextNode(article.title); 
               p.appendChild(text);
               news.appendChild(p);
               console.log(article.title);
            }
            
         });
      </script>

   </body>
</html>