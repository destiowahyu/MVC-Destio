<?php namespace Controllers;
use Models\Model_mhs;
class Mahasiswa
{
    public function __construct()
    {
        $this->mhs = new Model_mhs();
    }

    public function index()
    {
        require_once 'app/Views/index.php';
    }

    function show_data()
    {
        if(!isset($_GET['i']))
        {
                //jika tidak ada parameter id yang dikirim, maka akan menampilkan semua data yang ada
            $rs = $this->mhs->lihatData();
            require_once('app/Views/mhsList.php');
        }
        else
        {
                //ada parameter id yang dikirim, tampilkan detail dari salah satu data yang dipilih
            $rs = $this->mhs->lihatDataDetail($_GET['i']);
            require_once('app/Views/mhsDetail.php');
        }
    }

    function save()
    {
        $nim =  $_POST['nim'];
        $nama = $_POST['nama'];

            //penyimpanan data ke model
        $this->mhs->simpanData($nim,$nama);
            $this->index(); //controller dikembalikan ke method index setelah selesai mengakses method ini.
        }

        function edit()
        {

            $rs = $this->mhs->lihatDataDetail($_GET['i']);
            require_once('app/Views/mhsEdit.php');
        }

        function update()
        {
            $id =  $_POST['id'];
            $nim =  $_POST['nim'];
            $nama = $_POST['nama'];

            $this->mhs->editData($nim,$nama,$id);
            $this->show_data(); 
        }

        function delete()
        {
            $id =  $_GET['i'];

            $this->mhs->hapusData($id);
            $rs = $this->mhs->lihatData();
            require_once('app/Views/mhsList.php');
        }
    }