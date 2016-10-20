<?php
declare(strict_types = 1);
namespace ZendFirebase\Firebase;

use Interfaces\FirebaseInterface;
use GuzzleHttp\Client;
require 'Interfaces/FirebaseInterface.php';

/**
 *
 * @author Ventimiglia Samuel
 *        
 */
class FirebaseInit implements FirebaseInterface
{

    /**
     * Default Timeout
     *
     * @var integer $timeout
     */
    private $timeout = 30;

    private $auth;

    private $client;

    /**
     */
    public function __construct(\ZendFirebase\Config\AuthSetup $auth)
    {
        if (! is_object($auth) or null == $auth) {
            trigger_error('Forget credential or is not an object.', E_USER_ERROR);
        }
        
        if (! extension_loaded('curl')) {
            trigger_error('Extension CURL is not loaded or not installed.', E_USER_ERROR);
        }
        
        $this->setTimeout(10);
        $this->auth = $auth;
        $guzzleClient = new Client([
            'base_uri' => $this->auth->getBaseUri(),
            'timeout' => $this->getTimeout()
        ]);
        
        $this->client = $guzzleClient;
    }

    /**
     *
     * @return the $timeout
     */
    public function getTimeout(): int
    {
        return $this->timeout;
    }

    /**
     *
     * @param number $timeout            
     */
    public function setTimeout($timeout)
    {
        $this->timeout = $timeout;
    }

    private function getRequestHeaders()
    {
        $headers = [];
        $headers['headers'] = [
            'Accept' => 'application/json'
        ];
        
        return $headers;
    }

    /**
     * Returns with the normalized JSON absolute path
     *
     * @param string $path
     *            Path
     * @param array $options
     *            Options
     * @return string
     */
    private function getJsonPath($path, $options = array())
    {
        $options['auth'] = $this->auth->getServerToken();
        
        $path = ltrim($path, '/');
        return $path . '.json?' . http_build_query($options);
    }

    /**
     *
     * {@inheritdoc}
     *
     * @see \Interfaces\FirebaseInterface::delete()
     */
    public function delete($path, $options = array())
    {}

    /**
     *
     * {@inheritdoc}
     *
     * @see \Interfaces\FirebaseInterface::get()
     */
    public function get($path, $options = array())
    {
        // TODO Auto-generated method stub
    }

    /**
     *
     * {@inheritdoc}
     *
     * @see \Interfaces\FirebaseInterface::patch()
     */
    public function patch($path, $data, $options = array())
    {
        // TODO Auto-generated method stub
    }

    /**
     *
     * {@inheritdoc}
     *
     * @see \Interfaces\FirebaseInterface::post()
     */
    public function post($path, $data, $options = array())
    {
        // TODO Auto-generated method stub
    }

    /**
     *
     * {@inheritdoc}
     *
     * @see \Interfaces\FirebaseInterface::put()
     */
    public function put($path, $data, $options = array())
    {
        // TODO Auto-generated method stub
    }

    /**
     *
     * {@inheritdoc}
     *
     * @see \Interfaces\FirebaseInterface::setBaseURI()
     */
    public function setBaseURI($baseURI)
    {
        // TODO Auto-generated method stub
    }

    /**
     *
     * {@inheritdoc}
     *
     * @see \Interfaces\FirebaseInterface::setToken()
     */
    public function setToken($token)
    {
        // TODO Auto-generated method stub
    }

    /**
     */
    public function __destruct()
    {
        
        // TODO - Insert your code here
    }

    private function writeData($path, $data, $options = array())
    {
        // try {
        
        // curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
        // $return = curl_exec($ch);
        // } catch (\Exception $e) {
        // $return = null;
        // }
        // return $return;
    }

    private function setHeaderToGuzzleClient($headers)
    {
        // check if header is an array
        if (! is_array($headers)) {
            throw new \Exception("The guzzle client headers must be an array.");
        }
        
        // check if array passed contains key 'headers'
        if (! array_key_exists('headers', $headers)){
            throw new \Exception("Headers array must have a key named 'headers'.");
        }
        
        
    }
}

