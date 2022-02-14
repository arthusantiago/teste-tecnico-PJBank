<?php
  /**
   * Element para exibição de mensagens de erro ao usuário.
   * Pode ser passado um array de mensagens dentro da variável $params['mensagens']. Exemplo: 
   * 
   * $this->Flash->error('Erro ao salvar', ['params' => ['mensagens' => $artigos->getErrors()]]);
   * 
   * $this->Flash->error('Erro ao salvar', ['params' => ['mensagens' => ['Primeiro error', 'Segundo erro']]]);
   * 
   * Também pode ser passado no indice $params['entidades'] um array de entidades com erros. Exemplo:
   * 
   * $this->Flash->error('Erro ao cadastrar', ['params' => ['entidades' => [ $entidade1, $entidade2 ]]]);
   *
   * @param array|null $params Variável padrão do Flash usada para passar dados ao template.
   * @param string $message Variável padrão do Flash contendo o texto que será exibido ao usuário.
   * @author Arthu Santiago <contato@avds.eti.br>
   */

//array de mensagens de erro
$mensagensErro = [];

$getErro = function ($msg, $tipoErro) use (&$mensagensErro)
{
    $mensagensErro[] = $msg;
};

// Para um array de entidades   
if(isset($params['entidades']) && is_array($params['entidades']))
{
    foreach($params['entidades'] as $entidade)
    {
        $erros = $entidade->getErrors();
        array_walk_recursive($erros, $getErro);
    }
}

// Para um array de menssagens simples
if(isset($params['mensagens']) && is_array($params['mensagens']))
{
    array_walk_recursive($params['mensagens'], $getErro);
}

//se a variável '$message' for nula é atribuído a ela um texto padrão.
if (empty($message))
{
    $message = "Aconteceu um erro, tente novamente.";
}
?>

<div class="message error" onclick="this.classList.add('hidden');">
    <?= $message ?>
        <ul>
        <?php foreach($mensagensErro AS $mensagem):?>
            <li><?=h($mensagem)?></li>
        <?php endforeach;?>
    </ul>
</div>