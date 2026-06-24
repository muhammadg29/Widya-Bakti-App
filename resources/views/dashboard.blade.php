@extends('layouts.admin')

@section('content')
<div class="px-4 py-6" style="margin-left: 260px;">
    <div class="bg-white shadow rounded-xl p-6">
        <h2 class="text-2xl font-bold text-blue-800 mb-4">Statistik Berita & Registrasi</h2>
        <div style="position: relative; height: 400px; width: 100%;">
            <canvas id="liveChart"></canvas>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    let chart;

    async function fetchChartData() {
        const response = await fetch("{{ route('admin.chart.data') }}");
        const data = await response.json();
        return data;
    }

    function renderChart(labels, berita, registrasi) {
        const ctx = document.getElementById('liveChart').getContext('2d');
        if (chart) chart.destroy();

        chart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [
                    {
                        label: 'Berita',
                        data: berita,
                        borderColor: '#1e3a8a',
                        backgroundColor: 'rgba(30, 58, 138, 0.1)',
                        tension: 0.4,
                    },
                    {
                        label: 'Registrasi',
                        data: registrasi,
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
                    legend: { labels: { color: '#1e40af' } }
                },
                scales: {
                    x: { ticks: { color: '#1e40af' } },
                    y: { ticks: { color: '#1e40af' } }
                }
            }
        });
    }

    async function loadAndRenderChart() {
        const data = await fetchChartData();
        renderChart(data.labels, data.berita, data.registrasi);
    }

    // Load on page load
    loadAndRenderChart();

    // Auto-refresh every 10 seconds (optional)
    setInterval(loadAndRenderChart, 10000);
</script>
@endsection
