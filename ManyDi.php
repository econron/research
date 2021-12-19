<?php
declare(stirct_type=1);
// もし引数が多くなったらどうすんの？っていう問題の解決をする

interface SMSInterface{}

interface MailInterface{}

interface PhoneInterface{}

class SMSLogger implements SMSInterface{

    public function sms_log_info(){
        print("sms_log_info!");
    }
}

class MailLogger implements MailInterface{
    
    public function mail_log_info(){
        print("mail_log_info!");
    }
}

class PhoneLogger implements PhoneInterface{

    public function phone_log_info(){
        print("phone_log_info");
    }
}

class TotalLogger{

    private $sms;
    private $phone;
    private $mail;

    public function __construct(
        SMSInterface $sms,
        PhoneInterface $phone,
        MailInterface $mail
    ){
        $this->sms = $sms;
        $this->phone = $phone;
        $this->mail = $mail;
    }

    public function log_all(){
        $this->sms->sms_log_info();
        $this->phone->phone_log_info();
        $this->mail->mail_log_info();
    }
}

// ここのインスタンス化で「めんどくさいな」となる
$sms_logger = new SMSLogger();
$phone_logger = new PhoneLogger();
$mail_logger = new MailLogger();
$total_logger = new TotalLogger($sms_logger, $phone_logger, $mail_logger);

$total_logger->log_all();

// laravelのDIやばくね・・・？