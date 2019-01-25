<table id="mytable" class="table table-bordred table-striped">
    <thead>
        <tr>
            <th>No 222</th>
            <th>Title</th>
            <th>Sales Amount</th>
            <th>Single Price</th>
            <th>Offer Start</th>
            <th>Offer End</th>
            <th>Status</th>
            <th>Options</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $count = $this->uri->segment(3) ? $this->uri->segment(3) : 0;
            if(!empty($services)) {
                foreach($services as $val) {
                    $count++;
        ?>
        <tr>
            <td><?php echo $count; ?></td>
            <td><?php echo $val->title; ?></td>
            <td><?php echo $val->sale_amount; ?></td>
            <td><?php echo $val->rate; ?></td>
            <td><?php echo date('Y-m-d', $val->start_date); ?></td>
            <td><?php echo date('Y-m-d', $val->end_date); ?></td>
            <?php if($val->status == 1) { ?>
            <td><button class="alert alert-success" style="margin:0;">Active</button></td>
            <?php } else { ?>
            <td><button class="alert alert-danger" style="margin:0;">Inactive</button></td>
            <?php } ?>
            <td>
                <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Edit" style="float:left;margin-right: 8px;">
                    <button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#viewAccept2" data-service_id="<?php echo $val->id; ?>" style=" padding-left: 0;padding-right: 19px;background-color: #23709e;border: none;padding-bottom: 8px;">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                    </button>

                </p>

                <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Delete" style="float:left">
                    <button class="btn btn-danger btn-xs" id="delete_service2" data-title="Delete" data-toggle="modal" data-target="#deleteClientmodel" data-delete_url="<?php echo base_url('sale_services/delete_service/').$val->id; ?>" style=" padding-left: 6px; padding-right: 19px;">
                        <span class="glyphicon glyphicon-trash"></span>
                    </button>
                </p>
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