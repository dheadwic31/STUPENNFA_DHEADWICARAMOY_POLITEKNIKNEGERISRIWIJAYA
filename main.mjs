

import { index, store, destroy } from "./controller.mjs";

// Data untuk ditambahkan: MEMENUHI SYARAT MINIMAL 2 DATA (ada 3 data)
const newUsersToAdd = [
    { nama: 'Kiki Baru', umur: 26, alamat: 'Jl. Tambahan 1, Jakarta', email: 'kiki.baru@added.com' },
    { nama: 'Lala Baru', umur: 31, alamat: 'Jl. Tambahan 2, Bandung', email: 'lala.baru@added.com' },
    { nama: 'Maman Baru', umur: 27, alamat: 'Jl. Tambahan 3, Surabaya', email: 'maman.baru@added.com' } 
];

const main = () => {
    // 1. Melihat data awal (10 data)
    console.log("=== Proses Awal: 10 Data Default ===");
    index();

    // 2. Menambah minimal 2 data (kita tambahkan 3)
    store(newUsersToAdd);

    // 3. Melihat data setelah penambahan (13 data)
    console.log("=== Proses Setelah Penambahan Data ===");
    index();

    // 4. Menghapus satu data
    destroy();

    // 5. Melihat data setelah penghapusan (12 data)
    console.log("=== Proses Setelah Penghapusan Data ===");
    index();
};

main();