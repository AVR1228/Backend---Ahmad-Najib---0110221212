<?php

# membuat class Animal
class Animal
{
    # property animals
    private $animals;

    # method constructor - mengisi data awal
    # parameter: data hewan (array)
    public function __construct($data)
    {
        $this->animals = $data;
    }

    # method index - menampilkan data animals
    public function index()
    {
        # gunakan foreach untuk menampilkan data animals (array)
        foreach ($this->animals as $animal) {
            echo $animal . "<br>";
        }
    }

    # method store - menambahkan hewan baru
    # parameter: hewan baru
    public function store($data)
    {
        # gunakan method array_push untuk menambahkan data baru
        array_push($this->animals, $data);
    }

    # method update - mengupdate hewan
    # parameter: index dan hewan baru
    public function update($index, $data)
    {
        # update data hewan di index tertentu
        if (isset($this->animals[$index])) {
            $this->animals[$index] = $data;
        } else {
            echo "Index tidak ditemukan.<br>";
        }
    }

    # method delete - menghapus hewan
    # parameter: index
    public function destroy($index)
    {
        # gunakan method unset atau array_splice untuk menghapus data array
        if (isset($this->animals[$index])) {
            unset($this->animals[$index]);
            # array_values untuk merapikan ulang index
            $this->animals = array_values($this->animals);
        } else {
            echo "Index tidak ditemukan.<br>";
        }
    }
}

# membuat object
# kirimkan data hewan (array) ke constructor
$animal = new Animal(['Kucing', 'Anjing', 'Sapi']);

echo "Index - Menampilkan seluruh hewan <br>";
$animal->index();
echo "<br>";

echo "Store - Menambahkan hewan baru <br>";
$animal->store('Burung');
$animal->index();
echo "<br>";

echo "Update - Mengupdate hewan <br>";
$animal->update(0, 'Kucing Anggora');
$animal->index();
echo "<br>";

echo "Destroy - Menghapus hewan <br>";
$animal->destroy(1);
$animal->index();
echo "<br>";

?>
