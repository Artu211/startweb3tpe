<<<<<<< HEAD
<!DOCTYPE html>
=======
>>>>>>> 0ba3df90454127a7f8c4d104ed1f55a19fffd492
<html data-bs-theme="dark">
    <head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/style.css" />

		<script type="text/javascript" src="assets/js/bootstrap/bootstrap.min.js"></script>
	</head>
<<<<<<< HEAD
	
	<body>
		<main>
			<section class="content">
				<?php
					$page = isset($_GET['page']) ? $_GET['page'] : 'index';
					$action = isset($_GET['action']) ? $_GET['action']: 'index';
					if (is_file($file = 'templates/views' . DIRECTORY_SEPARATOR . $page . DIRECTORY_SEPARATOR . $action . '.php'))
					{
						include ($file);
					}
					else
					{
						die('Forget about it');
					}
					//exit;
				?>
			</section>
		</main>
    </body>
=======
<body>
    <main>
        <?php 
            $page = isset($_GET['page']) ? $_GET['page'] : 'index';
            $action = isset($_GET['action']) ? $_GET['action'] : 'index';
            if (is_file($file = 'templates' . DIRECTORY_SEPARATOR . $page . DIRECTORY_SEPARATOR . $action . '.php')){
                include ($file);
            }
            else{
                die("Forget about it");
            }
            exit;
        ?>
    </main>
</body>
>>>>>>> 0ba3df90454127a7f8c4d104ed1f55a19fffd492
</html>