<?php
class FrontPage
{
    public function getHomeFromDB()
    {
        /**
         *  get data from table home using readbeans ORM         
        return R::findAll('home');
         */

        /**
         * example data
         */
        $pageTitle = "Halaman Login";
        $selamatDatang = "Halo, selamat datang!";
        $loginMessages = "Silahkan masukkan username dan password Anda.";
        $userName = "Nama Pengguna";
        $password = "Kata Sandi";
        $loginButton = "Masuk";

        $data = array(
            'pageTitle' => $pageTitle,
            'selamatDatang' => $selamatDatang,
            'loginMessages' => $loginMessages,
            'userName' => $userName,
            'password' => $password,
            'loginButton' => $loginButton,
        );

        return $data;
    }
}
