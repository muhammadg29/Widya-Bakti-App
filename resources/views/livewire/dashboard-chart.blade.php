<div class="px-4 py-6" wire:ignore>
    <div class="bg-white shadow rounded-xl p-6">
        <h2 class="text-2xl font-bold text-blue-800 mb-4">Statistik Berita & Registrasi</h2>
        <canvas id="liveChart" style="height: 300px;"></canvas>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('livewire:load', () => {
            let chart;

            function renderChart(labels, beritaData, registrasiData) {
                const ctx = document.getElementById('liveChart').getContext('2d');
                if (!ctx) return;

                if (chart) chart.destroy();

                chart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: labels,
                        datasets: [
                            {
                                label: 'Berita',
                                data: beritaData,
                                borderColor: '#1e3a8a',
                                backgroundColor: 'rgba(30, 58, 138, 0.1)',
                                tension: 0.4,
                            },
                            {
                                label: 'Registrasi',
                                data: registrasiData,
                                borderColor: '#3b82f6',
                                backgroundColor: 'rgba(59, 130, 246, 0.1)',
                                tension: 0.4,
                            }
                        ]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            legend: {
                                labels: { color: '#1e40af' }
                            }
                        },
                        scales: {
                            x: { ticks: { color: '#1e40af' } },
                            y: { ticks: { color: '#1e40af' } }
                        }
                    }
                });
            }

            const labels = @json($labels);
            const beritaData = @json($beritaData);
            const registrasiData = @json($registrasiData);

            renderChart(labels, beritaData, registrasiData);
        });
    </script>
</div>
