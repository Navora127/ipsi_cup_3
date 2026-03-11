# TODO - Keamanan Login IPSI CUP 3

## Target: Membangun sistem login yang aman untuk banyak pengguna bersamaan

### Fase 1: Keamanan Dasar (Selesai di-code)
- [x] Analisis kode yang ada
- [x] Identifikasi kelemahan keamanan

### Fase 2: Implementasi Keamanan
- [ ] Rate Limiting - Batasi percobaan login max 5x dalam 15 menit
- [ ] Brute Force Protection - Lockout sementara setelah 5x gagal
- [ ] Progressive Delay - Tambah delay setiap percobaan gagal
- [ ] Login Attempt Tracking - Simpan attempt count dengan timestamp
- [ ] Session Management - Generate unique session token dengan expiration
- [ ] Account Lockout - Lockout 15 menit setelah max attempts
- [ ] UI Feedback - Tampilkan sisa percobaan dan countdown timer
- [ ] Security Logging - Catat semua aktivitas login

### Fase 3: Testing & Dokumentasi
- [ ] Test semua skenario login
- [ ] Validasi keamanan

---

## Detail Implementasi:

### 1. Rate Limiting Config
```
MAX_ATTEMPTS: 5
LOCKOUT_DURATION: 15 menit (900000 ms)
TIME_WINDOW: 15 menit
```

### 2. Session Management
```
SESSION_DURATION: 1 jam
TOKEN: Random string + timestamp
VALIDATION: Check expiration
```

### 3. Login Flow Baru
1. User input nama & kode
2. Check rate limit (cek localStorage)
3. Jika locked, tampilkan countdown
4. Jika OK, cek credentials
5. Jika gagal: increment attempt, apply delay
6. Jika berhasil: reset attempt, create session

