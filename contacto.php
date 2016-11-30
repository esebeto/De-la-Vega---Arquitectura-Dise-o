<?php include("includes/header.php");?>
<?php include("includes/navigation-dark.php");?>
		
		<section class="module-contact">
			<div class="container">
				<div class="row">
				<div class="col-sm-4">
						<div class="alt-content-box m-t-0 m-t-sm-30">
							<div class="alt-content-box-icon">
								<i class="ion-paper-airplane"></i>
							</div>
							<h5 class="alt-content-box-title font-alt">
								
							</h5>
							Email: info@delavegaarquitectura.com<br>
							Movil. (521) 2221 360491<br>
							Oficina. (52) 2222 796072
						</div>

						<div class="alt-content-box">
							<div class="alt-content-box-icon">
								<i class="ion-map"></i>
							</div>
							<h5 class="alt-content-box-title font-alt">
								
							</h5>
							Priv. de la 23 Sur 3702, local 6-A PB.<br>
							Col. La Noria C.P 72410 , Puebla, Mex.<br><br>
							<a href="#module-maps" class="section-scroll">Buscanos en el Mapa →</a>
						</div>
					</div>
					<div class="col-sm-6 col-sm-offset-1">
						<form id="contact-form" role="form" novalidate="">
							<div class="form-group">
								<label class="sr-only" for="cname">Nombre</label>
								<input type="text" id="cname" class="form-control" name="cname" placeholder="Nombre*" required="" data-validation-required-message="Ingresa tu Nombre.">
								<p class="help-block text-danger"></p>
							</div>
							<div class="form-group">
								<label class="sr-only" for="cemail">Email</label>
								<input type="email" id="cemail" name="cemail" class="form-control" placeholder="E-mail*" required="" data-validation-required-message="Ingresa tu E-mail.">
								<p class="help-block text-danger"></p>
							</div>
							<div class="form-group">
								<textarea class="form-control" id="cmessage" name="cmessage" rows="7" placeholder="Mensaje*" required="" data-validation-required-message="Escribe tu Mensaje."></textarea>
								<p class="help-block text-danger"></p>
							</div>
							<div class="text-center">
								<button type="submit" class="btn btn-block btn-round btn-d">Enviar</button>
							</div>
						</form>
						<div id="contact-response" class="ajax-response font-alt"></div>
					</div>

					
				</div>
			</div>
		</section>

		<section id="module-maps">
			<div id="map"></div>
		</section>
<?php include("includes/footer.php");?>
		