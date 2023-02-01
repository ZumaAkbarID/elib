@extends('adminlte::page')

@section('title', $title)

@section('content_header')

<h1>{{ $title }}</h1>
@stop

@section('content')
<div class="containe-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-edit"></i>
                        Button Tambah
                    </h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('pengguna.store') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <section class="content">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="box box-primary">
                                        <div class="box-header with-border">
                                        </div>
                                        <div class="box-body">
                                            <form action="{{ route('pengguna.store') }}" enctype="multipart/form-data"
                                                method="POST">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>NIS</label>
                                                            <input type="text" class="form-control" name="nis"
                                                                required="required" placeholder="NIS">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Nama Pengguna</label>
                                                            <input type="text" class="form-control" name="nama_lengkap"
                                                                required="required" placeholder="Nama Pengguna">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Jurusan</label>
                                                            <select class="form-control" name="jurusan">
                                                                <option value="" selected="" disabled="">- pilih jurusan
                                                                    -</option>
                                                                <option value="tbsm ">TEKNIK DAN BISNIS SEPEDA MOTOR</option>
                                                                <option value="rpl">REKAYASA PERANGKAT LUNAK</option>
                                                                <option value="otkp">OTOMATISASI DAN TATA KELOLA PERKANTORAN</option>
                                                                <option value="akl">AKUNTANSI DAN KEUANGAN LEMBAGA</option>
                                                                <option value="bdp">BISNIS DARING DAN PEMASARAN</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Tempat Lahir</label>
                                                            <input type="text" class="form-control" name="tempat_lahir"
                                                                required="required" placeholder="Contoh : JEPARA">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Tanggal Lahir</label>
                                                            <input type="date" class="form-control" name="tanggal_lahir"
                                                                required="required" placeholder="Contoh : 2004-05-18">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Username</label>
                                                            <input type="text" class="form-control" name="username"
                                                                required="required" placeholder="Username">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Password</label>
                                                            <input type="password" class="form-control" name="password"
                                                                required="required" placeholder="Password">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>Level</label>
                                                            <select name="level" class="form-control"
                                                                required="required">
                                                                <option>Petugas</option>
                                                                <option>Anggota</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Jenis Kelamin</label>
                                                            <br>
                                                            <input type="radio" name="jenis_kelamin" value="Laki-Laki"
                                                                required="required">
                                                            Laki-Laki
                                                            <br>
                                                            <input type="radio" name="jenis_kelamin" value="Perempuan"
                                                                required="required">
                                                            Perempuan
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Telepon</label>
                                                            <input id="uintTextBox" class="form-control" name="telepon"
                                                                required="required" placeholder="Contoh : 089618173609">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>E-mail</label>
                                                            <input type="email" class="form-control" name="email"
                                                                required="required"
                                                                placeholder="Contoh : calmesil@gmail.com">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Pas Foto</label>
                                                            <br>
                                                            <input type="file" accept="foto/*" name="foto"
                                                                required="required">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Alamat</label>
                                                            <textarea class="form-control" name="alamat"
                                                                required="required"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                <button type="submit" class="btn btn-info float-right">
                    Simpan</button>
            </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        @stop

                        @section('js')
                        <script>
                        $('.pas-delete-metu-alert-cantik').click(function(event) {
                            var form = $(this).closest("form");
                            var name = $(this).data("name");
                            event.preventDefault();
                            Swal.fire({
                                title: "PERHATIAN",
                                text: "Setelah di hapus, anda tidak akan dapat memulihkan data ini!",
                                icon: 'question',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Yakin!'
                            }).then((diHapus) => {
                                if (diHapus.value) {
                                    form.submit();
                                }
                            });
                            return false;
                        });

                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal.stopTimer)
                                toast.addEventListener('mouseleave', Swal.resumeTimer)
                            }
                        })

                        @if($message = Session::get('success'))
                        Toast.fire('Sukses !!!', '{{ $message }}', 'success')
                        @endif

                        @if($errors->any())
                        Toast.fire('Eror !!!', '{{ $errors->first() }}', 'error')
                        @endif
                        </script>
                        @stop