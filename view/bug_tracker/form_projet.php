<?php include('../layout/header.php'); ?>

<div class="container" id="home_bug_tracker">
	
	<div class="row">

	<!-- col GAUCHE -->
		<div class="col s8">

		<!-- AJOUTS PROJETS -->
			<div class="card teal darken-2 display_ajout_projet white-text">

				<div class="card-content teal darken-3">
					<h4 class="card-title">Ajouter un projet</h4>
				
  					<p>Configurer un projet</p>
  				</div>

      			<!-- FORMU AJOUT -->
	      		<div class="card-content">
	      			<form name="form_projet" method="post" action="#">
	      				

      					<!-- nom -->
      					<div class="input-field col s6">
          					<input name="name_projet" type="text" class="validate" required>
          					<label for="name_projet">Nom du projet</label>
          				</div>

          				<!-- description -->
          				<div class="input-field col s12">
							<textarea class="materialize-textarea" name="description_projet" type="text" class="validate" required></textarea>
							<label for="description_projet">Description</label>
						</div>

						<!-- adresse site -->
						<div class="input-field col s6">
          					<input name="site_projet" type="text" class="validate" required>
          					<label for="site_projet">Site web</label>
          				</div>

          				<!-- Users -->
          				<p class="col s12">Choix users</p>

							<table class="display_table hoverable">
								<thead>
									<tr>
										<th data-field="id">Choix</th>
										<th data-field="id">Nom</th>
										<th data-field="name">Adresse mail</th>
									</tr>
								</thead>

								<tbody>
									<tr>
										<td><p><input type="checkbox" id="test5" /><label for="test5"></label></p></td>
										<td>Alvin</td>
										<td>Eclair@gmail.com</td>
									</tr>
									<tr>
										<td><p><input type="checkbox" id="test6" /><label for="test6"></label></p></td>
										<td>Alan</td>
										<td>Jellybean@gmail.com</td>
									</tr>
									<tr>
										<td><p><input type="checkbox" id="test7" /><label for="test7"></label><p></td>
										<td>Jonathan</td>
										<td>Lollipop@gmail.com</td>
									</tr>
								</tbody>
							</table>

	      				<!-- SUBMIT -->
						<button class="btn waves-effect waves-light" type="submit" name="action">Submit
					    	<i class="material-icons right">send</i>
					  	</button>
	      				
	      			</form>
      			</div>
      			<!-- FIN FORMU AJOUT -->

			</div>


		</div>

	<!-- col DROIT -->
		<div class="col s4">

		<!-- LISTE PROJETS MODIFIER OU SUPPRIMER -->
			<div class="card col s12">
				<span class="card-title grey-text text-darken-4">Modifier ou supprimer un projet</span>

			</div>
			
		</div>
	</div>

</div> 
<!-- container -->

<?php include('../layout/footer.php'); ?>