<div class="users index content">
    <h3><?= __('Exercícios') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= h('Exercício') ?></th>
                    <th><?= h('Link') ?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= h("Exercício 1") ?></td>
                    <td>
                        <?= $this->Html->link(
                        __('Cadastro de Usuários'),
                        ['controller' => 'Users',  'action' => 'index'],
                        ['target' => '_blank']) 
                        ?>        
                    </td>
                </tr>
                <tr>
                    <td><?= h("Exercício 2") ?></td>
                    <td>
                        <?= $this->Html->link(
                        __('Manipulação de Array'),
                        ['controller' => 'Pages',  'action' => 'manipulandoArray'],
                        ['target' => '_blank']) 
                        ?>        
                    </td>
                </tr>
                <tr>
                    <td><?= h("Exercício 3") ?></td>
                    <td>
                        <?= $this->Html->link(
                        __('DML'),
                        ['controller' => 'Pages',  'action' => 'dml'],
                        ['target' => '_blank']) 
                        ?> 
                    </td>
                </tr>                                   
            </tbody>
        </table>
    </div>
</div>
