<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Ações') ?></h4>
            <?= $this->Html->link(__('Listagem dos usuários'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
                <fieldset>
                    <legend><?= __('Novo Usuário') ?></legend>
                    <?php
                        echo $this->Form->control('name', ['label' => 'Nome completo']);
                        echo $this->Form->control('username', ['label' => 'Nome de login']);
                        echo $this->Form->control('email', ['label' => 'E-mail']);
                        echo $this->Form->control('password', ['label' => 'Senha (8 caracteres mínimo, contendo pelo menos 1 letra e 1 número)']);
                        echo $this->Form->control('zipcode', ['label' => 'CEP']);
                    ?>
                </fieldset>
                <?= $this->Form->button(__('Cadastrar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
