<?php

namespace App\Controllers;

use Firebase\Firebase;

class Confirebase extends BaseController
{ 
    public function index()
    {
        $fb = Firebase::initialize('https://pertemuan-9-5d8bf-default-rtdb.firebaseio.com/', 'AIzaSyBNpvaD8vxnF5s4n01Njg5rscJG8qT3WpI');
        $a = $fb->get('/notes');
        echo json_encode($a);
    }

    public function add_data()
    {
        $fb = Firebase::initialize('https://pertemuan-9-5d8bf-default-rtdb.firebaseio.com/', 'AIzaSyBNpvaD8vxnF5s4n01Njg5rscJG8qT3WpI');
        $d = [
            "judul" => "Rapat Saja",
            "peserta" => "5",
        ];
        $a = $fb->push('/notes', $d);
        echo json_encode($a);
    }

    public function update_data()
    {
        $key = $this->input->get("key");
        $fb = Firebase::initialize('https://pertemuan-9-5d8bf-default-rtdb.firebaseio.com/', 'AIzaSyBNpvaD8vxnF5s4n01Njg5rscJG8qT3WpI');
        $d = [
            "judul" => "Rapat Evaluasi 2",
            "peserta" => "10",
        ];
        $a = $fb->update('/notes/' . $key, $d);
        echo json_encode($a);
    }
    
    public function delete_data()
    {
        $key = $this->input->get("key");
        $fb = Firebase::initialize('https://pertemuan-9-5d8bf-default-rtdb.firebaseio.com/', 'AIzaSyBNpvaD8vxnF5s4n01Njg5rscJG8qT3WpI');
        $d = [
            "judul" => "Rapat Evaluasi 2",
            "peserta" => "10",
        ];
        $a = $fb->delete('/notes/' . $key, $d);
        echo json_encode($a);
    }

}
