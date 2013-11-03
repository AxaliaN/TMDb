<?php
/**
 * Created by PhpStorm.
 * User: Michel
 * Date: 3-11-13
 * Time: 8:21
 */

namespace AxalianTmdb\Client;

use AxalianTmdb\Entity\AbstractEntity;
use AxalianTmdb\Entity\Movie;
use AxalianTmdb\Exception\InvalidResponseException;
use AxalianTmdb\Hydrator\HydratorService;
use Guzzle\Http\Client as GuzzleClient;
use Guzzle\Http\Message\Response;

class Client
{
    /**
     * @var GuzzleClient
     */
    protected $client;

    /**
     * @var HydratorService
     */
    protected $hydratorService;

    public function __construct(GuzzleClient $client, HydratorService $hydratorService)
    {
        $this->setClient($client);
        $this->setHydratorService($hydratorService);
    }

    /**
     * @param int $id
     * @return \Guzzle\Http\Message\RequestInterface
     */
    public function getMovie($id)
    {
        return $this->sendRequest('movie/' . $id, 'movie');
    }

    /**
     * @param int $id
     * @return \Guzzle\Http\Message\RequestInterface
     */
    public function getTv($id)
    {
        return $this->sendRequest('tv/' . $id, 'tv');
    }



    /**
     * @param string $path
     * @param string $type
     * @return AbstractEntity
     */
    public function sendRequest($path, $type)
    {
        $request = $this->getClient()->get($path);
        $response = $request->send();

        return $this->transformResponse($response, $type);
    }

    /**
     * @param Response $response
     * @param string $type Type of data requested
     * @throws \AxalianTmdb\Exception\InvalidResponseException
     * @return AbstractEntity
     */
    public function transformResponse(Response $response, $type)
    {
        if ($response->getStatusCode() == 200) {
            return $this->getHydratorService()->hydrateData($response->getBody(), $type);
        } else {
            throw new InvalidResponseException('Response was: ' . $response->getStatusCode() . ' - ' . $response->getReasonPhrase());
        }
    }

    /**
     * @return \Guzzle\Http\Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @param \Guzzle\Http\Client $client
     */
    public function setClient($client)
    {
        $this->client = $client;
    }

    /**
     * @return \AxalianTmdb\Hydrator\HydratorService
     */
    public function getHydratorService()
    {
        return $this->hydratorService;
    }

    /**
     * @param \AxalianTmdb\Hydrator\HydratorService $service
     */
    public function setHydratorService($hydratorService)
    {
        $this->hydratorService = $hydratorService;
    }
} 