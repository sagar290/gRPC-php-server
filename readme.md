# gRPC php server

Install the gRPC PHP extension.
``` bash
    sudo pecl install grpc
```

Install composer
``` bash
    composer install
```

Start the server.
``` bash 
    ./rr serve
```

## Rebuild proto file
``` bash
    protoc --plugin=protoc-gen-php-grpc  --php_out=./src/ --php-grpc_out=./src/ chat.proto
```