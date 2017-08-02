<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Plan of Action</title>

    <!-- Bootstrap Core CSS -->

    <link href="css/blog.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">


</head>

<body>
    <div id="background">
        <?php include("menu.html");?>
        <!-- /.container -->

        <br>
        <br>
        <div class="container banner-post">
            <div class="row">
                <div class="col-xs-12 col-lg-12">
                    <a href="#" id="banner-heading">Be the Best Version of you</a>
                    <br>
                    <a href="#" class="btn btn-lg btn-success">READ MORE</a></div>
            </div>
        </div>
    </div>

    <!--Banner Ends-->
    <div class="container" id="content">

        <br>
        <?php 
            $i=0;
            while ($i<6)
            { echo "
            <div class='pro_part col-xs-12 col-sm-6 col-md-4 col-lg-4'>
      <div class='h1' id='try' style='background-image: url(img/poa.jpg);
background-position: center;background-size:cover;'><a href='#'></a>
<div class='h2'>
          <div class='fl'><span><a>Travel and Adventure</a></span></div><br>
          <div class='f2'><span><a>Top 10 places to visit alone !</a></span></div><br>
          <div class='f3'><span><a>PRABHAT KHANNA</a></span></div>
      </div>
       
        <div class='clear'></div>
      </div>
    </div>
    <div class='pro_part col-xs-12 col-sm-6 col-md-4 col-lg-4'>
      <div class='h1' id='try' style='background-image: url(img/coffee.jpg);
background-position: center;background-size:cover;'><a href='#'></a>
<div class='h2'>
          <div class='fl'><span><a>Food and Lifestyle</a></span></div><br>
          <div class='f2'><span><a>Best Coffee Places!</a></span></div><br>
          <div class='f3'><span><a>Anuj Garg</a></span></div>
      </div>
       
        <div class='clear'></div>
      </div>
    </div>
";
            $i++;
}

            ?>
        
        <div class="row load">
            <div class="col-xs-12 col-sm-12 col-lg-4 col-md-4 col-lg-offset-4 col-md-offset-4"> <a href="#" class="btn btn-lg btn-success">LOAD MORE</a></div></div>
        
        <div class="row">
            <div id="left-wrapper" class="col-xs-12 col-sm-12 col-lg-8 col-md-8">

                <section id="right">

                    <div class="mini-posts">

                        <h2 id="heading">Browse Our Other Genres</h2><br/>

                        
                        <!-- Mini Post -->


                        <article class="mini-post col-xs-12 col-sm-12 col-lg-6 col-md-6">

                            <header>
                                <h3><a href="" id="genre">Lifestyle</a></h3>
                            </header>
                            <a href="" class="image"><img src="img/1.jpg" alt="" /></a>
                        </article>



                        <article class="mini-post col-xs-12 col-sm-12 col-lg-6 col-md-6">

                            <header>
                                <h3><a href="" id="genre">Entertainment</a></h3>
                            </header>
                            <a href="" class="image"><img src="img/event.jpg" alt="" /></a>
                        </article>



                        <article class="mini-post col-xs-12 col-sm-12 col-lg-6 col-md-6">

                            <header>
                                <h3><a href="" id="genre">Art,Culture &amp; Heritage</a></h3>
                            </header>
                            <a href="" class="image"><img src="img/3.jpg" alt="" /></a>
                        </article>

                        <article class="mini-post col-xs-12 col-sm-12 col-lg-6 col-md-6">

                            <header>
                                <h3><a href="" id="genre">Health &amp; Wellness</a></h3>
                            </header>
                            <a href="" class="image"><img src="img/food.jpg" alt="" /></a>
                        </article>



                        <article class="mini-post col-xs-12 col-sm-12 col-lg-6 col-md-6">

                            <header>
                                <h3><a href="" id="genre">Fashion &amp; Beauty</a></h3>
                            </header>
                            <a href="" class="image"><img src="img/fashion.jpg" alt="" /></a>
                        </article>

                        <article class="mini-post col-sm-12 col-xs-12 col-lg-6 col-md-6">

                            <header>
                                <h3><a href="" id="genre">Travel &amp; Adventure</a></h3>
                            </header>
                            <a href="" class="image"><img src="img/travel.jpg" alt="" /></a>
                        </article>

                    </div>
                </section>


            </div>
            <div id="right-wrapper" class="col-xs-12 col-sm-12 col-lg-4 col-md-4">

                <!-- Posts List -->
                <section id="right" class="row">
                    <div>
                        <br>
                        <ul class="posts col-xs-12 col-sm-12 col-lg-12 col-md-12">

                            <h1 id="heading">Recommended for you</h1>

                            <?php 
                            $p=0;
                            while($p<4)
                            {
                                echo"<li style='padding:5px;'>
										<article>
											<header>
												<h3><a href='#' id='genre'>Be the Best Version of you</a></h3>
												<p>By: Prabhat Khanna</p>
												<time class='published' datetime='2017-08-2'>August 2, 2017</time>
											</header>
											<a href='#' class='image'><img src='img/poa.jpg' alt='' /></a>
										</article>
									</li>";
                                $p++;
                            }
                        ?>

                        </ul>
                    </div>
                </section>


            </div>
        </div>
    </div>

    <?php include("footer.html");?>
    

    <script src="js/script.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>

</html>
