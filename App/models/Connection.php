<?php

class Connection {

  const HOST      = "localhost";
  const NOMEBANCO = "ultra_mercado";
  const USUARIO   = "peres";
  const SENHA     = "rootroot";
  
  public static $conexao = null;

  public static function getConexao(){
      
    try{
      if(self::$conexao == null){
        self::$conexao = new PDO("mysql:host=".self::HOST.";dbname=".self::NOMEBANCO, self::USUARIO, self::SENHA);
      }
        
    }catch(PDOException $e){
        die("Falhou a conexao ou ocorreu um erro banco: " . $e->getMessage()); 
    }

    return self::$conexao;
  }
}

