class Animal {
    constructor(initialAnimals) {
      this.animals = initialAnimals || [];
    }
  
    index() {
      if (this.animals.length === 0) {
        console.log("Tidak ada data hewan laut.");
      } else {
        console.log("Daftar Hewan Laut:");
        this.animals.forEach((animal, index) => {
          console.log(`${index + 1}. ${animal}`);
        });
      }
    }
  
    store(animal) {
      this.animals.push(animal);
      console.log(`Hewan laut '${animal}' berhasil ditambahkan.`);
    }
  
    update(index, newAnimal) {
      if (index >= 0 && index < this.animals.length) {
        const oldAnimal = this.animals[index];
        this.animals[index] = newAnimal;
        console.log(`Hewan laut '${oldAnimal}' berhasil diperbarui menjadi '${newAnimal}'.`);
      } else {
        console.log("Indeks tidak valid.");
      }
    }
  
    destroy(index) {
      if (index >= 0 && index < this.animals.length) {
        const removedAnimal = this.animals.splice(index, 1);
        console.log(`Hewan laut '${removedAnimal[0]}' berhasil dihapus.`);
      } else {
        console.log("Indeks tidak valid.");
      }
    }
  }
  
  module.exports = Animal;
  