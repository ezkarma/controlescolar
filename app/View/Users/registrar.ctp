<!-- app/View/Users/add.ctp -->
<div class="users form">
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Registrar Usuario'); ?></legend>
        <?php echo $this->Form->input('username',array('label'=>'correo'));
        echo $this->Form->input('password');
        echo $this->Form->input('rol', array(
            'options' => array('admin' => 'Admin', 'author' => 'Tutor')
        ));
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>