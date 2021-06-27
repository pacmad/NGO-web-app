<?php
    include 'functions.php';
    printHeaderAndMakeTabActive('home');
?>        
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="imgs/1.jpg" alt="PrincessZarahAfricana">
                    <div class="carousel-caption d-none d-md-block">
                        <!--<h5>Orphans</h5>
                        <p>Give to Orphanage</p>-->
                    </div>
                </div>

                <div class="item">
                    <img src="imgs/2.jpg" alt="PrincessZarahAfricana">
                    <div class="carousel-caption d-none d-md-block">
                        <!--<h5>Orphans</h5>
                        <p>Give to Orphanage</p>-->
                    </div>
                </div>

                <div class="item">
                    <img src="imgs/3.jpg" alt="PrincessZarahAfricana">
                    <div class="carousel-caption d-none d-md-block">
                        <!--<h5>Orphans</h5>
                        <p>Give to Orphanage</p>-->
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <section id="intro">
            <b>
                <h2 class="heavy-text">PRINCESS ZARAH FOUNDATION AFRICANA</h2>
                <i>-Living Life For Humanity-</i>
            </b>
            <p>We are a Nigerian NGO catering to the educational, housing and healthcare needs of the less privileged.</p>
            <a href="about"><button type="button" class="btn btn-info">Learn more</button></a>
        </section>
        <section id="projects">
            <h3 class="heavy-text" style="text-align: center;">Our Projects</h3><br/><br/>
            <div class="row" >
                <div class="col-sm-6">
                    <a href="">
                        <img src="imgs/projects/covResponse.png" ALIGN="left"/>
                        <b><u>COVID-19 Response</u></b><br>
                        <small><i>April 2020</i></small>
                        <p>
                            &nbsp;&nbsp;&nbsp;&nbsp;In line with our goal of caring for the society, we took to the 
                            streets of Port Harcourt in Nigeria to address various COVID-19 related issues.
                            Face masks (some of which were donated by our partners) and other PPEs were donated
                            to people in need of them. We have also been spreading medical and government
                            information intended to curb the spread of the coronavirus.
                        </p>
                    </a>                                            
                </div>
                <div class="col-sm-6">
                    <a href="">
                        <img src="imgs/projects/scholarship.jpg" align="left"/>
                        <b><u>Award of Scholarship</u></b><br>
                        <small><i>November 2019</i></small>
                        <p>
                            &nbsp;&nbsp;&nbsp;&nbsp;We provided relief materials to a student of Government 
                            Crafts Development Centre(GCDC) Rivers State. The beneficiary and
                            his mother were delighted to receive funds and school materials.
                        </p>
                    </a>
                </div>
            </div>
            <!-- <div class="row" >
                <div class="col-sm-6">
                    <img src="imgs/3.jpg" ALIGN="left"/>
                    <b><u>Project 3</u></b>
                    <p>
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>
                </div>
                <div class="col-sm-6">
                    <img src="imgs/1.jpg" align="left"/>
                    <b><u>Project 4</u></b>
                    <p>
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>
                </div>
            </div>-->
        </section>
        <section id="involve">
            <b><h2 class="heavy-text" style="text-align: center; color = #020240">Get Involved</h2></b><br/><br/>
            <div class="row" >
                <div>
                    <a href="donate">
                        <div class="col-sm-4" id="give">
                            <i class="fa fa-money fa-8x" aria-hidden="true"></i>
                            <hr/>
                            <b><h3>Give</h3></b>
                        </div>
                    </a>

                    <a href="action">
                        <div class="col-sm-4" id="volunteer">
                            <i class="fa fa-fist-raised fa-8x" aria-hidden="true"></i>
                            <hr/>
                            <b><h3>Volunteer</h3></b>
                        </div>
                    </a>

                    <a href="action">
                        <div class="col-sm-4" id="share">
                            <i class="fa fa-hands-helping fa-8x" aria-hidden="true"></i>
                            <hr/>
                            <b><h3>Partner</h3></b>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <section id="team">
            <b><h2 class="heavy-text" style="text-align: center; color = #020240">Meet The Team</h2></b><br/><br/>
            <div class="row" >
                <div>
                    <div class="col-sm-4 border bordertop">
                        <img src="imgs/personnel/pzfman.jpg" alt="David Onyebuchi Patrick"/>
                        <p><b>Mr. David Onyebuchi Patrick</b><p>
                        <p><i>Chairman</i><p>
                        <p><a href="https://web.facebook.com/onyebuchi.davis.9">
                            <i class="fa fa-facebook"></i>
                        </a></p>
                    </div>
                    <div class="col-sm-4 border bordertop">
                        <img src="imgs/personnel/pzflady.jpg" alt="Chizoba Ejikeme"/>
                        <p><b>Mrs. Chizoba Ejikeme</b><p>
                        <p><i>Financial Secretary</i><p>
                        <p><a href="https://web.facebook.com/francisca.ejikeme.921">
                            <i class="fa fa-facebook"></i></a>
                        </p>
                    </div>
                    <div class="col-sm-4 bordertop">
                        <img src="imgs/personnel/secretary.jpg" alt="Favour Njideka Ossiah"/>
                        <p><b>Mrs. Favour Njideka Ossiah</b><p>
                        <p><i>Secretary</i><p>
                        <p><a href="https://web.facebook.com/favour.allen.370">
                            <i class="fa fa-facebook"></i>
                        </a></p>
                    </div>
                </div>
            </div>
        </section>
        <section id="partners">
            <b><h2 class="heavy-text" style="text-align: center; color = #020240">Our Partners</h2></b><br/><br/>
            <div class="row" >
                <div class="col-sm-6">
                    <img src="imgs/who.png" />
                </div>
                <div class="col-sm-6">
                    <img src="imgs/emagnet.jpg" />
                </div>
                <div class="col-sm-6">
                    <img src="imgs/unicef.png" />
                </div>
                <div class="col-sm-6">
                    <img src="imgs/usaid.png" />
                </div>
            </div>
        </section>
<?php
        print_footer();
?>