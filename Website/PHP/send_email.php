<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/PHPMailer/src/Exception.php';
require __DIR__ . '/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/PHPMailer/src/SMTP.php';

function sendLoanConfirmation($toEmail, $toName)
{
    $mail = new PHPMailer(true);

    try {

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;

        $mail->Username = 'kritimalhotra10c@gmail.com';
        $mail->Password = 'oxjwrdatszvvuuor';

        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom('YOUR_GMAIL@gmail.com', 'Loan Experts');

        $mail->addAddress($toEmail, $toName);

        $mail->isHTML(true);

        $mail->Subject = 'Loan Application Received';

        $mail->Body = "
            <h2>Dear $toName,</h2>

            <p>
            Your loan application is currently under process.
            </p>

            <p>
            Our experts will connect with you soon for further process and assistance.
            </p>

            <br>

            <p>Thank You</p>
            <p><strong>Loan Experts</strong></p>
        ";

        $mail->send();

        return true;

    } catch (Exception $e) {

        return false;
    }
}

function sendAppointmentConfirmation($toEmail, $toName)
{
    $mail = new PHPMailer(true);

    try {

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;

        $mail->Username = 'kritimalhotra10c@gmail.com';
        $mail->Password = 'oxjwrdatszvvuuor';

        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom('kritimalhotra10c@gmail.com', 'Loan Experts');

        $mail->addAddress($toEmail, $toName);

        $mail->isHTML(true);

        $mail->Subject = 'Appointment Scheduled';

        $mail->Body = "
            <h2>Dear $toName,</h2>

            <p>
            Your appointment has been scheduled at our office.
            </p>

            <p>
            <strong>Address:</strong><br>
            B-Block Ranjit Avenue,<br>
            Opp. Municipal Corporation,<br>
            Amritsar
            </p>

            <p>
            For any further assistance contact:<br>
            <strong>+91 9781704214</strong>
            </p>

            <br>

            <p>Thank You</p>
            <p><strong>Loan Experts</strong></p>
        ";

        $mail->send();

        return true;

    } catch (Exception $e) {

        return false;
    }
}

function sendConsultationConfirmation($toEmail, $toName)
{
    $mail = new PHPMailer(true);

    try {

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;

        $mail->Username = 'kritimalhotra10c@gmail.com';
        $mail->Password = 'oxjwrdatszvvuuor';

        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom('kritimalhotra10c@gmail.com', 'Loan Experts');

        $mail->addAddress($toEmail, $toName);

        $mail->isHTML(true);

        $mail->Subject = 'Consultation Call Scheduled';

        $mail->Body = "
            <h2>Dear $toName,</h2>

            <p>
            Your consultation call has been scheduled.
            </p>

            <p>
            Our experts will connect with you shortly.
            </p>

            <br>

            <p>Thank You</p>
            <p><strong>Loan Experts</strong></p>
        ";

        $mail->send();

        return true;

    } catch (Exception $e) {

        return false;
    }
}