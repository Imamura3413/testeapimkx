
<?php 


try {
	
	
		$soapclient = new SoapCLient('http://www.lojasebem.com.br/services/default/?wsdl'); //link para conexão com o SOAP

		//parametros que precisam ser passados na ordem para que não sejam inseridos errados no produto
		$login = 'lojasebem'; //valorfixo
		$senha = 'l0j4S3b3m'; //valorfixo
		$productId = '9012.21';
		$productCode = '12345';
		$productName = null;
		$description = null;
		$metaDescritption = null;
		$keywords = null;
		$price = '999.99';
		$weight = null;
		$lenght = null;
		$width = null;
		$height = null;
		$supply = '1150';
		$period = '25';
		$status = null;
		$video = null;
		$classico = null; 
		$premium = null;
		$skyhub = null;
		$integra = null;
		$cnova = null;
		$carrefour = null;
		$desconto = null;
		$crossdocking = null;

		//passagem de parametros no setProduct
		$response =  $soapclient->setProduct($login, $senha, $productId,$productCode, $productName, $description,$metaDescritption, $keywords, $price,$weight, $lenght, $width, $height, $supply, $period, $status, $video, $classico, $premium, $skyhub, $integra, $cnova, $carrefour, $desconto, $crossdocking); 
		//todos os parametro passados na ordem declarados manualmente mas quero que eles venham de um banco de dados

		//var_dump($response);
		echo $productId;


}catch(Exception $e) {
	echo $e->getMessage();
}


?>