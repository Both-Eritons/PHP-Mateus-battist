<?php

class Server{
	public const CHAVE_API = "1keKwkwkKw";

	public function useKey(){
		return self::CHAVE_API;
	}
}
$server = new Server;

echo $server->useKey();
