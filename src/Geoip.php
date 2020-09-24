<?php

namespace FaridBabayev\Geoip;

use FaridBabayev\Geoip\Exceptions\IpValidationException;
use GuzzleHttp\Client as GuzzleClient;

class Geoip
{
    /**
     *  Client ip address
     *
     * @var string|null
     */
    private $ip;

    /**
     * ReallyFreeGeoip api client
     *
     * @var GuzzleClient
     */
    private $client;

    /**
     *  Response for ip details
     * @var array
     */
    public $result = [];

    /**
     *  ReallyFreeGeoip api endpoint
     *
     * @var string
     */
    private $endpoint = 'https://reallyfreegeoip.org/json';

    public function __construct(string $ip = null)
    {
        $this->client = new GuzzleClient();
        $this->for($ip);
    }

    /**
     *  Connect ReallyFreeGeoip api
     * @return $this
     */
    public function for(?string $ip)
    {
        $this->setIp($ip);
        $this->setEndpoint();
        $response = $this->client->get($this->endpoint);
        $this->result = json_decode($response->getBody()->getContents(),true);
        return $this;
    }

    /**
     * @param $name
     * @return mixed
     */
    public function __get($name)
    {
       if (isset($this->result[$name])) {
           return $this->result[$name];
       }
    }

    /**
     * @return string|null
     */
    public function getIp(): ?string
    {
        return $this->ip;
    }

    /**
     * Check string fir validate ip address
     * @param string|null $ip
     * @throws IpValidationException
     */
    public function setIp(?string $ip): void
    {
        if (!is_null($ip))
        {
            if (filter_var($ip, FILTER_VALIDATE_IP)) {
                $this->ip = $ip;
            } else {
                throw new IpValidationException("$ip is not a valid IP address");
            }
        }
    }

    /**
     * Bind ip address to api endpoint if is not null ip address
     */
    private function setEndpoint(): void
    {
        $this->endpoint = !is_null($this->ip) ? $this->endpoint.'/'.$this->ip : $this->endpoint;
    }
}
