#  BengkelKu — SaaS Workshop Management System

> Tracking fitur development. Centang `[x]` setiap fitur yang sudah selesai dikerjakan & ditest.
> Tim: 1 Backend + 1 Frontend
> Fokus: Sistem manajemen bengkel modern berbasis SaaS

---

##  Overview

**BengkelKu** adalah SaaS untuk pemilik bengkel untuk mengelola operasional harian seperti:

- Data pelanggan
- Data kendaraan
- Transaksi servis
- Manajemen sparepart
- Monitoring status pekerjaan
- Laporan bengkel

---

##  Target User

- 👨‍🔧 Owner Bengkel → kontrol semua data & laporan
- 👨‍💼 Admin/Kasir → input transaksi servis & pelanggan
- 🔧 Mekanik → update status pekerjaan servis (future)

---

##  Model Bisnis (SaaS Future)

- Free Plan: 1 bengkel, fitur terbatas
- Pro Plan: multi user + laporan + export
- Enterprise: multi cabang bengkel

---

##  Tech Stack (Saran)

| Layer | Teknologi |
|------|----------|
| Backend | Laravel |
| Frontend | Blade + TailwindCSS |
| Database | MySQL |
| Auth | Laravel Breeze / Sanctum |
| Hosting | VPS / Shared Hosting |

---

##  Roadmap Fase

- [ ] Fase 1 — UI + CRUD dasar (internal system)
- [ ] Fase 2 — Auth + database real + relasi
- [ ] Fase 3 — Laporan + export + dashboard
- [ ] Fase 4 — SaaS (multi bengkel + subscription)

---

#  1. AUTH & USER MANAGEMENT

- [ ] Login admin bengkel
- [ ] Register bengkel baru (owner onboarding)
- [ ] Logout system
- [ ] Role system:
  - [ ] Owner
  - [ ] Admin/Kasir
  - [ ] Mekanik (future)
- [ ] Middleware role access
- [ ] Profile user (nama, foto, email)
- [ ] Reset password

---

#  2. PELANGGAN MANAGEMENT

- [ ] CRUD pelanggan
- [ ] Simpan data:
  - nama
  - nomor HP
  - alamat
- [ ] Search pelanggan
- [ ] Detail pelanggan (riwayat servis)
- [ ] Validasi duplikasi nomor HP

---

#  3. KENDARAAN MANAGEMENT

- [ ] CRUD kendaraan
- [ ] Relasi ke pelanggan (1 pelanggan → banyak kendaraan)
- [ ] Data kendaraan:
  - plat nomor
  - merk
  - tipe
  - tahun
- [ ] Detail kendaraan + riwayat servis
- [ ] Filter kendaraan per pelanggan

---

#  4. SERVIS MANAGEMENT (CORE SYSTEM)

- [ ] CRUD transaksi servis
- [ ] Assign pelanggan & kendaraan
- [ ] Input keluhan
- [ ] Status servis:
  - [ ] Menunggu
  - [ ] Proses
  - [ ] Selesai
- [ ] Update status servis oleh admin/mekanik
- [ ] Riwayat servis kendaraan
- [ ] Catatan mekanik (diagnosa & pengerjaan)

---

#  5. SPAREPART MANAGEMENT

- [ ] CRUD sparepart
- [ ] Data:
  - nama sparepart
  - harga
  - stok
- [ ] Update stok otomatis saat dipakai servis
- [ ] Alert stok menipis
- [ ] Riwayat penggunaan sparepart

---

#  6. TRANSAKSI & PEMBAYARAN

- [ ] Hitung total biaya servis
- [ ] Tambah biaya jasa + sparepart
- [ ] Status pembayaran:
  - [ ] Belum bayar
  - [ ] Lunas
- [ ] Cetak struk (PDF)
- [ ] Riwayat transaksi

---

#  7. DASHBOARD ADMIN

- [ ] Total pelanggan
- [ ] Total kendaraan
- [ ] Total servis hari ini
- [ ] Status servis aktif
- [ ] Grafik servis bulanan (future)
- [ ] Revenue summary (future)

---

#  8. NOTIFIKASI (FUTURE)

- [ ] Notifikasi servis baru
- [ ] Notifikasi servis selesai
- [ ] Notifikasi stok menipis
- [ ] Email / WhatsApp alert (fase lanjut)

---

#  9. SETTINGS SYSTEM

- [ ] Profil bengkel:
  - nama bengkel
  - alamat
  - logo
- [ ] Setting biaya jasa default
- [ ] Setting status servis custom

---

#  10. SAAS FEATURES (FUTURE)

- [ ] Multi bengkel (1 user bisa banyak bengkel)
- [ ] Subscription system
- [ ] Role per bengkel
- [ ] Billing system
- [ ] Custom branding bengkel

---

#  11. TESTING STATUS

- [x] UI completed (frontend)
- [ ] Backend CRUD
- [ ] Database relations
- [ ] Auth system
- [ ] Integration test

---

# 👥 ROLE PEMBAGIAN

##  Frontend (Kamu)
- UI dashboard
- semua blade page
- modal + table + UX
- responsive design

##  Backend (Teman kamu)
- database
- CRUD logic
- auth system
- relasi
- API/controller

---

#  NOTES

- Fokus dulu Fase 1 → UI + CRUD dasar jalan
- Jangan lompat ke SaaS dulu sebelum sistem inti selesai
- Update checklist setiap fitur selesai