<?php include('view/layout/header.php'); ?>

<div class="container" id="home_bug_tracker">
	
	<div class="row">

	<!-- col GAUCHE -->
		<div class="col s8">

		<!-- PROJETS -->
			<div class="card">
				<span class="card-title grey-text text-darken-4">Projets</span>

      			<p>Choisissez un projet pour commencer</p>

      			<!-- sites ... -->
      			<div class="row dislay_card_site">

      				<!-- SITE A -->
					<div class="card col s4 hoverable display_card">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="http://materializecss.com/images/office.jpg">
						</div>
						<div class="card-content ">
							<span class="card-title activator grey-text text-darken-4">Site A</span>
							<p><a href="#">Voir le projet</a></p>
						</div>
					</div>

					<!-- SITE B -->
					<div class="card col s4 hoverable display_card">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="http://materializecss.com/images/office.jpg">
						</div>
						<div class="card-content ">
							<span class="card-title activator grey-text text-darken-4">Site B</span>
							<p><a href="#">Voir le projet</a></p>
						</div>
					</div>

					<!-- SITE C -->
					<div class="card col s4 hoverable display_card">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="http://materializecss.com/images/office.jpg">
						</div>
						<div class="card-content ">
							<span class="card-title activator grey-text text-darken-4">Site C</span>
							<p><a href="#">Voir le projet</a></p>
						</div>
					</div>

      			</div><!-- fin sites ... -->


				<div class="card-action">
	              <a href="#">Gerer les projets</a>
	              <a href="#">Ajouter un projet</a>
            	</div>

            	<!-- Pagination -->
				<ul class="pagination">
					<li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
					<li class="active light-blue lighten-5"><a href="#!">1</a></li>
					<li class="waves-effect"><a href="#!">2</a></li>
					<li class="waves-effect"><a href="#!">3</a></li>
					<li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
				</ul>
			</div>

		<!-- BUGS EN COURS -->
			<div class="card col s12">
				<span class="card-title grey-text text-darken-4">Bug en cours</span>


				
			</div>

		</div>

	<!-- col DROIT -->
		<div class="col s4">

		<!-- EQUIPES -->
			<div class="card col s12 cyan lighten-3">
				<span class="card-title grey-text text-darken-4">Equipe</span>


				<div class="card-action blue-text text-darken-2">
	              <a href="#">Gerer les équipes</a>
	              <a href="#">Ajouter un membre</a>
            	</div>
			</div>

		<!-- OPTIONS -->
			<div class="card col s12 home_options cyan lighten-5">
				<span class="card-title grey-text text-darken-4">Options</span>

				<div class="divider"></div>
				<div class="section">
					<div class="col s12">Ajouter un membre<a href="#!" class="btn-floating right waves-effect red lighten-2"><i class="material-icons ">person_pin</i></a></div>

					<div class="col s12">Ajoute un bug<a href="#" class="btn-floating right waves-effect cyan accent-2"><i class="material-icons ">announcement</i></a></div>
				</div>
				


				
			</div>
			
		</div>
	</div>

</div> 
<!-- container -->


<?php include('view/layout/footer.php'); ?>
