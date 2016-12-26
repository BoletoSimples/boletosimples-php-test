<?php

require_once 'vendor/autoload.php';
error_reporting (E_ALL ^ E_NOTICE);

/****************************************************************************
 * BoletoSimples.configure
 ****************************************************************************/

// BoletoSimples::configure(array(
//   "environment" => 'sandbox', // default: 'sandbox'
//
// ));

/****************************************************************************
 * BankBillet.create (error)
 ****************************************************************************/

// $bank_billet = BoletoSimples\BankBillet::create(['amount' => 9.1]);
// if($bank_billet->isPersisted()) {
//   echo "Sucesso :)\n";
//   print_r($bank_billet->attributes());
// } else {
//   echo "Erro :(\n";
//   print_r($bank_billet->response_errors);
// }

/****************************************************************************
 * BankBillet.create (success)
 ****************************************************************************/

// $bank_billet = BoletoSimples\BankBillet::create(array (
//   'amount' => 9.01,
//   'description' => 'Despesas do contrato 0012',
//   'expire_at' => '2014-01-01',
//   'customer_address' => 'Rua quinhentos',
//   'customer_address_complement' => 'Sala 4',
//   'customer_address_number' => '111',
//   'customer_city_name' => 'Rio de Janeiro',
//   'customer_cnpj_cpf' => '012.345.678-90',
//   'customer_email' => 'cliente@example.com',
//   'customer_neighborhood' => 'Sao Francisco',
//   'customer_person_name' => 'Joao da Silva',
//   'customer_person_type' => 'individual',
//   'customer_phone_number' => '2112123434',
//   'customer_state' => 'RJ',
//   'customer_zipcode' => '12312-123'
// ));
// if($bank_billet->isPersisted()) {
//   echo "Sucesso :)\n";
//   print_r($bank_billet->attributes());
// } else {
//   echo "Erro :(\n";
//   print_r($bank_billet->response_errors);
// }

/****************************************************************************
 * BankBillet.find
 ****************************************************************************/

// $bank_billet_id = 799;
// $bank_billet = BoletoSimples\BankBillet::find($bank_billet_id);
// print_r($bank_billet->attributes());

/****************************************************************************
 * BankBillet.all
 ****************************************************************************/

// $bank_billets = BoletoSimples\BankBillet::all(['page' => 1, 'per_page' => 2]);
// echo "Boletos Retornados: " . sizeof($bank_billets) . "\n";
// echo "Total: " . BoletoSimples::$last_request->total . "\n";
// echo "Primeira Página: " . BoletoSimples::$last_request->links['first'] . "\n";
// echo "Página Anterior: " . BoletoSimples::$last_request->links['prev'] . "\n";
// echo "Próxima Página: " . BoletoSimples::$last_request->links['next'] . "\n";
// echo "Última Página: " . BoletoSimples::$last_request->links['last'] . "\n";

/****************************************************************************
 * BankBillet.cancel
 ****************************************************************************/

// $bank_billet_id = 799;
// $bank_billet = BoletoSimples\BankBillet::find($bank_billet_id);
// echo "Status Anterior: " . $bank_billet->status . "\n";
// if($bank_billet->cancel()) {
//   echo "Cancelado :)\n";
// } else {
//   echo "Erro :)\n";
//   print_r($bank_billet->response_errors);
// }
// echo "Status Final: " . $bank_billet->status . "\n";

/****************************************************************************
 * Customer.create (error)
 ****************************************************************************/

// $customer = BoletoSimples\Customer::create(['person_name' => 'Joao da Silva']);
// if($customer->isPersisted()) {
//   echo "Sucesso :)\n";
//   print_r($customer->attributes());
// } else {
//   echo "Erro :(\n";
//   print_r($customer->response_errors);
// }

/****************************************************************************
 * Customer.create (success)
 ****************************************************************************/

// $customer = BoletoSimples\Customer::create([
//   'person_name' => "Joao da Silva",
//   'cnpj_cpf' => "860.196.915-19",
//   'email' => "cliente@example.com",
//   'address' => "Rua quinhentos",
//   'city_name' => "Rio de Janeiro",
//   'state' => "RJ",
//   'neighborhood' => "bairro",
//   'zipcode' => "12312-123",
//   'address_number' => "111",
//   'address_complement' => "Sala 4",
//   'phone_number' => "2112123434"
// ]);
// if($customer->isPersisted()) {
//   echo "Sucesso :)\n";
//   print_r($customer->attributes());
// } else {
//   echo "Erro :(\n";
//   print_r($customer->response_errors);
// }

/****************************************************************************
 * Customer.find
 ****************************************************************************/

// $customer_id = 66;
// $customer = BoletoSimples\Customer::find($customer_id);
// print_r($customer->attributes());

/****************************************************************************
 * Customer.update (error)
 ****************************************************************************/

// $customer_id = 56;
// $customer = BoletoSimples\Customer::find($customer_id);
// echo "Nome antigo: " . $customer->person_name . "\n";;
// $customer->person_name = '';
// if($customer->save()) {
//   echo "Sucesso :)\n";
//   echo "Novo nome: " . $customer->person_name . "\n";;
// } else {
//   echo "Erro :(\n";
//   print_r($customer->response_errors);
// }

/****************************************************************************
 * Customer.update (success)
 ****************************************************************************/

// $customer_id = 56;
// $customer = BoletoSimples\Customer::find($customer_id);
// echo "Nome antigo: " . $customer->person_name . "\n";;
// $customer->person_name = 'Nome 1234';
// if($customer->save()) {
//   echo "Sucesso :)\n";
//   echo "Novo nome: " . $customer->person_name . "\n";;
// } else {
//   echo "Erro :(\n";
//   print_r($customer->response_errors);
// }

/****************************************************************************
 * Customer.all
 ****************************************************************************/

// $customers = BoletoSimples\Customer::all(['page' => 1, 'per_page' => 2]);
// echo "Clientes Retornados: " . sizeof($customers) . "\n";
// echo "Total: " . BoletoSimples::$last_request->total . "\n";
// echo "Primeira Página: " . BoletoSimples::$last_request->links['first'] . "\n";
// echo "Página Anterior: " . BoletoSimples::$last_request->links['prev'] . "\n";
// echo "Próxima Página: " . BoletoSimples::$last_request->links['next'] . "\n";
// echo "Última Página: " . BoletoSimples::$last_request->links['last'] . "\n";

/****************************************************************************
 * Customer.cnpj_cpf
 ****************************************************************************/

// $cnpj_cpf = '012.345.678-90';
// $customer = BoletoSimples\Customer::cnpj_cpf($cnpj_cpf);
// print_r($customer->attributes());

/****************************************************************************
 * Customer.email
 ****************************************************************************/
// $email = 'email@cliente.com.br';
// $customer = BoletoSimples\Customer::email($email);
// print_r($customer->attributes());

/****************************************************************************
 * Transaction.all
 ****************************************************************************/

// $transactions = BoletoSimples\Transaction::all(['page' => 1, 'per_page' => 2]);
// echo "Transações Retornadas: " . sizeof($transactions) . "\n";
// echo "Total: " . BoletoSimples::$last_request->total . "\n";
// echo "Primeira Página: " . BoletoSimples::$last_request->links['first'] . "\n";
// echo "Página Anterior: " . BoletoSimples::$last_request->links['prev'] . "\n";
// echo "Próxima Página: " . BoletoSimples::$last_request->links['next'] . "\n";
// echo "Última Página: " . BoletoSimples::$last_request->links['last'] . "\n";

/****************************************************************************
 * Extra.userinfo
 ****************************************************************************/

// $userinfo = BoletoSimples\Extra::userinfo();
// print_r($userinfo);
