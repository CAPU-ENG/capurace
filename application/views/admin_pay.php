<div class="indcontainer">
    <h3>目前已经有<?=count($payment)?>所高校完成报名</h3>
    <hr/>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>学校</th>
            <th>领队</th>
            <th>邮箱</th>
            <th>电话</th>
            <th>金额</th>
            <th>支付情况</th>
        </tr>
        </thead>
        <tbody class="paylist">
        <?php foreach ($payment as $item): ?>
        <tr class="payitem">
            <td class="id"><?=$item['id']?></td>
            <td class="school"><?=$item['school']?></td>
            <td class="leader"><?=$item['leader']?></td>
            <td class="mail"><?=$item['mail']?></td>
            <td class="tel"><?=$item['tel']?></td>
            <td class="bill"><?=$item['bill']?></td>
            <td class="paid">
                <?php if ($item['paid']): ?>
                <button class="btn-xs btn-primary lookup">查看信息</button>
                <?php else: ?>
                <button class="btn-xs btn-success set-paid">确认缴费</button>
                <?php endif; ?>
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>