<?php include('partials/menu.php'); ?>

        <!-- Main content section starts -->
        <div class="main-content">
            <div class="wrapper">
                <h1>Manage Admin</h1>
                <br /><br/>

                <a href="add-admin.php" class="btn-primary">Add Admin</a>
                <br /><br/><br/>
                <table class="tb-full">
                     <tr>
                        <th>S.N.</th>
                        <th>Full Name</th>
                        <th>Username</th>
                        <th>Actions</th>
                    </tr>
                    <tr>
                        <td>1.</td>
                        <td>Ramya Nekkanti</td>
                        <td>Ramya Nekkanti</td>
                        <td>
                            <a href="#" class="btn-secondary">Update Admin</a>
                            <a href="#" class="btn-danger">Delete Admin</a>   
                           
                        </td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>Shashank Panyala</td>
                        <td>Shashank Panyala</td>
                        <td>
                            <a href="#" class="btn-secondary">Update Admin</a>
                            <a href="#" class="btn-danger">Delete Admin</a> 
                        </td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>Sowmya Nekkanti</td>
                        <td>Sowmya Nekkanti</td>
                        <td>
                            <a href="#" class="btn-secondary">Update Admin</a>
                            <a href="#" class="btn-danger">Delete Admin</a> 
                        </td>
                    </tr>
                </table>

            </div>
        </div>
        <!-- Main content section ends -->
<?php include('partials/footer.php'); ?>