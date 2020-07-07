go-build:
	protoc -I=./source --go_out=plugins=grpc:./build ./source/*.proto

php-build:
	mkdir -p ./build/php-pb && \
	protoc --proto_path=./source \
		--php_out=./build/php-pb \
		--grpc_out=./build/php-pb \
		--plugin=protoc-gen-grpc=./vendor/grpc/bins/opt/grpc_php_plugin \
		./source/*.proto

grpc-php-plugin:
	cd ./vendor && git clone https://github.com/grpc/grpc && \
	cd grpc && git submodule update --init && make grpc_php_plugin