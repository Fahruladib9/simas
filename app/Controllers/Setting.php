<?php

namespace App\Controllers;

class Setting extends BaseController
{
    public function allert($sukses, $pesan, $icon)
    {
        $session = session();
        $session->setFlashdata('success', $sukses);
        $session->setFlashdata('pesan', $pesan);
        $session->setFlashdata('icon', $icon);
    }
}
