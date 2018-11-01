<div class="card">
    <div class="card-body">
        <div class="card-sub">
        </div>
        <table  class="table table-bordered"  border="1" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>Name Buyer</th>
                <th>Qty</th>
                <th>urder total</th>
                <th>Name Product</th>
              </tr>
            </thead>
            <tbody>
                <?php $no=1; ?>
                <?php foreach($transactions as $p): ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $p->user->name;  ?></td>
                    <td><?php echo $p->qty;  ?></td>
                    <td><?php echo $p->order_total;  ?></td>
                    <td><?php echo $p->product->name_product;  ?></td>

<?php $no++; ?>
<?php  endforeach;  ?>
            </tbody>
          </table>
</body>
</html>