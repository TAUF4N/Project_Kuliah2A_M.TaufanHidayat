<div class="col-md-9">
    <h2>Selamat datang di Dashboard Toko Buku</h2>
    <p>Di sini Anda dapat melihat beberapa informasi menarik seputar toko buku:</p>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Penjualan Bulan Ini</h5>
                    <canvas id="salesChart"></canvas>
                </div>
            </div>
        </div>
        <!-- Bagian HTML untuk Produk Terpopuler -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Produk Terpopuler</h5>
                    <canvas id="popularProductsChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Bagian HTML untuk Pesanan Terbaru -->
    <div class="card mt-4">
        <div class="card-body">
            <h5 class="card-title">Pesanan Terbaru</h5>
            <ul id="latestOrders" class="list-group">
                <!-- Daftar pesanan terbaru akan muncul di sini -->
            </ul>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    // Data contoh untuk grafik penjualan bulan ini
    var ctx = document.getElementById('salesChart').getContext('2d');
    var salesChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Minggu 1', 'Minggu 2', 'Minggu 3', 'Minggu 4'],
            datasets: [{
                label: 'Penjualan',
                data: [250, 320, 400, 290],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
<script>
    // Data contoh untuk produk terpopuler
    var ctx = document.getElementById('popularProductsChart').getContext('2d');
    var popularProductsChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Novel', 'Biografi', 'Komik', 'Majalah', 'pendidikan'],
            datasets: [{
                label: 'Jumlah Penjualan',
                data: [120, 90, 180, 150, 200],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
<script>
    // Data contoh untuk pesanan terbaru
    var latestOrdersData = [
        { id: 1, product: 'Melangkah', customer: 'Angel', status: 'Dalam Pengiriman' },
        { id: 2, product: 'One Piece', customer: 'Albert', status: 'Menunggu Konfirmasi' },
        { id: 3, product: 'DODO', customer: 'Cristine', status: 'Selesai' },
        // Data pesanan terbaru lainnya...
    ];

    // Fungsi untuk menampilkan data pesanan terbaru
    function displayLatestOrders() {
        var latestOrdersElement = document.getElementById('latestOrders');
        latestOrdersElement.innerHTML = ''; // Mengosongkan isi sebelum menambahkan data baru

        latestOrdersData.forEach(function (order) {
            var listItem = document.createElement('li');
            listItem.classList.add('list-group-item');
            listItem.innerHTML = `
        <div class="d-flex w-100 justify-content-between">
          <h5 class="mb-1">${order.product}</h5>
          <small>${order.status}</small>
        </div>
        <p class="mb-1">Pelanggan: ${order.customer}</p>
        <small>ID Pesanan: ${order.id}</small>
      `;
            latestOrdersElement.appendChild(listItem);
        });
    }

    // Panggil fungsi untuk menampilkan data pesanan terbaru
    displayLatestOrders();
</script>