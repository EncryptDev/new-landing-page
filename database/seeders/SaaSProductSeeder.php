<?php

namespace Database\Seeders;

use App\Models\SaaSProduct;
use Illuminate\Database\Seeder;

class SaaSProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SaaSProduct::create([
            'name' => 'SentraKasir',
            'tagline' => 'Point of Sales & Inventory',
            'icon' => 'fas fa-cash-register',
            'status' => 'Best Choice',
            'is_under_development' => false,
            'description' => 'Sistem kasir online (Point of Sales) modern yang dirancang untuk mempercepat transaksi, mengelola inventaris multi-cabang secara realtime, serta menyajikan laporan keuangan yang akurat.',
            'features' => "Multi-Outlet Sync: Dashboard terpusat untuk kelola stok dan karyawan di semua outlet.\nOffline Mode: Transaksi tetap aman berjalan meskipun koneksi internet terputus.\nAI Inventory Forecasting: Rekomendasi restock barang otomatis berbasis data penjualan.",
            'active_users' => '1,500+ Bisnis',
            'daily_transactions' => '50k+ Transaksi',
            'url' => 'https://sentrakasir.id',
            'is_active' => true,
            'order' => 1
        ]);

        SaaSProduct::create([
            'name' => 'EncryptHR',
            'tagline' => 'Smart HR & Payroll Platform',
            'icon' => 'fas fa-user-tie',
            'status' => 'Under Development',
            'is_under_development' => true,
            'description' => 'Solusi manajemen SDM digital terintegrasi untuk absensi online berbasis GPS/selfie, pengajuan cuti, klaim reimbursement, serta otomatisasi perhitungan slip gaji dan pajak PPh 21.',
            'features' => "Absensi GPS & Anti-Fake: Validasi presensi berbasis lokasi geofencing dan face recognition.\nOne-Click Payroll: Penghitungan gaji bersih, potongan BPJS, PPh 21, dan slip instan.\nEmployee Self-Service (ESS): Portal mandiri karyawan untuk ajukan izin, cuti, dan reimbursement.",
            'active_users' => '8,000+ Karyawan',
            'daily_transactions' => 'Rp 12B+/Bulan',
            'url' => 'https://hr.encryptdev.com',
            'is_active' => true,
            'order' => 2
        ]);
    }
}
