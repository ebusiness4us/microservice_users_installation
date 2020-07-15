<?php
// GENERATED CODE -- DO NOT EDIT!

namespace MicroserviceUsers;

/**
 */
class UserServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \MicroserviceUsers\CreateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \MicroserviceUsers\CreateResponse
     */
    public function Create(\MicroserviceUsers\CreateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/microserviceUsers.UserService/Create',
        $argument,
        ['\MicroserviceUsers\CreateResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \MicroserviceUsers\LoginRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \MicroserviceUsers\LoginResponse
     */
    public function Login(\MicroserviceUsers\LoginRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/microserviceUsers.UserService/Login',
        $argument,
        ['\MicroserviceUsers\LoginResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \MicroserviceUsers\VerifyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \MicroserviceUsers\VerifyResponse
     */
    public function Verify(\MicroserviceUsers\VerifyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/microserviceUsers.UserService/Verify',
        $argument,
        ['\MicroserviceUsers\VerifyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \MicroserviceUsers\RefreshRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \MicroserviceUsers\RefreshResponse
     */
    public function Refresh(\MicroserviceUsers\RefreshRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/microserviceUsers.UserService/Refresh',
        $argument,
        ['\MicroserviceUsers\RefreshResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \MicroserviceUsers\MeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \MicroserviceUsers\MeResponse
     */
    public function Me(\MicroserviceUsers\MeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/microserviceUsers.UserService/Me',
        $argument,
        ['\MicroserviceUsers\MeResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \MicroserviceUsers\UpdateMeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \MicroserviceUsers\UpdateMeResponse
     */
    public function UpdateMe(\MicroserviceUsers\UpdateMeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/microserviceUsers.UserService/UpdateMe',
        $argument,
        ['\MicroserviceUsers\UpdateMeResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \MicroserviceUsers\DeleteMeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \MicroserviceUsers\DeleteMeResponse
     */
    public function DeleteMe(\MicroserviceUsers\DeleteMeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/microserviceUsers.UserService/DeleteMe',
        $argument,
        ['\MicroserviceUsers\DeleteMeResponse', 'decode'],
        $metadata, $options);
    }

}
