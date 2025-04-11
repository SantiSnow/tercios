<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use League\OAuth2\Client\Provider\Google;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\OAuth;

class Mailer extends Model
{
    use HasFactory;

    protected PHPMailer $mail;

    public function __construct()
    {
        $this->mail = new PHPMailer();
        $this->mail->IsSMTP();
        $this->mail->SMTPAuth = true;
        $this->mail->Host = "smtp.gmail.com";
        $this->mail->Port = 465;
        $this->mail->CharSet = 'UTF-8';
        $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $this->mail->AuthType = 'XOAUTH2';
        $provider = new Google(
            [
                'clientId' => env('MAIL_GMAIL_CLIENT_ID'),
                'clientSecret' => env('MAIL_GMAIL_CLIENT_SECRET'),
            ]
        );

        $this->mail->setOAuth(
            new OAuth(
                [
                    'provider' => $provider,
                    'clientId' => env('MAIL_GMAIL_CLIENT_ID'),
                    'clientSecret' => env('MAIL_GMAIL_CLIENT_SECRET'),
                    'refreshToken' => env('MAIL_GMAIL_TOKEN_REFRESH'),
                    'userName' => "web@red-fox.com.ar",
                ]
            )
        );
        $this->mail->From = "web@red-fox.com.ar";
        $this->mail->FromName = "RedFox Argentina";
    }

    public function sendContactForm(string $name, string $email, string $phone, string $message, string $origin): bool
    {
        try {
            $this->mail->ClearAllRecipients();
            $this->mail->addAddress("info@red-fox.com.ar");
            $this->mail->isHTML(true);
            $this->mail->Subject = "Nuevo contacto desde la Web - RedFox Argentina";
            $this->mail->Body = view('emails.contact', [
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'message' => $message,
                'origin' => $origin
            ]);
            $this->mail->AddReplyTo("web@red-fox.com.ar", 'RedFox Argentina');

            return $this->mail->send();
        } catch (\Exception $e) {
            info($e->getMessage());
            return false;
        }
    }


    /**
     * @param string $name
     * @param string $email
     * @param string $phone
     * @param string $message
     * @param string $property_name
     * @param string $property_url
     * @return bool
     */
    public function sendCommentOnPropertyEmail(string $name, string $email, string $phone, string $message, string $property_name, string $property_url): bool
    {
        try {
            $this->mail->ClearAllRecipients();
            $this->mail->addAddress("info@red-fox.com.ar");
            $this->mail->isHTML();
            $this->mail->Subject = "Nueva consulta por una propiedad - RedFox Argentina";
            $this->mail->Body = view('emails.prop_question', [
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'message' => $message,
                'prop_name' => $property_name,
                'prop_url' => $property_url,
            ]);
            $this->mail->AddReplyTo("web@red-fox.com.ar", 'RedFox Argentina');
            $this->mail->send();
            return true;
        } catch (\Exception $e) {
            info($e->getMessage());
            return false;
        }
    }

    public function sendRequestSellForm(string $name, string $email, string $phone, string $message, string $address, string $city, string $estate): bool
    {
        try {
            $this->mail->ClearAllRecipients();
            $this->mail->addAddress("info@red-fox.com.ar");
            $this->mail->isHTML(true);
            $this->mail->Subject = "Nuevo contacto desde la Web - RedFox Argentina";
            $this->mail->Body = view('emails.sell', [
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'message' => $message,
                'address' => $address,
                'city' => $city,
                'estate' => $estate,
            ]);
            $this->mail->AddReplyTo(env("MAIL_USERNAME"), 'RedFox Argentina');

            return $this->mail->send();
        } catch (\Exception $e) {
            info($e->getMessage());
            return false;
        }

    }


    /**
     * @param string $name
     * @param string $email
     * @param string $phone
     * @param string $message
     * @param string $origin
     * @return bool
     */
    public function sendWorkWithUsForm(string $name, string $email, string $phone, string $message, string $origin): bool
    {
        try {
            $this->mail->ClearAllRecipients();
            $this->mail->addAddress("info@red-fox.com.ar");
            $this->mail->isHTML();
            $this->mail->Subject = "Nuevo contacto desde la Web - Sumate a nuestro equipo";
            $this->mail->Body = view('emails.contact', [
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'message' => $message,
                'origin' => $origin
            ]);
            $this->mail->AddReplyTo("web@red-fox.com.ar", 'RedFox Argentina');

            return $this->mail->send();
        } catch (\Exception $e) {
            info($e->getMessage());
            return false;
        }
    }
}
