<?php
require_once('models/User.php');
require_once('models/Message.php');
require_once('dao/UserDAO.php');
require_once('globals.php');
require_once('db.php');

$message = new Message($BASE_URL);

$userDAO = new UserDAO($conn, $BASE_URL);

//resgata o tipo do formulario
$type = filter_input(INPUT_POST, 'type');

//verificar o tipo de form
if ($type === 'register') {
  $name = filter_input(INPUT_POST, 'name');
  $lastname = filter_input(INPUT_POST, 'lastname');
  $email = filter_input(INPUT_POST, 'email');
  $password = filter_input(INPUT_POST, 'password');
  $confirmpassword = filter_input(INPUT_POST, 'confirmpassword');

  //verficar dados minimos
  if ($name && $lastname && $email && $password) {
    if ($password === $confirmpassword) {
      //verificar se o email está cadastrado
      if ($userDAO->findByEmail($email) === false) {
        echo 'nenhum usuario foi encontrado';
      } else {
        $message->setMessage('Usuário ja cadastrado, tente outro e-mail', 'error', 'back');
      }
    } else {
      $message->setMessage('As senhas não são iguais', 'error', 'back');
    }
  } else {
    $message->setMessage('Preencha todos os campos', 'error', 'back');
  }
} else if ($type === 'login') {
  $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
  $password = filter_input(INPUT_POST, 'password');
  // faça alguma coisa com $email e $password aqui
}
