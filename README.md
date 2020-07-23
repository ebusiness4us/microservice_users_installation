# Cadastro Global

## PHP

### Instalação

Adicionar ao `composer.json`

```json
{
  "repositories": [
    {
      "type": "package",
      "package": {
        "name": "ebusiness4us/microservice_users_installation",
        "version": "1.0.0",
        "source": {
          "url": "https://github.com/ebusiness4us/microservice_users_installation.git",
          "type": "git",
          "reference": "master"
        }
      }
    }
  ],
  "require": {
    "grpc/grpc": "^v1.27.0",
    "ebusiness4us/microservice_users_installation": "^1.0"
  },
  "autoload": {
    "psr-4": {
      "": "vendor/ebusiness4us/microservice_users_installation/build/php"
    }
  }
}
```

### Utilização

```php
require_once __DIR__ . "/vendor/autoload.php";

// Endereço do servidor do microservice
$server_addr = "localhost:9090";

// Conectar ao servidor (a conexão pode ser reutilizada)
$client = new MicroserviceUsers\UserServiceClient($server_addr, [
  "credentials" => Grpc\ChannelCredentials::createInsecure(),
]);

// Criar requisição de criação de usuário
$req = new MicroserviceUsers\CreateRequest();
$req->setName("Anderson Marin");
$req->setEmail("anderson.marin@outlook.com");
$req->setPassword("abc123");
$req->setLocale("us");

// Executar a requisição de criação de usuário
list($res, $err) = $client->Create($req)->wait();

// Verificar se ocorreu algum erro na requisição
if ($err->code != 0) {
  echo "error ". $err->details;
  exit;
}

// Trata o resultado
switch ($res->getResult()) {
  case MicroserviceUsers\CreateResponse\Result::CREATED:
    echo "conta criada\n";
    break;

  case MicroserviceUsers\CreateResponse\Result::EMAIL_ALREADY_EXISTS:
    echo "email já existe\n";
    break;

  case MicroserviceUsers\CreateResponse\Result::INVALID_EMAIL:
    echo "email inválido\n";
    break;

  case MicroserviceUsers\CreateResponse\Result::INVALID_PASSWORD_REQUIREMENTS:
    echo "senha inválida\n";
    break;

  default:
    echo "resultado não tratado: " . MicroserviceUsers\CreateResponse\Result::name($res->getResult()) . "\n"; 
}

```