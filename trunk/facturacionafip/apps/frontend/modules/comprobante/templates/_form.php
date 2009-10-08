<?php include_stylesheets_for_form($form) ?>
<?php include_javascripts_for_form($form) ?>
<?php use_helper('Javascript') ?>

<h1>New Comprobante</h1>

<form action="<?php echo url_for('comprobante/create') ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          &nbsp;<a href="<?php echo url_for('comprobante/index') ?>">Cancel</a>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
       <?php echo $form ?>
    </tbody>
  </table>
</form>