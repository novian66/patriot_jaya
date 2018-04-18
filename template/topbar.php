<div class="top-bar">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-4">
					<ul class="top-nav nav-left">

					</ul>
				</div>
				<div class="col-lg-8 col-md-8 col-sm-6 col-xs-8">
					<ul class="top-nav nav-right">
						<?php 
							$id = $this->session->userdata('customer_id');
							if(isset($id)){
						?>
						<li class="dropdown"> 
							<a class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" data-animations="fadeInUp">
								<img class="img-circle resize" alt="" src="images/authors/13.jpg">
								<span class="hidden-xs small-padding">
									<span>Umair</span>
								<i class="fa fa-caret-down"></i>
								</span>
							</a>
							<ul class="dropdown-menu ">
								<li><a href="order_service"><i class=" icon-gears"></i> Order Servis</a></li>
								<li><a href="profile"><i class=" icon-gears"></i> Profil</a></li>
								<li><a href="my_question"><i class="icon-heart"></i> Pertanyaan</a></li>
								<li><a href="login/logout"><i class="icon-lock"></i> Keluar</a></li>
							</ul>
						</li>						
						<?php
							}
							else{
						?>
						<li><a href="login"><i class="fa fa-lock" aria-hidden="true"></i>Masuk</a>
						</li>
						<li><a href="registration"><i class="fa fa-user-plus" aria-hidden="true"></i>Daftar</a>
						</li>
						<?php
							}
						?>


					</ul>
				</div>
			</div>
		</div>
	</div>