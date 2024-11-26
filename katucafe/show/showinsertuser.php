<?php
if (!isset($_SESSION['admin'])) {
    $_SESSION['noadmin'] = "ກະລຸນາເຂົ້າລະບົບເເອັດມິນກ່ອນ!";
    header('Location: ../component/user.php');
    exit();
}
?>

<div class="container mt-5">
<h1> <span style="color:blue;"> ແອັດມິນເເມ່ນ: </span><?php echo $_SESSION['admin']; ?></h1>
    <h2 class="mb-4">ຂໍ້ມູນພະນັກງານທັງຫມົດ</h2>
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalInsertEmployee">Insert Employee</button>

    <div class="table-responsive mt-4">
        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="col">User ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Picture</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">Address</th>
                    <th scope="col">Number</th>
                </tr>
            </thead>
            <tbody>
                <!-- Example data row -->
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td><img src="path/to/image.jpg" alt="User Picture" class="img-thumbnail" width="50"></td>
                    <td>johndoe</td>
                    <td>********</td>
                    <td>123 Main St, City</td>
                    <td>123-456-7890</td>
                </tr>
                <!-- Repeat <tr> for more rows -->
            </tbody>
        </table>
    </div>
</div>
<div class="modal fade" id="modalInsertEmployee" tabindex="-1" aria-labelledby="insertEmployeeLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="#" method="POST" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title" id="insertEmployeeLabel">Insert Employee</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Preview Section -->
                    <div class="mb-3 text-center">
                        <img id="previewImage" src="" alt="Selected Image Preview" class="img-thumbnail" style="max-width: 150px; max-height: 150px; display: none;">
                    </div>
                    
                    <!-- Picture Input -->
                    <div class="mb-3">
                        <label for="picture" class="form-label">Picture</label>
                        <input type="file" class="form-control" id="picture" name="picture" accept="image/*" onchange="showPreview(event);">
                    </div>

                    <!-- Other Form Fields -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address">
                    </div>
                    <div class="mb-3">
                        <label for="number" class="form-label">Number</label>
                        <input type="text" class="form-control" id="number" name="number">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Add Employee</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- JavaScript for Image Preview -->
<script>
    function showPreview(event) {
        const previewImage = document.getElementById('previewImage');
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                previewImage.src = e.target.result;
                previewImage.style.display = 'block';
            };
            reader.readAsDataURL(file);
        } else {
            previewImage.src = '';
            previewImage.style.display = 'none';
        }
    }
</script>
