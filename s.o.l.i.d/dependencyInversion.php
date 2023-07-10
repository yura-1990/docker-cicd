<?php

# S.O.L.I.D
// Dependency inversion - High-level modules should not depend on low-level modules. Both should depend on abstractions.

interface MessageSender
{
    public function send($message);
}

// Low-level module implementation
class EmailSender implements MessageSender
{
    public function send($message)
    {
        echo "Sending email: $message<br>";
    }
}

// Low-level module implementation
class SMSNotification implements MessageSender
{
    public function send($message)
    {
        echo "Sending SMS: $message<br>";
    }
}

// High-level module depending on abstraction
class NotificationManager
{
    private MessageSender $sender;

    public function __construct(MessageSender $sender)
    {
        $this->sender = $sender;
    }

    public function sendNotification($message): void
    {
        $this->sender->send($message);
    }
}

$emailSender = new EmailSender();
$smsSender = new SMSNotification();

$emailNotification = new NotificationManager($emailSender);
$smsNotification = new NotificationManager($smsSender);

$emailNotification->sendNotification("Hello, this is an email notification");
$smsNotification->sendNotification("Hello, this is an SMS notification");