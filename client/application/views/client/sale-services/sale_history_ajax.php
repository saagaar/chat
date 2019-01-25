<table id="mytable" class="table table-bordred table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Date</th>
            <th>User Type</th>
            <th>Price</th>
            <th>Offer Start-End</th>
            <th>Status</th>
            <th>Paid by</th>
            <th>Used as</th>
            <th>Option</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $payment_methods = unserialize(PAYMENT_METHODS);
            $count = $this->uri->segment(3) ? $this->uri->segment(3) : 0;
            if(!empty($sales)) {
                foreach($sales as $val) {
                    $count++;
        ?>
        <tr>
            <td><?php echo $count; ?></td>
            <td><?php echo date('Y-m-d', $val->sale_datetime); ?></td>
            <td><?php echo 'user type'; ?></td>
            <td><?php echo $val->rate; ?></td>
            <td><?php echo date('Y-m-d', $val->start_date).' - '.date('Y-m-d', $val->end_date); ?></td>
            <?php if($val->status == 1) { ?>
            <td><button class="alert alert-success" style="margin:0;">Active</button></td>
            <?php } else { ?>
            <td><button class="alert alert-danger" style="margin:0;">Inactive</button></td>
            <?php } ?>
            <td><?php echo $payment_methods[$val->payment_method]; ?></td>
            <td><?php echo 'used as'; ?></td>
            <td>
                <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Edit" style="float:left;margin-right: 8px;"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#viewPurchase" style=" padding-left: 0;padding-right: 19px;background-color: #23709e;border: none;padding-bottom: 8px;"><i class="fa fa-eye" aria-hidden="true"></i></button></p>
            </td>
        </tr>
        <?php
                }
            } else {
                echo '<tr><td colspan="8" style="text-align:center;">Nothing To Display</td></tr>';
            }
        ?>
    </tbody>
</table>

<div class="clearfix"></div>
<ul class="pagination pull-right">
    <?php echo $this->pagination->create_links(); ?>
</ul>