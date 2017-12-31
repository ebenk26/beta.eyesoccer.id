<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta name="viewport" content="width=1000">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/bs.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="crumb">
        <ul>
            <li>Home</li>
            <li>Eyetube</li>
            <li>Home</li>
            <!-- <li>Pemain</li> -->
        </ul>
    </div>
    <div class="desktop">
        <div class="center-desktop m-0">
            <div class="menu-3 w1020 m-0">
                <ul>
                    <li>
                        <a href="">EYESOCCER FACT</a>
                    </li>
                    <li>
                        <a href="">EYESOCCER FLASH</a>
                    </li>
                    <li>
                        <a href="">EYESOCCER PEDIA</a>
                    </li>
                    <li>
                        <a href="">EYESOCCER PREVIEW</a>
                    </li>
                    <li>
                        <a href="">EYESOCCER HITS</a>
                    </li>
                    <li class="m-0-0">
                        <a href="">EYESOCCER STAR</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="m-0 w1020">
            <div class="garis-x m-t-35"></div>
        </div>
        <div class="center-desktop m-0">
            <div class="container">
                <div class="w1020 m-0 m-t-14">
                    <div class="half">
						<?php
						foreach($video_eyetube as $videonya){
						?>					
                        <div class="gambar">
                            <img src="<?=imgUrl()?>systems/eyetube_storage/<?= $videonya['thumb']; ?>" style="width:554px;">
                            <div class="bottom-left">
                                <h4><?=$videonya['title']?></h4>
                                <a href="<?php echo base_url(); ?>eyetube/detail/<?= $videonya['url']; ?>"><button class="btn-biru" type="button">Lihat</a></button>
                            </div>
                        </div>
						<?php break; }?>
                    </div>
                    <div class="half p-d-l-20">
					<?php
								$i = 0;
								foreach ($video_eyetube as $videonya)
								{
									if ($i != 0)
									{
					?>					
                        <div class="gambar">
                            <img src="<?=imgUrl()?>systems/eyetube_storage/<?= $videonya['thumb']; ?>" style="margin-left:42px; width:554px;">
                            <div class="bottom-left">
                                <h4 style="margin-left:42px;"><?=$videonya['title']?></h4>
                                <a href="<?php echo base_url(); ?>eyetube/detail/<?= $videonya['url']; ?>"><button class="btn-biru" style="margin-left:42px;" type="button">Lihat</a></button>
                            </div>
                        </div>
					<?php
					}
					$i++;

					}
					?>						
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="w1020 m-0 m-t-100">
                <div class="subjudul">
                    <h4>VIDEO POPULAR</h4>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="w1020 m-0 m-t-45">
				<?php
				$this->load->helper('my');			
				foreach ($eyetube_populer as $populer)
				{
				?>			
                <div class="w30">
                    <div>
                        <img src="<?=imgUrl()?>systems/eyetube_storage/<?= $populer['thumb']; ?>" style="width:100%;margin-right:20px;">
                        <p class="sub-en"><?= $populer['title']; ?></p>
                        <span class="time-view">
							<?php
	    						$date 		=  new DateTime($populer['createon']);
	    						$tanggal 	= date_format($date,"Y-m-d H:i:s");

	    						echo relative_time($tanggal) . ' ago - '.$populer['tube_view'].' views';
	    					?>						
						</span>
                    </div>
                </div>
				<?php }?>
            </div>
        </div>
        <div class="container">
            <div class="w1020 m-0 tx-c">
                <button class="btn-white" type="button">Tampilkan Video Lainnya</button>
            </div>
        </div>
        <div class="m-0 w1020">
            <div class="garis-x"></div>
        </div>

        <div class="container">
            <div class="w1020 m-0">
                <div class="subjudul">
                    <h4>REKOMENDASI</h4>
                </div>
            </div>
        </div>
        <div class="container use-opacity">
            <div class="w1020 m-0 m-t-14 p-r">
                <i class="material-icons left panah panahkiri" href="#rekom" role="button">keyboard_arrow_left</i>
                <i class="material-icons right panah panahkanan" href="#rekom" role="button">keyboard_arrow_right</i>

                <div id="rekom" class="carousel slide">
                    <div role="listbox" class="carousel-inner">
                        <div class="box item active">
							<?php 
							foreach($eyetube_rekomendasi as $row){
							?>						
                            <div class="w30">
                                <div>
                                    <img src="<?=imgUrl()?>systems/eyetube_storage/<?= $row['thumb']; ?>" style="width:100%;margin-right:20px;">
                                    <p class="sub-en"><?=$row['title']?></p>
                                    <span class="time-view">
									<?php
											$date 		=  new DateTime($row['createon']);
											$tanggal 	= date_format($date,"Y-m-d H:i:s");

											echo relative_time($tanggal) . ' ago - '.$row['tube_view'].' views';
										?>
									</span>
                                </div>
                            </div>  
							<?php
							}
							?>							
                        </div>
                        <div class="box item">
							<?php 
							foreach($eyetube_rekomendasi_2 as $row_2){
							?>						
                            <div class="w30">
                                <div>
                                    <img src="<?=imgUrl()?>systems/eyetube_storage/<?= $row_2['thumb']; ?>" style="width:100%;margin-right:20px;">
                                    <p class="sub-en"><?=$row_2['title']?></p>
                                    <span class="time-view">
									<?php
											$date 		=  new DateTime($row_2['createon']);
											$tanggal 	= date_format($date,"Y-m-d H:i:s");

											echo relative_time($tanggal) . ' ago - '.$row_2['tube_view'].' views';
										?>									
									</span>
                                </div>
                            </div>
							<?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="m-0 w1020">
            <div class="garis-x"></div>
        </div>

        <div class="container">
            <div class="w1020 m-0">
                <div class="subjudul">
                    <h4>SOCCER SAINS</h4>
                </div>
            </div>
        </div>
        <div class="container use-opacity">
            <div class="w1020 m-0 m-t-14 p-r">
                <i class="material-icons left panah panahkiri" href="#soccersains" role="button">keyboard_arrow_left</i>
                <i class="material-icons right panah panahkanan" href="#soccersains" role="button">keyboard_arrow_right</i>
                <div id="soccersains" class="carousel slide">
                    <div role="listbox" class="carousel-inner">
                        <div class="box item active">
							<?php
								foreach($eyetube_science as $row){
							?>
                            <div class="w30">
                                <div>
                                    <img src="<?=imgUrl()?>systems/eyetube_storage/<?= $row['thumb']; ?>" style="width:100%;margin-right:20px;">
                                    <p class="sub-en"><?=$row['title']?></p>
                                    <span class="time-view">
										<?php
											$date 		=  new DateTime($row['createon']);
											$tanggal 	= date_format($date,"Y-m-d H:i:s");

											echo relative_time($tanggal) . ' ago - '.$row['tube_view'].' views';
										?>									
									</span>
                                </div>
                            </div> 
						<?php }?>							
                        </div>
                        <div class="box item">
							<?php
								foreach($eyetube_science_2 as $row_2){
							?>						
                            <div class="w30">
                                <div>
                                    <img src="<?=imgUrl()?>systems/eyetube_storage/<?= $row_2['thumb']; ?>" style="width:100%;margin-right:20px;">
                                    <p class="sub-en"><?=$row_2['title']?></p>
                                    <span class="time-view">
										<?php
											$date 		=  new DateTime($row_2['createon']);
											$tanggal 	= date_format($date,"Y-m-d H:i:s");

											echo relative_time($tanggal) . ' ago - '.$row_2['tube_view'].' views';
										?>									
									</span>
                                </div>
                            </div>
								<?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="m-0 w1020">
            <div class="garis-x"></div>
        </div>
        <div class="container">
            <div class="w1020 m-0">
                <div class="subjudul">
                    <h4>VIDEO KAMU</h4>
                </div>
            </div>
        </div>
        <div class="container use-opacity">
            <div class="w1020 m-0 m-t-14 p-r">
                <i class="material-icons left panah panahkiri" href="#videokamu" role="button">keyboard_arrow_left</i>
                <i class="material-icons right panah panahkanan" href="#videokamu" role="button">keyboard_arrow_right</i>
                <div id="videokamu" class="carousel slide">
                    <div role="listbox" class="carousel-inner">
                        <div class="box item active">
						<?php
						foreach($eyetube_kamu as $row){
						?>						
                            <div class="w30">
                                <div>
                                    <img src="<?=imgUrl()?>systems/eyetube_storage/<?= $row['thumb']; ?>" style="width:100%;margin-right:20px;">
                                    <p class="sub-en"><?=$row['title']?></p>
                                    <span class="time-view">
										<?php
											$date 		=  new DateTime($row['createon']);
											$tanggal 	= date_format($date,"Y-m-d H:i:s");

											echo relative_time($tanggal) . ' ago - '.$row['tube_view'].' views';
										?>									
									</span>
                                </div>
                            </div>
						<?php } ?>				
                        </div>
                        <div class="box item">
                            <div class="w30">
                                <div>
                                    <img src="assets/img/a.jpg" style="width:100%;margin-right:20px;">
                                    <p class="sub-en">Lorem ipsum dolor sit amet, consectur adipiscing elit.</p>
                                    <span class="time-view">
									
									</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="m-0 w1020">
            <div class="garis-x"></div>
        </div>
        <div class="container">
            <div class="w1020 m-0">
                <div class="subjudul">
                    <h4>PROFIL SSB</h4>
                </div>
            </div>
        </div>
        <div class="container use-opacity">
            <div class="w1020 m-0 m-t-14 p-r">
                <i class="material-icons left panah panahkiri" href="#profilssb" role="button">keyboard_arrow_left</i>
                <i class="material-icons right panah panahkanan" href="#profilssb" role="button">keyboard_arrow_right</i>
                <div id="profilssb" class="carousel slide">
                    <div role="listbox" class="carousel-inner">
                        <div class="box item active">
						<?php
						foreach($eyetube_ssb as $ssb){
						?>						
                            <div class="w30">
                                <div>
                                    <img src="<?=imgUrl()?>systems/eyetube_storage/<?= $ssb['thumb']; ?>" style="width:100%;margin-right:20px;">
                                    <p class="sub-en"><?=$ssb['title']?></p>
                                    <span class="time-view">
										<?php
											$date 		=  new DateTime($ssb['createon']);
											$tanggal 	= date_format($date,"Y-m-d H:i:s");

											echo relative_time($tanggal) . ' ago - '.$ssb['tube_view'].' views';
										?>									
									</span>
                                </div>
                            </div>
							<?php } ?>
                        </div>
                        <div class="box item">
						<?php
						foreach($eyetube_ssb_2 as $ssb_2){
						?>						
                            <div class="w30">
                                <div>
                                    <img src="<?=imgUrl()?>systems/eyetube_storage/<?= $ssb_2['thumb']; ?>" style="width:100%;margin-right:20px;">
                                    <p class="sub-en"><?=$ssb_2['title']?></p>
                                    <span class="time-view">
										<?php
											$date 		=  new DateTime($ssb_2['createon']);
											$tanggal 	= date_format($date,"Y-m-d H:i:s");

											echo relative_time($tanggal) . ' ago - '.$ssb_2['tube_view'].' views';
										?>									
									</span>
                                </div>
                            </div>
						<?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
        <script src="<?=base_url()?>assets/js/home.js"></script>
</body>

</html>