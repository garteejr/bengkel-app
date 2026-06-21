# Git Workflow — Tim 2 Orang

Repository ini menggunakan workflow sederhana untuk kolaborasi frontend dan backend.

## Anggota Tim

| Role               |
| ------------------ |
| Frontend Developer |
| Backend Developer  |

## Prinsip Utama

- Tidak ada push langsung ke branch `main`.
- Semua perubahan dibuat melalui branch terpisah.
- Semua branch masuk ke `main` melalui Pull Request.
- Minimal satu anggota tim lain melakukan review sebelum merge.
- Setiap Pull Request wajib lolos lint, typecheck, test, dan build.
- Jangan commit file `.env`, token, password, API key, atau credential database.
- Satu branch hanya untuk satu fitur atau satu perbaikan.

---

## Struktur Branch

```txt
main
├── feature/fe-login-page
├── feature/fe-task-dashboard
├── feature/be-auth-login
├── feature/be-task-crud
├── fix/be-auth-cookie
├── fix/fe-task-form-validation
├── chore/setup-docker
└── docs/api-contract
```

## Aturan Branch

| Prefix      | Kegunaan                            | Contoh                     |
| ----------- | ----------------------------------- | -------------------------- |
| `feature/`  | Fitur baru                          | `feature/be-task-crud`     |
| `fix/`      | Perbaikan bug                       | `fix/fe-login-redirect`    |
| `chore/`    | Setup, dependency, tooling          | `chore/add-eslint`         |
| `docs/`     | Dokumentasi                         | `docs/update-api-contract` |
| `refactor/` | Perbaikan struktur tanpa ubah fitur | `refactor/task-service`    |
| `test/`     | Menambah atau memperbaiki test      | `test/auth-login`          |

## Alur Kerja Harian

```txt
main
  ↓
buat feature branch
  ↓
coding + test lokal
  ↓
push branch ke GitHub
  ↓
buat Pull Request ke main
  ↓
review oleh anggota tim lain
  ↓
CI lint/typecheck/test/build lulus
  ↓
merge ke main
```

## Memulai Task Baru

Selalu ambil perubahan terbaru dari `main` sebelum membuat branch.

```bash
git checkout main
git pull origin main
```

Buat branch baru.

```bash
git checkout -b feature/be-task-crud
```

Atau untuk frontend:

```bash
git checkout -b feature/fe-task-dashboard
```

## Commit Convention

Gunakan format berikut:

```txt
type(scope): short description
```

### Type Commit

| Type       | Fungsi                           |
| ---------- | -------------------------------- |
| `feat`     | Fitur baru                       |
| `fix`      | Bug fix                          |
| `docs`     | Dokumentasi                      |
| `style`    | Formatting tanpa perubahan logic |
| `refactor` | Perbaikan struktur code          |
| `test`     | Menambah/memperbaiki test        |
| `chore`    | Konfigurasi, dependency, tooling |
| `ci`       | CI/CD workflow                   |

### Contoh Commit yang Benar

```bash
git commit -m "feat(auth): add login endpoint"
git commit -m "feat(tasks): add create task form"
git commit -m "fix(auth): handle expired refresh token"
git commit -m "docs(api): add task endpoint contract"
git commit -m "chore(docker): add postgres service"
git commit -m "test(tasks): add create task integration test"
```

### Contoh Commit yang Tidak Boleh

```txt
fix
update
coba
baru
final
fix fix fix
```

## Push Branch

Setelah coding selesai:

```bash
git status
git add .
git commit -m "feat(tasks): add create task endpoint"
git push -u origin feature/be-task-crud
```

Setelah push pertama:

```bash
git push
```

## Pull Request Workflow

Setelah branch sudah di-push:

1. Buka repository di GitHub.
2. Klik **Compare & pull request**.
3. Pastikan arah Pull Request: `feature/nama-branch` → `main`
4. Isi template Pull Request.
5. Assign anggota tim lain sebagai reviewer.
6. Tunggu review dan CI.
7. Perbaiki komentar jika ada.
8. Setelah approval, merge ke `main`.
9. Hapus branch setelah merge.

## Pull Request Template

Buat file:

```txt
.github/pull_request_template.md
```

Isi:

```markdown
## Summary

Jelaskan perubahan utama pada PR ini.

## Related Issue

Closes #

## Changes

- [ ]
- [ ]
- [ ]

## Testing

- [ ] Lint berhasil
- [ ] Typecheck berhasil
- [ ] Test berhasil
- [ ] Build berhasil
- [ ] Test manual dilakukan

## Checklist

- [ ] Tidak ada `.env`, API key, password, atau secret yang ikut ter-commit kecuali `.env.example`
- [ ] Tidak ada `console.log` debugging yang tertinggal
- [ ] Error state sudah ditangani
- [ ] Loading state sudah ditangani
- [ ] Perubahan sudah sesuai issue/acceptance criteria
```

## Review Rules

| Jenis Perubahan               | Reviewer                         |
| ----------------------------- | -------------------------------- |
| Frontend PR                   | Backend developer                |
| Backend PR                    | Frontend developer               |
| Database schema/migration     | Review bersama                   |
| Auth, authorization, security | Review bersama                   |
| main release/hotfix           | Review bersama jika memungkinkan |

Reviewer tidak harus menguasai semua detail code. Fokus review:

- Apakah perubahan sesuai task?
- Apakah ada error yang terlihat?
- Apakah API contract sesuai?
- Apakah type aman?
- Apakah ada data/secret sensitif ikut ter-commit?
- Apakah test dan build berhasil?
- Apakah perubahan dapat merusak fitur lain?

## Jika Branch `main` Berubah Saat Kamu Coding

Jangan langsung merge `main` tanpa mengecek conflict.

```bash
git checkout main
git pull origin main

git checkout feature/be-task-crud
git merge main
```

Jika ada conflict:

```bash
# Perbaiki file conflict secara manual
git add .
git commit -m "chore: resolve merge conflict with main"
git push
```

Alternatif yang lebih rapi:

```bash
git checkout feature/be-task-crud
git fetch origin
git rebase origin/main
git push --force-with-lease
```

> Gunakan rebase hanya pada branch milikmu sendiri. Jangan melakukan force push ke `main`.

## Aturan Merge Conflict

- Orang yang membuat branch bertanggung jawab menyelesaikan conflict pada branch-nya.
- Jika conflict menyentuh API contract, database schema, atau auth, selesaikan bersama.
- Setelah conflict selesai, jalankan kembali lint, typecheck, test, dan build.
- Jangan memilih "Accept Current" atau "Accept Incoming" tanpa membaca isi perubahan.

## Branch Protection untuk `main`

Atur di GitHub:

```txt
Repository Settings
→ Branches
→ Add branch protection rule
→ Branch name pattern: main
```

Aktifkan:

```txt
[x] Require a pull request before merging
[x] Require approvals: 1
[x] Require status checks to pass before merging
[x] Require conversation resolution before merging
[x] Do not allow force pushes
[x] Do not allow deletions
```

## Hotfix Production

Jika ada bug di production:

```bash
git checkout main
git pull origin main
git checkout -b fix/critical-auth-bug
```

Setelah perbaikan:

```bash
git add .
git commit -m "fix(auth): prevent invalid token crash"
git push -u origin fix/critical-auth-bug
```

Buat Pull Request:

```txt
fix/critical-auth-bug → main
```

Tetap lakukan review oleh anggota tim lain jika memungkinkan.

## Checklist Sebelum Merge

- [ ] Branch berasal dari `main` terbaru
- [ ] Commit message jelas
- [ ] Pull Request memiliki deskripsi
- [ ] Lint lolos
- [ ] Typecheck lolos
- [ ] Test lolos
- [ ] Build lolos
- [ ] Tidak ada secret atau `.env` ter-commit
- [ ] Minimal satu approval didapatkan
- [ ] Semua komentar review sudah diselesaikan

## Larangan

- [ ] Jangan push langsung ke `main`
- [ ] Jangan force push ke `main`
- [ ] Jangan commit `.env`, `.env.example` boleh
- [ ] Jangan merge PR sendiri tanpa review
- [ ] Jangan membuat satu PR berisi banyak fitur tidak terkait
- [ ] Jangan menghapus migration database yang sudah pernah dipakai tim

## Perintah Cepat

### Mulai fitur

```bash
git checkout main
git pull origin main
git checkout -b feature/nama-fitur
```

### Simpan perubahan

```bash
git add .
git commit -m "feat(scope): description"
git push -u origin feature/nama-fitur
```

### Update branch dengan main

```bash
git checkout main
git pull origin main
git checkout feature/nama-fitur
git merge main
```

### Hapus branch lokal setelah merge

```bash
git checkout main
git pull origin main
git branch -d feature/nama-fitur
```

## Definition of Done

Sebuah fitur dianggap selesai hanya jika:

- Requirement/acceptance criteria terpenuhi
- Code sudah direview
- Test/build lolos
- API contract diperbarui bila diperlukan
- Tidak ada bug utama yang diketahui
- Sudah merge ke `main`
- Sudah dapat dijalankan oleh anggota tim lain
