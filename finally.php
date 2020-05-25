<?php

try {
    echo "Executando <br />";
    throw new Exception('Exceção aqui <br />');
} catch (\Throwable $e) {
    echo "Caindo no catch. <br />";
}finally{
    echo "Finally <br />";
}