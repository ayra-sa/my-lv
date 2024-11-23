<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HargaController extends Controller
{
    public function index()
    {
        $pricingPlans = [
            [
                'title' => 'Basic',
                'price' => 'Rp 199.000',
                'frequency' => 'Per Outlet/Bulan',
                'features' => [
                    'Support Semua Jenis Bisnis',
                    'Kelola Penjualan (Kasir Online)',
                    'Pengiriman Struk Via Whatsapp',
                    'Terima Pembayaran Digital',
                    '500 Data Pelanggan Per Outlet',
                    '5 Data Karyawan Per Outlet',
                    'Kelola Absensi Crew Outlet',
                    'Kelola Pengajuan Izin Crew Outlet',
                    'Pengaturan Struk Transaksi',
                    'Kirim Informasi Untuk Karyawan',
                    'Hak Akses Kasir & Supervisor',
                ],
            ],
            [
                'title' => 'Advance',
                'price' => 'Rp 399.000',
                'frequency' => 'Per Outlet/Bulan',
                'features' => [
                    'Termasuk Semua Paket Basic',
                    '1.000 Data Pelanggan Per Outlet',
                    '10 Data Karyawan Per Outlet',
                    'Kelola Inventori Multi Warehouse',
                    'Kelola Stok Produk Outlet',
                    'Kelola Data Supplier & Produsen',
                    'Kelola Pembelian & Produksi Stok',
                    'Kelola Pengiriman & Mutasi Stok',
                    'Kelola Stok Opname Barang',
                    'Kelola Faktur Pembelian Stok',
                    'Kelola Bukti Pengiriman Stok',
                ],
            ],
            [
                'title' => 'Pro',
                'price' => 'Rp 199.000',
                'frequency' => 'Per Outlet/Bulan',
                'bestSeller' => true,
                'features' => [
                    'Termasuk Semua Paket Advance',
                    'Tidak Terbatas Data Pelanggan',
                    'Tidak Terbatas Data Karyawan',
                    'Kelola Karyawan Office & Outlet',
                    'Hak Akses Aplikasi Teams',
                    'Kelola Jadwal Kerja Karyawan',
                    'Laporan Data Sisa Cuti Karyawan',
                    'Hak Akses Aplikasi Owner',
                    'Kelola Outlet Via Aplikasi',
                    'Download Laporan Via Aplikasi',
                    'Bagikan Laporan Via Aplikasi',
                ],
            ],
            [
                'title' => 'Enterprise',
                'price' => 'Konsultasi Harga',
                'features' => [
                    'Kustomisasi Sesuai Bisnis Anda',
                    'Kustomisasi Sesuai Kebutuhan',
                    'Branding Bisnis Professional',
                    'Kelola Aplikasi Secara Mandiri',
                    'Mari Konsultasikan Dengan Kami',
                ],
            ],
        ];

        return view('harga', compact('pricingPlans'));
    }
}
