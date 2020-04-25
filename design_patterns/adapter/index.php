<?php

// target/client
interface Share
{
    // Request
    public function shareData();
}

// adaptee/service
class WhatsAppShare
{
    public function waShare(String $string)
    {
        echo "Share data via WhatsApp: $string \n";
    }
}

// adapter
class WhatsAppShareAdapter implements Share
{
    private $wahtsapp;
    private $data;

    public function __construct(WhatsAppShare $whatsapp, String $data)
    {
        $this->whatsapp = $whatsapp;
        $this->data = $data;
    }

    public function shareData()
    {
        $this->whatsapp->waShare($this->data);
    }
}

function clientCode(Share $share)
{
    $share->shareData();
}

$wa = new WhatsAppShare();

$waShare = new WhatsAppShareAdapter($wa, "hello whats app");

clientCode($waShare);
