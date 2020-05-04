<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
<?php include("../parts/header-2.php"); ?>
	<div style="padding-top: 200px" id="about" class="container">
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<img class="img-responsive" src="/site/images/advogado.jpg">
			</div>
			<div class="col-md-6 col-sm-12 align-center">

					<h2 class="pseudo_border">Carlos Paiva</h2>

					<p class="client-txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

			</div>
		</div>
		<div style="padding: 50px 0" class="row">
			<div class="col-md-6 col-sm-12">
				<form id="contact-form" role="form" action="" method="post">
                    <div class="section-title">
                        <h2>Fale diretamente comigo <small>mande sua dúvida.</small></h2>
                    </div>

                    <div class="col-md-12 col-sm-12">
                        <input type="text" class="form-cliente" placeholder="Nome completo" name="name" required="">
                    
                        <input type="email" class="form-cliente" placeholder="Endereço de email" name="email" required="">

                    </div>
                    <div class="col-md-12 col-sm-12">
                       <textarea class="form-cliente" rows="6" placeholder="Descreva seu problema" name="message" required=""></textarea>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <input type="submit" class="submit-advogado" name="Enviar" value="Enviar">
                    </div>

                </form>
			</div>
			<div class="col-md-6 col-sm-12 about-info align-center">
				<h2 class="pseudo_border">Especialidades</h2>
                   <figure>
                        <span><i class="fa fa-users"></i></span>
                            <figcaption>
                                <h3>Direito Empresarial</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus.</p>
                            </figcaption>
                    </figure>

                    <figure>
                        <span><i class="fa fa-certificate"></i></span>
                            <figcaption>
                                <h3>Direito do Consumidor</h3>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus.</p>
                            </figcaption>
                        </figure>

                    <figure>
                    <span><i class="fa fa-bar-chart-o"></i></span>
                        <figcaption>
                            <h3>Direito Tributário</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus.</p>
                        </figcaption>
                    </figure>
            </div>
        </div>
	</div>
<?php include("../parts/footer.php"); ?>
</body>
</html>