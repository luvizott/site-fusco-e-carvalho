<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
<?php include("../parts/header-2.php"); ?>

	<div class="container empresa-div-1">
		<div class="row">
			<div class="col-md-6 col-sm-6">
				<img class="img-empresa" src="../images/img-empresa-2.jpg">
			</div>
			<div class="col-md-6 col-sm-6 empresa-div">

				<h2 class="pseudo_border">Foco na sua empresa</h2>

				<p class="client-txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>
	</div>
</section>

<!-- ACOMPANHE SEU PROCESSO -->

<section id="acompanhe">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-12">
                <form id="contact-form" role="form" action="" method="post">
                    <div class="section-title">
                        <h2>Acompanhe seu processo <small>Valorize seu tempo.</small></h2>
                    </div>

                    <div class="col-md-12 col-sm-12">
                        <input type="text" class="form-cliente" placeholder="Nome completo" name="name" required="">
                    
                        <input type="email" class="form-cliente" placeholder="Endereço de email" name="email" required="">

                    </div>
                    <div class="col-md-7 col-sm-12">
                        <input type="cnpj" class="form-cliente" placeholder="CNPJ" name="cnpj">
                    </div>
                    <div class="col-md-5 col-sm-12">
                        <input type="telefone" class="form-cliente" placeholder="Telefone" name="telefone">
                    </div>

                    <div class="col-md-4 col-sm-12">
                        <input type="submit" class="submit-cliente" name="Solicitar Acompanhamento" value="Solicitar Acompanhamento">
                    </div>

                </form>
            </div>

            <div class="col-md-6 col-sm-12">
                <div class="contact-image">
                    <img class="img-form-2" src="../images/mao-advogado.jpg">
                </div>
            </div>

        </div>
    </div>
</section>

<?php include("../parts/footer.php"); ?>
</body>
</html>