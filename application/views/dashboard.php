
	<div class="row mb-4">
		<div class="card my-4">
			<div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
				<div class="bg-gradient-info shadow-primary border-radius-lg pt-4 pb-3">
					<h6 class="text-white text-capitalize ps-3">Pemasukan Terbaru</h6>
				</div>
			</div>
			<div class="card-body px-0 pb-2">
				<div class="table-responsive p-0">
					<table class="table align-items-center mb-0">
						<thead>
							<tr>
								<th
									class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
									Status</th>
								<th
									class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
									Tanggal</th>
								<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
									Catatan
								</th>
								<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
									Jumlah Pemasukan</th>
								<th
									class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
									User</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($pemasukan_terbaru as $row) : ?>
							<tr>
								<td class="align-middle text-center text-sm">
									<span
										class="badge badge-sm <?= ($row->status == 'selesai') ? 'bg-gradient-success' : 'bg-gradient-secondary' ?>">
										<?php if($row->status == 'selesai'): ?>
										<?= $row->status ?>
										<?php else : ?>
										<a href="<?= base_url('transaksi/selesai/').$row->id_pemasukan ?>"
											class="text-white">
											<?= $row->status ?>
										</a>
										<?php endif ?>
									</span>
								</td>
								<td class="align-middle text-center">
									<span class="text-secondary text-xs font-weight-bold"><?= $row->tanggal ?></span>
								</td>
								<td>
									<p class="text-xs text-secondary mb-0"><?= $row->catatan ?></p>
								</td>
								<td>
									<p class="text-xs font-weight-bold mb-0">Rp. <?= number_format($row->jumlah) ?></p>
								</td>
								<td>
									<p class="text-xs text-secondary mb-0"><?= $row->nama ?></p>
								</td>
							</tr>
							<?php endforeach ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="row mb-4">
		<div class="card my-4">
			<div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
				<div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
					<h6 class="text-white text-capitalize ps-3">Pengeluaran Terbaru</h6>
				</div>
			</div>
			<div class="card-body px-0 pb-2">
				<div class="table-responsive p-0">
					<table class="table align-items-center mb-0">
						<thead>
							<tr>
								<th
									class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
									Tanggal</th>
								<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
									Catatan
								</th>
								<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
									Jumlah Pengeluaran</th>
								<th
									class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
									User</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($pengeluaran_terbaru as $row) : ?>
							<tr>
								<td class="align-middle text-center">
									<span class="text-secondary text-xs font-weight-bold"><?= $row->tanggal ?></span>
								</td>
								<td>
									<p class="text-xs text-secondary mb-0"><?= $row->catatan ?></p>
								</td>
								<td>
									<p class="text-xs font-weight-bold mb-0">Rp. <?= number_format($row->jumlah) ?></p>
								</td>
								<td>
									<p class="text-xs text-secondary mb-0"><?= $row->nama ?></p>
								</td>
							</tr>
							<?php endforeach ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function () {
		var ctx1 = document.getElementById("chart-pendapatan").getContext("2d");

		new Chart(ctx1, {
			type: "line",
			data: {
				labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov",
					"Dec"],
				datasets: [{
					label: "Pemasukan",
					tension: 0,
					borderWidth: 0,
					pointRadius: 5,
					pointBackgroundColor: "rgba(255, 255, 255, .8)",
					pointBorderColor: "transparent",
					borderColor: "rgba(255, 255, 255, .8)",
					borderColor: "rgba(255, 255, 255, .8)",
					borderWidth: 4,
					backgroundColor: "transparent",
					fill: true,
					data: <?= json_encode($chart['cpdt']) ?> ,
					maxBarThickness: 6

				}],
			},
			options: {
				responsive: true,
				maintainAspectRatio: false,
				plugins: {
					legend: {
						display: false,
					}
				},
				interaction: {
					intersect: false,
					mode: 'index',
				},
				scales: {
					y: {
						grid: {
							drawBorder: false,
							display: true,
							drawOnChartArea: true,
							drawTicks: false,
							borderDash: [5, 5],
							color: 'rgba(255, 255, 255, .2)'
						},
						ticks: {
							display: true,
							color: '#f8f9fa',
							padding: 10,
							font: {
								size: 14,
								weight: 300,
								family: "Roboto",
								style: 'normal',
								lineHeight: 2
							},
						}
					},
					x: {
						grid: {
							drawBorder: false,
							display: false,
							drawOnChartArea: false,
							drawTicks: false,
							borderDash: [5, 5]
						},
						ticks: {
							display: true,
							color: '#f8f9fa',
							padding: 10,
							font: {
								size: 14,
								weight: 300,
								family: "Roboto",
								style: 'normal',
								lineHeight: 2
							},
						}
					},
				},
			},
		});

		var ctx2 = document.getElementById("chart-pengeluaran").getContext("2d");

		new Chart(ctx2, {
			type: "line",
			data: {
				labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov",
					"Dec"],
				datasets: [{
					label: "Pengeluaran",
					tension: 0,
					borderWidth: 0,
					pointRadius: 5,
					pointBackgroundColor: "rgba(255, 255, 255, .8)",
					pointBorderColor: "transparent",
					borderColor: "rgba(255, 255, 255, .8)",
					borderWidth: 4,
					backgroundColor: "transparent",
					fill: true,
					data: <?= json_encode($chart['cpgt']) ?> ,
					maxBarThickness: 6

				}],
			},
			options: {
				responsive: true,
				maintainAspectRatio: false,
				plugins: {
					legend: {
						display: false,
					}
				},
				interaction: {
					intersect: false,
					mode: 'index',
				},
				scales: {
					y: {
						grid: {
							drawBorder: false,
							display: true,
							drawOnChartArea: true,
							drawTicks: false,
							borderDash: [5, 5],
							color: 'rgba(255, 255, 255, .2)'
						},
						ticks: {
							display: true,
							padding: 10,
							color: '#f8f9fa',
							font: {
								size: 14,
								weight: 300,
								family: "Roboto",
								style: 'normal',
								lineHeight: 2
							},
						}
					},
					x: {
						grid: {
							drawBorder: false,
							display: false,
							drawOnChartArea: false,
							drawTicks: false,
							borderDash: [5, 5]
						},
						ticks: {
							display: true,
							color: '#f8f9fa',
							padding: 10,
							font: {
								size: 14,
								weight: 300,
								family: "Roboto",
								style: 'normal',
								lineHeight: 2
							},
						}
					},
				},
			},
		});

		var ctx3 = document.getElementById("chart-transaksi").getContext("2d");

		new Chart(ctx3, {
			type: "bar",
			data: {
				labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov",
					"Dec"],
				datasets: [{
					label: "Transaksi",
					tension: 0.4,
					borderWidth: 0,
					borderRadius: 4,
					borderSkipped: false,
					backgroundColor: "rgba(255, 255, 255, .8)",
					data: <?= json_encode($chart['ctt']) ?> ,
					maxBarThickness: 6
				}, ],
			},
			options: {
				responsive: true,
				maintainAspectRatio: false,
				plugins: {
					legend: {
						display: false,
					}
				},
				interaction: {
					intersect: false,
					mode: 'index',
				},
				scales: {
					y: {
						grid: {
							drawBorder: false,
							display: true,
							drawOnChartArea: true,
							drawTicks: false,
							borderDash: [5, 5],
							color: 'rgba(255, 255, 255, .2)'
						},
						ticks: {
							suggestedMin: 0,
							suggestedMax: 500,
							beginAtZero: true,
							padding: 10,
							font: {
								size: 14,
								weight: 300,
								family: "Roboto",
								style: 'normal',
								lineHeight: 2
							},
							color: "#fff"
						},
					},
					x: {
						grid: {
							drawBorder: false,
							display: true,
							drawOnChartArea: true,
							drawTicks: false,
							borderDash: [5, 5],
							color: 'rgba(255, 255, 255, .2)'
						},
						ticks: {
							display: true,
							color: '#f8f9fa',
							padding: 10,
							font: {
								size: 14,
								weight: 300,
								family: "Roboto",
								style: 'normal',
								lineHeight: 2
							},
						}
					},
				},
			},
		});

	})

</script>
