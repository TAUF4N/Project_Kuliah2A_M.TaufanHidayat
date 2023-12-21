<?php
include "proses/connect.php";
$query = mysqli_query($conn, "SELECT * FROM tb_daftar_buku 
LEFT JOIN tb_kategori_buku ON tb_kategori_buku.id_kat_buku = tb_daftar_buku.kategori");
while ($record = mysqli_fetch_array($query)) {
    $result[] = $record;
}

$select_kat_buku = mysqli_query($conn, "SELECT id_kat_buku,kategori_buku FROM tb_kategori_buku");
?>

<div class="col-lg-9 mt-2 ">
    <div class="card">
        <div class="card-header">
            Daftar Buku
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col d-flex justify-content-end">
                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalTambahBuku">Tambah
                        Buku</button>
                </div>
            </div>
            <!-- Modal tambah buku baru-->
            <div class="modal fade" id="ModalTambahBuku" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Buku</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="needs-validation" novalidate action="proses/proses_input_buku.php" method="POST"
                                enctype="multipart/form-data">
                                <input type="hidden" value="<?php echo $row['id'] ?>" name="id">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="input-group mb-3">
                                            <input type="file" class="form-control py-3" id="upload-foto"
                                                placeholder="Foto" name="foto" required>
                                            <label class="input-group-text" for="upload-foto">Upload Foto Buku</label>
                                            <div class="invalid-feedback">
                                                Masukkan File Foto.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="input" class="form-control" id="floatingInput"
                                                placeholder="nama buku" name="nama_buku" required>
                                            <label for="floatingInput">Nama Buku</label>
                                            <div class="invalid-feedback">
                                                Masukkan Nama Buku.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput"
                                                placeholder="keterangan" name="keterangan">
                                            <label for="floatingPassword">Keterangan</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <select class="form-select" aria-label="Default select example"
                                                name="kat_buku" required>
                                                <option selected hidden value="">Pilih Kategori Buku</option>
                                                <?php
                                                foreach ($select_kat_buku as $value) {
                                                    echo "<option value=" . $value['id_kat_buku'] . ">$value[kategori_buku]</option>";
                                                }
                                                ?>
                                            </select>
                                            <label for="floatingInput">Kategori Buku</label>
                                            <div class="invalid-feedback">
                                                Pilih Kategori Buku.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="floatingInput"
                                                placeholder="harga" name="harga" required>
                                            <label for="floatingInput">Harga</label>
                                            <div class="invalid-feedback">
                                                Masukkan Harga.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="floatingInput"
                                                placeholder="Stok" name="stok" required>
                                            <label for="floatingInput">Stok</label>
                                            <div class="invalid-feedback">
                                                Masukkan Stok.
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success" name="input_buku_validate"
                                        value="12345">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end modal tambah buku baru -->
            <?php
            if (empty($result)) {
                echo "Data buku tidak ada";
            } else {
            foreach ($result as $row) {
                ?>
                <!-- Modal view-->
                <div class="modal fade" id="ModalView<?php echo $row['id'] ?>" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Data Buku</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="needs-validation" novalidate action="proses/proses_input_buku.php"
                                    method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-floating mb-3">
                                                <input disabled type="input" class="form-control" id="floatingInput"
                                                    placeholder="Nama Menu" value="<?php echo $row['nama_buku'] ?>">
                                                <label for="floatingInput">Nama Buku</label>
                                                <div class="invalid-feedback">
                                                    Masukkan Nama Buku.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-floating mb-3">
                                                <input disabled type="text" class="form-control" id="floatingInput"
                                                    value="<?php echo $row['keterangan'] ?>">
                                                <label for="floatingPassword">Keterangan</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-floating mb-3">
                                                <select disabled class="form-select" aria-label="Default select example">
                                                    <option selected hidden value="">Pilih Kategori Buku</option>
                                                    <?php
                                                    foreach ($select_kat_buku as $value) {
                                                        if ($row['kategori'] == $value['id_kat_buku']) {
                                                            echo "<option selected value=" . $value['id_kat_buku'] . ">$value[kategori_buku]</option>";
                                                        } else {
                                                            echo "<option value=" . $value['id_kat_buku'] . ">$value[kategori_buku]</option>";
                                                        }
                                                    }

                                                    ?>
                                                </select>
                                                <label for="floatingInput">Kategori Buku</label>
                                                <div class="invalid-feedback">
                                                    Pilih Kategori Buku.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-floating mb-3">
                                                <input disabled type="number" class="form-control" id="floatingInput"
                                                    value="<?php echo $row['harga'] ?>">
                                                <label for="floatingInput">Harga</label>
                                                <div class="invalid-feedback">
                                                    Masukkan Harga.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-floating mb-3">
                                                <input disabled type="number" class="form-control" id="floatingInput"
                                                    placeholder="Stok" value="<?php echo $row['stok'] ?>">
                                                <label for="floatingInput">Stok</label>
                                                <div class="invalid-feedback">
                                                    Masukkan Stok.
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end modal view -->

                <!-- Modal edit-->
                <div class="modal fade" id="ModalEdit<?php echo $row['id'] ?>" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Buku</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="needs-validation" novalidate action="proses/proses_edit_buku.php" method="POST"
                                    enctype="multipart/form-data">
                                    <input type="hidden" value="<?php echo $row['id'] ?>" name="id">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="input-group mb-3">
                                                <input type="file" class="form-control py-3" id="uploadFoto"
                                                    placeholder="Your Name" name="foto" required>
                                                <label class="input-group-text" for="uploadFoto">Upload Photo Buku</label>
                                                <div class="invalid-feedback">
                                                    Pilih Foto Buku.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingInput"
                                                    placeholder="nama buku" name="nama_buku" required
                                                    value="<?php echo $row['nama_buku'] ?>">
                                                <label for="floatingInput">Nama Buku</label>
                                                <div class="invalid-feedback">
                                                    Masukkan Nama Buku.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingInput"
                                                    placeholder="keterangan" name="keterangan"
                                                    value="<?php echo $row['keterangan'] ?>">
                                                <label for="floatingPassword">Keterangan</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-floating mb-3">
                                                <select class="form-select" aria-label="Default select example"
                                                    name="kat_buku">
                                                    <option selected hidden value="">Pilih Kategori Buku</option>
                                                    <?php
                                                    foreach ($select_kat_buku as $value) {
                                                        if ($row['kategori'] == $value['id_kat_buku']) {
                                                            echo "<option selected value=" . $value['id_kat_buku'] . ">$value[kategori_buku]</option>";
                                                        } else {
                                                            echo "<option value=" . $value['id_kat_buku'] . ">$value[kategori_buku]</option>";
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                                <label for="floatingInput">Kategori Buku</label>
                                                <div class="invalid-feedback">
                                                    Pilih Kategori Buku.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-floating mb-3">
                                                <input type="number" class="form-control" id="floatingInput"
                                                    placeholder="harga" name="harga" required
                                                    value="<?php echo $row['harga'] ?>">
                                                <label for="floatingInput">Harga</label>
                                                <div class="invalid-feedback">
                                                    Please choose a prize.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-floating mb-3">
                                                <input type="number" class="form-control" id="floatingInput"
                                                    placeholder="stok" name="stok" required
                                                    value="<?php echo $row['stok'] ?>">
                                                <label for="floatingInput">Stok</label>
                                                <div class="invalid-feedback">
                                                    Please choose a stock.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" name="input_buku_validate" value="12345">Save
                                    changes</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- end modal edit -->



                <!-- Modal delete-->
                <div class="modal fade" id="ModalDelete<?php echo $row['id'] ?>" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-md modal-fullscreen-md-down">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Data User</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="needs-validation" novalidate action="proses/proses_delete_buku.php"
                                    method="POST">
                                    <input type="hidden" value="<?php echo $row['id'] ?>" name="id">
                                    <input type="hidden" value="<?php echo $row['foto'] ?>" name="foto">
                                    <div class="col-lg-12">
                                        apakah anda ingin menghapus nama buku <b> <?php echo $row['nama_buku'] ?> </b>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-danger" name="input_buku_validate"
                                            value="12345" >Delete</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end modal delete -->


                <?php
            }
            
                ?>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr class="text-nowrap">
                                <th scope="col">No</th>
                                <th scope="col">Foto Buku</th>
                                <th scope="col">Nama Buku</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Jenis Buku</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Stok</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($result as $row) {
                                ?>
                                <tr>
                                    <th scope="row">
                                        <?php echo $no++ ?>
                                    </th>
                                    <td>
                                        <div style="width: 80px">
                                            <img src="assets/img/<?php echo $row['foto'] ?>" class="img-thumbnail" alt="...">
                                        </div>
                                    </td>
                                    <td>
                                        <?php echo $row['nama_buku'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['keterangan'] ?>
                                    </td>
                                    <td>
                                        <?php echo ($row['jenis_buku'] == 1) ? "Fiksi" : "Nonfiksi" ?>
                                    </td>
                                    <td>
                                        <?php echo $row['kategori_buku'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['harga'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['stok'] ?>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <button class="btn btn-info btn-sm me-1" data-bs-toggle="modal"
                                                data-bs-target="#ModalView<?php echo $row['id'] ?>"><i
                                                    class="bi bi-eye"></i></button>
                                            <button class="btn btn-warning btn-sm me-1" data-bs-toggle="modal"
                                                data-bs-target="#ModalEdit<?php echo $row['id'] ?>"><i
                                                    class="bi bi-pencil-square"></i></button>
                                            <button class="btn btn-danger btn-sm me-1" data-bs-toggle="modal"
                                                data-bs-target="#ModalDelete<?php echo $row['id'] ?>"><i
                                                    class="bi bi-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
    })()
</script>