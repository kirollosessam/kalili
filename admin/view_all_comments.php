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
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>ORDERS</th>
                                    <th>Table Number</th>
                                    <!--<th>Status</th>-->
                                    <th>In Response To</th>
                                    <th>Date</th>
                                    <!--<th>Approve</th>-->
                                    <!--<th>UnApprove</th>-->
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <?php
                                $select_comment = new adminComments();
                                $select_comment->selectComments();
                                $select_comment->deleteComments();
                                // $select_comment->approve();
                                // $select_comment->unApprove();
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- COL END -->
</div><!-- ROW-5 END -->

