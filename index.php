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
                <p><strong>Walbottle Campus</strong> Jan 2010 - date<br>
                  <i>e-Learning Manager</i></p>
                <p>Lead Developer and Designer of teaching and learning applications for a rapidly improving secondary school. Managing a team of web developers and designers, project management, strategic planning, leading on several whole school technology initiatives, introducing new technology to support teaching and learning.</p>
                <p><strong>Heaton Manor School</strong> Apr 2008 - Jan 2010<br>
                  <i>ICT Analyst</i></p>
                <p>Provided implementation and support for teaching and learning applications, content management systems, virtual learning environments and education support applications.</p>
                <p><strong>Cramlington Learning Village</strong> Jun 2005 - Apr 2008<br>
                  <i>ICT Technician</i></p>
                  <p>Provided onsite ICT support and web development along with other roles at an outstanding secondary school.</p>
                <p><strong>University of Sunderland</strong> 2000 - 2004<br>
                  <i>BSc (Hons) Internet Information Systems</i></p>
                <p>Web Development, Systems Analysis and Design, Object Oriented Programming, Database Management, Information Systems</p>

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
                        <p>I am an advocate of agile project development methods and currently use the Scrum Methodology with my team</p>
                        <p>Scrum is an agile process most commonly used for product development, especially software development.
                          Scrum is a project management framework that is applicable to any project with aggressive deadlines, complex requirements and a degree of uniqueness.
                          In Scrum, projects move forward via a series of iterations called sprints. A sprint period represents a specific outcome from any part of the project, rather than treating the project as a series of sequential milestones.</p>
                          <p>At the end of each sprint, the team produces a potentially shippable product increment — i.e. working, high-quality software. Each day during the sprint, team members meet to discuss their progress and any impediments to completing the work for that sprint. This is known as the daily scrum, hence the name.</p>
                        <p>In Scrum, a team is cross functional, meaning everyone is needed to take a feature from idea to implementation. This leads to highly skilled teams with each member having a broad skillbase to allow them to adapt to the project requirements. Directing and supporting the development of the team members is essential for the organisation.</p>
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
                        <p>The key principles I use for managing expectations</p>
                        <ul>
	                        <li><strong>Be Honest From The Get-Go.</strong>  As with most things in life, there are too many factors at play to make any grandiose promises. Helping the client to understand the project tempers their expectations and keeps them involved inthe development cycle. The client will never feel that you are hiding anything from them or short-changing them in terms of your commitment.
	                        </li>
	                        <li><strong>Under-Promise , Over-Deliver.</strong> Agree clear requirements for the project that meet the minimum expectations of the client. Any extras that emerge during the development cycle will be seen as adding value.
	                        </li>
	                        <li><strong>Anticipate the Client’s Needs Before They Know Their Own Need.</strong> Keep up to date with the business environment and emerging trends, be able to talk to the client about what other actors are doing to help them plan their project. This reduces the amount of 'feature creep' during development.
	                        </li>
	                        <li><strong>Constant Communication.</strong>  I can recognise when things are going great and when we need to ramp up our efforts. It’s important to share that with a client. Hopefully just knowing you’re available and ready to jump on a project as needed will be enough so that your client’s won’t abuse your generosity with time.
	                        </li>
	                        <li><strong>Reports.</strong> Reports don’t have to be very long, or in a format that clogs up a lot of your time. A simple email detailing tasks completed for the week shows your clients what they’re paying for, and thus, keeps them happy.
	                        </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="service-four">
                      <div class="col-md-6">
                        <h4>Design &amp; Development</h4>
                        <p>I create web based applications focussing on engaging and intuitive user interfaces to deliver personalised data rich experiences to my users.</p>
                        <p>I am responsible for every aspect of the developement process; from user experience, interface design, system architecture, database design and managing the production schedule.</p>
                      </div>
                      <div class="col-md-3">
                        <h4>Skills Summary</h4>
                        <p>
                        	<ul>
                        		<li>HTML(5)</li>
                        		<li>CSS(3)</li>
                            <li>PHP</li>
                            <li>MySQL</li>
                            <li>AngularJS</li>
                            <li>jQuery</li>
                        	</ul>
                        </p>
                      </div>
                      <div class="col-md-3">
                        <h4>&nbsp;</h4>
                        <p>
                          <ul>
                            <li>Responsive Web Design</li>
                            <li>W3C Standards &amp; Accessibility</li>
                            <li>MVC Architecture</li>
                            <li>Content Management Systems</li>
                            <li>GitHub</li>
                            <li>Adobe Photoshop and Illustrator</li>
                          </ul>
                        </p>
                      </div>
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
