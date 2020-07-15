build: clean go-build php-build

clean:
	rm -rf ./build

go-build:
	mkdir -p ./build/go
	protoc -I=./source --go_out=plugins=grpc:./build/go ./source/*.proto

php-build:
	mkdir -p ./build/php && \
	protoc --proto_path=./source \
		--php_out=./build/php \
		--grpc_out=./build/php \
		--plugin=protoc-gen-grpc=./vendor/grpc/bins/opt/grpc_php_plugin \
		./source/*.proto

grpc-php-plugin:
	cd ./vendor && git clone https://github.com/grpc/grpc && \
	cd grpc && git submodule update --init && make grpc_php_plugin