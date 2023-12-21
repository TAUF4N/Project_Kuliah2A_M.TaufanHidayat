<?php
include "proses/connect.php";
$query = mysqli_query($conn, "SELECT * FROM tb_kategori_buku");
while ($record = mysqli_fetch_array($query)) {
    $result[] = $record;
}
?>

<div class="col-lg-9 mt-2 ">
    <div class="card">
        <div class="card-header">
            Halaman Kategori Buku
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col d-flex justify-content-end">
                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalTambahUser">Tambah Kategori Buku</button>
                </div>
            </div>
            <!-- Modal tambah kategori menu baru-->
            <div class="modal fade" id="ModalTambahUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Kategori Buku</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="needs-validation" novalidate action="proses/proses_input_katbuku.php" method="POST">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <select class="form-select" name="jenisbuku" id="">
                                                <option value="1">Fiksi</option>
                                                <option value="2">Nonfiksi</option>
                                            </select>
                                            <label for="floatingInput">Jenis Buku</label>
                                            <div class="invalid-feedback">
                                                Masukkan Jenis Buku.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="Kategori Buku" name="katbuku" required>
                                            <label for="floatingInput">Kategori Buku</label>
                                            <div class="invalid-feedback">
                                                Masukkan Kategori Buku.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" name="input_katbuku_validate" value="12345">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end modal kategori menu baru -->
            <?php
            foreach ($result as $row) {
            ?>
                <!-- Modal edit-->
                <div class="modal fade" id="ModalEdit<?php echo $row['id_kat_buku'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Kategori Buku</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <form class="needs-validation" novalidate action="proses/proses_edit_katbuku.php" method="POST">
                                <input type="hidden" value="<?php echo $row['id_kat_buku'] ?>" name="id">
                                <div class="row"> 
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                        <select class="form-select" aria-label="Default select example" require name="jenisbuku" id="">
                                                    <?php
                                                    $data = array("Fiksi", "Nonfiksi");
                                                    foreach ($data as $key => $value) {
                                                        if ($row['jenis_buku'] == $key + 1) {
                                                            echo "<option selected value = ".($key+1).">$value</option>";
                                                        } else {
                                                            echo "<option value = ".($key+1).">$value</option>";
                                                        }
                                                    }
                                                    ?>
                                        </select>
                                            <label for="floatingInput">Jenis Buku</label>
                                            <div class="invalid-feedback">
                                                Pilih Jenis Buku
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="Kategori BUku" name="katbuku" required value="<?php echo $row['kategori_buku'] ?>">
                                            <label for="floatingInput">Kategori Buku</label>
                                            <div class="invalid-feedback">
                                                Masukkan Kategori Buku.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" name="input_katbuku_validate" value="12345">Save changes</button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end modal edit -->



                <!-- Modal delete-->
                <div class="modal fade" id="ModalDelete<?php echo $row['id_kat_buku'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-md modal-fullscreen-md-down">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Data Kategori BUku</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="needs-validation" novalidate action="proses/proses_delete_katbuku.php" method="POST">
                                    <input type="hidden" value="<?php echo $row['id_kat_buku'] ?>" name="id">
                                    <div class="col-lg-12">
                                    Apakah anda ingin menghapus kategori <b><?php echo $row['kategori_buku'] ?></b>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-danger" name="hapus_kategori_validate" value="12345">Delete</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end modal delete -->

            <?php
            }
            if (empty($result)) {
                echo "Data user tidak ada";
            } else {
            ?>
                <!-- table daftar kategori menu -->
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Jenis Buku</th>
                                <th scope="col">Kategori Buku</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($result as $row) {
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $no++ ?></th>
                                    <td><?php echo ($row['jenis_buku'] == 1) ? "Fiksi" : "Nonfiksi" ?></td>
                                    <td><?php echo $row['kategori_buku'] ?></td>
                                    <td class="d-flex">
                                        <button class="btn btn-warning btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalEdit<?php echo $row['id_kat_buku'] ?>"><i class="bi bi-pencil-square"></i></button>
                                        <button class="btn btn-danger btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalDelete<?php echo $row['id_kat_buku'] ?>"><i class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <!-- end table daftar kategori menu -->
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