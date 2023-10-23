<?php

use Ex_orientacaoObjetos\Ex01\Invoice;

require 'Invoice.php';

$lojaInformatica = new Invoice(1, "Descrição",2,2);
var_dump($lojaInformatica);
var_dump($lojaInformatica -> getInvoiceAmount());
//Enfim, o metodo funciona mas me retorna null, qual o motivo?d
