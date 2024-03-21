<?php

namespace App\Controllers;
use App\Models\M_lelang;
use Illuminate\Http\Request;
class Home extends BaseController
{
    public function index()
    {
    echo view('login');

    }
    public function aksi_login()

    {
       $a= $this->request->getPost('username');
        $b= $this->request->getPost('password');

        $model = new M_lelang();
        $where=array(
            'nama'=> $a,
            'password'=> $b
        );
        $cek = $model->getwhere('user',$where);
        print_r($cek);
        if($cek>0) {
            session()->set('nama',$cek->nama);
            session()->set('id',$cek->id_user);
            session()->set('email',$cek->email);
            session()->set('no_hp',$cek->no_hp);
            session()->set('level',$cek->level);
            session()->set('alamat',$cek->alamat);
            return redirect()->to('dashboard');
        }else{
            return redirect()-> to('');
        }
    }
     public function logout()
    {

        session()->destroy();
        return redirect()->to('');
    }
   
     public function dashboard()
    {
        $model= new M_lelang();
    $where=array('id_user'=>session()->get('id'));
    $data['user']=$model->getwhere('user',$where);
           echo view('header');
    echo view('menu',$data);
        echo view('TEMPLATEISBAD');
    echo view('footer');
    }
     public function inprogress()
    {
    $model= new M_lelang();
    $where=array('id_user'=>session()->get('id'));
    $data['user']=$model->getwhere('user',$where);
     $data['axo'] = $model->tampil('order', "id_pemesanan");
    echo view('header');
    echo view('menu',$data);
    echo view('INPROGRESS',$data);
    echo view('footer');
    }
     public function order()
    {
         $model= new M_lelang();
    $where=array('id_user'=>session()->get('id'));
    $data['user']=$model->getwhere('user',$where);
            echo view('header');
            echo view('menu',$data);
              echo view('order');
            echo view('footer');
    }
    public function aksi_order()
    {
      $model = new M_lelang();
      
      $a= $this->request->getPost('nama');
        $b= $this->request->getPost('alamat');
      $c= $this->request->getPost('Tanggal');
      $d= $this->request->getPost('jenis');
      $e= $this->request->getPost('metode');
      $f=$this->request->getPost('harga');


      $isi = array(

    
            'nama_pemesan'=> $a,
             'alamat'  => $b,
            'tanggal_pemesanan'=> $c,
            'Jenis_Pemesanan'=> $d,
            'metode'=>$e,
            'harga'=> $f,
                   );
      $model->tambah('order', $isi);

      return redirect()->to('inprogress');
  }
public function HapusO($id)
  {
  $model =new M_lelang();
    $where= array('id_pesanan'=>$id);
    $model->hapus('order',$where);
    return redirect()->to('inprogress');
    }
    public function completed($id)
    {
    $model= new M_lelang();
    $where=array('id_user'=>session()->get('id'));
    $data['user']=$model->getwhere('user',$where);
      $where=array('id_pesanan'=>$id);
    $data['axo'] = $model->getwhere('order', $where);
    $model->hapus('order',$where);
     // print_r($data1);
    echo view('header');
    echo view('menu',$data);
    echo view('completed',$data);
    echo view('footer');
    }
    public function aksi_history()
    {
      $model = new M_lelang();
      
      $a= $this->request->getPost('nama');
        $b= $this->request->getPost('alamat');
      $c= $this->request->getPost('Tanggal');
      $d= $this->request->getPost('jenis');
      $e= $this->request->getPost('metode');
      $f=$this->request->getPost('harga');
      $g= $this->request->getPost('TanggalK');


      $isi = array(

    
            'nama'=> $a,
             'alamat'  => $b,
            'tanggal_awal'=> $c,
            'Jenis'=> $d,
            'metode'=>$e,
            'harga'=> $f,
            'tanggal_akhir'=> $g,
                   );
      $model->tambah('history', $isi);
      return redirect()->to('history');
  }
   public function history()
    {
    $model= new M_lelang();
    $where=array('id_user'=>session()->get('id'));
    $data['user']=$model->getwhere('user',$where);
     $data['axo'] = $model->tampil('history', "id_pemesanan");
    echo view('header');
    echo view('menu',$data);
    echo view('history',$data);
    echo view('footer');
    }  
public function profile($id)
{
    $model = new M_lelang();
    $where = array('id_user' => session()->get('id'));
    $data['user'] = $model->getWhere('user', $where); // Corrected method call
    // print_r($data1);
    echo view('header');
    echo view('menu', $data);
    echo view('profile', $data);
    echo view('footer');
}
public function aksi_profile()
    {
      $model = new M_lelang();
      
      $a= $this->request->getPost('firstName');
        $b= $this->request->getPost('alamat');
      $c= $this->request->getPost('email');
      $d= $this->request->getPost('phoneNumber');
      $id= $this->request->getPost('id');
        $uploadedFile = $this->request->getFile('image');
        $photo = $uploadedFile->getName();
        $where = array('id_user' => $id);


      $isi = array(

    
            'nama'=> $a,
             'alamat'  => $b,
            'email'=> $c,
            'no_hp'=> $d,
            'photo'=>$photo

                   );
       // print_r($where);
      $model->edit('user', $isi, $where);
      return redirect()->to('dashboard');
  }
  public function user()
    {

  
            echo view('user');

    }
public function aksi_user()
{
    $model = new M_lelang();
    $a = $this->request->getPost('username');
    $b = $this->request->getPost('email');
    $c = $this->request->getPost('password');
     
    // Assigning 'level' to 3 directly in the array
    $isi = array(
        'nama' => $a,
        'email' => $b,
        'password' => $c,
        'level' => 3
    );
    $model->tambah('user', $isi);

    return redirect()->to('');
}
  }

  