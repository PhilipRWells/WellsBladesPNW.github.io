<?php

use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/autoload.php';

if (isset($_POST['data'])) {
    $email = $_POST['data']["email"];
    $phone = $_POST['data']["phone"];
    $address = $_POST['data']["address"];
    $additionalRequest = $_POST['data']["additionalRequest"];
    $tip = $_POST['data']["tip"];
    $middle = $_POST['data']["middle"];
    $handle = $_POST['data']["handle"];

    $response = [];

    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPDebug = 0;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl';
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465;
    $mail->IsHTML(true);
    $mail->Username = "smtpemail2021@gmail.com";
    $mail->Password = "password2021";
    $mail->SetFrom('smtpemail2021@gmail.com', 'Well blades', FALSE);
    $mail->Subject = "Contact details - " . $email;

    $mail->Body = "
    <html xmlns='http://www.w3.org/1999/xhtml' xmlns:v='urn:schemas-microsoft-com:vml'
      xmlns:o='urn:schemas-microsoft-com:office:office'>
    
    <head>
    
      <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
      <meta name='viewport' content='width=device-width, initial-scale=1.0'>
      <meta name='x-apple-disable-message-reformatting'>
      <meta http-equiv='X-UA-Compatible' content='IE=edge'>
      <title></title>
    
      <style type='text/css'>
        table,
        td {
          color: #000000;
        }
    
        @media only screen and (min-width: 620px) {
          .u-row {
            width: 600px !important;
          }
    
          .u-row .u-col {
            vertical-align: top;
          }
    
          .u-row .u-col-50 {
            width: 300px !important;
          }
    
          .u-row .u-col-100 {
            width: 600px !important;
          }
    
        }
    
        @media (max-width: 620px) {
          .u-row-container {
            max-width: 100% !important;
            padding-left: 0px !important;
            padding-right: 0px !important;
          }
    
          .u-row .u-col {
            min-width: 320px !important;
            max-width: 100% !important;
            display: block !important;
          }
    
          .u-row {
            width: calc(100% - 40px) !important;
          }
    
          .u-col {
            width: 100% !important;
          }
    
          .u-col>div {
            margin: 0 auto;
          }
        }
    
        body {
          margin: 0;
          padding: 0;
        }
    
        table,
        tr,
        td {
          vertical-align: top;
          border-collapse: collapse;
        }
    
        p {
          margin: 0;
        }
    
        .ie-container table,
        .mso-container table {
          table-layout: fixed;
        }
    
        * {
          line-height: inherit;
        }
    
        a[x-apple-data-detectors='true'] {
          color: inherit !important;
          text-decoration: none !important;
        }
      </style>
    
      <link href='https://fonts.googleapis.com/css?family=Lobster+Two:400,700&display=swap' rel='stylesheet'
        type='text/css'>
    
    </head>
    
    <body class='clean-body'
      style='margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #dfdfdf;color: #000000'>
    
      <table
        style='border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;min-width: 320px;Margin: 0 auto;background-color: #dfdfdf;width:100%'
        cellpadding='0' cellspacing='0'>
        <tbody>
          <tr style='vertical-align: top'>
            <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top'>
    
    
    
              <div class='u-row-container' style='padding: 0px;background-color: transparent'>
                <div class='u-row'
                  style='Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ebebeb;'>
                  <div style='border-collapse: collapse;display: table;width: 100%;background-color: transparent;'>
    
    
    
                    <div class='u-col u-col-100'
                      style='max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;'>
                      <div style='width: 100% !important;'>
                        <div
                          style='padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;'>
    
                          <table style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0'
                            cellspacing='0' width='100%' border='0'>
                            <tbody>
                              <tr>
                                <td
                                  style='overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;'
                                  align='left'>
    
                                  <table height='0px' align='center' border='0' cellpadding='0' cellspacing='0' width='100%'
                                    style='border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 0px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%'>
                                    <tbody>
                                      <tr style='vertical-align: top'>
                                        <td
                                          style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%'>
                                          <span>&#160;</span>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
    
                                </td>
                              </tr>
                            </tbody>
                          </table>
    
                        </div>
                      </div>
                    </div>
    
    
                  </div>
                </div>
              </div>
    
    
    
              <div class='u-row-container' style='padding: 0px;background-color: #eaeaea'>
                <div class='u-row'
                  style='Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;'>
                  <div style='border-collapse: collapse;display: table;width: 100%;background-color: transparent;'>
    
    
    
                    <div class='u-col u-col-100'
                      style='max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;'>
                      <div style='width: 100% !important;'>
                        <div
                          style='padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;'>
    
                          <table style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0'
                            cellspacing='0' width='100%' border='0'>
                            <tbody>
                              <tr>
                                <td
                                  style='overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;'
                                  align='left'>
    
                                  <h2
                                    style='margin: 0px; color: #43a473; line-height: 140%; text-align: center; word-wrap: break-word; font-weight: normal; font-family: arial,helvetica,sans-serif; font-size: 29px;'>
                                    <strong>Contact Form details</strong>
                                  </h2>
    
                                </td>
                              </tr>
                            </tbody>
                          </table>
    
                        </div>
                      </div>
                    </div>
    
    
                  </div>
                </div>
              </div>
    
    
    
              <div class='u-row-container' style='padding: 0px;background-color: #eaeaea'>
                <div class='u-row'
                  style='Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #56b501;'>
                  <div style='border-collapse: collapse;display: table;width: 100%;background-color: transparent;'>
    
    
    
                    <div class='u-col u-col-50'
                      style='max-width: 320px;min-width: 300px;display: table-cell;vertical-align: top;'>
                      <div style='width: 100% !important;'>
                        <div
                          style='padding: 20px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 1px solid #43a473;border-bottom: 1px solid #48a600;'>
    
                          <table style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0'
                            cellspacing='0' width='100%' border='0'>
                            <tbody>
                              <tr>
                                <td
                                  style='overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;'
                                  align='left'>
    
                                  <div style='line-height: 140%; text-align: left; word-wrap: break-word;'>
                                    <p style='font-size: 14px; line-height: 140%; text-align: center;'><strong><span
                                          style='font-size: 20px; line-height: 28px;'><em>ITEM</em></span></strong></p>
                                  </div>
    
                                </td>
                              </tr>
                            </tbody>
                          </table>
    
                        </div>
                      </div>
                    </div>
    
    
                    <div class='u-col u-col-50'
                      style='max-width: 320px;min-width: 300px;display: table-cell;vertical-align: top;'>
                      <div style='width: 100% !important;'>
                        <div
                          style='padding: 20px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 1px solid #48a600;border-bottom: 1px solid #48a600;'>
    
                          <table style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0'
                            cellspacing='0' width='100%' border='0'>
                            <tbody>
                              <tr>
                                <td
                                  style='overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;'
                                  align='left'>
    
                                  <div style='line-height: 140%; text-align: left; word-wrap: break-word;'>
                                    <p style='font-size: 14px; line-height: 140%; text-align: center;'><span
                                        style='font-size: 20px; line-height: 28px;'><em><strong>DETAILS</strong></em></span>
                                    </p>
                                  </div>
    
                                </td>
                              </tr>
                            </tbody>
                          </table>
    
                        </div>
                      </div>
                    </div>
    
    
                  </div>
                </div>
              </div>
    
    
    
              <div class='u-row-container' style='padding: 0px;background-color: #eaeaea'>
                <div class='u-row'
                  style='Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #f5f5f5;'>
                  <div style='border-collapse: collapse;display: table;width: 100%;background-color: transparent;'>
    
    
    
                    <div class='u-col u-col-50'
                      style='max-width: 320px;min-width: 300px;display: table-cell;vertical-align: top;'>
                      <div style='width: 100% !important;'>
                        <div
                          style='padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 1px solid #dfdfdf;border-bottom: 1px solid #dfdfdf;'>
    
                          <table style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0'
                            cellspacing='0' width='100%' border='0'>
                            <tbody>
                              <tr>
                                <td
                                  style='overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;'
                                  align='left'>
    
                                  <div style='line-height: 240%; text-align: center; word-wrap: break-word;'>
                                    <p style='font-size: 14px; line-height: 240%; text-align: left;'>Email</p>
                                  </div>
    
                                </td>
                              </tr>
                            </tbody>
                          </table>
    
                        </div>
                      </div>
                    </div>
    
    
                    <div class='u-col u-col-50'
                      style='max-width: 320px;min-width: 300px;display: table-cell;vertical-align: top;'>
                      <div style='width: 100% !important;'>
                        <div
                          style='padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 1px solid #dfdfdf;border-bottom: 1px solid #dfdfdf;'>
    
                          <table style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0'
                            cellspacing='0' width='100%' border='0'>
                            <tbody>
                              <tr>
                                <td
                                  style='overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;'
                                  align='left'>
    
                                  <div style='line-height: 140%; text-align: left; word-wrap: break-word;'>
                                    <p style='font-size: 14px; line-height: 140%;'>" . $email . "</p>
                                  </div>
    
                                </td>
                              </tr>
                            </tbody>
                          </table>
    
                        </div>
                      </div>
                    </div>
    
    
                  </div>
                </div>
              </div>
    
    
    
              <div class='u-row-container' style='padding: 0px;background-color: #eaeaea'>
                <div class='u-row'
                  style='Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;'>
                  <div style='border-collapse: collapse;display: table;width: 100%;background-color: transparent;'>
    
    
    
                    <div class='u-col u-col-50'
                      style='max-width: 320px;min-width: 300px;display: table-cell;vertical-align: top;'>
                      <div style='width: 100% !important;'>
                        <div
                          style='padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 1px solid #dfdfdf;border-bottom: 1px solid #dfdfdf;'>
    
                          <table style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0'
                            cellspacing='0' width='100%' border='0'>
                            <tbody>
                              <tr>
                                <td
                                  style='overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;'
                                  align='left'>
    
                                  <div style='line-height: 140%; text-align: left; word-wrap: break-word;'>
                                    <p style='font-size: 14px; line-height: 140%; text-align: left;'>Phone</p>
                                  </div>
    
                                </td>
                              </tr>
                            </tbody>
                          </table>
    
                        </div>
                      </div>
                    </div>
    
    
                    <div class='u-col u-col-50'
                      style='max-width: 320px;min-width: 300px;display: table-cell;vertical-align: top;'>
                      <div style='width: 100% !important;'>
                        <div
                          style='padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 1px solid #dfdfdf;border-bottom: 1px solid #dfdfdf;'>
    
                          <table style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0'
                            cellspacing='0' width='100%' border='0'>
                            <tbody>
                              <tr>
                                <td
                                  style='overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;'
                                  align='left'>
    
                                  <div style='line-height: 140%; text-align: left; word-wrap: break-word;'>
                                    <p style='font-size: 14px; line-height: 140%;'>" . $phone . "</p>
                                  </div>
    
                                </td>
                              </tr>
                            </tbody>
                          </table>
    
                        </div>
                      </div>
                    </div>
    
    
                  </div>
                </div>
              </div>
    
    
    
              <div class='u-row-container' style='padding: 0px;background-color: #eaeaea'>
                <div class='u-row'
                  style='Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #f5f5f5;'>
                  <div style='border-collapse: collapse;display: table;width: 100%;background-color: transparent;'>
    
    
    
                    <div class='u-col u-col-50'
                      style='max-width: 320px;min-width: 300px;display: table-cell;vertical-align: top;'>
                      <div style='width: 100% !important;'>
                        <div
                          style='padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 1px solid #dfdfdf;border-bottom: 1px solid #dfdfdf;'>
    
                          <table style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0'
                            cellspacing='0' width='100%' border='0'>
                            <tbody>
                              <tr>
                                <td
                                  style='overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;'
                                  align='left'>
    
                                  <div style='line-height: 140%; text-align: left; word-wrap: break-word;'>
                                    <p style='font-size: 14px; line-height: 140%; text-align: left;'>Address</p>
                                  </div>
    
                                </td>
                              </tr>
                            </tbody>
                          </table>
    
                        </div>
                      </div>
                    </div>
    
    
                    <div class='u-col u-col-50'
                      style='max-width: 320px;min-width: 300px;display: table-cell;vertical-align: top;'>
                      <div style='width: 100% !important;'>
                        <div
                          style='padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 1px solid #dfdfdf;border-bottom: 1px solid #dfdfdf;'>
    
                          <table style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0'
                            cellspacing='0' width='100%' border='0'>
                            <tbody>
                              <tr>
                                <td
                                  style='overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;'
                                  align='left'>
    
                                  <div style='line-height: 140%; text-align: left; word-wrap: break-word;'>
                                    <p style='font-size: 14px; line-height: 140%;'>" . $address . "</p>
                                  </div>
    
                                </td>
                              </tr>
                            </tbody>
                          </table>
    
                        </div>
                      </div>
                    </div>
    
    
                  </div>
                </div>
              </div>
    
    
    
              <div class='u-row-container' style='padding: 0px;background-color: #eaeaea'>
                <div class='u-row'
                  style='Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;'>
                  <div style='border-collapse: collapse;display: table;width: 100%;background-color: transparent;'>
    
    
    
                    <div class='u-col u-col-50'
                      style='max-width: 320px;min-width: 300px;display: table-cell;vertical-align: top;'>
                      <div style='width: 100% !important;'>
                        <div
                          style='padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 1px solid #dfdfdf;border-bottom: 1px solid #dfdfdf;'>
    
                          <table style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0'
                            cellspacing='0' width='100%' border='0'>
                            <tbody>
                              <tr>
                                <td
                                  style='overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;'
                                  align='left'>
    
                                  <div style='line-height: 140%; text-align: left; word-wrap: break-word;'>
                                    <p style='font-size: 14px; line-height: 140%; text-align: left;'>Additional Request</p>
                                  </div>
    
                                </td>
                              </tr>
                            </tbody>
                          </table>
    
                        </div>
                      </div>
                    </div>
    
    
                    <div class='u-col u-col-50'
                      style='max-width: 320px;min-width: 300px;display: table-cell;vertical-align: top;'>
                      <div style='width: 100% !important;'>
                        <div
                          style='padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 1px solid #dfdfdf;border-bottom: 1px solid #dfdfdf;'>
    
                          <table style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0'
                            cellspacing='0' width='100%' border='0'>
                            <tbody>
                              <tr>
                                <td
                                  style='overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;'
                                  align='left'>
    
                                  <div style='line-height: 140%; text-align: left; word-wrap: break-word;'>
                                    <p style='font-size: 14px; line-height: 140%;'>" . $additionalRequest . "</p>
                                  </div>
    
                                </td>
                              </tr>
                            </tbody>
                          </table>
    
                        </div>
                      </div>
                    </div>
    
    
                  </div>
                </div>
              </div>
    
    
    
              <div class='u-row-container' style='padding: 0px;background-color: #eaeaea'>
                <div class='u-row'
                  style='Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #f5f5f5;'>
                  <div style='border-collapse: collapse;display: table;width: 100%;background-color: transparent;'>
    
    
    
                    <div class='u-col u-col-50'
                      style='max-width: 320px;min-width: 300px;display: table-cell;vertical-align: top;'>
                      <div style='width: 100% !important;'>
                        <div
                          style='padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 1px solid #dfdfdf;border-bottom: 1px solid #dfdfdf;'>
    
                          <table style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0'
                            cellspacing='0' width='100%' border='0'>
                            <tbody>
                              <tr>
                                <td
                                  style='overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;'
                                  align='left'>
    
                                  <div style='line-height: 140%; text-align: left; word-wrap: break-word;'>
                                    <p style='font-size: 14px; line-height: 140%; text-align: left;'>Tip</p>
                                  </div>
    
                                </td>
                              </tr>
                            </tbody>
                          </table>
    
                        </div>
                      </div>
                    </div>
    
    
                    <div class='u-col u-col-50'
                      style='max-width: 320px;min-width: 300px;display: table-cell;vertical-align: top;'>
                      <div style='width: 100% !important;'>
                        <div
                          style='padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 1px solid #dfdfdf;border-bottom: 1px solid #dfdfdf;'>
    
                          <table style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0'
                            cellspacing='0' width='100%' border='0'>
                            <tbody>
                              <tr>
                                <td
                                  style='overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;'
                                  align='left'>
    
                                  <div style='line-height: 140%; text-align: left; word-wrap: break-word;'>
                                    <p style='font-size: 14px; line-height: 140%;'>" . $tip . "</p>
                                  </div>
    
                                </td>
                              </tr>
                            </tbody>
                          </table>
    
                        </div>
                      </div>
                    </div>
    
    
                  </div>
                </div>
              </div>
    
    
    
              <div class='u-row-container' style='padding: 0px;background-color: #eaeaea'>
                <div class='u-row'
                  style='Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;'>
                  <div style='border-collapse: collapse;display: table;width: 100%;background-color: transparent;'>
    
    
    
                    <div class='u-col u-col-50'
                      style='max-width: 320px;min-width: 300px;display: table-cell;vertical-align: top;'>
                      <div style='width: 100% !important;'>
                        <div
                          style='padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 1px solid #dfdfdf;border-bottom: 1px solid #dfdfdf;'>
    
                          <table style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0'
                            cellspacing='0' width='100%' border='0'>
                            <tbody>
                              <tr>
                                <td
                                  style='overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;'
                                  align='left'>
    
                                  <div style='line-height: 140%; text-align: left; word-wrap: break-word;'>
                                    <p style='font-size: 14px; line-height: 140%; text-align: left;'>Middle</p>
                                  </div>
    
                                </td>
                              </tr>
                            </tbody>
                          </table>
    
                        </div>
                      </div>
                    </div>
    
    
                    <div class='u-col u-col-50'
                      style='max-width: 320px;min-width: 300px;display: table-cell;vertical-align: top;'>
                      <div style='width: 100% !important;'>
                        <div
                          style='padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 1px solid #dfdfdf;border-bottom: 1px solid #dfdfdf;'>
    
                          <table style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0'
                            cellspacing='0' width='100%' border='0'>
                            <tbody>
                              <tr>
                                <td
                                  style='overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;'
                                  align='left'>
    
                                  <div style='line-height: 140%; text-align: left; word-wrap: break-word;'>
                                    <p style='font-size: 14px; line-height: 140%;'>" . $middle . "</p>
                                  </div>
    
                                </td>
                              </tr>
                            </tbody>
                          </table>
    
                        </div>
                      </div>
                    </div>
    
    
                  </div>
                </div>
              </div>
    
    
    
              <div class='u-row-container' style='padding: 0px;background-color: #eaeaea'>
                <div class='u-row'
                  style='Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #f5f5f5;'>
                  <div style='border-collapse: collapse;display: table;width: 100%;background-color: transparent;'>
    
    
    
                    <div class='u-col u-col-50'
                      style='max-width: 320px;min-width: 300px;display: table-cell;vertical-align: top;'>
                      <div style='width: 100% !important;'>
                        <div
                          style='padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 1px solid #dfdfdf;border-bottom: 1px solid #dfdfdf;'>
    
                          <table style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0'
                            cellspacing='0' width='100%' border='0'>
                            <tbody>
                              <tr>
                                <td
                                  style='overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;'
                                  align='left'>
    
                                  <div style='line-height: 140%; text-align: left; word-wrap: break-word;'>
                                    <p style='font-size: 14px; line-height: 140%; text-align: left;'>Handle</p>
                                  </div>
    
                                </td>
                              </tr>
                            </tbody>
                          </table>
    
                        </div>
                      </div>
                    </div>
    
    
                    <div class='u-col u-col-50'
                      style='max-width: 320px;min-width: 300px;display: table-cell;vertical-align: top;'>
                      <div style='width: 100% !important;'>
                        <div
                          style='padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 1px solid #dfdfdf;border-bottom: 1px solid #dfdfdf;'>
    
                          <table style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0'
                            cellspacing='0' width='100%' border='0'>
                            <tbody>
                              <tr>
                                <td
                                  style='overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;'
                                  align='left'>
    
                                  <div style='line-height: 140%; text-align: left; word-wrap: break-word;'>
                                    <p style='font-size: 14px; line-height: 140%;'>" . $handle . "</p>
                                  </div>
    
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    
            </td>
          </tr>
        </tbody>
      </table>
    </body>
    
    </html>";

    $mail->AddAddress("gabriel@wellsblades.net");

    if ($mail->Send()) {
        $response["success"] = true;
        $response["message"] = "Form submitted successfully.";
    } else {
        $response["success"] = false;
        $response["message"] = "Error while submitting the form.";
    }


    echo json_encode($response);
}
