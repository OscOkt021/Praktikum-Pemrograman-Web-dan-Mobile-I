<?php
include('koneksi.php');
$makanan = mysqli_query($koneksi,"SELECT * FROM makanan");
while($row = mysqli_fetch_array($makanan)){
	$nama_makanan[] = $row['makanan'];
	
	$query = mysqli_query($koneksi,"SELECT SUM(jumlah) AS jumlah FROM hasil WHERE id_makanan='".$row['id_makanan']."'");
	$row = $query->fetch_array();
	$jumlah_hasil[] = $row['jumlah'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Modul 4 | Grafik Makanan Favorit saat Bulan Ramadhan</title>
</head>
<body>
	<div style="width: 800px;height: 400px; background-color: #ffc9a7;
	padding: 40px 40px 40px 40px; border-radius: 15px; margin-left: 180px; margin-top: 60px;">
		<canvas id="myChart"></canvas>
	</div>
	<div class="cart">
	<script type="text/javascript" src="Chart.js"></script>
	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'line',
			data: {
				labels: <?php echo json_encode($nama_makanan); ?>,
				datasets: [{
					label: 'Makanan Favorit saat Bulan Ramadhan',
					data: <?php echo json_encode($jumlah_hasil); ?>,
					backgroundColor: 'rgba(60, 255, 90, 0.4)',
					borderColor: 'rgba(60,255,90,1)',
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>
	</div>
</body>
</html>