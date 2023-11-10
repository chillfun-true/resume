<?php
include "Koneksi_Rsume.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Resume - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Iqbal RJ</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="assets/img/profil.jpg" alt="..." /></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Education</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#awards">Awards</a></li>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="about">
		<?php
			$sql_about = "SELECT * FROM about";
			$result = $conn->query($sql_about);
			$row = $result->fetch_assoc();

			$sql_sosial 
			= "SELECT * FROM social_media";
			$result_sosial = $conn->query($sql_sosial);
			$row_sosial = $result_sosial->fetch_assoc();
		?>
                <div class="resume-section-content">
                    <h1 class="mb-0">
                        <?php echo $row['nama_depan']?>
                        <span class="text-primary"><?php echo $row['nama_belakang']?></span>
                    </h1>
                    <div class="subheading mb-5">
                        <?php echo $row['kota']?> · <a href="https://wa.me/<?php echo $row['no_wa']?>">WA: <?php echo $row['no_wa']?></a> ·
                        <a href="mailto:<?php echo $row['email']?>"><?php echo $row['email']?></a>
                    </div>
                    <p class="lead mb-5"><?php echo $row['keterangan']?></p>
                    <div class="social-icons">
                        <a class="social-icon" href="<?php echo $row_sosial['Youtube']?>"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </section>
			
            <hr class="m-0" />
            <!-- Education-->
		<?php
			$sql_education = "SELECT * FROM education";
			$result_education = $conn->query($sql_education);
			$row_education = $result_education->fetch_assoc();
		?>

            <section class="resume-section" id="education">
                <div class="resume-section-content">
                    <h2 class="mb-5">Education</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0"><?php echo $row_education['Sekolah']?></h3>
                            <div><?php echo $row_education['Jurusan']?></div>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary"><?php echo $row_education['Tanggal']?></span></div>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Skills-->
		<?php
			$sql_skill = "SELECT * FROM skill";
			$result_skill = $conn->query($sql_skill);
		?>
            <section class="resume-section" id="skills">
                <div class="resume-section-content">
                    <h2 class="mb-5">Skills</h2>
                    <div class="subheading mb-3">Programming Languages & Tools</div>
					
					
					
                    <ul class="fa-ul mb-0">
						<?php	
						if ($result_skill->num_rows > 0) {
							while($row_skill = $result_skill->fetch_assoc()) {
								
						?>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            <?php echo $row_skill['bahasa']?>
                        </li>
                        <?php
							}
						}
						?>
                    </ul>
				</div>
            </section>
            <hr class="m-0" />
            <!-- Awards-->
		<?php
			$sql_awards = "SELECT * FROM awards";
			$result_awards = $conn->query($sql_awards);
		?>
            <section class="resume-section" id="awards">
                <div class="resume-section-content">
                    <h2 class="mb-5">Awards & Certifications</h2>
                    <ul class="fa-ul mb-0">
					<?php	
						if ($result_awards->num_rows > 0) {
							while($row_awards = $result_awards->fetch_assoc()) {
					?>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            <?php echo $row_awards['awards']?>
                        </li>
					<?php
						}
					}
					?>
                    </ul>
                </div>
            </section>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
