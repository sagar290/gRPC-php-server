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
Note:
If you faced this error after running above command

> "
protoc-gen-php-grpc: program not found or is not executable
Please specify a program using absolute path or make sure the program is available in your PATH system variable
--php-grpc_out: protoc-gen-php-grpc: Plugin failed with status code 1.
"

This is actually happened because of several reasons.
Either in your root path there is no `protoc-gen-php-grpc` file available.
If this is not available, download the file from this https://github.com/roadrunner-server/roadrunner/releases/tag/v2.12.3 
Or the `protoc-gen-php-grpc` file which is available in your directory is not correct version based on your operating system.

Like as I am using **Macbook M1** version, 
so I have to use `protoc-gen-php-grpc-linux-arm64` file because I am using **Docker** 
for this example. I downloaded this zip file first, Extract and copy the `protoc-gen-php-grpc` 
to my root directory.

