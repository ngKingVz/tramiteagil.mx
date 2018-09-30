<?php

require_once("/path/to/lib/Conekta.php");
\Conekta\Conekta::setApiKey("key_eYvWV7gSDkNYXsmr");
\Conekta\Conekta::setApiVersion("2.0.0");

try{
  $order = \Conekta\Order::create(
    array(
      "line_items" => array(
        array(
          "name" => "Tacos",
          "unit_price" => 1000,
          "quantity" => 12
        )//first line_item
      ), //line_items
      "shipping_lines" => array(
        array(
          "amount" => 1500,
          "carrier" => "FEDEX"
        )
      ), //shipping_lines - physical goods only
      "currency" => "MXN",
      "customer_info" => array(
        "name" => "Fulanito Pérez",
        "email" => "fulanito@conekta.com,
        "phone" => "+5218181818181"
      ), //customer_info
      "shipping_contact" => array(
        "address" => array(
          "street1" => "Calle 123, int 2",
          "postal_code" => "06100",
          "country" => "MX"
        )//address
      ), //shipping_contact - required only for physical goods
      "charges" => array(
          array(
              "payment_method" => array(
                "type" => "oxxo_cash"
              )//payment_method
          ) //first charge
      ) //charges
    )//order
  );
} catch (\Conekta\ParameterValidationError $error){
  echo $error->getMessage();
} catch (\Conekta\Handler $error){
  echo $error->getMessage();
}

?>