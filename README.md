# Cadastro Global

## PHP

### Instalação

[Instalação das extensões e bibliotecas](https://cloud.google.com/php/grpc?hl=pt-br)

Adicionar ao `composer.json`

```json
{
  "repositories": [
    { "type": "git", "url": "https://github.com/ebusiness4us/microservice_users_installation.git" }
  ],
  "require": {
    "grpc/grpc": "v1.42.0",
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

## NodeJS

### Instalação

```
yarn add grpc ebusiness4us/microservice_users_installation
```

### Utilização

```js
let grpc = require('grpc')
let protoLoader = require('@grpc/proto-loader')

// Carregamento das definições do microservice
let PROTO_PATH = __dirname + '/node_modules/microservice_users_installation/source/user.proto'
let definition = protoLoader.loadSync(PROTO_PATH, {
  keepCase: true,
  longs: String,
  enums: String,
  defaults: true,
  oneofs: true
})
let protoDescriptor = grpc.loadPackageDefinition(definition)
let microserviceUsers = protoDescriptor.microserviceUsers

// Endereço do servidor do microservice
const serverAddr = 'localhost:9090'

// Conectar ao servidor (a conexão pode ser reutilizada)
let client = new microserviceUsers.UserService(serverAddr, grpc.credentials.createInsecure())

// Requisição de criação de usuário
client.create({
  name: 'Anderson Marin',
  email: 'anderson.marin@outlook.com',
  password: 'abc123',
  locale: 'us'
}, (err, res) => {
  // Verificar se ocorreu algum erro na requisição
  if (err) {
    console.error(err)
    return
  }
  // Trata o resultado
  console.debug(res)
})
```

## Go

### Instalação
```
go get github.com/ebusiness4us/microservice_users_installation
go get google.golang.org/grpc
```

### Utilização

```go
package main

import (
	"context"
	"fmt"

	"github.com/ebusiness4us/microservice_users_installation/build/go/pb"
	"google.golang.org/grpc"
)

func main() {
	conn, err := grpc.Dial("localhost:9090", grpc.WithInsecure())
	if err != nil {
		panic(err)
	}
	defer conn.Close()

	client := pb.NewUserServiceClient(conn)

	req := pb.CreateRequest{
		Name:     "Anderson Marin",
		Email:    "anderson.marin@outlook.com",
		Password: "abc123",
		Locale:   "us",
	}
	res, err := client.Create(context.Background(), &req)
	if err != nil {
		panic(err)
	}
	fmt.Println(res.Result.String())
}

```
