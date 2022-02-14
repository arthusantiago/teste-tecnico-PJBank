<p>1) Crie um array</p>
<?php $meuArray = []; ?>
<code>
	<?php print_r($meuArray)?>
</code>
<br><br>


<p>2) Popule este array com 7 números</p>
<?php
	for ($i=0; $i <= 6; $i++)
	{ 
		$meuArray[] = rand(0, 50);
	} 	
?>
<code>
	<?php print_r($meuArray)?>
</code>
<br><br>


<p>3) Imprima o número da terceira posição do array</p>
<code>
	<?=$meuArray[2]?>
</code>
<br><br>


<p>4) Crie uma variável com todos os itens do array no formato de string separado por vírgula</p>
<?php
	$stringDoArray = implode(', ', $meuArray);
?>
<code>
	<?=$stringDoArray?>
</code>
<br><br>


<p>5) Crie um novo array a partir da variável no formato de string que foi criada e destrua o array anterior</p>
<?php
	// Novo array
	$novoMeuArray = explode(',' ,$stringDoArray);

	//Destruindo variável $meuArray
	unset($meuArray);
?>
<code>
	<?php print_r($novoMeuArray)?>
</code>
<code>
	<?php print_r($meuArray)?>
</code>
<br><br>


<p>6) Crie uma condição para verificar se existe o valor 14 no array</p>
<p><?= in_array(14, $novoMeuArray) ? 'O valor foi encontrado no array' : 'O valor não foi encontrado no array'; ?></p>
<br><br>


<p>7) Faça uma busca em cada posição. Se o número da posição atual for menor que o da posição anterior (valor anterior que não foi excluído do array ainda), 
exclua esta posição</p>
<?php
	$posicoesComMatch = [];

	foreach($novoMeuArray as $key => $value)
	{
		//pulando a primeiro posição do array
		if($key == array_key_first($novoMeuArray)){
			continue;
		}	
		
		if ($value < $novoMeuArray[$key-1])
		{		
			$posicoesComMatch[] = $key;
		}
	}

	foreach ($posicoesComMatch as $match)
	{
		unset($novoMeuArray[$match]);	
	}
?>
<code>
	<?php print_r($novoMeuArray)?>
</code>
<br><br>


<p>8) Remova a última posição deste array</p>
<?php
	unset($novoMeuArray[array_key_last($novoMeuArray)]);
?>
<code>
	<?php print_r($novoMeuArray)?>
</code>
<br><br>


<p>9) Conte quantos elementos tem neste array</p>
<code>
	<?= count($novoMeuArray)?>
</code>
<br><br>


<p>10) Inverta as posições deste array</p>
<?php
	$novoMeuArray = array_reverse($novoMeuArray);
?>
<code>
	<?php print_r($novoMeuArray)?>
</code>
<br><br>
