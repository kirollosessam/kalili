<div class="row">
    <div class="col-12 col-sm-12">
        <div class="card ">
            <div class="card-header">
                <h3 class="card-title mb-0">Product Sales</h3>
            </div>
            <div class="card-body">
                <div class="grid-margin">
                    <div class="">
                        <div class="table-responsive">
                            <table class="table card-table border table-vcenter text-nowrap align-items-center table-bordered">
                                <thead class="">
                                <tr>
                                    <th>User Id</th>
                                    <th>UserName</th>
                                    <th>Password</th>
                                    <th>Firest Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
<!--                                    <th>Rand Salt</th>-->
                                    <th>admin</th>
                                    <th>Subscriber</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <?php
                                $select_users = new adminUsers();
                                $select_users->selectUsers();
                                $select_users->delete_users();
                                $select_users->Admin();
                                $select_users->Subscriber();
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- COL END -->
</div><!-- ROW-5 END -->

