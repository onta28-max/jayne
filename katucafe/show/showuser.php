
<!-- ເເຈ້ງເຕືອນໃຫ້ເຂົາລະບົບເເອັດມິນ -->
<?php 
if (isset($_SESSION['noadmin'])): ?>
    <div class="alert alert-danger">
        <?php 
        echo $_SESSION['noadmin'];
        unset($_SESSION['noadmin']);
        ?>
    </div>
<?php endif; ?>

<!-- ເເຈ້ງເຕືອນເມື່ອລະຫັດບໍ່ຖືກຕ້ອງ -->
<?php 
if (isset($_SESSION['modelnot'])): ?>
    <div class="alert alert-danger">
        <?php 
        echo $_SESSION['modelnot'];
        unset($_SESSION['modelnot']);
        ?>
    </div>
<?php endif; ?>

<div class="bg-white shadow rounded p-3">
    <form class="col-lg-5 col-md-5 d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="ຄົ້ນຫາ" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">ຄົ້ນຫາ</button>
    </form>
    <div class="pt-3">
        <button class="btn btn-outline-primary" type="button" data-bs-toggle="modal" data-bs-target="#modal_admin">ເພີ່ມພະນັກງານ</button>
    </div>
</div>

<div class="modal fade" id="modal_admin" tabindex="-1" aria-labelledby="modal_addproductLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/katucafe/backend/buser.php" method="POST">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal_addproductLabel">ການຈັດການຂອງແອັດມິນ</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <span>ຊື່ຜູ້ໃຊ້</span>
                        <input type="text" class="form-control" name="username" required>
                    </div>
                    <div class="mb-3">
                        <span>ລະຫັດຜ່ານ</span>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ຍົກເລີກ</button>
                    <button type="submit" class="btn btn-primary">ເຂົ້າຈັດການພະນັກງານ</button>
                </div>
            </form>
        </div>
    </div>
</div>
