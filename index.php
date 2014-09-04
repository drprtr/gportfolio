<?php include("header.html"); ?>

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('./assets/stock-img/DeathtoStock_Desk5.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Web Development</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('./assets/stock-img/DeathtoStock_Desk3.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Graphic Design</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('./assets/stock-img/DeathtoStock_Desk1.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Project Management</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">


        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Graeme Porter <small>Curriculum Vitae and Digital Portfolio</small>
                </h1>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-cloud"></i> About me</h4>
                    </div>
                    <div class="panel-body">
                        <p>I'm a self motivated and experienced designer-developer currently the e-Learning Manager at Walbottle Campus secondary school in Newcastle. I have several years experience in leading web-design and development of teaching and learning applications.</p>
                        <a href="#about" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Skills and Experience</h4>
                    </div>
                    <div class="panel-body">
                        <p>My current role as e-Learning Manager at Walbotle Campus requires a broad skillset including design, development, project management, client liaison and strategic planning.</p>
                        <a href="#skills" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-th-list"></i> Portfolio</h4>
                    </div>
                    <div class="panel-body">
                        <p>Descriptions of recently completed and current projects at Walbottle Campus.</p>
                        <a href="#portfolio" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->


        <!-- Features Section -->
        <div class="row" id="about">
            <div class="col-lg-12">
                <h2 class="page-header">About me</h2>
            </div>
            <div class="col-md-6">
                <p><strong>Walbottle Campus</strong> Jan 2010 - date</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
                <p><strong>Heaton Manor School</strong> Apr 2008 - Jan 2010</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
                <p><strong>University of Sunderland</strong> 2000 - 2004</p>
                <p>BSc (Hons) Internet Information Systems</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
                <p><strong>Cramlington Learning Village</strong> Jun 2005 - Apr 2008</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
                
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="./assets/stock-img/DeathtoStock_Desk8.jpg" alt="">
            </div>
        </div>
        <!-- /.row -->

   <!-- Service Tabs -->
        <div class="row" id="skills">
            <div class="col-lg-12">
                <h2 class="page-header">My Skills</h2>
            </div>
            <div class="col-lg-12">

                <ul id="myTab" class="nav nav-tabs nav-justified">
                    <li class="active"><a href="#service-one" data-toggle="tab"><i class="fa fa-repeat"></i> Project Management</a>
                    </li>
                    <li class=""><a href="#service-two" data-toggle="tab"><i class="fa fa-code-fork"></i> Version Control</a>
                    </li>
                    <li class=""><a href="#service-three" data-toggle="tab"><i class="fa fa-support"></i> Managing Client Expectations</a>
                    </li>
                    <li class=""><a href="#service-four" data-toggle="tab"><i class="fa fa-html5"></i> Design and Development</a>
                    </li>
                </ul>

                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="service-one">
                        <h4>Project Management</h4>                        
                        Agile project development
                        Reduces Churn - respond to emergent requirements
                        Project Owner - liaises with client
                        Before development starts break project down into Sprint Cycles
                        Allocate development resources and deadline to each sprint cycle
                        Daily updates with dev team about each Sprint (Sprint Meeting)
                        Each Sprint produces a finished product that is ready to launch or integrate inot the whole project
                        At the end of each Sprint hold a Sprint Review to feed into the next Sprint
                        Saves development time as Sprints can be signed off individually by the Project Owner
                        Scrum Master - Often outside the project team; job to remove impediments to the project
                    </div>
                    <div class="tab-pane fade" id="service-two">
                        <h4>Version Control</h4>
                        Easily manage multiple projects within an organization (Or dev cycles within a single project)
                        Integrated issue tracking.lets you stay on top of bugs and focus on features.
                        Set a due date, name your milestone, then start grouping issues together.
                        Accountability and performance review for team members
                        Collaborative code review - speeds up bug smashing and problem solving
                        Version tracking and branching - test multiple solutions simultaneously
                        Rapid Deployment (and reversion)
                        Automatic backups
                        Provides one method for an entire team to use; everybody operates under the same 'ground rules'.
                        Changes are orderly vs. chaotic, saving development time
                        The ability to track changes promotes accountability and makes it easier to find the right person to solve problems in the materials maintained.
                        A list of exact changes made can be generated quickly and easily, making it easier to advise users of the information on how it has changed from version to version.
                        It is easy to 'roll back' to an earlier version of the information, if a serious mistake was made during a change.
                    </div>
                    <div class="tab-pane fade" id="service-three">
                        <h4>Managing Client Expectations</h4>
                        <ul>
	                        <li>Be Honest From The Get-Go.  As with most things in life, there are too many factors at play to make any grandiose promises. Helping the client to understand the project tempers their expectations and keeps them involved inthe development cycle. The client will never feel that you are hiding anything from them or short-changing them in terms of your commitment.
	                        </li>
	                        <li>Under-Promise , Over-Deliver. Agree clear requirements for the project that meet the minimum expectations of the client. Any extras that emerge during the development cycle will be seen as adding value.
	                        </li>
	                        <li>Anticipate the Client’s Needs Before They Know Their Own Need. Keep up to date with the business environment and emerging trends, be able to talk to the client about what other actors are doing to help them plan their project. This reduces the amount of 'feature creep' during development.
	                        </li>
	                        <li>Constant Communication.  I can recognise when things are going great and when we need to ramp up our efforts. It’s important to share that with a client. Hopefully just knowing you’re available and ready to jump on a project as needed will be enough so that your client’s won’t abuse your generosity with time.
	                        </li>
	                        <li>Reports. Reports don’t have to be very long, or in a format that clogs up a lot of your time. A simple email detailing tasks completed for the week shows your clients what they’re paying for, and thus, keeps them happy.
	                        </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="service-four">
                        <h4>Skills Summary</h4>
                        <p>
                        	<ul>
                        		<li>HTML(5)</li>
                        		<li>CSS(3)</li>
                        		<li>Photoshop</li>
                        		<li>Responsive Web Design</li>
	                            <li>W3C Standards &amp; Accessibility</li>
	                            <li>Web Design</li>
	                            <li>GitHub</li>
	                            <li>Javascript</li>
	                            <li>jQuery</li>
                        	</ul>
                        </p>
                    </div>
                </div>

            </div>
        </div>
        <!-- ./ Skills Tabs -->

        <!-- Portfolio Section -->
        <div class="row" id="portfolio">
            <div class="col-lg-12">
                <h2 class="page-header">Portfolio</h2>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
        </div>
        <!-- /.row -->



        <hr>

        <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-default btn-block" href="contact.php">Contact me!</a>
                </div>
            </div>
        </div>

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Graeme Porter 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
