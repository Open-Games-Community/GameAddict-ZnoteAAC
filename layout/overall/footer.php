</li>
                        
                                            </ul>
                        <div class="clear"></div>
                    </div><!--tab-content -->
                             </div>
        </div>
    </div>
</div>
    </div>
</div></div></div></div>



								<div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner"><div class="wpb_wrapper"><div  class="wpb_widgetised_column wpb_content_element">
		<div class="wpb_wrapper">
			
			<div class="widget-1 first widget">        <div class="wcontent nextmatch_widget">

        <div class="title-wrapper"><h3 class="widget-title">Top 5 Players</h3><div class="clear"></div></div>
    
     <div class="nextmatch_wrap">
        		<div class="teamwrapper home">
        			<?php
            $cache = new Cache('engine/cache/topPlayer');
            if ($cache->hasExpired()) {
                $players = mysql_select_multi('SELECT `name`, `level`, `experience`, `looktype`, `lookaddons`, `lookhead`, `lookbody`, `looklegs`, `lookfeet` FROM `players` WHERE `group_id` < ' . $config['highscore']['ignoreGroupId'] . ' ORDER BY `experience` DESC LIMIT 5;');
                $cache->setContent($players);
                $cache->save();
            } else {
                $players = $cache->load();
            }
            if ($players) {
            $count = 1;
            foreach($players as $player) {
            echo '<img style="margin-top: -35px; margin-left: -35px;" src="https://outfit-images.ots.me/1285_walk_animation/animoutfit.php?id='.$player['looktype'].'&addons='.$player['lookaddons'].'&head='.$player['lookhead'].'&body='.$player['lookbody'].'&legs='.$player['looklegs'].'&feet='.$player['lookfeet'].'&g=0&h=3&i=1"></img> <a href="characterprofile.php?name='.$player['name'].'" style="color:white;font-size:10px">'.$player['name'].'</a>&ensp;<strong>'. $player['level'].'</strong><br>';
           $count++;
            }
            }
            ?>
        		</div>
                

            </div></a></div>
            </div>
        
		
		<div class="widget-3 last widget">
	<div class="title-wrapper">

		<h3 class="widget-title">
			Posts	> Edit it on footer.Php	</h3>

		<div class="clear"></div>
	</div>

	<div id="block_tabs_73" class="block_tabs">

		<div class="tab-inner">

				<ul class="nav nav-tabs tabs" role="tablist">
										
						<li class="selected">
							<a href="#tab-13" title="Adventure">
								Adventure							</a>
							<div class="clear"></div>
						</li>

										
						<li>
							<a href="#tab-20" title="Online">
								Online							</a>
							<div class="clear"></div>
						</li>

										
						<li>
							<a href="#tab-22" title="Racing">
								Racing							</a>
							<div class="clear"></div>
						</li>

									</ul>

				<div class="wcontainer">

				
					<div class="tab tab-content" id="tab-13" >

						
						
						
						<div class="review-single">
							<div class="img">


									
									<img src="wp-content/uploads/2013/08/3-100x110.jpg" />

									
									<span class="overlay-link"></span>


							</div>

							<div class="info">

								<a href="https://skywarriorthemes.com/gameaddict/curabitur-lorem-mauris-dictum-et-tempus/">
									Curabitur lorem mauris dictum et tempus								</a><br/>

								<a class="read-more-link" href="https://skywarriorthemes.com/gameaddict/curabitur-lorem-mauris-dictum-et-tempus/">
									Read more								</a>

							
							
							
							
							
							
							
							
														<div class="overall-score"><div class="rating r-45"></div></div>
							
							
							</div>

							<div class="clear"></div>
						</div>






						
						<div class="review-single">
							<div class="img">


									
									<img src="wp-content/uploads/2013/06/47-100x110.jpg" />

									
									<span class="overlay-link"></span>


							</div>

							<div class="info">

								<a href="https://skywarriorthemes.com/gameaddict/morbi-vel-ipsum-vel-augue-mattis-ultricies-non-et-mauris/">
									Morbi vel ipsum vel augue mattis								</a><br/>

								<a class="read-more-link" href="https://skywarriorthemes.com/gameaddict/morbi-vel-ipsum-vel-augue-mattis-ultricies-non-et-mauris/">
									Read more								</a>

							
							
							
							
							
							
														<div class="overall-score"><div class="rating r-35"></div></div>
							
							
							
							
							</div>

							<div class="clear"></div>
						</div>






						
						<div class="review-single">
							<div class="img">


									
									<img src="wp-content/uploads/2013/06/57-100x110.jpg" />

									
									<span class="overlay-link"></span>


							</div>

							<div class="info">

								<a href="https://skywarriorthemes.com/gameaddict/duis-lacinia-nis-ve-lorem-scelerisque-interdum/">
									Duis lacinia nisi vel lorem scelerisque interdum								</a><br/>

								<a class="read-more-link" href="https://skywarriorthemes.com/gameaddict/duis-lacinia-nis-ve-lorem-scelerisque-interdum/">
									Read more								</a>

							
							
							
							
							
							
							
														<div class="overall-score"><div class="rating r-4"></div></div>
							
							
							
							</div>

							<div class="clear"></div>
						</div>






												
					</div><!--tab-content-->

				
					<div class="tab tab-content" id="tab-20" >

						
						
						
						<div class="review-single">
							<div class="img">


									
									<img src="wp-content/uploads/2013/08/2-100x110.jpg" />

									
									<span class="overlay-link"></span>


							</div>

							<div class="info">

								<a href="https://skywarriorthemes.com/gameaddict/etiam-massa-mauris-fermentum-a-congue-id/">
									Etiam massa mauris fermentum a congue id								</a><br/>

								<a class="read-more-link" href="https://skywarriorthemes.com/gameaddict/etiam-massa-mauris-fermentum-a-congue-id/">
									Read more								</a>

							
							
							
							
							
							
							
							
														<div class="overall-score"><div class="rating r-45"></div></div>
							
							
							</div>

							<div class="clear"></div>
						</div>






						
						<div class="review-single">
							<div class="img">


									
									<img src="wp-content/uploads/2013/06/47-100x110.jpg" />

									
									<span class="overlay-link"></span>


							</div>

							<div class="info">

								<a href="https://skywarriorthemes.com/gameaddict/morbi-vel-ipsum-vel-augue-mattis-ultricies-non-et-mauris/">
									Morbi vel ipsum vel augue mattis								</a><br/>

								<a class="read-more-link" href="https://skywarriorthemes.com/gameaddict/morbi-vel-ipsum-vel-augue-mattis-ultricies-non-et-mauris/">
									Read more								</a>

							
							
							
							
							
							
														<div class="overall-score"><div class="rating r-35"></div></div>
							
							
							
							
							</div>

							<div class="clear"></div>
						</div>






						
						<div class="review-single">
							<div class="img">


									
									<img src="wp-content/uploads/2013/06/65-100x110.jpg" />

									
									<span class="overlay-link"></span>


							</div>

							<div class="info">

								<a href="https://skywarriorthemes.com/gameaddict/eget-ultrice-mauris-rhoncus-non/">
									Eget ultrices mauris rhoncus non								</a><br/>

								<a class="read-more-link" href="https://skywarriorthemes.com/gameaddict/eget-ultrice-mauris-rhoncus-non/">
									Read more								</a>

							
							
							
							
							
							
							
														<div class="overall-score"><div class="rating r-4"></div></div>
							
							
							
							</div>

							<div class="clear"></div>
						</div>






												
					</div><!--tab-content-->

				
					<div class="tab tab-content" id="tab-22" >

						
						
						
						<div class="review-single">
							<div class="img">


									
									<img src="wp-content/uploads/2013/06/47-100x110.jpg" />

									
									<span class="overlay-link"></span>


							</div>

							<div class="info">

								<a href="https://skywarriorthemes.com/gameaddict/morbi-vel-ipsum-vel-augue-mattis-ultricies-non-et-mauris/">
									Morbi vel ipsum vel augue mattis								</a><br/>

								<a class="read-more-link" href="https://skywarriorthemes.com/gameaddict/morbi-vel-ipsum-vel-augue-mattis-ultricies-non-et-mauris/">
									Read more								</a>

							
							
							
							
							
							
														<div class="overall-score"><div class="rating r-35"></div></div>
							
							
							
							
							</div>

							<div class="clear"></div>
						</div>






						
						<div class="review-single">
							<div class="img">


									
									<img src="wp-content/uploads/2013/06/57-100x110.jpg" />

									
									<span class="overlay-link"></span>


							</div>

							<div class="info">

								<a href="https://skywarriorthemes.com/gameaddict/duis-lacinia-nis-ve-lorem-scelerisque-interdum/">
									Duis lacinia nisi vel lorem scelerisque interdum								</a><br/>

								<a class="read-more-link" href="https://skywarriorthemes.com/gameaddict/duis-lacinia-nis-ve-lorem-scelerisque-interdum/">
									Read more								</a>

							
							
							
							
							
							
							
														<div class="overall-score"><div class="rating r-4"></div></div>
							
							
							
							</div>

							<div class="clear"></div>
						</div>






						
						<div class="review-single">
							<div class="img">


									
									<img src="wp-content/uploads/2013/06/65-100x110.jpg" />

									
									<span class="overlay-link"></span>


							</div>

							<div class="info">

								<a href="https://skywarriorthemes.com/gameaddict/eget-ultrice-mauris-rhoncus-non/">
									Eget ultrices mauris rhoncus non								</a><br/>

								<a class="read-more-link" href="https://skywarriorthemes.com/gameaddict/eget-ultrice-mauris-rhoncus-non/">
									Read more								</a>

							
							
							
							
							
							
							
														<div class="overall-score"><div class="rating r-4"></div></div>
							
							
							
							</div>

							<div class="clear"></div>
						</div>






												
					</div><!--tab-content-->

				
				</div>
		</div>

	</div>

		</div>
		</div>
	</div>
</div></div></div></div><div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-parallax="1.5" data-vc-parallax-image="https://www.youtube.com/watch?v=mMq5l1B258A&t=328s" class="vc_row wpb_row vc_row-fluid vc_custom_1484947409473 vc_row-has-fill vc_video-bg-container vc_general vc_parallax vc_parallax-content-moving"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper">
	<div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_fadeInDown fadeInDown" >
		<div class="wpb_wrapper">
			<div style="border-right: 4px solid #d92212; font-weight: bold; padding-right: 20px;">
<h2 style="text-align: right; color: white; font-size: 40px;">AWESOME THEME MADE WITH PASSION</h2>
<h3 style="text-align: right; font-size: 28px; color: #838383; font-weight: bold; margin-top: 10px;">Converted by Alex from Open Games Community</h3>
</div>

		</div>
	</div>
</div></div></div></div>
<div class="vc_row-full-width vc_clearfix"></div><div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner">
<div class="wpb_wrapper">
	<div class="wpb_text_column wpb_content_element " >
		<div class="wpb_wrapper">
			

		</div>
	</div>
</div></div></div></div>
                    <div class="clear"></div>
        </div>
    </div>
</div> <!-- /container -->
 <footer class="container-fluid no-padding">
      <div class="container">
                    		<div class="widget-1 first footer_widget col-lg-4">
		<div class="title-wrapper">
			<h3 class="widget-title">
				Latest posts			</h3>
			<div class="clear"></div>
		</div>
<p style="color:orange"> Edit This on Footer.php</p>
		<ul class="review">

			
			<li>
				<div class="img">
					<a rel="bookmark" href="https://skywarriorthemes.com/gameaddict/fermentum-sit-amet-congue-sit-amet/">

						
						<img src="wp-content/uploads/2013/08/11-100x110.jpg" />

						
						<span class="overlay-link"></span>

					</a>
				</div>

				<div class="info">
					<a href="https://skywarriorthemes.com/gameaddict/fermentum-sit-amet-congue-sit-amet/">
						Fermentum sit amet congue sit amet					</a><br/>

					<small>
						<i class="fas fa-calendar-alt"></i>
							August 31, 2013 -
						<i class="far fa-comments"></i>
							No comments					</small><br/>



				</div>
				<div class="clear"></div>
		</li>

		
			<li>
				<div class="img">
					<a rel="bookmark" href="https://skywarriorthemes.com/gameaddict/vix-at-eros-intellegat-sea-no-facer/">

						
						<img src="wp-content/uploads/2013/05/7-100x110.jpg" />

						
						<span class="overlay-link"></span>

					</a>
				</div>

				<div class="info">
					<a href="https://skywarriorthemes.com/gameaddict/vix-at-eros-intellegat-sea-no-facer/">
						Vix at eros intellegat sea no facer					</a><br/>

					<small>
						<i class="fas fa-calendar-alt"></i>
							May 4, 2013 -
						<i class="far fa-comments"></i>
							No comments					</small><br/>



				</div>
				<div class="clear"></div>
		</li>

		
			<li>
				<div class="img">
					<a rel="bookmark" href="https://skywarriorthemes.com/gameaddict/eget-ultrice-mauris-rhoncus-non/">

						
						<img src="wp-content/uploads/2013/06/65-100x110.jpg" />

						
						<span class="overlay-link"></span>

					</a>
				</div>

				<div class="info">
					<a href="https://skywarriorthemes.com/gameaddict/eget-ultrice-mauris-rhoncus-non/">
						Eget ultrices mauris rhoncus non					</a><br/>

					<small>
						<i class="fas fa-calendar-alt"></i>
							May 4, 2013 -
						<i class="far fa-comments"></i>
							No comments					</small><br/>



				</div>
				<div class="clear"></div>
		</li>

				
		</ul>

		</div><div class="widget-2 footer_widget col-lg-4"><div class="title-wrapper"><h3 class="widget-title">From the forum</h3><div class="clear"></div></div>
		<p style="color:orange"> Edit This on Footer.php</p>
		<ul class="bbp-topics-widget newness">

			
				<li>
					<a class="bbp-forum-title" href="https://skywarriorthemes.com/gameaddict/forums/topic/hvad-syntes/">hvad syntes</a>

					
					
				</li>

			
				<li>
					<a class="bbp-forum-title" href="https://skywarriorthemes.com/gameaddict/forums/topic/endreri/">Pellentesque aliquam nibh eget nisi hendreri</a>

					
					
				</li>

			
				<li>
					<a class="bbp-forum-title" href="https://skywarriorthemes.com/gameaddict/forums/topic/auctor/">Curabitur sollicitudin mi vel auctor auctor</a>

					
					
				</li>

			
				<li>
					<a class="bbp-forum-title" href="https://skywarriorthemes.com/gameaddict/forums/topic/snteger/">Integer vitae neque ipsum</a>

					
					
				</li>

			
				<li>
					<a class="bbp-forum-title" href="https://skywarriorthemes.com/gameaddict/forums/topic/condimentum/">Pellentesque placerat tincidunt magna quis condimentum</a>

					
					
				</li>

			
		</ul>

		</div><div class="widget-3 last footer_widget col-lg-4"><div class="title-wrapper"><h3 class="widget-title">latest works</h3>
		<p style="color:orange"> Edit This on Footer.php</p>
		<div class="clear"></div></div><div class="wcontent wprojects">                                                                 <a href="https://skywarriorthemes.com/gameaddict/portfolio/blackbox/" data-original-title="The swamp lord"><img src="wp-content/uploads/2013/06/76-350x350.jpg" alt="The swamp lord" /><span class="overlay-link"></span></a>
                                                                                  <a href="https://skywarriorthemes.com/gameaddict/portfolio/super-comfy/" data-original-title="Call of the dragon"><img src="wp-content/uploads/2013/06/62-350x350.jpg" alt="Call of the dragon" /><span class="overlay-link"></span></a>
                                                                                  <a href="https://skywarriorthemes.com/gameaddict/portfolio/mcburger/" data-original-title="Evil intentions"><img src="wp-content/uploads/2013/06/56-350x350.jpg" alt="Evil intentions" /><span class="overlay-link"></span></a>
                                                                                  <a href="https://skywarriorthemes.com/gameaddict/portfolio/pandora/" data-original-title="Under the water"><img src="wp-content/uploads/2013/06/46-350x350.jpg" alt="Under the water" /><span class="overlay-link"></span></a>
                                                                                  <a href="https://skywarriorthemes.com/gameaddict/portfolio/string-string/" data-original-title="The boss"><img src="wp-content/uploads/2013/06/34-350x350.jpg" alt="The boss" /><span class="overlay-link"></span></a>
                                                                                  <a href="https://skywarriorthemes.com/gameaddict/portfolio/shark-attack/" data-original-title="The god"><img src="wp-content/uploads/2013/06/25-350x350.jpg" alt="The god" /><span class="overlay-link"></span></a>
                 </div></div>                 </div>
    <div class="copyright col-lg-12">
    	<div class="container">
        	<p>&copy; 2022&nbsp;Converted by <a href="https://lepiigortv.com">Alex</a> from <a href="https://opengamescommunity.com"> Open Games Community</a>.</p>
        		&nbsp;
            <div class="social">
                 <a class="rss" target="_blank" href="#"><i class="fas fa-rss"></i> </a>                 <a class="dribbble" target="_blank" href="#"><i class="fab fa-dribbble"></i> </a>                 <a class="vimeo" target="_blank" href="#"><i class="fab fa-vimeo-v"></i> </a>                 <a class="youtube" target="_blank" href="#"><i class="fab fa-youtube"></i> </a>                 <a class="twitch" target="_blank" href="#"><i class="fab fa-twitch"></i></a>                                 <a class="steam" target="_blank" href="#"><i class="fab fa-steam"></i></a>                                 <a class="google-plus" target="_blank" href="#"><i class="fab fa-google-plus-g"></i></a>                 <a class="twitter" target="_blank" href="#"><i class="fab fa-twitter"></i></a>                 <a class="facebook" target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>                            </div>
        </div>
    </div>

</footer>
</div></div> <!-- End of container -->

<?php if (user_logged_in() === true): ?>
<div id="myModalR" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3>My Account</h3>
          </div>
          <div class="modal-body">
                    <div id="LoginWithAjax" class="default">                
               
                    <table width='100%' cellspacing="0" cellpadding="0" style="text-align:center">
                                   
                      
                                      
                        <tr id="LoginWithAjax_Submit">
                            <td id="LoginWithAjax_SubmitButton">

                              

                          

                                <br /><br />

                                <a href="createcharacter.php" class="button-green button-small"> Create Character </a>
                                <br /><br />
								<a href="myaccount.php" class="button-green button-small"> My Account</a>
								 <br /><br />
								<a href="settings.php" class="button-green button-small"> Settings</a>
								 <br /><br />
								<a href="changepassword.php" class="button-green button-small"> Change Password</a>
								 <br /><br />
								<a href="logout.php" class="button-green button-small"> Logout</a>
                               
                                <br></br>

                               

                            </td>
                        </tr>
                    </table>
              
               
            </div>
                  </div>
      </div>
    </div>
</div>
<?php else: ?>
<div id="myModalL" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3>Login</h3>
          </div>
          <div class="modal-body">
                    <div id="LoginWithAjax" class="default">                <span id="LoginWithAjax_Status"></span>
                <form name="LoginWithAjax_Form" id="LoginWithAjax_Form" class="loginForm" action="login.php" method="post" >
                    <table width='100%' cellspacing="0" cellpadding="0">
                                    <tr style="display:none" id="LoginMessageContainer">
                                        <td id="LoginMessage">
                                        </td>
                                    </tr>
                        <tr id="LoginWithAjax_Username">
                            <td class="username_input">
                                <input type="text" name="username" id="login_username" placeholder="Account"  class="input" value="" />
                            </td>
                        </tr>
                                            <tr id="LoginWithAjax_Password">
                            <td class="password_input">
                                <input placeholder="Password" type="password" name="password" id="login_password" class="input" value="" />
                            </td>
                        </tr>
                        <tr id="LoginWithAjax_Submit">
                            <td id="LoginWithAjax_SubmitButton">

                                Don&#039;t have account? <a id="switch_to_register" href="register.php"  title="Register">Sign up!</a>
                                <br /><br />

                                <input name="rememberme" type="checkbox" id="login_remember" value="forever" /> <label >Remember Me</label>

                          

                                <br /><br />

                                
                                
                                <input type="submit"  class="button-green button-small"  type="submit" value="Log in" tabindex="100" />
                                <br />

                               
                               

                            </td>
                        </tr>
                    </table>
                </form>
               
            </div>
                  </div>
      </div>
    </div>
</div>
<?php endif; ?>


<script type="text/html" id="wpb-modifications"></script>	<div id="fb-root"></div>
		
	<link rel='stylesheet' id='vc_animate-css-css'  href='wp-content/plugins/js_composer/assets/lib/bower/animate-css/animate.min.css@ver=6.6.0.css' type='text/css' media='all' />
<link rel='stylesheet' id='vc_carousel_css-css'  href='wp-content/plugins/js_composer/assets/lib/vc_carousel/css/vc_carousel.min.css@ver=6.6.0.css' type='text/css' media='all' />
<link rel='stylesheet' id='wp-cw-sitecss-css'  href='wp-content/themes/gameaddict/addons/clan-wars/css/site.css@ver=1.5.5.css' type='text/css' media='all' />
<link rel='stylesheet' id='wp-cw-widgetcss-css'  href='wp-content/themes/gameaddict/addons/clan-wars/css/widget.css@ver=1.5.5.css' type='text/css' media='all' />

<script type='text/javascript' src='wp-content/themes/gameaddict/addons/heart/love/js/heart-love.js@ver=1.0' id='heart-love-js'></script>
<script type='text/javascript' src='wp-content/plugins/gameaddict_post_types/wp-owl-carousel/owl-carousel/owl.carousel.min.js@ver=5.7.5' id='owl-carousel-js'></script>
<script type='text/javascript' src='wp-content/plugins/gameaddict_post_types/wp-owl-carousel/js/wp-owl-carousel.js@ver=5.7.5' id='wp-owl-carousel-js'></script>
<script type='text/javascript' src='wp-content/themes/gameaddict/js/bootstrap.min.js@ver=5.7.5' id='bootstrap1-js'></script>
<script type='text/javascript' src='wp-content/themes/gameaddict/js/bootstrap-tooltip.js@ver=5.7.5' id='bootstrap2-js'></script>
<script type='text/javascript' src='wp-content/plugins/js_composer/assets/lib/bower/isotope/dist/isotope.pkgd.min.js@ver=6.6.0' id='isotope-js'></script>
<script type='text/javascript' src='wp-content/themes/gameaddict/js/easing.js@ver=5.7.5' id='easing-js'></script>
<script type='text/javascript' src='wp-content/themes/gameaddict/js/jquery.ui.totop.js@ver=5.7.5' id='totop-js'></script>
<script type='text/javascript' src='wp-content/themes/gameaddict/js/jquery-ui-1.10.3.custom.min.js@ver=5.7.5' id='custom_js2-js'></script>
<script type='text/javascript' src='wp-content/themes/gameaddict/js/parallax.js@ver=5.7.5' id='custom_js4-js'></script>
<script type='text/javascript' src='wp-content/themes/gameaddict/js/jquery.color-RGBa-patch.js@ver=5.7.5' id='custom_js5-js'></script>
<script type='text/javascript' src='wp-content/themes/gameaddict/js/jquery.clickoutside.js@ver=5.7.5' id='custom_js6-js'></script>
<script type='text/javascript' id='custom_js7-js-extra'>
/* <![CDATA[ */
var settingsGlobal = {"tajtl":"Home portfolio"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/themes/gameaddict/js/global.js@ver=5.7.5' id='custom_js7-js'></script>
<script type='text/javascript' src='wp-content/themes/gameaddict/js/imagescale.js@ver=5.7.5' id='imagescale-js'></script>
<script type='text/javascript' src='wp-content/themes/gameaddict/js/transit.js@ver=5.7.5' id='transit-js'></script>
<script type='text/javascript' src='wp-content/themes/gameaddict/js/login-with-ajax.js@ver=5.7.5' id='ga_js2-js'></script>
<script type='text/javascript' src='wp-content/plugins/super-socializer/js/front/social_login/general.js@ver=7.13.14' id='the_champ_ss_general_scripts-js'></script>
<script type='text/javascript' src='wp-content/plugins/super-socializer/js/front/sharing/sharing.js@ver=7.13.14' id='the_champ_share_counts-js'></script>
<script type='text/javascript' src='wp-includes/js/wp-embed.min.js@ver=5.7.5' id='wp-embed-js'></script>
<script type='text/javascript' src='wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js@ver=6.6.0' id='wpb_composer_front_js-js'></script>
<script type='text/javascript' src='https://www.youtube.com/iframe_api?ver=6.6.0' id='vc_youtube_iframe_api_js-js'></script>
<script type='text/javascript' src='wp-content/plugins/js_composer/assets/lib/bower/skrollr/dist/skrollr.min.js@ver=6.6.0' id='vc_jquery_skrollr_js-js'></script>
<script type='text/javascript' src='wp-content/plugins/js_composer/assets/lib/vc_waypoints/vc-waypoints.min.js@ver=6.6.0' id='vc_waypoints-js'></script>
<script type='text/javascript' src='wp-content/plugins/js_composer/assets/lib/vc_carousel/js/transition.min.js@ver=6.6.0' id='vc_transition_bootstrap_js-js'></script>
<script type='text/javascript' src='wp-content/plugins/js_composer/assets/lib/vc_carousel/js/vc_carousel.min.js@ver=6.6.0' id='vc_carousel_js-js'></script>
</body></html>