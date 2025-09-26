import users from "./data.js"; 

/**
 * Menampilkan semua data pengguna menggunakan map().
 */
const index = () => {
    console.log("--- Menampilkan Data Pengguna ---");
    if (users.length === 0) {
        console.log("Tidak ada data pengguna.");
        return;
    }

    // Tampilkan data menggunakan map()
    users.map((user, i) => {
        console.log(`${i + 1}. Nama: ${user.nama}, Umur: ${user.umur}, Alamat: ${user.alamat}, Email: ${user.email}`);
    });
    console.log(`Total data: ${users.length}\n`);
};

const store = (newUsers) => {
    console.log("--- Menambahkan Data Pengguna Baru ---");
    if (Array.isArray(newUsers)) {
        users.push(...newUsers); // Menambahkan banyak data (minimal 2)
        console.log(`${newUsers.length} data pengguna baru berhasil ditambahkan.`);
    } else if (newUsers && typeof newUsers === 'object') {
        users.push(newUsers);
        console.log(`1 data pengguna baru berhasil ditambahkan.`);
    }
    console.log(`Total data saat ini: ${users.length}\n`);
};

const destroy = () => {
    console.log("--- Menghapus Data Pengguna Pertama ---");
    if (users.length > 0) {
        const deletedUser = users.shift(); // Menghapus elemen pertama
        console.log(`Data ${deletedUser.nama} berhasil dihapus.`);
    } else {
        console.log("Tidak ada data untuk dihapus.");
    }
    console.log(`Total data saat ini: ${users.length}\n`);
};

export { index, store, destroy };