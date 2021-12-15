<?php

/**
 * 
 * TODO: Crie uma função para calcular o imposto de renda, chamada calcIRPF($salario, $dependentes)
 * * fórmula: $imposto = (($salario - ($dependentes * 189.59)) * ($aliquota/100)) - $deducao;
 * * Base de cálculo                    Alíquota                Parcela a deduzir do IRPF
 * * Até R$ 1.903,98                    Isento                      R$ 0,00
 * * De R$ 1.903,99 até R$ 2.826,65     7,5%                        R$ 142,80
 * * De R$ 2.826,66 até R$ 3.751,05     15%                         R$ 354,80
 * * De R$ 3.751,06 até R$ 4.664,68     22,5%                       R$ 636,13
 * * Acima de R$ 4.664,68               27,5%                       R$ 869,36
 * 
 * TODO: Crie um arrow function formataLink com dois parâmetro $url, $texto que imprime um link com os dados enviados.
 * 
 */