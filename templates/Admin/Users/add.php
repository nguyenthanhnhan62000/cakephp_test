<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users form content">
            <?= $this->Form->create($user, ['type' =>'file']) ?>
            <fieldset>
                <legend><?= __('Add User') ?></legend>
                <?php
                    echo $this->Form->control('email');
                    echo $this->Form->control('password');
                    echo $this->Form->control('retype_password', ['type' => 'password']);
                    echo $this->Form->control('profile.mobile');
                    echo $this->Form->control('skills.0.name');
                    echo $this->Form->control('skills.1.name');

                    echo $this->Form->control('image_file', ['type' => 'file']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit'), ['id' => 'cakebtn']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

<script>
    console.log(1);
    $(document).ready(function () {
        $('#cakebtn').click(() => {
            $.ajax({
                method : 'POST',
                url: "<?= $this->Url->build(['controller' => 'Users', 'action' => 'receive']) ?>",
                data: {
                    id:10
                },
                headers: {
                    'X-CSRF-Token': $('meta[name="csrfToken"]').attr('content')     
                }
            });
        })
    });
</script>


