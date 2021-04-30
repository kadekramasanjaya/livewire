<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Musik;


class Musiks extends Component
{
    public $musiks, $nama, $nim, $prodi, $jabatan, $status, $foto, $musiks_id;
    public $isOpen = 0;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function render()
    {
        $this->musiks = Musik::orderBy('created_at', 'DESC')->get();
        return view('livewire.musiks');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function openModal()
    {
        $this->isOpen = true;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function closeModal()
    {
        $this->isOpen = false;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    private function resetInputFields()
    {
        $this->nama = '';
        $this->nim = '';
        $this->prodi = '';
        $this->jabatan = '';
        $this->status = '';
        $this->foto = '';
        $this->musiks_id = '';
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store()
    {
        $this->validate([
            'nama' => 'required',
            'nim' => 'required|min:3|max:100',
            'prodi' => 'required',
            'jabatan' => 'required',
            'status' => 'required'
        ]);

        //QUERY UNTUK MENYIMPAN / MEMPERBAHARUI DATA MENGGUNAKAN UPDATEORCREATE
        //DIMANA ID MENJADI UNIQUE ID, JIKA IDNYA TERSEDIA, MAKA UPDATE DATANYA
        //JIKA TIDAK, MAKA TAMBAHKAN DATA BARU
        Musik::updateOrCreate(['id' => $this->musiks_id], [
            'nama' => $this->nama,
            'nim' => $this->nim,
            'prodi' => $this->prodi,
            'jabatan' => $this->jabatan,
            'status' => $this->status,
        ]);

        //BUAT FLASH SESSION UNTUK MENAMPILKAN ALERT NOTIFIKASI
        session()->flash(
            'message',
            $this->musiks_id ? 'Musik Updated Successfully.' : 'Musik Created Successfully.'
        );

        $this->closeModal();
        $this->resetInputFields();
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($id)
    {
        $musiks = Musik::findOrFail($id);
        $this->musik_id = $id;
        $this->nama = $musiks->nama;
        $this->nim = $musiks->nim;
        $this->prodi = $musiks->prodi;
        $this->jabaan = $musiks->jabatan;
        $this->status = $musiks->status;
        // $this->foto = $Musik->foto;

        $this->openModal();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        $musiks = Musik::find($id); //BUAT QUERY UNTUK MENGAMBIL DATA BERDASARKAN ID
        $musiks->delete(); //LALU HAPUS DATA
        session()->flash('message', $musiks->name . ' Dihapus'); //DAN BUAT FLASH MESSAGE UNTUK NOTIFIKASI
    }
}