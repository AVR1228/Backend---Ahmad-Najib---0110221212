const Animal = require('./animal');

const animalList = new Animal(['Ikan', 'Hiu', 'Penyu']);

// Menampilkan data hewan laut
animalList.index();

// Menambahkan hewan laut baru
animalList.store('Lumba-lumba');

// Memperbarui data hewan laut
animalList.update(1, 'Hiu Putih'); // Mengubah 'Hiu' menjadi 'Hiu Putih'

// Menghapus data hewan laut
animalList.destroy(0); // Menghapus 'Ikan'

// Menampilkan data hewan laut setelah perubahan
animalList.index();
