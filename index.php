<!DOCTYPE html>
<?php
include('./data.php') or die("ksjfksdfk");

?>

		<?php		$p = $pages[$_REQUEST["pageid"]];		
					if ($p==null) $p=$pages["root"];
		?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Wermgo porduktv�ljare</title>
		  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>		
		  <link rel="stylesheet" type="text/css" href="wg.css">
  
<script type="text/javascript">
	function onLoad() {
	}
<?php if ($p["type"] == "produkt") { ?>
	var kt_pris = new Array();
	var kt_m2pris = new Array();
	var kt_startpris = new Array();
	var kt_lastindex;
<?php
	$cn=0;
	foreach($p["koptill"] as $i => $k) {
	?>	
		kt_pris[<?php echo $cn; ?>] = <?php if (is_numeric($pages[$k]["pris"])) echo $pages[$k]["pris"]; else echo 0;?>;
		kt_startpris[<?php echo $cn; ?>] = <?php if (is_numeric($pages[$k]["startpris"])) echo $pages[$k]["startpris"];  else echo 0;?>;
		kt_m2pris[<?php echo $cn; ?>] = <?php if (is_numeric($pages[$k]["m2pris"])) echo $pages[$k]["m2pris"]; else echo 0; ?>;
	<?php $cn++;
	} ?>
	kt_lastindex=<?php echo $cn-1; ?>;
	function calc() {
		var minyta = document.getElementById("getminyta").innerHTML;
		var maxyta = document.getElementById("getmaxyta").innerHTML;
		var yta = document.getElementById("inputyta").value;
		var pris = document.getElementById("getpris").innerHTML;
		var startpris = document.getElementById("getstartpris").innerHTML;
		var m2pris = document.getElementById("getm2pris").innerHTML;
		document.getElementById("displayresultat").style.display="block";
		
		if (isNaN(minyta) || minyta <1) minyta = 10;
		if (isNaN(maxyta) || maxyta <50) maxyta = 50;
		if (isNaN(yta) || yta < minyta) { yta = minyta; document.getElementById("inputyta").value=minyta; }
		if (yta > maxyta) { yta = maxyta; document.getElementById("inputyta").value=maxyta; }
		if (isNaN(pris) || pris <0) pris = 0;
		if (isNaN(m2pris) || m2pris <0) m2pris = 0;
		if (isNaN(startpris) || startpris <0) startpris = 0;

		var antalstartpaket = Math.ceil(yta/maxyta);
		
		var delsumma=0;
		for (cn=0;cn<=kt_lastindex;cn++) {
			if (document.getElementById("kt-check-" + cn).checked) {
				delsumma+=kt_pris[cn] + antalstartpaket*kt_startpris[cn] + yta*kt_m2pris[cn];
			}
		}

		document.getElementById("displaysumma").innerHTML = Number(antalstartpaket*startpris+yta*m2pris+pris)+Number(delsumma*1);
//		document.getElementById("displaysumma").innerHTML = "Startp: " + antalstartpaket*startpris + " m2: " + yta*m2pris+ " pri:" + pris + "delsumma" + delsumma;
		document.getElementById("displayyta").innerHTML = yta;
		document.getElementById("displayresultat").style.visibility="visible";
	}
<?php } ?>
</script>

    </head>
    <body onload="onLoad()">
		
	<div id="headerarea" class="headerarea">
		<div class="headerarea-logo"><a class="divlink" href="?"><img src="logo-wermgo-h32.png"></a></div>
		<div class="headerarea-menu-item"><a class="divlink" href="?pageid=golv"><h4>GOLVV�RME</h4></a></div>
		<div class="headerarea-menu-item"><a class="divlink" href="?pageid=tapp"><h4>TAPPVATTEN</h4></a></div>
		<div class="headerarea-menu-item"><a class="divlink" href="?pageid=om"><h4>OM OSS</h4></a></div>
		<div class="headerarea-menu-item"><a class="divlink" href="?pageid=proffs"><h4>F�R PROFFS</h4></a></div>
		
	</div>
		
		
		
		
		
		
	<div class="contentarea">
		
		<h1><?php echo $p["rubrik"]; ?></h1>
		
		<?php if($p["type"]=="produkt") { ?>		
			<div class="contentarea-2col">
				<?php if (strlen($p["bildurl"]) > 0) { ?>
					<div class="contentarea-picture">
						<img src="<?php echo $p["bildurl"]; ?>">
					</div>
				<?php } ?>
				<p><?php echo $p["text"]; ?></p>
				<?php if (sizeof($p["innehall"]) > 0) { ?>
					<div class="contentarea-innehall">
						<b>Paketet inneh�ller: </b>
							<?php $firstrun = true; ?>
							<?php foreach($p["innehall"] as $v) { ?>
								<?php if ($firstrun) $firstrun = false; else echo "* "; ?>
								<?php echo $v; ?>
							<?php } ?>
					</div>
				<?php } ?>
			</div>
			<div class="contentarea-1col">
				<div class="contentarea-pris">
					<h4>Pris</h4>
					<table>
						<?php if ($p["startpris"] > 0) { ?>
							<tr><td>Startpris</td><td id="getstartpris" class="prisbelopp"><?php echo $p["startpris"]; ?></td></tr>
						<?php } ?>
						<?php if ($p["m2pris"] > 0) { ?>
							<tr><td>Pris/m2</td><td id="getm2pris" class="prisbelopp"><?php echo $p["m2pris"]; ?></td></tr>
						<?php } ?>
						<?php if ($p["pris"] > 0) { ?>
							<tr><td>Pris</td><td id="getpris" class="prisbelopp"><?php echo $p["pris"]; ?></td></tr>
						<?php } ?>
					</table>
				</div>
				<div class="beraknapris">
					<div style="display:none">
						<span id="getminyta"><?php echo $p["minyta"]; ?></span>
						<span id="getmaxyta"><?php echo $p["maxyta"]; ?></span>
						<span id="getpris"><?php echo $p["pris"]; ?></span>
					</div>
					<h3>Ber�kna ditt pris</h3>
					<p>Ange yta: <input id="inputyta" min="1" type="number" onchange="calc()"></p>
					<div id="displayresultat">Ditt pris f�r <span id="displayyta"></span> m2 blir<br><span id="displaysumma"></span> kr.</div>
				</div>
				
				<?php	if (sizeof($p["koptill"]) >0)	{ ?>
					<div id="koptill">
						<h2>K�p till</h2>
						<?php 
						$odd = false;
						$cn=0;
						foreach ($p["koptill"] as $i => $v) { 
							$odd = !$odd;
						?>
							<div class="koptill-produkt <?php if ($odd) echo "koptill-odd"; else echo "koptill-even";  ?>">
								<b><?php echo $pages[$v]["rubrik"]; ?></b><br>
								<?php echo $pages[$v]["ltext"]; ?>
								<table>
									<tr>
										<td style="width: 108px;"><img src="<?php echo $pages[$v]["bildurl"]; ?>"</td>
										<td>
											<table>
												<?php if ($pages[$v]["pris"] > 0) { ?>
													<tr><td>Pris</td><td><?php echo $pages[$v]["pris"]; ?></td></tr>
												<?php } ?>
												<?php if ($pages[$v]["startpris"] > 0) { ?>
													<tr><td>Startpris</td><td><?php echo $pages[$v]["startpris"]; ?></td></tr>
												<?php } ?>
												<?php if ($pages[$v]["m2pris"] > 0) { ?>
													<tr><td>Pris/m2</td><td><?php echo $pages[$v]["m2pris"]; ?></td></tr>
												<?php } ?>
											</table>
										</td>
										<td style="width: 50px;"><input type="checkbox" onchange="calc()" class="css-checkbox" id="kt-check-<?php echo $cn; ?>" value="true"><label for="kt-check-<?php echo $cn; ?>" class="css-label"></label></td>										
									</tr>
								</table>
							</div>
					</div>
				<?php $cn++;	} 
				} ?>
				
				
			</div>
			
		
		
		<?php } else { ?>

				
				

			
				
				
				
				
				
			<?php if (strlen($p["bildurl"]) > 0) { ?>
				<div class="contentarea-picture">
					<img src="<?php echo $p["bildurl"]; ?>">
				</div>
			<?php } ?>
			<p><?php echo $p["text"]; ?></p>
			<?php		foreach ($p["items"] as $i => $v) { ?>
				<div class="block w33">
					<a class="divlink" href="?pageid=<?php echo $v["linkpageid"]; ?>">
						<div class="block-content">
							<div class="mh10">
								<h3><?php echo $v["rubrik"]; ?></h3>
								<div class="padded-margin"><?php echo $v["text"]; ?></div>
							</div>
							<div class="subpage-picture">
								<img src="<?php if (sizeof($v["bildurl"]) < 1) echo "http://dummyimage.com/340x200/ed393a/fff&text=Produktbild"; else echo $v["bildurl"]; ?>">
							</div>
						</div>
						<div class="block-footer">
							<img src="<?php echo $pilknappurl ?>">
						</div>
					</a>
				</div>
			<?php	} ?>
		<?php } ?>
		<p><?php echo $p["fot"]; ?></p>
		
	</div>
		
  
  
  
  
	<div class="footerarea">
		<div class="footerarea-cell">
			<table>
				<tr>
					<td colspan="2">Wermgo AB</td>
				</tr>
				<tr><td>Tel:</td><td>0570-12150</td></tr>
			</table>
		</div>
		<div class="footerarea-cell">
			<table>
				<tr><td>E-Post:</td><td><a href="mailto:info@wermgo.se">info@wermgo.se</a></td></tr>
				<tr><td>Org.nr:</td><td>111111-2222</td></tr>
			</table>
		</div>
		<div class="footerarea-cell">
			
		</div>
		<div class="footerarea-cell">
		</div>
	</div>
 
 
	</body>
</html>
