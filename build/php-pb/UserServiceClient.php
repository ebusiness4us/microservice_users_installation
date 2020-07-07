<?php
// GENERATED CODE -- DO NOT EDIT!

namespace ;

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
     * @param \CreateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \CreateResponse
     */
    public function Create(\CreateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/UserService/Create',
        $argument,
        ['\CreateResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \LoginRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \LoginResponse
     */
    public function Login(\LoginRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/UserService/Login',
        $argument,
        ['\LoginResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \VerifyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \VerifyResponse
     */
    public function Verify(\VerifyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/UserService/Verify',
        $argument,
        ['\VerifyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \RefreshRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \RefreshResponse
     */
    public function Refresh(\RefreshRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/UserService/Refresh',
        $argument,
        ['\RefreshResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \MeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \MeResponse
     */
    public function Me(\MeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/UserService/Me',
        $argument,
        ['\MeResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \UpdateMeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \UpdateMeResponse
     */
    public function UpdateMe(\UpdateMeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/UserService/UpdateMe',
        $argument,
        ['\UpdateMeResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \DeleteMeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \DeleteMeResponse
     */
    public function DeleteMe(\DeleteMeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/UserService/DeleteMe',
        $argument,
        ['\DeleteMeResponse', 'decode'],
        $metadata, $options);
    }

}
