<?php

    private function sanitizarDados($dados) 
    {
        $dados = str_replace('  ', '', $dados);
        $listaResposta = explode("\n", $dados);
        $conteúdo = current($listaResposta);
        $listaDados = json_decode($conteudo, true);
        if ($listaDados) {
            $dados = $listaDados;
        } else {
            $conteudo = utf8_decode($conteudo);
            $conteudo = iconv('UTF-8', 'ISO-8859-1//IGNORE', $conteudo);
            $conteudo = mb_convert_encoding($conteudo, 'ISO-8859-1', 'UTF-8');
            $dados  = json_decode($conteudo, true);	
        }
        return $dados;
    }
