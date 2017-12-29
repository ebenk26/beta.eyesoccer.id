<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Eyesoccer | Referee</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=1000">
        <link href="<?=base_url()?>newassets/css/style.css" rel="stylesheet">
        <link href="<?=base_url()?>newassets/css/bs.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
    <div class="crumb">
        <ul>
            <li>EyeProfile</li>
            <li>Perangkat Pertandingan</li>
            <!-- <li>Klub</li> -->
            <!-- <li>Pemain</li> -->
        </ul>
    </div>
    <div class="dekstop">
    <div class="center-dekstop m-0">
        <div class="menu-2 w-100 m-0-0 pd-t-20">
            <ul>
                    <li><a href="<?=base_url()?>" style="text-decoration:none; color:#3d3d3d;">Home</a></li>
                    <li><a href="<?=base_url()?>eyeprofile/klub" style="text-decoration:none;color:#3d3d3d;">Klub</a></li>
                    <li><a href="<?=base_url()?>eyeprofile/pemain" style="text-decoration:none;color:#3d3d3d;">Pemain</a></li>
                    <li><a href="<?=base_url()?>eyeprofile/official" style="text-decoration:none;color:#3d3d3d;">Ofisial</a></li>
                    <li><a href="<?=base_url()?>eyeprofile/referee" style="text-decoration:none;color:#3d3d3d;">Perangkat Pertandingan</a></li>
                    <li><a href="<?=base_url()?>eyeprofile/supporter" style="text-decoration:none;color:#3d3d3d;">supporter</a></li>
            </ul>
            <select id="" name="" selected="true" class="slc-musim fl-r">
				<?php
					foreach($kompetisi as $row){
				?>
					<option><?=$row['competition']?></option>';  
				<?php
					}
				?>
            </select>
        </div>
    </div>
    <div class="center-dekstop m-0">
        <div class="container box-border-radius fl-l mt-30">				
                <div class="fl-l img-80">			
                    <img src="<?=base_url()?>assets/img/content_11.jpg" alt="" height="100%">
                </div>
                <div class="tabel-liga-370 b-r-1 table-pd-3 fl-l">
                    <table>
                        <tr>
                            <td>Level Liga</td>
                            <td>: <?php echo $club_header->competition; ?></td>
                        </tr>
                        <tr>
							<?php 							
								$jml=$this->db->query("select name from tbl_club where competition='liga indonesia 1'");
								$total=$jml->result_array();?>
                            <td>Jumlah Klub</td>
                            <td>: <?php $count = $jml->num_rows($jml);?> <?php echo "$count";?> Klub</td>
                        </tr>
                        <tr>
                            <td>Jumlah Pemain</td>
                            <td>:
							<?php 							
							$jmlp=$this->db->query("select name from tbl_player where status!='amatir' AND status!=''");
							$total=$jmlp->result_array();							
							$count = $jmlp->num_rows($jmlp);?> <?php echo "$count";?> Pemain</td>
                        </tr>
                        <tr>
                            <td>Pemain Asing</td>
                            <td>:
							<?php 							
							$jmln=$this->db->query("select nationality from tbl_player where nationality !='indonesia' AND nationality !=''");
							$total=$jmln->result_array();							
							$count = $jmln->num_rows($jmln);?> <?php echo "$count";?> Pemain</td>
                        </tr>
                    </table>
                </div>
                <div class="tabel-liga-370 table-pd-3 fl-l">
                    <table>
                        <tr>
                            <td>Rekor Juara</td>
                            <td>: -</td>
                        </tr>
                        <tr>
                            <td>Usia Rata-rata</td>
                            <td>: -
                        </tr>
                        <tr>
                            <td>Juara Bertahan</td>
                            <td>: -</td>
                        </tr>
						<tr>
                            <td>Pemain Termahal</td>
                            <td>: -</td>
                        </tr>
                    </table>
                </div>
        </div>
    </div>
    <div class="center-dekstop m-0">
    <input type="text" name="" id="" placeholder="Cari ..." class="src-200 mt-30">
    <img src="<?=base_url()?>newassets/img/ic_search.png" alt="" class="img-src-200">
    <table class="radius table table-striped pd-18 mt-10" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                    <th class="t-b-b">No</th>
                    <th class="t-b-b">Nama</th>
                    <th class="t-b-b">Debut</th>
                    <th class="t-b-b">Main</th>
                    <th class="t-b-b">Kartu Kuning</th>
                    <th class="t-b-b">Kartu Merah</th>
                </tr>
            </thead>
            <tbody>
				<?php
				$no = 1;
				foreach($official_main as $row)
				{					
				?>
                <tr>
                    <td><?=$no++?></td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr><?php
				}?>
            </tbody>
        </table>
    </div>
    </body>
</html>