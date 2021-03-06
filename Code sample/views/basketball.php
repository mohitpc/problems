<?
/*
	The following are controls for viewing the template only.
*/
	$header_login_form = true;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php include('comp_head.php');?>
	</head>
	<body class="en basketball">
		<?php include("comp_mobile_nav.php"); ?>
		<section class="wrapper">
			<?php include("comp_header.php"); ?>
			<section class="content">
				<?php include("comp_asides.php"); ?>
				<section class="content_area">
					<article class="tabbed">
						<nav class='tabs'>
							<a class="active">Today</a>
							<a>Early</a>
							<a>In-Running</a>
							<a>My Favourites</a>
						</nav>
						<div class="header">
							<nav>
								<div class="options">
									<form class="search_header_teams">
										<fieldset>
											<input type="text" placeholder="Search Teams"></input>
											<input type="button">
										</fieldset>
									</form>
									<div class="filters">
										<div class="filter_title">Leagues:</div>
										<div class="dropdown leagues">
											<div class="selected">All Leagues <span class="icon_dropdown_down"></span></div>
											<ul>
												<li><input type="checkbox" name="leages"><label for="leagues">Some League Name</label></li>
												<li><input type="checkbox" name="leages"><label for="leagues">Some League Name</label></li>
												<li><input type="checkbox" name="leages"><label for="leagues">Some League Name</label></li>
												<li><input type="checkbox" name="leages"><label for="leagues">Some League Name</label></li>
												<li><input type="checkbox" name="leages"><label for="leagues">Some League Name</label></li>
												<li><input type="checkbox" name="leages"><label for="leagues">Some League Name</label></li>
												<li><input type="checkbox" name="leages"><label for="leagues">Some League Name</label></li>
												<li><input type="checkbox" name="leages"><label for="leagues">Some League Name</label></li>
												<li><input type="checkbox" name="leages"><label for="leagues">Some League Name</label></li>
												<li><input type="checkbox" name="leages"><label for="leagues">Some League Name</label></li>
												<li><input type="checkbox" name="leages"><label for="leagues">Some League Name</label></li>
												<li><input type="checkbox" name="leages"><label for="leagues">Some League Name</label></li>
												<li><input type="checkbox" name="leages"><label for="leagues">Some League Name</label></li>
												<li><input type="checkbox" name="leages"><label for="leagues">Some League Name</label></li>
											</ul>
										</div>
									</div>
									<div class="timer">
										<div class="elapse">Next Update <time>32 sec</time></div>
										<div class="icon_update"></div>
									</div>
								</div>
								<div class="tabs">
									<div class="tab active">Total Points</div>
								</div>
							</nav>
						</div>
						<section class="games">
							<div class="col_titles">
								<span class="cols col1">Sport</span>
								<span class="cols col2">Time</span>
								<span class="cols col3">Fixture</span>
								<span class="cols col4">Buy</span>
								<span class="cols col5">Sell</span>
							</div>
							<div class="group">
								<div class="league nba">
									<div class="icon_fav"></div>
									<div class="icon_league"></div>
									<div class="title">NBA</div>
								</div>
								<div class="fixture">
									<div class="cols col1 sport"><div class="icon_basketball"></div></div>
									<div class="cols col2 time">8/3/2016<BR>18:00</div>
									<div class="cols col3 match">
										<div class="home"><span class="icon_fav"></span>New York Knicks</div>
										<div class="away"><span class="icon_fav"></span>Boston Celtics</div>
									</div>
									<div class="cols col4 action"><div class="btn btn-buy">0.550</div></div>
									<div class="cols col5 action"><div class="btn btn-sell">0.358</div></div>
								</div>
								<div class="fixture">
									<div class="cols col1 sport"><div class="icon_basketball"></div></div>
									<div class="cols col2 time">8/3/2016<BR>18:00</div>
									<div class="cols col3 match">
										<div class="home"><span class="icon_fav"></span>New York Knicks</div>
										<div class="away"><span class="icon_fav"></span>Boston Celtics</div>
									</div>
									<div class="cols col4 action"><div class="btn btn-buy">0.550</div></div>
									<div class="cols col5 action"><div class="btn btn-sell">0.358</div></div>
								</div>
								<div class="fixture">
									<div class="cols col1 sport"><div class="icon_basketball"></div></div>
									<div class="cols col2 time">8/3/2016<BR>18:00</div>
									<div class="cols col3 match">
										<div class="home"><span class="icon_fav"></span>New York Knicks</div>
										<div class="away"><span class="icon_fav"></span>Boston Celtics</div>
									</div>
									<div class="cols col4 action"><div class="btn btn-buy">0.550</div></div>
									<div class="cols col5 action"><div class="btn btn-sell">0.358</div></div>
								</div>
								<div class="fixture">
									<div class="cols col1 sport"><div class="icon_basketball"></div></div>
									<div class="cols col2 time">8/3/2016<BR>18:00</div>
									<div class="cols col3 match">
										<div class="home"><span class="icon_fav"></span>New York Knicks</div>
										<div class="away"><span class="icon_fav"></span>Boston Celtics</div>
									</div>
									<div class="cols col4 action"><div class="btn btn-buy">0.550</div></div>
									<div class="cols col5 action"><div class="btn btn-sell">0.358</div></div>
								</div>
								<div class="fixture">
									<div class="cols col1 sport"><div class="icon_basketball"></div></div>
									<div class="cols col2 time">8/3/2016<BR>18:00</div>
									<div class="cols col3 match">
										<div class="home"><span class="icon_fav"></span>New York Knicks</div>
										<div class="away"><span class="icon_fav"></span>Boston Celtics</div>
									</div>
									<div class="cols col4 action"><div class="btn btn-buy">0.550</div></div>
									<div class="cols col5 action"><div class="btn btn-sell">0.358</div></div>
								</div>
								<div class="fixture">
									<div class="cols col1 sport"><div class="icon_basketball"></div></div>
									<div class="cols col2 time">8/3/2016<BR>18:00</div>
									<div class="cols col3 match">
										<div class="home"><span class="icon_fav"></span>New York Knicks</div>
										<div class="away"><span class="icon_fav"></span>Boston Celtics</div>
									</div>
									<div class="cols col4 action"><div class="btn btn-buy">0.550</div></div>
									<div class="cols col5 action"><div class="btn btn-sell">0.358</div></div>
								</div>
								<div class="fixture">
									<div class="cols col1 sport"><div class="icon_basketball"></div></div>
									<div class="cols col2 time">8/3/2016<BR>18:00</div>
									<div class="cols col3 match">
										<div class="home"><span class="icon_fav"></span>New York Knicks</div>
										<div class="away"><span class="icon_fav"></span>Boston Celtics</div>
									</div>
									<div class="cols col4 action"><div class="btn btn-buy">0.550</div></div>
									<div class="cols col5 action"><div class="btn btn-sell">0.358</div></div>
								</div>
								<div class="fixture">
									<div class="cols col1 sport"><div class="icon_basketball"></div></div>
									<div class="cols col2 time">8/3/2016<BR>18:00</div>
									<div class="cols col3 match">
										<div class="home"><span class="icon_fav"></span>New York Knicks</div>
										<div class="away"><span class="icon_fav"></span>Boston Celtics</div>
									</div>
									<div class="cols col4 action"><div class="btn btn-buy">0.550</div></div>
									<div class="cols col5 action"><div class="btn btn-sell">0.358</div></div>
								</div>
								<div class="fixture">
									<div class="cols col1 sport"><div class="icon_basketball"></div></div>
									<div class="cols col2 time">8/3/2016<BR>18:00</div>
									<div class="cols col3 match">
										<div class="home"><span class="icon_fav"></span>New York Knicks</div>
										<div class="away"><span class="icon_fav"></span>Boston Celtics</div>
									</div>
									<div class="cols col4 action"><div class="btn btn-buy">0.550</div></div>
									<div class="cols col5 action"><div class="btn btn-sell">0.358</div></div>
								</div>
								<div class="fixture">
									<div class="cols col1 sport"><div class="icon_basketball"></div></div>
									<div class="cols col2 time">8/3/2016<BR>18:00</div>
									<div class="cols col3 match">
										<div class="home"><span class="icon_fav"></span>New York Knicks</div>
										<div class="away"><span class="icon_fav"></span>Boston Celtics</div>
									</div>
									<div class="cols col4 action"><div class="btn btn-buy">0.550</div></div>
									<div class="cols col5 action"><div class="btn btn-sell">0.358</div></div>
								</div>
								<div class="fixture">
									<div class="cols col1 sport"><div class="icon_basketball"></div></div>
									<div class="cols col2 time">8/3/2016<BR>18:00</div>
									<div class="cols col3 match">
										<div class="home"><span class="icon_fav"></span>New York Knicks</div>
										<div class="away"><span class="icon_fav"></span>Boston Celtics</div>
									</div>
									<div class="cols col4 action"><div class="btn btn-buy">0.550</div></div>
									<div class="cols col5 action"><div class="btn btn-sell">0.358</div></div>
								</div>
								<div class="fixture">
									<div class="cols col1 sport"><div class="icon_basketball"></div></div>
									<div class="cols col2 time">8/3/2016<BR>18:00</div>
									<div class="cols col3 match">
										<div class="home"><span class="icon_fav"></span>New York Knicks</div>
										<div class="away"><span class="icon_fav"></span>Boston Celtics</div>
									</div>
									<div class="cols col4 action"><div class="btn btn-buy">0.550</div></div>
									<div class="cols col5 action"><div class="btn btn-sell">0.358</div></div>
								</div>
							</div>
							<div class="group">
								<div class="league ncaa">
									<div class="icon_fav"></div>
									<div class="icon_league"></div>
									<div class="title">NCAA</div>
								</div>
								<div class="fixture">
									<div class="cols col1 sport"><div class="icon_basketball"></div></div>
									<div class="cols col2 time">8/3/2016<BR>18:00</div>
									<div class="cols col3 match">
										<div class="home"><span class="icon_fav"></span>New York Knicks</div>
										<div class="away"><span class="icon_fav"></span>Boston Celtics</div>
									</div>
									<div class="cols col4 action"><div class="btn btn-buy">0.550</div></div>
									<div class="cols col5 action"><div class="btn btn-sell">0.358</div></div>
								</div>
								<div class="fixture">
									<div class="cols col1 sport"><div class="icon_basketball"></div></div>
									<div class="cols col2 time">8/3/2016<BR>18:00</div>
									<div class="cols col3 match">
										<div class="home"><span class="icon_fav"></span>New York Knicks</div>
										<div class="away"><span class="icon_fav"></span>Boston Celtics</div>
									</div>
									<div class="cols col4 action"><div class="btn btn-buy">0.550</div></div>
									<div class="cols col5 action"><div class="btn btn-sell">0.358</div></div>
								</div>
								<div class="fixture">
									<div class="cols col1 sport"><div class="icon_basketball"></div></div>
									<div class="cols col2 time">8/3/2016<BR>18:00</div>
									<div class="cols col3 match">
										<div class="home"><span class="icon_fav"></span>New York Knicks</div>
										<div class="away"><span class="icon_fav"></span>Boston Celtics</div>
									</div>
									<div class="cols col4 action"><div class="btn btn-buy">0.550</div></div>
									<div class="cols col5 action"><div class="btn btn-sell">0.358</div></div>
								</div>
								<div class="fixture">
									<div class="cols col1 sport"><div class="icon_basketball"></div></div>
									<div class="cols col2 time">8/3/2016<BR>18:00</div>
									<div class="cols col3 match">
										<div class="home"><span class="icon_fav"></span>New York Knicks</div>
										<div class="away"><span class="icon_fav"></span>Boston Celtics</div>
									</div>
									<div class="cols col4 action"><div class="btn btn-buy">0.550</div></div>
									<div class="cols col5 action"><div class="btn btn-sell">0.358</div></div>
								</div>
								<div class="fixture">
									<div class="cols col1 sport"><div class="icon_basketball"></div></div>
									<div class="cols col2 time">8/3/2016<BR>18:00</div>
									<div class="cols col3 match">
										<div class="home"><span class="icon_fav"></span>New York Knicks</div>
										<div class="away"><span class="icon_fav"></span>Boston Celtics</div>
									</div>
									<div class="cols col4 action"><div class="btn btn-buy">0.550</div></div>
									<div class="cols col5 action"><div class="btn btn-sell">0.358</div></div>
								</div>
								<div class="fixture">
									<div class="cols col1 sport"><div class="icon_basketball"></div></div>
									<div class="cols col2 time">8/3/2016<BR>18:00</div>
									<div class="cols col3 match">
										<div class="home"><span class="icon_fav"></span>New York Knicks</div>
										<div class="away"><span class="icon_fav"></span>Boston Celtics</div>
									</div>
									<div class="cols col4 action"><div class="btn btn-buy">0.550</div></div>
									<div class="cols col5 action"><div class="btn btn-sell">0.358</div></div>
								</div>
								<div class="fixture">
									<div class="cols col1 sport"><div class="icon_basketball"></div></div>
									<div class="cols col2 time">8/3/2016<BR>18:00</div>
									<div class="cols col3 match">
										<div class="home"><span class="icon_fav"></span>New York Knicks</div>
										<div class="away"><span class="icon_fav"></span>Boston Celtics</div>
									</div>
									<div class="cols col4 action"><div class="btn btn-buy">0.550</div></div>
									<div class="cols col5 action"><div class="btn btn-sell">0.358</div></div>
								</div>
								<div class="fixture">
									<div class="cols col1 sport"><div class="icon_basketball"></div></div>
									<div class="cols col2 time">8/3/2016<BR>18:00</div>
									<div class="cols col3 match">
										<div class="home"><span class="icon_fav"></span>New York Knicks</div>
										<div class="away"><span class="icon_fav"></span>Boston Celtics</div>
									</div>
									<div class="cols col4 action"><div class="btn btn-buy">0.550</div></div>
									<div class="cols col5 action"><div class="btn btn-sell">0.358</div></div>
								</div>
								<div class="fixture">
									<div class="cols col1 sport"><div class="icon_basketball"></div></div>
									<div class="cols col2 time">8/3/2016<BR>18:00</div>
									<div class="cols col3 match">
										<div class="home"><span class="icon_fav"></span>New York Knicks</div>
										<div class="away"><span class="icon_fav"></span>Boston Celtics</div>
									</div>
									<div class="cols col4 action"><div class="btn btn-buy">0.550</div></div>
									<div class="cols col5 action"><div class="btn btn-sell">0.358</div></div>
								</div>
								<div class="fixture">
									<div class="cols col1 sport"><div class="icon_basketball"></div></div>
									<div class="cols col2 time">8/3/2016<BR>18:00</div>
									<div class="cols col3 match">
										<div class="home"><span class="icon_fav"></span>New York Knicks</div>
										<div class="away"><span class="icon_fav"></span>Boston Celtics</div>
									</div>
									<div class="cols col4 action"><div class="btn btn-buy">0.550</div></div>
									<div class="cols col5 action"><div class="btn btn-sell">0.358</div></div>
								</div>
								<div class="fixture">
									<div class="cols col1 sport"><div class="icon_basketball"></div></div>
									<div class="cols col2 time">8/3/2016<BR>18:00</div>
									<div class="cols col3 match">
										<div class="home"><span class="icon_fav"></span>New York Knicks</div>
										<div class="away"><span class="icon_fav"></span>Boston Celtics</div>
									</div>
									<div class="cols col4 action"><div class="btn btn-buy">0.550</div></div>
									<div class="cols col5 action"><div class="btn btn-sell">0.358</div></div>
								</div>
								<div class="fixture">
									<div class="cols col1 sport"><div class="icon_basketball"></div></div>
									<div class="cols col2 time">8/3/2016<BR>18:00</div>
									<div class="cols col3 match">
										<div class="home"><span class="icon_fav"></span>New York Knicks</div>
										<div class="away"><span class="icon_fav"></span>Boston Celtics</div>
									</div>
									<div class="cols col4 action"><div class="btn btn-buy">0.550</div></div>
									<div class="cols col5 action"><div class="btn btn-sell">0.358</div></div>
								</div>
								<div class="fixture">
									<div class="cols col1 sport"><div class="icon_basketball"></div></div>
									<div class="cols col2 time">8/3/2016<BR>18:00</div>
									<div class="cols col3 match">
										<div class="home"><span class="icon_fav"></span>New York Knicks</div>
										<div class="away"><span class="icon_fav"></span>Boston Celtics</div>
									</div>
									<div class="cols col4 action"><div class="btn btn-buy">0.550</div></div>
									<div class="cols col5 action"><div class="btn btn-sell">0.358</div></div>
								</div>
								<div class="fixture">
									<div class="cols col1 sport"><div class="icon_basketball"></div></div>
									<div class="cols col2 time">8/3/2016<BR>18:00</div>
									<div class="cols col3 match">
										<div class="home"><span class="icon_fav"></span>New York Knicks</div>
										<div class="away"><span class="icon_fav"></span>Boston Celtics</div>
									</div>
									<div class="cols col4 action"><div class="btn btn-buy">0.550</div></div>
									<div class="cols col5 action"><div class="btn btn-sell">0.358</div></div>
								</div>
								<div class="fixture">
									<div class="cols col1 sport"><div class="icon_basketball"></div></div>
									<div class="cols col2 time">8/3/2016<BR>18:00</div>
									<div class="cols col3 match">
										<div class="home"><span class="icon_fav"></span>New York Knicks</div>
										<div class="away"><span class="icon_fav"></span>Boston Celtics</div>
									</div>
									<div class="cols col4 action"><div class="btn btn-buy">0.550</div></div>
									<div class="cols col5 action"><div class="btn btn-sell">0.358</div></div>
								</div>
								<div class="fixture">
									<div class="cols col1 sport"><div class="icon_basketball"></div></div>
									<div class="cols col2 time">8/3/2016<BR>18:00</div>
									<div class="cols col3 match">
										<div class="home"><span class="icon_fav"></span>New York Knicks</div>
										<div class="away"><span class="icon_fav"></span>Boston Celtics</div>
									</div>
									<div class="cols col4 action"><div class="btn btn-buy">0.550</div></div>
									<div class="cols col5 action"><div class="btn btn-sell">0.358</div></div>
								</div>
								<div class="fixture">
									<div class="cols col1 sport"><div class="icon_basketball"></div></div>
									<div class="cols col2 time">8/3/2016<BR>18:00</div>
									<div class="cols col3 match">
										<div class="home"><span class="icon_fav"></span>New York Knicks</div>
										<div class="away"><span class="icon_fav"></span>Boston Celtics</div>
									</div>
									<div class="cols col4 action"><div class="btn btn-buy">0.550</div></div>
									<div class="cols col5 action"><div class="btn btn-sell">0.358</div></div>
								</div>
								<div class="fixture">
									<div class="cols col1 sport"><div class="icon_basketball"></div></div>
									<div class="cols col2 time">8/3/2016<BR>18:00</div>
									<div class="cols col3 match">
										<div class="home"><span class="icon_fav"></span>New York Knicks</div>
										<div class="away"><span class="icon_fav"></span>Boston Celtics</div>
									</div>
									<div class="cols col4 action"><div class="btn btn-buy">0.550</div></div>
									<div class="cols col5 action"><div class="btn btn-sell">0.358</div></div>
								</div>
							</div>
						</section>
					</article>
				</section>
			</section>
			<?php include("comp_footer.php"); ?>
		</section>
	</body>
</html>
