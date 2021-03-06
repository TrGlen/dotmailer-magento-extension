<?php

class Dotdigitalgroup_Email_Model_Connector_Account
{

    protected $_apiUsername;
    protected $_apiPassword;
    protected $_limit;
    protected $_contactBookId;
    protected $_subscriberBookId;
    protected $_websites = array();
    protected $_csvHeaders;
    protected $_customersFilename;
    protected $_subscribersFilename;
    protected $_mappingHash;
    protected $_contacts = array();
    protected $_orders = array();
    protected $_orderIds = array();
    protected $_ordersForSingleSync = array();
    protected $_orderIdsForSingleSync = array();

    /**
     * @param $api_password
     *
     * @return $this
     */
    public function setApiPassword($api_password)
    {
        $this->_apiPassword = $api_password;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getApiPassword()
    {
        return $this->_apiPassword;
    }

    /**
     * @param $api_username
     *
     * @return $this
     */
    public function setApiUsername($api_username)
    {
        $this->_apiUsername = $api_username;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getApiUsername()
    {
        return $this->_apiUsername;
    }

    /**
     * @param string $contactBookId
     */
    public function setContactBookId($contactBookId)
    {
        $this->_contactBookId[$contactBookId] = $contactBookId;
    }

    /**
     * @return array
     */
    public function getContactBookIds()
    {
        return $this->_contactBookId;
    }

    /**
     * @param array $contacts
     */
    public function setContacts($contacts)
    {
        if ( ! empty($this->_contacts)) {
            $this->_contacts += $contacts;
        } else {
            $this->_contacts[] = $contacts;
        }
    }

    /**
     * @return array
     */
    public function getContacts()
    {
        return $this->_contacts;
    }

    /**
     * @param mixed $customers_filename
     */
    public function setCustomersFilename($customers_filename)
    {
        $this->_customersFilename = $customers_filename;
    }

    /**
     * @return mixed
     */
    public function getCustomersFilename()
    {
        return $this->_customersFilename;
    }

    /**
     * @param mixed $limit
     */
    public function setLimit($limit)
    {
        $this->_limit = $limit;
    }

    /**
     * @return mixed
     */
    public function getLimit()
    {
        return $this->_limit;
    }

    /**
     * @param mixed $mappingHash
     */
    public function setMappingHash($mappingHash)
    {
        $this->_mappingHash = $mappingHash;
    }

    /**
     * @return mixed
     */
    public function getMappingHash()
    {
        return $this->_mappingHash;
    }

    /**
     * @param array $orders
     */
    public function setOrders($orders)
    {
        foreach ($orders as $order) {

            $this->_orders[$order->id] = $order;
        }
    }

    /**
     * @return array
     */
    public function getOrders()
    {
        return $this->_orders;
    }

    /**
     * @param string $subscriberBookId
     */
    public function setSubscriberBookId($subscriberBookId)
    {
        $this->_subscriberBookId[$subscriberBookId] = $subscriberBookId;
    }

    /**
     * @return array
     */
    public function getSubscriberBookIds()
    {
        return $this->_subscriberBookId;
    }

    /**
     * @param mixed $subscribers_filename
     */
    public function setSubscribersFilename($subscribers_filename)
    {
        $this->_subscribersFilename = $subscribers_filename;
    }

    /**
     * @return mixed
     */
    public function getSubscribersFilename()
    {
        return $this->_subscribersFilename;
    }

    /**
     * @param mixed $csv_headers
     */
    public function setCsvHeaders($csv_headers)
    {
        $this->_csvHeaders = $csv_headers;
    }

    /**
     * @return mixed
     */
    public function getCsvHeaders()
    {
        return $this->_csvHeaders;
    }

    /**
     * @param mixed $websites
     */
    public function setWebsites($websites)
    {
        $this->_websites[] = $websites;
    }

    /**
     * @return mixed
     */
    public function getWebsites()
    {
        return $this->_websites;
    }

    /**
     * @param array $orderIds
     */
    public function setOrderIds($orderIds)
    {
        $this->_orderIds = $orderIds;
    }

    /**
     * @return array
     */
    public function getOrderIds()
    {
        return $this->_orderIds;
    }

    /**
     * @param array $orders
     */
    public function setOrdersForSingleSync($orders)
    {
        foreach ($orders as $order) {
            $this->_ordersForSingleSync[$order->id] = $order;
        }
    }

    /**
     * @return array
     */
    public function getOrdersForSingleSync()
    {
        return $this->_ordersForSingleSync;
    }

    /**
     * @param array $orderIds
     */
    public function setOrderIdsForSingleSync($orderIds)
    {
        $this->_orderIdsForSingleSync = $orderIds;
    }

    /**
     * @return array
     */
    public function getOrderIdsForSingleSync()
    {
        return $this->_orderIdsForSingleSync;
    }
}