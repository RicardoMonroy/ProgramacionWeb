<?php

  $data = '<soap:Envelope xmlns:soap="http://www.w3.org/2003/05/soap-envelope" xmlns:xw="www.XMLWebServiceSoapHeaderAuth.net">
  <soap:Header>
      <xw:AuthSoapHd>
        <xw:Usuario>TOORING_USR1</xw:Usuario>
        <xw:Clave>Tooring@2021</xw:Clave>
        <xw:Entidad>Tooring</xw:Entidad>
      </xw:AuthSoapHd>
  </soap:Header>
  <soap:Body>
      <xw:GeneraConstancia>
          <xw:referencia>Mi referencia</xw:referencia>
          <xw:solicitud>MEECAQEwMTANBglghkgBZQMEAgEFAAQg/H0GGI+81oyp4l4d0nY6W2Tf4YtDm1MvuX5WnKTfTZQGCTiDZGUKgjwBAg==</xw:solicitud>
      </xw:GeneraConstancia>
  </soap:Body>
</soap:Envelope>';   
  $ch = curl_init(); curl_setopt($ch, CURLOPT_URL, "https://pilot-psc.reachcore.com/wsnom151/webservice.asmx?WSDL"); 
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
  curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC); 
  curl_setopt($ch, CURLOPT_POST, true); 
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data); curl_setopt($ch, CURLOPT_HTTPHEADER, 
  array("Content-Type: text/xml; charset=utf-8", "Content-Length: " . strlen($data))); 
  $output = curl_exec($ch); 
  var_dump($output);
  curl_close($ch);
  $items = simplexml_load_string($output);
  var_dump($items);
  print_r($items);
?>