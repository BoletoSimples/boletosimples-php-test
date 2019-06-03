<?php

require_once 'vendor/autoload.php';
error_reporting (E_ALL ^ E_NOTICE);

/****************************************************************************
 * BoletoSimples.configure
 ****************************************************************************/

// BoletoSimples::configure(array(
//   "environment" => 'sandbox', // default: 'sandbox'
//   "access_token" => 'pegar token na sua conta sandbox'
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
//   'expire_at' => '2024-01-01',
//   'customer_address' => 'Rua quinhentos',
//   'customer_address_complement' => 'Sala 4',
//   'customer_address_number' => '111',
//   'customer_city_name' => 'Rio de Janeiro',
//   'customer_cnpj_cpf' => '414.655.417-99',
//   'customer_email' => 'cliente@example.com',
//   'customer_neighborhood' => 'Sao Francisco',
//   'customer_person_name' => 'Joao da Silva',
//   'customer_person_type' => 'individual',
//   'customer_phone_number' => '2112123434',
//   'customer_state' => 'RJ',
//   'customer_zipcode' => '12312-123',
//   'meta' => "{\"reference_id\": \"code123\"}",
//   'fine_type' => '1',
//   'fine_percentage' => 1.67,
//   'interest_type' => '1',
//   'interest_percentage' => 1.37
//   // 'bank_billet_account_id' => 12 #quando usar carteira própria
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
// echo "Página Anterior: " . BoletoSimples::$last_request->links['prev'] . "\n";
// echo "Próxima Página: " . BoletoSimples::$last_request->links['next'] . "\n";

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
 * BankBillet.cnpj_cpf
 ****************************************************************************/

// $cnpj_cpf = '012.345.678-90';
// $bank_billets = BoletoSimples\BankBillet::cnpj_cpf($cnpj_cpf);
// echo "Boletos Retornados: " . sizeof($bank_billets) . "\n";
// echo "Página Anterior: " . BoletoSimples::$last_request->links['prev'] . "\n";
// echo "Próxima Página: " . BoletoSimples::$last_request->links['next'] . "\n";

/****************************************************************************
 * BankBillet.status
 ****************************************************************************/
//
// $status = 'opened';
// $bank_billets = BoletoSimples\BankBillet::status($status);
// echo "Boletos Retornados: " . sizeof($bank_billets) . "\n";
// echo "Página Anterior: " . BoletoSimples::$last_request->links['prev'] . "\n";
// echo "Próxima Página: " . BoletoSimples::$last_request->links['next'] . "\n";

/****************************************************************************
 * BankBillet.our_number
 ****************************************************************************/

// $our_number = '0000036';
// $bank_billets = BoletoSimples\BankBillet::our_number($our_number);
// echo "Boletos Retornados: " . sizeof($bank_billets) . "\n";
// echo "Página Anterior: " . BoletoSimples::$last_request->links['prev'] . "\n";
// echo "Próxima Página: " . BoletoSimples::$last_request->links['next'] . "\n";


/****************************************************************************
 * BankBillet.duplicate
 ****************************************************************************/

// $bank_billet_id = 1;
// $bank_billet = BoletoSimples\BankBillet::find($bank_billet_id);
// echo "ID Anterior: " . $bank_billet->id . "\n";
// if($bank_billet->duplicate(['expire_at_in_days' => 30, 'amount' => '200,50'])) {
//   echo "Duplicado :)\n";
// } else {
//   echo "Erro :)\n";
//   print_r($bank_billet->response_errors);
// }
// echo "ID Novo: " . $bank_billet->id . "\n";

/****************************************************************************
 * BankBillet.pay
 ****************************************************************************/

// $bank_billet_id = 1;
// $bank_billet = BoletoSimples\BankBillet::find($bank_billet_id);
// echo "Status Anterior: " . $bank_billet->status . "\n";
// if($bank_billet->pay(['paid_at' => '2014-01-01', 'paid_amount' => '200,50'])) {
//   echo "PAGO :)\n";
// } else {
//   echo "Erro :)\n";
//   print_r($bank_billet->response_errors);
// }
// echo "Status Final: " . $bank_billet->status . "\n";

/****************************************************************************
 * BankBillet.update (error)
 ****************************************************************************/

// $bank_billet_id = 56;
// $bank_billet = BoletoSimples\BankBillet::find($bank_billet_id);
// echo "Vencimento: " . $bank_billet->expire_at . "\n";;
// $bank_billet->expire_at = '';
// if($bank_billet->save()) {
//   echo "Sucesso :)\n";
//   echo "Novo vencimento " . $bank_billet->expire_at . "\n";;
// } else {
//   echo "Erro :(\n";
//   print_r($bank_billet->response_errors);
// }

/****************************************************************************
 * BankBillet.update (success)
 ****************************************************************************/

// $bank_billet_id = 56;
// $bank_billet = BoletoSimples\BankBillet::find($bank_billet_id);
// echo "Vencimento: " . $bank_billet->expire_at . "\n";;
// $bank_billet->expire_at = '2020-01-01';
// if($bank_billet->save()) {
//   echo "Sucesso :)\n";
//   echo "Novo vencimento: " . $bank_billet->expire_at . "\n";;
// } else {
//   echo "Erro :(\n";
//   print_r($bank_billet->response_errors);
// }

/****************************************************************************
 * BankBillet.bulk
 ****************************************************************************/

// $boletos = array(array (
//   'amount' => 9.01,
//   'description' => 'Despesas do contrato 0012',
//   'expire_at' => '2020-01-01',
//   'customer_address' => 'Rua quinhentos',
//   'customer_address_complement' => 'Sala 4',
//   'customer_address_number' => '111',
//   'customer_city_name' => 'Rio de Janeiro',
//   'customer_cnpj_cpf' => '414.655.417-99',
//   'customer_email' => 'cliente@example.com',
//   'customer_neighborhood' => 'Sao Francisco',
//   'customer_person_name' => 'Joao da Silva',
//   'customer_person_type' => 'individual',
//   'customer_phone_number' => '2112123434',
//   'customer_state' => 'RJ',
//   'customer_zipcode' => '12312-123'
// ),
// array (
//   'amount' => 19.01,
//   'description' => 'Despesas do contrato 0012',
//   'expire_at' => '2020-02-01',
//   'customer_address' => 'Rua quinhentos',
//   'customer_address_complement' => 'Sala 4',
//   'customer_address_number' => '111',
//   'customer_city_name' => 'Rio de Janeiro',
//   'customer_cnpj_cpf' => '414.655.417-99',
//   'customer_email' => 'cliente@example.com',
//   'customer_neighborhood' => 'Sao Francisco',
//   'customer_person_name' => 'Joao da Silva',
//   'customer_person_type' => 'individual',
//   'customer_phone_number' => '2112123434',
//   'customer_state' => 'RJ',
//   'customer_zipcode' => '12312-123'
// ),
// array (
//   'amount' => 19.01,
//   'description' => 'Despesas do contrato 0012',
//   'expire_at' => '',
//   'customer_address' => 'Rua quinhentos',
//   'customer_address_complement' => 'Sala 4',
//   'customer_address_number' => '111',
//   'customer_city_name' => 'Rio de Janeiro',
//   'customer_cnpj_cpf' => '414.655.417-99',
//   'customer_email' => 'cliente@example.com',
//   'customer_neighborhood' => 'Sao Francisco',
//   'customer_person_name' => 'Joao da Silva',
//   'customer_person_type' => 'individual',
//   'customer_phone_number' => '2112123434',
//   'customer_state' => 'RJ',
//   'customer_zipcode' => '12312-123'
// ));
//
// $bank_billets = BoletoSimples\BankBillet::bulk($boletos);
// print_r($bank_billets);


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
// echo "Página Anterior: " . BoletoSimples::$last_request->links['prev'] . "\n";
// echo "Próxima Página: " . BoletoSimples::$last_request->links['next'] . "\n";

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
// echo "Página Anterior: " . BoletoSimples::$last_request->links['prev'] . "\n";
// echo "Próxima Página: " . BoletoSimples::$last_request->links['next'] . "\n";

/****************************************************************************
 * Extra.userinfo
 ****************************************************************************/

// $userinfo = BoletoSimples\Extra::userinfo();
// print_r($userinfo);

/****************************************************************************
 * Remittance.bulk (success)
 ****************************************************************************/

// $remittance = BoletoSimples\Remittance::bulk([
//   'bank_billet_remittance_ids' => ["17873"]
// ]);
//
// print_r($remittance);