@extends('layouts.app')

@section('title', 'Health4Us - Aktivitas')

@section('content')
<div class="container py-5">
    <h1 class="text-center dashboard-title"><i class="fas fa-heartbeat me-2"></i>Dashboard Aktivitas Sehat Anda</h1>
    <div class="row g-4">
        <div class="col-lg-3">
            <div class="sidebar p-4 sticky-top">
                <h3 class="sidebar-heading">Data Aktivitas Anda</h3>
                
                <button type="button" class="btn calendar-btn w-100 mb-4" data-bs-toggle="modal" data-bs-target="#calendarModal">
                    <i class="far fa-calendar-alt me-2"></i> Lihat Aktivitas Bulanan
                </button>

                <div class="tip-card">
                    <p class="mb-1"><i class="fas fa-lightbulb me-2 text-warning"></i> <strong>Tips Sehat Hari Ini:</strong></p>
                    <small>Lakukan peregangan ringan selama 5 menit setiap jam saat bekerja untuk meredakan ketegangan otot.</small>
                </div>
                
                <ul class="list-unstyled mt-4">
                    <li><a href="{{ url('home') }}" class="text-white d-block py-2 text-decoration-none opacity-75"><i class="fas fa-home me-2"></i> Kembali ke Beranda</a></li>
                    <li><a href="#" class="text-white d-block py-2 text-decoration-none opacity-75"><i class="fas fa-chart-line me-2"></i> Laporan Detail Lainnya</a></li>
                    <li><a href="#" class="text-white d-block py-2 text-decoration-none opacity-75"><i class="fas fa-cog me-2"></i> Pengaturan Akun</a></li>
                </ul>
            </div>
        </div>

        <div class="col-lg-9">
            <div class="main-header">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="header-greeting">
                        <i class="fas fa-user-circle me-2"></i> Selamat Datang, {{ $user->name }}
                    </div>
                </div>

                <div class="row g-3">
                    {{-- STATISTIK DINAMIS DARI CONTROLLER --}}
                    <div class="col-md-4">
                        <div class="stat-card">
                            <span class="material-symbols-rounded stat-icon">local_fire_department</span>
                            <h4>Total Kalori:</h4>
                            <div class="value">{{ number_format($stats['total_kalori']) }} Kkal</div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="stat-card">
                            <span class="material-symbols-rounded stat-icon">schedule</span>
                            <h4>Total Olahraga:</h4>
                            <div class="value">{{ $stats['total_olahraga'] }} Menit</div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="stat-card">
                            <span class="material-symbols-rounded stat-icon">directions_car</span>
                            <h4>Eco-Impact:</h4>
                            <div class="value">{{ $stats['total_eco'] }} km</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="custom-card p-4 h-100">
                        <h5 class="chart-title"><i class="fas fa-shoe-prints me-2 text-primary"></i> Langkah Mingguan</h5>
                        <canvas id="stepsChart"></canvas>
                        <div class="insight-box">
                            <p class="mb-0"><i class="fas fa-lightbulb text-info me-2"></i> Fokus pada konsistensi langkah kaki Anda setiap hari.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="custom-card p-4 h-100">
                        <h5 class="chart-title"><i class="fas fa-fire me-2 text-danger"></i> Kalori Terbakar Harian</h5>
                        <canvas id="calorieChart"></canvas>
                        <div class="insight-box">
                            <p class="mb-0"><i class="fas fa-check-circle success-icon me-2"></i> Data ini diambil dari 7 catatan aktivitas terakhir Anda.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="custom-card p-4 h-100">
                        <h5 class="chart-title"><i class="fas fa-running me-2 text-success"></i> Durasi Olahraga</h5>
                        <canvas id="exerciseChart"></canvas>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="custom-card p-4 h-100">
                        <h5 class="chart-title"><i class="fas fa-brain me-2 text-info"></i> Tingkat Stres</h5>
                        <div class="d-flex justify-content-center">
                            <canvas id="stressChartPie" style="max-width:200px; max-height:200px;"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- MODAL KALENDER (Tetap Statis atau bisa dikembangkan nanti) --}}
@include('partials.calendar-modal') 

@endsection

@section('scripts')
    {{-- MENGIRIM DATA DARI PHP KE JAVASCRIPT --}}
    <script>
        window.chartData = {
            labels: {!! json_encode($recentData->pluck('tanggal')->map(fn($d) => date('d M', strtotime($d)))) !!},
            kalori: {!! json_encode($recentData->pluck('kalori')) !!},
            langkah: {!! json_encode($recentData->pluck('langkah')) !!},
            durasi: {!! json_encode($recentData->pluck('durasi_olahraga')) !!},
            stres: {!! json_encode($recentData->pluck('tingkat_stres')) !!}
        };
    </script>
    <script src="{{ asset('javaScript/aktivitas.js') }}"></script>
@endsection