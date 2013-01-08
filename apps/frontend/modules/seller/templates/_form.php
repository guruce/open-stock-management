
<form action="<?php echo url_for('seller/' . ($form->getObject()->isNew() ? 'createSeller' : 'updateSeller') . (!$form->getObject()->isNew() ? '?id=' . $form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
    <?php if (!$form->getObject()->isNew()): ?>
        <input type="hidden" name="sf_method" value="put" />
    <?php endif; ?>
    <table >

        <tbody>
            <?php echo $form ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="2">
                    <button type="submit" value="submit" >
                        <?php
                        if ($form->getObject()->isNew())
                            echo"Save this Supplier";
                        else
                            echo "Update this Supplier";
                        ?>
                    </button>
                </td>
            </tr>
        </tfoot>
    </table>
</form>
