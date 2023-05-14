<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gorilla
 */
global $redux_demo;
?>

	<!----footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'gorilla' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'gorilla' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'gorilla' ), 'gorilla', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div>
	</footer-----><!-- #colophon -->
	
	<footer class="footer-wrapper">
                    <div class="footer-inner container text-center">

           <?php 
           echo $redux_demo['Footer1link'];
                                ?>

            <?php
            echo $redux_demo['Footer2link'];  
            ?>

                    </div>

                  </footer>


            </div>
        </div>
    </div>
</div>

<?php 
           echo $redux_demo['privacymodal22'];
                                ?>


<?php 
           echo $redux_demo['Impressummodal22'];
                                ?>
                                
                                <?php 
           echo $redux_demo['gorilla-project-teaser22'];
                                ?>
                                
                                <?php 
           echo $redux_demo['oneIntro22'];
                                ?>
                                
                                <?php 
           echo $redux_demo['one-intro-wC22'];
                                ?>
                                
                                <?php 
           echo $redux_demo['two-Helicopter22'];
                                ?>
                                
                                <?php 
           echo $redux_demo['two-Helicopter-W-c22'];
                                ?>









<!-- The three-Mikongo Modal -->
<div class="modal fade bt-modal" id="three-Mikongo">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal body -->
            <div class="modal-body">
                <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                    <div id="player6" data-vid="https://vimeo.com/503924420/9c1a747d53" class="player"></div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">

                <button type="button" class="modal-close" data-dismiss="modal"></button>

                <p>Ghislain picks you up to take you to the rainforest. When disaster strikes, you need to make a decision. You can stay with the car and hope for the best, or you can cut your losses and take the next train back to the capital.
                    <br>
                    What should you do next? Your choice buttons will appear below.
                </p>

                <div style="display: none;" class="videoNavs">
                    <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4 waves-effect waves-light vd1 bt-modal-btn" data-target="#three-Mikongo-Wrong-Choice">Remain with the truck</button>
                </div>

                <!-- <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4 waves-effect waves-light contactModal">Join Our Movement!</button> -->

                <div style="display: none;" class="videoNavs">
                    <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4 waves-effect waves-light vd2 bt-modal-btn" data-target="#four-Mikongo-to-Loango">Return to the capital</button>
                </div>

            </div>

        </div>
    </div>
</div>


<!-- The three-Mikongo-WCModal -->
<div class="modal fade bt-modal" id="three-Mikongo-Wrong-Choice">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal body -->
            <div class="modal-body">
                <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                    <div id="player7" data-vid="https://vimeo.com/503924455/a551924c6a" class="player"></div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">

                <button type="button" class="modal-close" data-dismiss="modal"></button>
                <p>There are few things more dangerous than stranding yourself with a flat tire at high noon on the equator.
                    <br>
                    What should you do next? Your choice buttons will appear below.
                </p>

                <div style="display: none;" class="videoNavs">
                    <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4 waves-effect waves-light vd1 bt-modal-btn" data-target="#three-Mikongo">Try Again</button>
                </div>

                <div style="display: none;" class="videoNavs">
                    <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4 waves-effect waves-light contactModal">Join Our Movement!</button>
                </div>

            </div>

        </div>
    </div>
</div>


<!-- The four-Mikongo-to-Loango Modal -->
<div class="modal fade bt-modal" id="four-Mikongo-to-Loango">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal body -->
            <div class="modal-body">
                <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                    <div id="player8" data-vid="https://vimeo.com/503924601/65217d5480" class="player"></div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">

                <button type="button" class="modal-close" data-dismiss="modal"></button>

                <p>You’ve hopped out of the frying pan and right into the fire this time. You’re in Loango, and you’re in even bigger trouble than you were in Lopé. You can keep trying to fix the jeep, or you can sleep in the jeep until morning and then continue on foot. What should you do next? </br> Your choice buttons will appear below.</p>

                <div style="display: none;" class="videoNavs">
                    <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4 waves-effect waves-light vd1 bt-modal-btn" data-target="#five-Leopards-Elephants">Wait until morning</button>
                </div>

                <!-- <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4 waves-effect waves-light contactModal">Join Our Movement!</button> -->

                <div style="display: none;" class="videoNavs">
                    <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4 waves-effect waves-light vd2 bt-modal-btn" data-target="#four-Flat-Tire-W-C">Keep Trying</button>
                </div>

            </div>

        </div>
    </div>
</div>

<!-- The four-Flat-Tire-W-C -->
<div class="modal fade bt-modal" id="four-Flat-Tire-W-C">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal body -->
            <div class="modal-body">
                <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                    <div id="player9" data-vid="https://vimeo.com/503924528/3001068f18" class="player"></div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">

                <button type="button" class="modal-close" data-dismiss="modal"></button>

                <p>What should you do next?
                    <br>
                    Your choice buttons will appear below.
                </p>

                <div style="display: none;" class="videoNavs">
                    <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4 waves-effect waves-light vd1 bt-modal-btn" data-target="#four-Mikongo-to-Loango">Try Again</button>
                </div>


                <div style="display: none;" class="videoNavs">
                    <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4 waves-effect waves-light contactModal">Join Our Movement!</button>
                </div>


            </div>

        </div>
    </div>
</div>

<!-- The five-Leopards-Elephants Modal -->
<div class="modal fade bt-modal" id="five-Leopards-Elephants">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal body -->
            <div class="modal-body">
                <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                    <div id="player10" data-vid="https://vimeo.com/503924670/c7c36a83e0" class="player"></div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">

                <button type="button" class="modal-close" data-dismiss="modal"></button>

                <p>
                    What should you do next?
                    <br>
                    Your choice buttons will appear below.
                </p>

                <div style="display: none;" class="videoNavs">
                    <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4 waves-effect waves-light vd1 bt-modal-btn" data-target="#five-Leopards-Elephants-WC">Follow the leopard</button>
                </div>

                <!-- <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4 waves-effect waves-light contactModal">Join Our Movement!</button> -->

                <div style="display: none;" class="videoNavs">
                    <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4 waves-effect waves-light vd2 bt-modal-btn" data-target="#six-Hippos">Get on the boat</button>
                </div>

            </div>

        </div>
    </div>
</div>

<!-- Thefive-Leopards-Elephants-WC Modal -->
<div class="modal fade bt-modal" id="five-Leopards-Elephants-WC">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal body -->
            <div class="modal-body">
                <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                    <div id="player11" data-vid="https://vimeo.com/503924760/88abc63431" class="player"></div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="modal-close" data-dismiss="modal"></button>

                <p>
                    What should you do next?
                    <br>
                    Your choice buttons will appear below.
                </p>

                <div style="display: none;" class="videoNavs">
                    <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4 waves-effect waves-light vd1 bt-modal-btn" data-target="#five-Leopards-Elephants">Try Again</button>
                </div>

                <div style="display: none;" class="videoNavs">
                    <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4 waves-effect waves-light contactModal">Join Our Movement!</button>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- The six-Hippos Modal -->
<div class="modal fade bt-modal" id="six-Hippos">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal body -->
            <div class="modal-body">
                <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                    <div id="player12" data-vid="https://vimeo.com/503924810/9784920436" class="player"></div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">

                <button type="button" class="modal-close" data-dismiss="modal"></button>

                <p>What should you do next?
                    <br>
                    Your choice buttons will appear below.
                </p>

                <div style="display: none;" class="videoNavs">
                    <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4 waves-effect waves-light vd1 bt-modal-btn" data-target="#six-Hippos-WC">Follow the river</button>
                </div>

                <!-- <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4 waves-effect waves-light contactModal">Join Our Movement!</button> -->

                <div style="display: none;" class="videoNavs">
                    <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4 waves-effect waves-light vd2 bt-modal-btn" data-target="#seven-Intro-to-Sonia">Get off of the boat</button>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- The six-Hippos-WC Modal -->
<div class="modal fade bt-modal" id="six-Hippos-WC">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal body -->
            <div class="modal-body">
                <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                    <div id="player13" data-vid="https://vimeo.com/503924927/d3b7ccfe55" class="player"></div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">

                <button type="button" class="modal-close" data-dismiss="modal"></button>

                <p>
                    What should you do next?
                    <br>
                    Your choice buttons will appear below.
                </p>

                <div style="display: none;" class="videoNavs">
                    <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4 waves-effect waves-light vd1 bt-modal-btn" data-target="#six-Hippos">Try Again</button>
                </div>


                <div style="display: none;" class="videoNavs">
                    <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4 waves-effect waves-light contactModal">Join Our Movement!</button>
                </div>

            </div>

        </div>
    </div>
</div>

<!-- The seven-Intro-to-Sonia Modal -->
<div class="modal fade bt-modal" id="seven-Intro-to-Sonia">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal body -->
            <div class="modal-body">
                <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                    <div id="player14" data-vid="https://vimeo.com/503924980/3ccf61e35d" class="player"></div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">

                <button type="button" class="modal-close" data-dismiss="modal"></button>

                <p>
                    Test question: In what year did Sonia say that they established the research camp?
                    <br>
                    Your choice buttons will appear below.
                </p>

                <div style="display: none;" class="videoNavs">
                    <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4 waves-effect waves-light vd1 bt-modal-btn" data-target="#fourteen-nirvana">2005</button>
                </div>


                <div style="display: none;" class="videoNavs">
                    <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4 waves-effect waves-light vd2 bt-modal-btn" data-target="#eight-Main-Objective">2007</button>
                </div>

            </div>

        </div>
    </div>
</div>

<!-- The eight-Main-Objective Modal -->
<div class="modal fade bt-modal" id="eight-Main-Objective">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal body -->
            <div class="modal-body">
                <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                    <div id="player15" data-vid="https://vimeo.com/503925076/5bfe484a02" class="player"></div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">

                <button type="button" class="modal-close" data-dismiss="modal"></button>

                <p>
                    "True" or "False" question: Gorillas are not an umbrella species; therefore, they do not help the forest with seed dispersal.
                    <br>
                    Your choice buttons will appear below.
                </p>

                <div style="display: none;" class="videoNavs">
                    <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4 waves-effect waves-light vd1 bt-modal-btn" data-target="#fourteen-nirvana-8">True</button>
                </div>


                <div style="display: none;" class="videoNavs">
                    <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4 waves-effect waves-light vd2 bt-modal-btn" data-target="#nine-bedr">False</button>
                </div>

            </div>

        </div>
    </div>
</div>

<!-- The nine-bedr Modal -->
<div class="modal fade bt-modal" id="nine-bedr">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal body -->
            <div class="modal-body">
                <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                    <div id="player16" data-vid="https://vimeo.com/503925114/6b76690bec" class="player"></div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">

                <button type="button" class="modal-close" data-dismiss="modal"></button>

                <p>
                    True or False question: Eastern mountain gorillas and western lowland gorillas have the same diet, behaviour, home range, and ecology.
                    <br>
                    Your choice buttons will appear below.
                </p>

                <div style="display: none;" class="videoNavs">
                    <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4 waves-effect waves-light vd1 bt-modal-btn" data-target="#fourteen-nirvana-9">True</button>
                </div>


                <div style="display: none;" class="videoNavs">
                    <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4 waves-effect waves-light vd2 bt-modal-btn" data-target="#ten-How-to-locate-them">False</button>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- The ten-How-to-locate-them Modal -->
<div class="modal fade bt-modal" id="ten-How-to-locate-them">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal body -->
            <div class="modal-body">
                <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                    <div id="player17" data-vid="https://vimeo.com/503925199/5bf59aa4c7" class="player"></div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">

                <button type="button" class="modal-close" data-dismiss="modal"></button>

                <p>
                    True or false: They use footprints and food traces to pinpoint the habituated group of gorillas’ current location.
                    <br>
                    Your choice buttons will appear below.
                </p>

                <div style="display: none;" class="videoNavs">
                    <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4 waves-effect waves-light vd1 bt-modal-btn" data-target="#eleven-Three-main-obstacles">True</button>
                </div>


                <div style="display: none;" class="videoNavs">
                    <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4 waves-effect waves-light vd2 bt-modal-btn" data-target="#fourteen-nirvana-10">False</button>
                </div>

            </div>

        </div>
    </div>
</div>

<!-- The eleven-Three-main-obstacles Modal -->
<div class="modal fade bt-modal" id="eleven-Three-main-obstacles">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal body -->
            <div class="modal-body">
                <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                    <div id="player18" data-vid="https://vimeo.com/503925261/d2fbec77c9" class="player"></div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="modal-close" data-dismiss="modal"></button>

                <p>
                    Test question: According to Sonia, there are three main dangers that gorillas are currently facing: 1) disease, 2) poaching. What is the third danger?
                    <br>
                    Your choice buttons will appear below.
                </p>

                <div style="display: none;" class="videoNavs">
                    <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4 waves-effect waves-light vd1 bt-modal-btn" data-target="#fourteen-nirvana-11">Droughts</button>
                </div>


                <div style="display: none;" class="videoNavs">
                    <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4 waves-effect waves-light vd2 bt-modal-btn" data-target="#twelve-Solution-Local-People">Logging</button>
                </div>

            </div>

        </div>
    </div>
</div>

<!-- The twelve-Solution-Local-People Modal -->
<div class="modal fade bt-modal" id="twelve-Solution-Local-People">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal body -->
            <div class="modal-body">
                <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                    <div id="player19" data-vid="https://vimeo.com/503925350/7e59156955" class="player"></div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">

                <button type="button" class="modal-close" data-dismiss="modal"></button>

                <p>
                    Test question: What’s the name of the national park in Gabon from which they recruited the trackers?
                    <br>
                    Your choice buttons will appear below.
                </p>

                <div style="display: none;" class="videoNavs">
                    <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4 waves-effect waves-light vd1 bt-modal-btn" data-target="#fourteen-nirvana-12">Lopé</button>
                </div>


                <div style="display: none;" class="videoNavs">
                    <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4 waves-effect waves-light vd2 bt-modal-btn" data-target="#thirteen-theEnd">Waka</button>
                </div>

            </div>

        </div>
    </div>
</div>

<!-- The thirteen-theEnd Modal -->
<div class="modal fade bt-modal" id="thirteen-theEnd">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal body -->
            <div class="modal-body">
                <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                    <div id="player20" data-vid="https://vimeo.com/503925390/47b8e9d9ec" class="player"></div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">

                <button type="button" class="modal-close" data-dismiss="modal"></button>

                <p>
                    You’ve been watching a prototype version of a series of interactive film experiences.
                    <br>
                    This project is executive produced by Jonathan Popp, and Christopher E. Scott is the video content creator.
                    Jonathan and Christopher travelled to Gabon to bring this footage to the public, overcoming many obstacles.
                    They are looking for volunteers to help them in future filmmaking endeavours, including their next film, which will be a proof of concept piece designed to sensitize the public about the link between preventing deforestation, conserving wildlife, and slowing down climate change. PLEASE CLICK the “Join Our Movement!” button to get updates on future volunteer opportunities.
                    <br>
                    Thank you for taking the time to watch “The Gorilla Project.”
                </p>

                <div style="display: none;" class="videoNavs">
                    <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4 waves-effect waves-light contactModal">Join Our Movement!</button>
                </div>

            </div>

        </div>
    </div>
</div>
<!-- ___________________________________________ -->
<!-- ___________________________________________ -->
<!-- ___________________________________________ -->

<!-- The game-over Modal- for 7 -->
<div class="modal fade bt-modal" id="fourteen-nirvana">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal body -->
            <div class="modal-body">
                <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                    <div id="player21" data-vid="https://vimeo.com/503925498/41989d3431" class="player"></div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="modal-close" data-dismiss="modal"></button>
                <p>
                    What should you do next?
                    <br>
                    Your choice buttons will appear below.
                </p>

                <div style="display: none;" class="videoNavs">
                    <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4 waves-effect waves-light vd1 bt-modal-btn" data-target="#seven-Intro-to-Sonia">Try Again</button>
                </div>


                <div style="display: none;" class="videoNavs">
                    <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4 waves-effect waves-light contactModal">Join Our Movement!</button>
                </div>

            </div>

        </div>
    </div>
</div>

<!-- The game-over Modal- for 8 -->
<div class="modal fade bt-modal" id="fourteen-nirvana-8">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal body -->
            <div class="modal-body">
                <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                    <div id="player21" data-vid="https://vimeo.com/503925498/41989d3431" class="player"></div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="modal-close" data-dismiss="modal"></button>
                <p>
                    What should you do next?
                    <br>
                    Your choice buttons will appear below.
                </p>

                <div style="display: none;" class="videoNavs">
                    <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4 waves-effect waves-light vd1 bt-modal-btn" data-target="#eight-Main-Objective">Try Again</button>
                </div>


                <div style="display: none;" class="videoNavs">
                    <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4 waves-effect waves-light contactModal">Join Our Movement!</button>
                </div>

            </div>

        </div>
    </div>
</div>

<!-- The game-over Modal- for 9 -->
<div class="modal fade bt-modal" id="fourteen-nirvana-9">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal body -->
            <div class="modal-body">
                <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                    <div id="player21" data-vid="https://vimeo.com/503925498/41989d3431" class="player"></div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="modal-close" data-dismiss="modal"></button>
                <p>
                    What should you do next?
                    <br>
                    Your choice buttons will appear below.
                </p>

                <div style="display: none;" class="videoNavs">
                    <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4 waves-effect waves-light vd1 bt-modal-btn" data-target="#nine-bedr">Try Again</button>
                </div>


                <div style="display: none;" class="videoNavs">
                    <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4 waves-effect waves-light contactModal">Join Our Movement!</button>
                </div>

            </div>

        </div>
    </div>
</div>

<!-- The game-over Modal- for 10 -->
<div class="modal fade bt-modal" id="fourteen-nirvana-10">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal body -->
            <div class="modal-body">
                <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                    <div id="player21" data-vid="https://vimeo.com/503925498/41989d3431" class="player"></div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="modal-close" data-dismiss="modal"></button>
                <p>
                    What should you do next?
                    <br>
                    Your choice buttons will appear below.
                </p>

                <div style="display: none;" class="videoNavs">
                    <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4 waves-effect waves-light vd1 bt-modal-btn" data-target="#ten-How-to-locate-them">Try Again</button>
                </div>


                <div style="display: none;" class="videoNavs">
                    <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4 waves-effect waves-light contactModal">Join Our Movement!</button>
                </div>

            </div>

        </div>
    </div>
</div>

<!-- The game-over Modal- for 11 -->
<div class="modal fade bt-modal" id="fourteen-nirvana-11">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal body -->
            <div class="modal-body">
                <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                    <div id="player21" data-vid="https://vimeo.com/503925498/41989d3431" class="player"></div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="modal-close" data-dismiss="modal"></button>
                <p>
                    What should you do next?
                    <br>
                    Your choice buttons will appear below.
                </p>

                <div style="display: none;" class="videoNavs">
                    <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4 waves-effect waves-light vd1 bt-modal-btn" data-target="#eleven-Three-main-obstacles">Try Again</button>
                </div>


                <div style="display: none;" class="videoNavs">
                    <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4 waves-effect waves-light contactModal">Join Our Movement!</button>
                </div>

            </div>

        </div>
    </div>
</div>

<!-- The game-over Modal- for 12 -->
<div class="modal fade bt-modal" id="fourteen-nirvana-12">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal body -->
            <div class="modal-body">
                <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                    <div id="player21" data-vid="https://vimeo.com/503925498/41989d3431" class="player"></div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="modal-close" data-dismiss="modal"></button>
                <p>
                    What should you do next?
                    <br>
                    Your choice buttons will appear below.
                </p>

                <div style="display: none;" class="videoNavs">
                    <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4 waves-effect waves-light vd1 bt-modal-btn" data-target="#twelve-Solution-Local-People">Try Again</button>
                </div>


                <div style="display: none;" class="videoNavs">
                    <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4 waves-effect waves-light contactModal">Join Our Movement!</button>
                </div>

            </div>

        </div>
    </div>
</div>

<?php


echo $redux_demo['joinourmovement22'];


?>

<!-- MailerLite Universal -->
<script>
(function(m,a,i,l,e,r){ m['MailerLiteObject']=e;function f(){
var c={ a:arguments,q:[]};var r=this.push(c);return "number"!=typeof r?r:f.bind(c.q);}
f.q=f.q||[];m[e]=m[e]||f.bind(f.q);m[e].q=m[e].q||f.q;r=a.createElement(i);
var _=a.getElementsByTagName(i)[0];r.async=1;r.src=l+'?v'+(~~(new Date().getTime()/1000000));
_.parentNode.insertBefore(r,_);})(window, document, 'script', 'https://static.mailerlite.com/js/universal.js', 'ml');

var ml_account = ml('accounts', '2975092', 's0r0h6q8q8', 'load');
</script>
<!-- End MailerLite Universal -->


<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();  ?>/js/jquery/jquery.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();  ?>/js/jquery/jquery-migrate.min.js"></script>
<script>
	var ms_grabbing_curosr = '<?php echo get_stylesheet_directory_uri();  ?>/plugins/masterslider/public/assets/css/common/grabbing.html',
		ms_grab_curosr = '<?php echo get_stylesheet_directory_uri();  ?>/plugins/masterslider/public/assets/css/common/grab.html';
</script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();  ?>/plugins/superfish/js/superfish.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();  ?>/js/hoverIntent.min.js"></script>
<script type="text/javascript" src="plugins/dl-menu/modernizr.custom.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();  ?>/plugins/dl-menu/jquery.dlmenu.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();  ?>/plugins/jquery.easing.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();  ?>/plugins/fancybox/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();  ?>/plugins/fancybox/helpers/jquery.fancybox-media.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();  ?>/plugins/fancybox/helpers/jquery.fancybox-thumbs.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();  ?>/plugins/flexslider/jquery.flexslider.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();  ?>/plugins/jquery.isotope.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();  ?>/js/plugins.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();  ?>/plugins/masterslider/public/assets/js/masterslider.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();  ?>/plugins/jquery.transit.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();  ?>/plugins/gdlr-portfolio/gdlr-portfolio-script.js"></script>


<script>
	(function ($) {
		"use strict";

		$(function () {
			var masterslider_d1da = new MasterSlider();

			// slider controls
			masterslider_d1da.control('arrows', {autohide: true, overVideo: true});
			masterslider_d1da.control('bullets', {autohide: false, overVideo: true, dir: 'h', align: 'bottom', space: 6, margin: 25});
			// slider setup
			masterslider_d1da.setup("slider_1", {
				width: 1140,
				height: 800,
				minHeight: 0,
				space: 0,
				start: 1,
				grabCursor: false,
				swipe: true,
				mouse: false,
				keyboard: true,
				layout: "fullwidth",
				wheel: false,
				autoplay: false,
				instantStartLayers: false,
				mobileBGVideo: false,
				loop: true,
				shuffle: false,
				preload: 0,
				heightLimit: true,
				autoHeight: false,
				smoothHeight: true,
				endPause: false,
				overPause: true,
				fillMode: "fill",
				centerControls: true,
				startOnAppear: false,
				layersMode: "center",
				autofillTarget: "",
				hideLayers: false,
				fullscreenMargin: 0,
				speed: 20,
				dir: "h",
				parallaxMode: 'swipe',
				view: "basic"
			});

			$("head").append("<link rel='stylesheet' id='ms-fonts'  href='http://fonts.googleapis.com/css?family=Montserrat:regular,700%7CCrimson+Text:regular' type='text/css' media='all' />");

			window.masterslider_instances = window.masterslider_instances || {};
			window.masterslider_instances["5_d1da"] = masterslider_d1da;
		});

	})(jQuery);
</script>

<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();  ?>/plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();  ?>/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js"></script>
<!--<script type="text/javascript" src="js/jquery/ui/effect.min.js"></script>-->
<!--<script type="text/javascript" src="js/script-core.js"></script>-->
<!--<script type="text/javascript" src="plugins/goodlayers-core/plugins/combine/script.js"></script>-->
<!--<script type="text/javascript" src="plugins/goodlayers-core/include/js/page-builder.js"></script>-->
<script src="<?php echo get_stylesheet_directory_uri();  ?>/vendor/jquery/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo get_stylesheet_directory_uri();  ?>/vendor/bootstrap/js/bootstrap.bundle.min.js" type="07669f1d8c1e01c5b5e43a1f-text/javascript"></script>

<script src="<?php echo get_stylesheet_directory_uri();  ?>/vendor/jquery-easing/jquery.easing.min.js" type="07669f1d8c1e01c5b5e43a1f-text/javascript"></script>
<script src="<?php echo get_stylesheet_directory_uri();  ?>/vendor/magnific-popup/jquery.magnific-popup.min.js" type="07669f1d8c1e01c5b5e43a1f-text/javascript"></script>

<script src="<?php echo get_stylesheet_directory_uri();  ?>/js/creative.min.js" type="07669f1d8c1e01c5b5e43a1f-text/javascript"></script>
<script src="<?php echo get_stylesheet_directory_uri();  ?>/js/rocket-loader.min.js" data-cf-settings="07669f1d8c1e01c5b5e43a1f-|49" defer=""></script>

<script src="https://player.vimeo.com/api/player.js"></script>



<script>

      var player,interval,videoNavs;

	$(function () {

		// Modal button to show modal
		$('.bt-modal-btn').on('click', function () {

            resetVimeo();

			$(this).closest(".bt-modal").modal('hide');

			var targetModal = $(this).attr('data-target');

            var $player = $(targetModal).find('.player');
            var elementId = $player.attr('id');
            var videoId = $player.attr('data-vid');

            videoNavs = $(targetModal).find('.videoNavs');
            videoNavs.css('display', 'none');

			setTimeout(function(){
                initYTVideo(elementId,videoId);
                $(targetModal).modal('show');
            },350);

		});

		// Contact form button to show form modal
		$('.contactModal').on('click', function () {
			$('.bt-modal').modal('hide');
			setTimeout(function () {
				$('#contactModal').modal('show');
			}, 350);
		});

	});

    function initYTVideo(elementId,videoId)
    {

      player = new Vimeo.Player(elementId, {
        url: videoId,
        autoplay: true
      });

      player.on('timeupdate', function(e) {
        if(e.duration - e.seconds < 3 ) {
            videoNavs.css('display', 'inline-block');
        }
        else{
            videoNavs.css('display', 'none');
        }
      });

      // Pause video when modal is hidden
      $('.bt-modal').on('hidden.bs.modal', function () {
          resetVimeo();
      });

    }

    function resetVimeo()
    {
      if(player){
        player.pause().then(function() {
          player.destroy().then(function() {
            player = null;
          });
        });
      }
    }

</script>


<!-- Start of HubSpot Embed Code -->
  <script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/20524820.js"></script>
<!-- End of HubSpot Embed Code -->







</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

