</div>
		<style>
			.pagination > .active > a {
				z-index:1;
			}
			.menu-3 a:hover{
                border-bottom: 3px solid rgb(200, 0, 0);
                color: rgb(200, 0, 0);
            }
		</style>
		<div class="crumb">
			<ul>
				<li>Home</li>
				<li>EyeNews</li>
				<!-- <li>Pemain</li> -->
			</ul>
		</div>
		<div class="desktop">
        <div class="center-desktop m-0">
            <div class="menu-3 m-0">
                <div class="over-x m-0">
                    <div class="w-max">
                        <ul>
                            <?php
                                foreach ($news_type as $cat_name)
                                {
                            ?>
                                <li>
                                    <a href="<?php echo base_url()?>eyenews/kategori_page/<?php echo $cat_name->news_type?>"><?php echo $cat_name->news_type;?></a>
                                </li>
                            <?php
                                }
                            ?>
                            
                        </ul>
                    </div>
				</div>
				<div class="container p-r ar-menu-3">
			        <i class="material-icons fl-l">keyboard_arrow_left</i>
			        <i class="material-icons fl-r">keyboard_arrow_right</i>
		        </div>
            </div>
        </div>
        <!-- <div class="m-0 w1020">
            <div class="garis-x m-t-30"></div>
        </div> -->
        <div class="center-desktop m-0">
            <div class="m-0">
                <div class="container ">
				
					<?php
					$this->load->helper('my');
					foreach ($pagging['row'] as $similar)
					{
					?>
					<div class="w4">
						<a href="<?php echo base_url(); ?>eyenews/detail/<?= $similar->url;?>">
							<div class="w4-f">
								<img src="<?php echo imgUrl(); ?>systems/eyenews_storage/<?= $similar->thumb1; ?>" style="width:100%;margin-right:20px;" alt="<?= $similar->title; ?>" title="<?= $similar->title; ?>">
							</div>
								<p class="sub-en">									
								<?= $similar->title; ?></p>
								<span class="time-view">
								<?php
								$date 		=  new DateTime($similar->createon);
								$tanggal 	= date_format($date,"Y-m-d H:i:s");
								$real_time = relative_time($tanggal);

								echo relative_time($tanggal) . ' lalu - '.$similar->news_view.' views';
								?>								
								</span>
						</a>
					</div>
					<?php } ?>
					<div><?php echo $pagging['pagging'];?></div>
                </div>
            </div>
            
            <div class="m-0">
                <div class="container m-t-5">
                    <div class="m-0">
                        <div class="container news-rcm">
                            <div class="subjudul2">
                                <h4>REKOMENDASI</h4>
                            </div>
							<?php
							foreach($eyenews_rekomendasi as $rekomendasi){
							?>	
							<a href="<?php echo base_url(); ?>eyenews/detail/<?= $rekomendasi['url'];?>">
								<div class="container garis-x4">
									<div class="container" style="width:240px;height:140px;overflow:hidden;">
										<img src="<?php echo imgUrl(); ?>systems/eyenews_storage/<?= $rekomendasi['thumb1']; ?>" alt="<?=$rekomendasi['title'];?>" title="<?=$rekomendasi['title'];?>" style="width:100%;min-height:100%;">
									</div>
									<div class="container news-rcm-z">
										<div class="rr">
											<span><?=$rekomendasi['createon'];?></span>
										</div>
										<p>										
										<?=$rekomendasi['title'];?></p>
										<span>
										<?php
										$keterangan = strip_tags($rekomendasi['description']);
										echo word_limiter($keterangan,15);
										?>									
										</span>
									</div>
								</div>
							</a>
							<?php } ?>
							
                        </div>
                        <div class="container news-rcm-r fl-r">
                            <div class="subjudul2">
                                <h4>TERPOPULER</h4>
                            </div>
                            <div class="n-rcm-up">
							<?php 
							foreach($eyenews_populer as $row){
							?>
                                <div style="width:100%;height:208px;overflow:hidden;">
									<img src="<?php echo imgUrl(); ?>systems/eyenews_storage/<?= $row['thumb1']; ?>" alt="" style="width:100%;min-height:100%;">
								</div>
                                <div class="n-rcm-up-teks">
                                    <div class="rr">
                                        <span><?=$row['createon'];?></span>
                                    </div>
                                    <a href="<?php echo base_url(); ?>eyenews/detail/<?= $row['url'];?>">
                                        <span>
											<?=$row['title'];?>									
										</span>
                                    </a>
                                </div>
							<?php break; } ?>
                            </div>
							<?php
							foreach ($eyenews_populer2 as $populer2)
							{
							?>							
                            <div class="container news-rcm-d">							
                                <a href="" class="nn">
                                    <img src="<?php echo imgUrl(); ?>systems/eyenews_storage/<?= $populer2['thumb1']; ?>" alt="">
                                </a>
                                <div class="container rm">
                                    <a href="<?php echo base_url(); ?>eyenews/detail/<?= $populer2['url'];?>">
                                        <span>
										<?=$populer2['title'];?></span>
                                    </a>
                                    <div class="rr">
                                        <span>
										<?php
											$date 		=  new DateTime($populer2['createon']);
											$tanggal 	= date_format($date,"Y-m-d H:i:s");

											echo relative_time($tanggal) . ' lalu - '.$populer2['news_view'].' views';
										?>
										</span>
                                    </div>
                                </div>
                            </div>
							<?php
							}
							?>							
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="m-0">
                    <div class="subjudul2">
                        <h4>EyeTube</h4>
                    </div>
                </div>
                <div class="m-0">			
                    <div class="container m-t-5 bbg">
					<?php
					foreach ($video_eyetube as $videonya)
					{
					?>						
                        <div class="w4">
							
							<a href="<?php echo base_url(); ?>eyetube/detail/<?= $videonya['url'];?>">
								<div class="w4-f">
									<img src="<?php echo imgUrl(); ?>systems/eyetube_storage/<?= $videonya['thumb']; ?>" style="width:100%;margin-right:20px;" alt="<?= $videonya['title']; ?>" title="<?= $videonya['title']; ?>"></div>
										<p class="sub-en">
										<?= $videonya['title']; ?></p>
									<span class="time-view">
									<?php
										$date 		=  new DateTime($videonya['createon']);
										$tanggal 	= date_format($date,"Y-m-d H:i:s");
										echo relative_time($tanggal) . ' ago - '.$videonya['tube_view'].' views';						
									?>								
									</span>
								
							</a>
                        </div>
					<?php }?>						
                    </div>
                </div>
            </div>
            <div class="container m-t-5">
                <div class="m-0 mt-10">
                    <div class="container news-rcm">
                        <div class="subjudul2">
                            <h4>SOCCER SERI</h4>
                        </div>
						<?php
						// foreach($all_news as $row12){
						foreach($soccer_seri as $row12){
						?>
						<a href="<?php echo base_url(); ?>eyenews/detail/<?= $row12['url'];?>">
							<div class="container garis-x4">
								<div class="container" style="width:240px;">
									<img src="<?php echo imgUrl(); ?>systems/eyenews_storage/<?= $row12['thumb1']; ?>" alt="<?=$row12['title']?>" title="<?=$row12['title']?>">
								</div>
								<div class="container news-rcm-z">
									<div class="rr">
										<span>
											<?php
												$date 		=  new DateTime($row12['createon']);
												$tanggal 	= date_format($date,"Y-m-d H:i:s");

												echo relative_time($tanggal) . ' lalu - '.$row12['news_view'].' views';
											?>									
										</span>
									</div>
									<p>									
									<?=$row12['title']?></p>
									<span>
										<?php
										$keterangan = strip_tags($row12['description']);
										echo word_limiter($keterangan,15);
										?>								
									</span>
								</div>
							</div>
						</a>
					<?php } ?>
                    </div>
                    <div class="container news-rcm-r2 fl-r">
                        <div class="subjudul2">
                            <h4>JADWAL LIVE</h4>
                        </div>
                        <div class="line-b"></div>
                        <div>
                            <table>
							<?php
							foreach($jadwal_today as $row){
							?>							
                                <tr>
                                    <td colspan="5">
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span><?=$row["club_a"]?></span>
                                    </td>
                                    <td>
                                        <img src="<?=imgUrl()?>systems/club_logo/<?php print $row['logo_a']; ?>" alt="">
                                    </td>
                                    <td>
                                        <span><?=date("d M Y - H:i:s",strtotime($row["jadwal_pertandingan"]))?></span>
                                        <p><?=$row['live_pertandingan']?></p>
                                    </td>
                                    <td>
                                        <img src="<?=imgUrl()?>systems/club_logo/<?php print $row['logo_b']; ?>" alt="">
                                    </td>
                                    <td>
                                        <span><?=$row["club_b"]?></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="5" class="garis-x4"></td>
                                </tr>
							<?php } ?>
                            </table>
                            <div class="line-b"></div>
                            <div class="fl-r">
                                <a href="">
                                    <p class="lp" style="margin:0px;">Lihat selengkapnya ></p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
