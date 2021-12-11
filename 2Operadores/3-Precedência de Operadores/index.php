<?php
//Quem vem primeiro em cada operação 
echo (3 + 5) * 3; // = 24
echo 3 + 5 * 3; // = 18

/**Precedência
 * PRIMEIROS A SEREM EXECUTADOS ...
 * () a maior precedência de operadores
 * clone new -> clone e new
 * [] -> array()
 * * * -> aritmética
 * ++ -- ~ (int)(float)(string)(array)(object)(bool) @ -> types e incrementodecremento
 * instanceof -> tipos
 * ! -> lógicos
 * * / % -> aritmética
 * || -> lógicos
 * ?? -> comparação
 * ? : -> ternário
 * = += -= *= **= /= .= %= &= |= ^= <<= >>= -> Atribuição
 * and -> Lógicos
 * xor -> Lõgicos
 * or -> Lõgicos
 * ULTIMOS A SEREM EXECUTADOS...
 */